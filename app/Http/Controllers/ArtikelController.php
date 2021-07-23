<?php

namespace App\Http\Controllers;

use App\Article;
use App\Category;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    public function index()
    {
        $data       = Article::orderBy('id', 'desc')->paginate(6);
        return view('front.article.index', compact('data'));
    }

    public function artikel($slug)
    {
        $data               = Article::where('article_slug', $slug)->get();
        $category           = Category::with('categories')->get();
        $recent_article     = Article::latest('id')->limit('4')->get();
        return view('front.article.detail', compact('data', 'category', 'recent_article'));
    }
}
