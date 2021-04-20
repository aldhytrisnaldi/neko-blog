@extends('layouts.app')
@section('title', 'Create Promotion')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Create Promotion</h1>
        </div>
        <div class="section-body">
            {!! Form::open(array('route' => 'promotion.store', 'method' => 'POST', 'files' => true )) !!}
                <div class="row">
                    <div class="col-6">
                        <div class="card">
                            <div class="card-header">
                                <h4>Form Promotion</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="form-group col-12">
                                        <label for="promotion_name">Promotion Name</label><span class="text-danger pl-1">*</span>
                                        {!! Form::text('promotion_name', null, array('placeholder' => 'Promotion Name', 'class' => 'form-control')) !!}
                                    </div>
                                    <div class="col-12">
                                        <div class="custom-file">
                                            <label class="custom-file-label" for="promotion_images">Promotion Images</label>
                                            {!! Form::file('promotion_images', array('class' => 'custom-file-input', 'id' => 'images')) !!}
                                        </div>
                                    </div>
                                    <div class="col-12 pt-4">
                                        <button type="submit" class="btn btn-primary">Create</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="card">
                            <div class="card-header">
                                <h4>Images Preview</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
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
