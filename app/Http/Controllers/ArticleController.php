<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('permission:article-list|article-create|article-update|article-delete');
        $this->middleware('permission:article-create', ['only' => ['create','store']]);
        $this->middleware('permission:article-update', ['only' => ['edit','update']]);
        $this->middleware('permission:article-delete', ['only' => ['destroy', 'show']]);
    }

    public function index()
    {
        return view('article.index');
    }

    public function create()
    {
        $category = Category::pluck('category_name', 'id');

        return view('article.create', compact('category'));
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
