@extends('layouts.app')
@section('title', 'Create Article')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Create Article</h1>
        </div>
        <div class="section-body">
            {!! Form::model($article, ['method' => 'PATCH', 'route' => ['article.update', $article->id], 'files' => true]) !!}
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Form Article</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="form-group col-12">
                                        <label for="article_title">Article Title</label><span class="text-danger pl-1">*</span>
                                        {!! Form::text('article_title', null, array('placeholder' => 'Article Title', 'class' => 'form-control')) !!}
                                    </div>
                                    <div class="form-group col-12">
                                        <label for="article_title">Article Description</label><span class="text-danger pl-1">*</span>
                                        {!! Form::textarea('article_description', null, array('class' => 'form-control summernote')) !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="card">
                            <div class="card-header">
                                <h4>Form Images & Category</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="form-group col-12">
                                        <div id="image-preview" class="image-preview">
                                            <label for="image-upload" id="image-label">Article Images</label><span class="text-danger pl-1">*</span>
                                            {!! Form::file('article_images', array('class' => 'form-control', 'id' => 'images')) !!}
                                        </div>
                                    </div>
                                    <div class="form-group col-12">
                                        <label for="promotion_category">Category</label><span class="text-danger pl-1">*</span>
                                        {!! Form::select('article_category', $category, $categories, array('class' => 'form-control')) !!}
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary">Create</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="card">
                            <div class="card-header">
                                <h4>Images Preview</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12">
                                        <img id="preview-image" src="{!! asset('assets/img/placeholder-images.jpg') !!}" alt="preview image" style="max-height: 200px;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            {!! Form::close() !!}
        </div>
    </section>
@endsection
