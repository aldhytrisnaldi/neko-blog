<?php

namespace App\Http\Controllers;

use App\Promotion;
use Illuminate\Http\Request;

class PromotionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('permission:promotion-list|promotion-create|promotion-update|promotion-delete');
        $this->middleware('permission:promotion-create', ['only' => ['create','store']]);
        $this->middleware('permission:promotion-update', ['only' => ['edit','update']]);
        $this->middleware('permission:promotion-delete', ['only' => ['destroy', 'show']]);
    }

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
        $request->validate([
            'promotion_name'    => 'required|unique:promotions',
            'promotion_images'  => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $image = $request->file('promotion_images');

        $images_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images/promotion'), $images_name);
        $data = array(
            'promotion_name'    =>   $request->promotion_name,
            'promotion_images'  =>   $images_name
        );

        Promotion::create($data);

        return redirect('/promotion')->with('success', 'Success create promotion');
    }

    public function edit($id)
    {
        $promotion  = Promotion::findOrFail($id);

        return view('promotion.edit',compact('promotion'));
    }

    public function update(Request $request, $id)
    {
        $images_name = $request->hidden_image;
        $image = $request->file('promotion_images');
        if($image != '')
        {
            $request->validate([
                'promotion_name'    =>  'required',
                'promotion_images'  =>  'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
            ]);

            $images_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/promotion'), $images_name);
        }
        else
        {
            $request->validate([
                'promotion_name'    =>  'required',
            ]);
        }

        $data = array(
            'promotion_name'    =>   $request->promotion_name,
            'promotion_images'  =>   $images_name
        );

        Promotion::whereId($id)->update($data);

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
