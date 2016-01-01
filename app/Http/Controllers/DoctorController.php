<?php

namespace App\Http\Controllers;

use App\Doctor;
use App\Specialist;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('permission:doctor-list|doctor-create|doctor-update|doctor-delete');
        $this->middleware('permission:doctor-create', ['only' => ['create','store']]);
        $this->middleware('permission:doctor-update', ['only' => ['edit','update']]);
        $this->middleware('permission:doctor-delete', ['only' => ['destroy', 'show']]);
    }

    public function index()
    {
        $doctor = Doctor::latest('id')->get();

        return view('doctor.index', compact('doctor'));
    }

    public function create()
    {
        $specialist = Specialist::pluck('specialist_name', 'id');
        return view('doctor.create', compact('specialist'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'doctor_name'           => 'required',
            'doctor_images'         => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'doctor_specialist'     => 'required',
            'monday'                => 'nullable',
            'tuesday'               => 'nullable',
            'wednesday'             => 'nullable',
            'thursday'              => 'nullable',
            'friday'                => 'nullable',
            'saturday'              => 'nullable',
            'sunday'                => 'nullable'
        ]);

        $image = $request->file('doctor_images');

        $images_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images/doctor'), $images_name);
        $data = array(
            'doctor_name'           =>   $request->doctor_name,
            'doctor_images'         =>   $images_name,
            'doctor_specialist'     =>   $request->doctor_specialist,
            'monday'                =>   $request->monday,
            'tuesday'               =>   $request->tuesday,
            'wednesday'             =>   $request->wednesday,
            'thursday'              =>   $request->thursday,
            'friday'                =>   $request->friday,
            'saturday'              =>   $request->saturday,
            'sunday'                =>   $request->sunday,
        );

        Doctor::create($data);

        return redirect('/doctor')->with('success', 'Success create doctor');
    }


    public function edit($id)
    {
        $doctor         = Doctor::findOrFail($id);
        $specialist     = Specialist::pluck('specialist_name', 'id');
        $specialists    = $doctor->specialist->pluck('specialist_name', 'id');

        return view('doctor.edit', compact('doctor', 'specialist', 'specialists'));
    }

    public function update(Request $request, $id)
    {
        $images_name = $request->hidden_image;
        $image = $request->file('doctor_images');
        if($image != '')
        {
            $request->validate([
                'doctor_name'           => 'required',
                'doctor_images'         => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'doctor_specialist'     => 'required',
                'monday'                => 'nullable',
                'tuesday'               => 'nullable',
                'wednesday'             => 'nullable',
                'thursday'              => 'nullable',
                'friday'                => 'nullable',
                'saturday'              => 'nullable',
                'sunday'                => 'nullable'
            ]);

            $images_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/doctor'), $images_name);
        }
        else
        {
            $request->validate([
                'doctor_name'           => 'required',
                'doctor_images'         => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'doctor_specialist'     => 'required',
                'monday'                => 'nullable',
                'tuesday'               => 'nullable',
                'wednesday'             => 'nullable',
                'thursday'              => 'nullable',
                'friday'                => 'nullable',
                'saturday'              => 'nullable',
                'sunday'                => 'nullable'
            ]);
        }

        $data = array(
            'doctor_name'           =>   $request->doctor_name,
            'doctor_images'         =>   $images_name,
            'doctor_specialist'     =>   $request->doctor_specialist,
            'monday'                =>   $request->monday,
            'tuesday'               =>   $request->tuesday,
            'wednesday'             =>   $request->wednesday,
            'thursday'              =>   $request->thursday,
            'friday'                =>   $request->friday,
            'saturday'              =>   $request->saturday,
            'sunday'                =>   $request->sunday,
        );

        Doctor::whereId($id)->update($data);

        return redirect('/doctor')->with('success', 'Succress update doctor');
    }

    public function destroy($id)
    {
        Doctor::findOrFail($id);
    }

    public function show($id)
    {
        $doctor          = Doctor::findOrFail($id);
        $doctor_find_id  = Doctor::whereId($id)->first();
        $doctor_images   = $doctor_find_id->doctor_images;
        $doctor_delete   = $doctor->delete();

        if($doctor_delete)
        {
            unlink(public_path('images/doctor/' .$doctor_images));
            return redirect('/doctor')->with('success', 'Success delete doctor');
        }
    }
}
