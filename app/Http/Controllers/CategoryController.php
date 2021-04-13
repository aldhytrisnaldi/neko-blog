<?php

namespace App\Http\Controllers;

use App\Category;
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
        $category   = Category::latest('id')->get();
        return view('category.index', compact('category'));
    }

    public function create()
    {
        return view('category.create');
    }

    public function store(Request $request)
    {
        $validation = $request->validate([
            'category_name'     => 'required|unique:categories',
        ]);

        Category::create($validation);

        return redirect('/category')->with('success', 'Success create category');
    }


    public function edit($id)
    {
        $category   = Category::findOrFail($id);
        return view('category.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $validation = $request->validate([
            'category_name' => 'required'
        ]);

        Category::whereId($id)->update($validation);

        return redirect('/category')->with('success', 'Success update category');
    }

    public function destroy($id)
    {
        Category::findOrFail($id);
    }

    public function show($id)
    {
        $category   = Category::findOrFail($id);
        $category->delete();

        return redirect('/category')->with('success','Success delete category');
    }
}
