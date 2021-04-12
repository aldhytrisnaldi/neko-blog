@extends('layouts.app')
@section('title', 'Category')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Category</h1>
            @can('category-create')
                <div class="section-header-button">
                    <a href="{{route('category.create')}}" class="btn btn-icon btn-left btn-primary btn-sm">
                        <i class="fas fa-plus"></i> Add Category
                    </a>
                </div>
            @endcan
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Category List</h4>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped" id="category_table">
                                <thead>
                                    <tr>
                                        <th width="20px">No</th>
                                        <th>Category Name</th>
                                        <th>Created By</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($category as $key => $c)
                                        <tr>
                                            <td>{{ $key+1 }}</td>
                                            <td>{{ $c->category_name }}</td>
                                            <td><h6><span class="badge badge-primary">{{ $c->createdBy->username }}</span></h6></td>
                                            <td class="text-right" width="120px">
                                                @can('category-update')
                                                    <a class="btn btn-primary btn-icon icon-left btn-sm" href="{{ route('category.edit', $c->id) }}">Update</a>
                                                @endcan
                                                @can('category-delete')
                                                    <a class="btn btn-danger btn-icon icon-left btn-sm" href="{{ route('category.destroy', $c->id) }}" id="category-delete">Delete</a>
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
