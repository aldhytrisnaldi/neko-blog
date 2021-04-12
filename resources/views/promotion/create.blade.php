@extends('layouts.app')
@section('title', 'Create Promotion')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Create Promotion</h1>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Form Promotion</h4>
                        </div>
                        {!! Form::open(array('route' => 'promotion.store', 'method' => 'POST')) !!}
                            <div class="card-body">
                                <div class="row">
                                    <div class="form-group col-12">
                                        <label for="promotion_name">Promotion Name</label><span class="text-danger pl-1">*</span>
                                        {!! Form::text('promotion_name', null, array('placeholder' => 'Promotion Name', 'class' => 'form-control')) !!}
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary">Create</button>
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
