@extends('layouts.app')
@section('title', 'Article')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Article</h1>
            @can('article-create')
                <div class="section-header-button">
                    <a href="{{ route('article.create') }}" class="btn btn-icon btn-left btn-primary btn-sm">
                        <i class="fas fa-plus"></i> Add Article
                    </a>
                </div>
            @endcan
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Article List</h4>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped" id="article_table">
                                <thead>
                                    <tr>
                                        <th width="20px">No</th>
                                        <th>Article Title</th>
                                        <th>Category</th>
                                        <th>Created By</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Kini anda bisa melakukan program hamil di ...</td>
                                        <td><h6><span class="badge badge-primary">Kesehatan</span></h6></td>
                                        <td><h6><span class="badge badge-primary">Aldhy Trisnaldi</span></h6></td>
                                        <td class="text-right" width="120px">
                                            @can('article-update')
                                                <a class="btn btn-primary btn-icon icon-left btn-sm" href="#">Update</a>
                                            @endcan
                                            @can('article-delete')
                                                <a class="btn btn-danger btn-icon icon-left btn-sm" href="#" id="article-delete">Delete</a>
                                            @endcan
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
