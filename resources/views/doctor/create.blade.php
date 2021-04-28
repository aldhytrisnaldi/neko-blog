@extends('layouts.app')
@section('title', 'Create Doctor')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Create Doctor</h1>
        </div>
        <div class="section-body">
            {!! Form::open(array('route' => 'doctor.store', 'method' => 'POST', 'files' => true )) !!}
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Form Doctor</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="form-group col-6">
                                        <label for="doctor_name">Doctor Name</label><span class="text-danger pl-1">*</span>
                                        {!! Form::text('doctor_name', null, array('placeholder' => 'Doctor Name', 'class' => 'form-control')) !!}
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="specialist">Specialist</label><span class="text-danger pl-1">*</span>
                                        {!! Form::select('doctor_specialist', $specialist, [], array('class' => 'form-control')) !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-8">
                        <div class="card">
                            <div class="card-header">
                                <h4>Form Doctor</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="form-group col-2">
                                        <label for="doctor_name">Senin</label>
                                        {!! Form::text('monday', null, array('class' => 'form-control')) !!}
                                    </div>
                                    <div class="form-group col-2">
                                        <label for="doctor_name">Selasa</label>
                                        {!! Form::text('tuesday', null, array('class' => 'form-control')) !!}
                                    </div>
                                    <div class="form-group col-2">
                                        <label for="doctor_name">Rabu</label>
                                        {!! Form::text('wednesday', null, array('class' => 'form-control')) !!}
                                    </div>
                                    <div class="form-group col-2">
                                        <label for="doctor_name">Kamis</label>
                                        {!! Form::text('thursday', null, array('class' => 'form-control')) !!}
                                    </div>
                                    <div class="form-group col-2">
                                        <label for="doctor_name">Jum'at</label>
                                        {!! Form::text('friday', null, array('class' => 'form-control')) !!}
                                    </div>
                                    <div class="form-group col-2">
                                        <label for="doctor_name">Sabtu</label>
                                        {!! Form::text('saturday', null, array('class' => 'form-control')) !!}
                                    </div>
                                    <div class="form-group col-2">
                                        <label for="doctor_name">Minggu</label>
                                        {!! Form::text('sunday', null, array('class' => 'form-control')) !!}
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary">Create</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card">
                            <div class="card-header">
                                <h4>Images Preview</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="form-group col-12">
                                        <div id="image-preview" class="image-preview">
                                            <label for="image-upload" id="image-label">Doctor Images</label><span class="text-danger pl-1">*</span>
                                            {!! Form::file('doctor_images', array('class' => 'form-control', 'id' => 'images')) !!}
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <small class="form-text text-danger">
                                            Images must 1850 x 587px
                                        </small>
                                        <img id="preview-image" src="{!! asset('assets/img/placeholder-images.jpg') !!}" alt="preview image" style="max-height: 200px;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            {!! Form::close() !!}
        </div>
    </section>
@endsection
