<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('permission:category-list|category-create|category-update|category-delete');
        $this->middleware('permission:category-create', ['only' => ['create','store']]);
        $this->middleware('permission:category-update', ['only' => ['edit','update']]);
        $this->middleware('permission:category-delete', ['only' => ['destroy', 'show']]);
    }
    public function index()
    {
        return view('category.index');
    }

    public function create()
    {
        return view('category.create');
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
