@extends('layouts.app')
@section('title', 'Create Category')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Create Category</h1>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Form Category</h4>
                        </div>
                        {{-- {!! Form::open(array('route' => 'role.store', 'method' => 'POST')) !!}
                            <div class="card-body">
                                <div class="row">
                                    <div class="form-group col-12">
                                        <label for="name">Role Name</label><span class="text-danger pl-1">*</span>
                                        {!! Form::text('name', null, array('placeholder' => 'Role Name', 'class' => 'form-control')) !!}
                                    </div>
                                    <div class="form-group col-12">
                                        <label class="d-block">Permission</label>
                                        @foreach($permission as $value)
                                            <div class="form-check">
                                                {{ Form::checkbox('permission[]', $value->id, false, array('class' => 'form-check-input')) }}
                                                <label class="form-check-label">
                                                    {{ $value->name }}
                                                </label>
                                            </div>
                                        @endforeach
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary">Create</button>
                                    </div>
                                </div>
                            </div>
                        {!! Form::close() !!} --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
