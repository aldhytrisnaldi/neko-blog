@extends('layouts.app')
@section('title', 'Update Promotion')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Update Promotion</h1>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Form Promotion</h4>
                        </div>
                        {!! Form::model($promotion, ['method' => 'PATCH', 'route' => ['promotion.update', $promotion->id], 'files' => true]) !!}
                            <div class="card-body">
                                <div class="row">
                                    <div class="form-group col-6">
                                        <label for="promotion_name">Promotion Name</label><span class="text-danger pl-1">*</span>
                                        {!! Form::text('promotion_name', null, array('placeholder' => 'Promotion Name', 'class' => 'form-control')) !!}
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="promotion_name">Promotion Images</label><span class="text-danger pl-1">*</span>
                                        {!! Form::file('promotion_images', array('class' => 'form-control')) !!}
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </div>
                                </div>
                            </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection