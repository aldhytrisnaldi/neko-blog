@extends('layouts.app')
@section('title', 'Update User')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Update User</h1>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Form User</h4>
                        </div>
                        {!! Form::model($user, ['method' => 'PATCH', 'route' => ['user.update', $user->id]]) !!}
                            <div class="card-body">
                                <div class="row">
                                    <div class="form-group col-6">
                                        <label for="username">Username</label><span class="text-danger pl-1">*</span>
                                        {!! Form::text('username', null, array('class' => 'form-control')) !!}
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="email">E-mail</label><span class="text-danger pl-1">*</span>
                                        {!! Form::email('email', null, array('class' => 'form-control')) !!}
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="roles">Role</label><span class="text-danger pl-1">*</span>
                                        {!! Form::select('roles[]', $roles,$userRole, array('class' => 'form-control select2')) !!}
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="phone">Phone</label><span class="text-danger pl-1">*</span>
                                        {!! Form::text('phone', null, array('class' => 'form-control')) !!}
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="password">Password</label>
                                        {!! Form::password('password', array('placeholder' => 'Password','class' => 'form-control')) !!}
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="password">Password Confirm</label>
                                        {!! Form::password('password_confirmation', array('placeholder' => 'Password Confirm','class' => 'form-control')) !!}
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
