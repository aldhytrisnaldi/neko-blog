<?php

namespace App\Http\Controllers;

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
        $data       = Promotion::where('promotion_slug', $slug)->get();
        $category   = Category::with('categories')->get();
        return view('front.promosi.detail', compact('data', 'category'));
    }
}
