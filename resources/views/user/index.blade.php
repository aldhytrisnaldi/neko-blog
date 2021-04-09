@extends('layouts.app')
@section('title', 'User')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>User</h1>
            <div class="section-header-button">
                <a href="{{ route('user.create')}}" class="btn btn-icon btn-left btn-primary btn-sm">
                    <i class="fas fa-plus"></i> Add User
                </a>
            </div>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>User List</h4>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped" id="user_table">
                                <thead>
                                    <tr>
                                        <th width="20px">No</th>
                                        <th>User Name</th>
                                        <th>Email</th>
                                        <th>Role</th>
                                        <th>Created</th>
                                        <th class="text-center" width="120px">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $key => $e)
                                        <tr>
                                            <td>{{$key + 1}}</td>
                                            <td>{{$e->username}}</td>
                                            <td>{{$e->email}}</td>
                                            <td>
                                                @if(!empty($e->getRoleNames()))
                                                    @foreach($e->getRoleNames() as $r)
                                                        <h6><span class="badge badge-primary">{{ $r }}</span></h6>
                                                    @endforeach
                                                @endif
                                            </td>
                                            <td>
                                                <h6><span class="badge badge-primary">{{date('D, j M Y', strtotime($e->created_at))}}</span></h6>
                                            </td>
                                            <td class="text-right">
                                                <a class="btn btn-primary btn-icon icon-left btn-sm" href="{{ route('user.edit',$e->id) }}">Update</a>
                                                <a class="btn btn-danger btn-icon icon-left btn-sm user-delete" href="{{ route('user.destroy',$e->id) }}">Delete</a>
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
