@extends('layouts.app')
@section('title', 'Promotion')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Promotion</h1>
            @can('promotion-create')
                <div class="section-header-button">
                    <a href="{{route('promotion.create')}}" class="btn btn-icon btn-left btn-primary btn-sm">
                        <i class="fas fa-plus"></i> Add Promotion
                    </a>
                </div>
            @endcan
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Promotion List</h4>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped" id="promotion_table">
                                <thead>
                                    <tr>
                                        <th width="20px">No</th>
                                        <th>Promotion Name</th>
                                        <th>Created By</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($promotion as $key => $p)
                                        <tr>
                                            <td>{{ $key+1 }}</td>
                                            <td>{{ $p->promotion_name }}</td>
                                            <td><h6><span class="badge badge-primary">{{ $p->createdBy->username }}</span></h6></td>
                                            <td class="text-right" width="120px">
                                                @can('promotion-update')
                                                    <a class="btn btn-primary btn-icon icon-left btn-sm" href="{{ route('promotion.edit', $p->id) }}">Update</a>
                                                @endcan
                                                @can('promotion-delete')
                                                    <a class="btn btn-danger btn-icon icon-left btn-sm" href="{{ route('promotion.destroy', $p->id) }}" id="promotion-delete">Delete</a>
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
