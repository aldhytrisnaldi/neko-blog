<?php

namespace App\Http\Controllers;

use App\Article;
use App\Promotion;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $article    = Article::latest('id')->limit('1')->get();
        $promotion  = Promotion::latest('id')->limit('5')->get();
        return view('front.home.index', compact('promotion','article'));
    }

    public function create()
    {
        //
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
