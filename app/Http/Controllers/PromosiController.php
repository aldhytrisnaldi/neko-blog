<?php

namespace App\Http\Controllers;

use App\Promotion;
use Illuminate\Http\Request;

class PromosiController extends Controller
{
    public function index()
    {
        $data   = Promotion::latest('id')->get();
        return view('front.promosi.index', compact('data'));
    }

    public function promosi($slug)
    {
        $data   = Promotion::where('promotion_slug', $slug)->get();

        return view('front.promosi.detail', compact('data'));
    }
}
