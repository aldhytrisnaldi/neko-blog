<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:superadmin');
    }

    public function index(Request $request)
    {
        $data = User::latest('id')->get();
        return view('user.index',compact('data'));
    }

    public function create()
    {
        $roles   = Role::pluck('name', 'name')->all();
        return view('user.create', compact('roles'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'username'  => 'required',
            'phone'     => 'required',
            'email'     => 'required|email|unique:users,email',
            'password'  => 'required|min:6|confirmed',
            'roles'     => 'required'
        ]);

        $input = $request->all();
        $input['password'] = Hash::make($input['password']);

        $user   = User::create($input);
        $user->assignRole($request->input('roles'));

        return redirect('user')->with('success', 'Success create user!');
    }

    public function edit($id)
    {
        $user       = User::findOrFail($id);
        $roles      = Role::pluck('name', 'name')->all();
        $userRole   = $user->roles->pluck('name', 'name')->all();
        return view('user.edit',compact('user', 'roles', 'userRole'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'username'     => 'required',
            'phone'        => 'required',
            'email'        => 'email',
            'password'     => 'sometimes|nullable|min:6|confirmed',
            'roles'        => 'required'
        ]);

        $input  = $request->all();

        if(!empty($input['password'])){
            $input['password'] = Hash::make($input['password']);
        }else{
            $input = Arr::except($input,array('password'));
        }

        $user   = User::findOrFail($id);
        $user->update($input);
        DB::table('model_has_roles')->where('model_id', $id)->delete();
        $user->assignRole($request->input('roles'));

        return redirect('user')->with('success', 'Success update user!');
    }

    public function destroy($id)
    {
        User::findOrFail($id);
    }

    public function show($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect('/user')->with('success','Success delete user!');
    }
}
