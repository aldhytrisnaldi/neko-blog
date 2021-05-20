<?php

namespace App\Http\Controllers;

use App\Promotion;
use Illuminate\Http\Request;

class PromosiController extends Controller
{
    public function index()
    {
        return view('promosi.index');
    }

    public function promosi($slug)
    {
        $data  = Promotion::where('promotion_slug', $slug)->get();

        return view('front.promosi.detail', compact('data'));
    }
}
