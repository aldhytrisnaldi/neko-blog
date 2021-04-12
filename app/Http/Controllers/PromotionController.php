<?php

namespace App\Http\Controllers;

use App\Promotion;
use Illuminate\Http\Request;

class PromotionController extends Controller
{
    public function index()
    {
        $promotion  = Promotion::latest('id')->get();

        return view('promotion.index', compact('promotion'));
    }

    public function create()
    {
        return view('promotion.create');
    }

    public function store(Request $request)
    {
        $validation = $request->validate([
            'promotion_name'    => 'required|unique:promotions'
        ]);

        Promotion::create($validation);

        return redirect('/promotion')->with('success', 'Success create promotion');
    }

    public function edit($id)
    {
        $promotion  = Promotion::findOrFail($id);

        return view('promotion.edit',compact('promotion'));
    }

    public function update(Request $request, $id)
    {
        $validation = $request->validate([
            'promotion_name'    => 'required'
        ]);

        Promotion::whereId($id)->update($validation);

        return redirect('/promotion')->with('success', 'Succress update promotion');
    }

    public function destroy($id)
    {
        Promotion::findOrFail($id);
    }

    public function show($id)
    {
        $promotion  = Promotion::findOrFail($id);
        $promotion->delete();

        return redirect('/promotion')->with('success', 'Success delete promotion');
    }
}
