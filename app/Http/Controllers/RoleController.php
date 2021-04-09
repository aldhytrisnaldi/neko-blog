<?php

namespace App\Http\Controllers;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RoleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:superadmin');
    }

    public function index()
    {
        $roles = Role::latest('id')->get();
        return view('role.index', compact('roles'));
    }

    public function create()
    {
        $permission = Permission::get();

        return view('role.create', compact('permission'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name'          => 'required',
            'permission'    => 'required'
        ]);

        $roles  = Role::create(['name' => $request->input('name')]);
        $roles->syncPermissions($request->input('permission'));

        return redirect('role')->with('success', 'Success create role');
    }

    public function edit($id)
    {
        $roles              = Role::findOrFail($id);
        $permission         = Permission::get();
        $rolePermissions    = DB::table("role_has_permissions")->where("role_has_permissions.role_id",$id)->pluck('role_has_permissions.permission_id','role_has_permissions.permission_id')->all();

        return view('role.edit', compact('roles', 'permission', 'rolePermissions'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name'          => 'required',
            'permission'    => 'required'
        ]);

        $role = Role::findOrFail($id);
        $role->name = $request->input('name');
        $role->save();
        $role->syncPermissions($request->input('permission'));

        return redirect('/role')->with('success','Success update role');
    }

    public function destroy($id)
    {
        Role::findOrFail($id);
    }

    public function show($id)
    {
        $role = Role::findOrFail($id);
        $role->delete();
        return redirect('/role')->with('success','Success delete role');
    }
}
