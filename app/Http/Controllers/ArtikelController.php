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

    public function search(Request $request)
    {
        $keyword    = $request->input('keyword');
        $search     = Article::query()->where('article_title', 'LIKE', "%{$keyword}%")->orWhere('article_description', 'LIKE', "%{$keyword}%")->orderBy('article_title', 'desc')->paginate(6);
        return view('front.article.search', compact('search', 'keyword'));
    }

    public function kategori($slug)
    {
        $kategori   = Category::where('category_slug', $slug)->orderBy('id', 'desc')->paginate(6);
        return view('front.article.kategori', compact('kategori'));
    }
}
