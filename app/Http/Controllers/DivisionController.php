<?php

namespace App\Http\Controllers;

use App\Division;
use App\Departement;
use App\Exports\DivisionExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;

class DivisionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:superadmin|admin');
    }

    public function index(Request $request)
    {
        $division = Division::latest('id')->leftJoin('departements', 'divisions.departement_id', 'departements.id')->select('divisions.*', 'departements.departement_name')->get();
        return view('organization.division.index', compact('division'));
    }

    public function create()
    {
        $division_table = Division::latest('id')->leftJoin('departements', 'divisions.departement_id', 'departements.id')->select('divisions.*', 'departements.departement_name')->get();
        $departement    = Departement::all();
        return view('organization.division.create',compact('division_table','departement'));
    }

    public function store(Request $request)
    {
        $validation = $request->validate([
            'division_name'     => 'required|unique:divisions',
            'departement_id'    => 'required|numeric',
        ]);

        Division::create($validation);
        return redirect('/division')->with('success','Success create division');
    }

    public function edit($id)
    {
        $division_table = Division::latest('id')->leftJoin('departements', 'divisions.departement_id', 'departements.id')->select('divisions.*', 'departements.departement_name')->get();
        $division       = Division::findOrFail($id);
        $departement    = Departement::All();

        return view('organization.division.edit', compact('division','division_table','departement'));
    }

    public function update(Request $request, $id)
    {
        $validation = $request->validate([
            'division_name'     => 'required',
            'departement_id'    => 'required|numeric',
        ]);

        Division::whereId($id)->update($validation);
        return redirect('/division')->with('success','Success update division');
    }

    public function destroy($id)
    {
        Division::findOrFail($id);
    }

    public function show($id)
    {
        $division = Division::findOrFail($id);
        $division->delete();
        return redirect('/division')->with('success','Success delete division');
    }

    public function export()
    {
        return Excel::download(new DivisionExport, 'division.xlsx');
    }
}
