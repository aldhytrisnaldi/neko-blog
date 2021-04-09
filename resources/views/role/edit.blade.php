@extends('layouts.app')
@section('title', 'Update Role')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Update Role</h1>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Form Role</h4>
                        </div>
                        {!! Form::model($roles, ['method' => 'PATCH', 'route' => ['role.update', $roles->id]]) !!}
                            <div class="card-body">
                                <div class="row">
                                    <div class="form-group col-12">
                                        <label for="name">Role Name</label><span class="text-danger pl-1">*</span>
                                        {!! Form::text('name', null, array('class' => 'form-control')) !!}
                                    </div>
                                    <div class="form-group col-12">
                                        <label class="d-block">Permission</label>
                                        @foreach($permission as $value)
                                            <div class="form-check">
                                                {{ Form::checkbox('permission[]', $value->id, in_array($value->id, $rolePermissions) ? true : false, array('class' => 'form-check-input')) }}
                                                <label class="form-check-label">
                                                    {{ $value->name }}
                                                </label>
                                            </div>
                                        @endforeach
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
