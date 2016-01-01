@extends('layouts.app')
@section('title', 'Doctor')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Doctor</h1>
            @can('doctor-create')
                <div class="section-header-button">
                    <a href="{{route('doctor.create')}}" class="btn btn-icon btn-left btn-primary btn-sm">
                        <i class="fas fa-plus"></i> Add Doctor
                    </a>
                </div>
            @endcan
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Doctor List</h4>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped" id="doctor_table">
                                <thead>
                                    <tr>
                                        <th width="20px">No</th>
                                        <th>Doctor Name</th>
                                        <th>Specialist</th>
                                        <th>Created By</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($doctor as $key => $d)
                                        <tr>
                                            <td>{{ $key+1 }}</td>
                                            <td>{{ $d->doctor_name }}</td>
                                            <td><h6><span class="badge badge-primary">{{ $d->specialist->specialist_name }}</span></h6></td>
                                            <td><h6><span class="badge badge-primary">{{ $d->createdBy->username }}</span></h6></td>
                                            <td class="text-right" width="120px">
                                                @can('doctor-update')
                                                    <a class="btn btn-primary btn-icon icon-left btn-sm" href="{{ route('doctor.edit', $d->id) }}">Update</a>
                                                @endcan
                                                @can('doctor-delete')
                                                    <a class="btn btn-danger btn-icon icon-left btn-sm" href="{{ route('doctor.destroy', $d->id) }}" id="doctor-delete">Delete</a>
                                                @endcan
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
