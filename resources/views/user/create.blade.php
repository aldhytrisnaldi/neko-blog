@extends('layouts.app')
@section('title', 'Create User')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Create User</h1>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Form User</h4>
                        </div>
                        {!! Form::open(array('route' => 'user.store', 'method' => 'POST')) !!}
                            <div class="card-body">
                                <div class="row">
                                    <div class="form-group col-6">
                                        <label for="username">Username</label><span class="text-danger pl-1">*</span>
                                        {!! Form::text('username', null, array('placeholder' => 'Username', 'class' => 'form-control')) !!}
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="email">E-mail</label><span class="text-danger pl-1">*</span>
                                        {!! Form::email('email', null, array('placeholder' => 'your@mail.com', 'class' => 'form-control')) !!}
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="roles">Role</label><span class="text-danger pl-1">*</span>
                                        {!! Form::select('roles[]', $roles, [], array('class' => 'form-control select2')) !!}
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="phone">Phone</label><span class="text-danger pl-1">*</span>
                                        {!! Form::text('phone', null, array('placeholder' => 'Phone Number', 'class' => 'form-control')) !!}
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="password">Password</label><span class="text-danger pl-1">*</span>
                                        {!! Form::password('password', array('placeholder' => 'Password', 'class' => 'form-control')) !!}
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="password">Password Confirm</label><span class="text-danger pl-1">*</span>
                                        {!! Form::password('password_confirmation', array('placeholder' => 'Password Confirmation', 'class' => 'form-control')) !!}
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
