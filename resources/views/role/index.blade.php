@extends('layouts.app')
@section('title', 'Role')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Role</h1>
            <div class="section-header-button">
                <a href="{{ route('role.create')}}" class="btn btn-icon btn-left btn-primary btn-sm">
                    <i class="fas fa-plus"></i> Add Role
                </a>
            </div>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Role List</h4>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped" id="role_table">
                                <thead>
                                    <tr>
                                        <th width="20px">No</th>
                                        <th>Role Name</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($roles as $key => $r)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $r->name }}</td>
                                            <td class="text-right" width="120px]">
                                                <a class="btn btn-primary btn-icon icon-left btn-sm" href="{{ route('role.edit',$r->id) }}">Update</a>
                                                <a class="btn btn-danger btn-icon icon-left btn-sm" href="{{ route('role.destroy',$r->id) }}" id="role-delete">Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
