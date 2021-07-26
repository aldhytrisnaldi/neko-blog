<?php

namespace App\Http\Controllers;

use App\Article;
use App\Category;
use App\Promotion;
use Illuminate\Http\Request;

class PromosiController extends Controller
{
    public function index()
    {
        $data   = Promotion::orderBy('id', 'desc')->paginate(6);
        return view('front.promosi.index', compact('data'));
    }

    public function promosi($slug)
    {
        $data               = Promotion::where('promotion_slug', $slug)->get();
        $category           = Category::with('categories')->get();
        $recent_article     = Article::latest('id')->limit('4')->get();
        return view('front.promosi.detail', compact('data', 'category', 'recent_article'));
    }
}
