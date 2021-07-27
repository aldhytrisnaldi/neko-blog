@extends('front.layouts.app')

@foreach ( $data as $a )
    @section('title', $a->article_title)

    @section('content')
        <section class="bg-half d-table w-100" style="background: url('{!! asset('assets/images/hospital.jpg') !!}') center center;">
            <div class="bg-overlay bg-overlay-gradient"></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12 text-center">
                        <div class="page-next-level">
                            <h4 class="title text-white title-dark"> Artikel </h4>
                            <ul class="list-unstyled mt-4">
                                <li class="list-inline-item h6 user text-white mr-2"><i class="mdi mdi-account"></i> {{ $a->createdBy->username }}</li>
                                <li class="list-inline-item h6 date text-white"><i class="mdi mdi-calendar-check"></i> {{ $a->createdBy->created_at->format('D, d M Y - H:i') }}</li>
                            </ul>
                            <div class="page-next">
                                <nav aria-label="breadcrumb" class="d-inline-block">
                                    <ul class="breadcrumb bg-white rounded shadow mb-0">
                                        <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                                        <li class="breadcrumb-item"><a href="/artikel">Artikel</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">{{ $a->article_title }}</li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="position-relative">
            <div class="shape overflow-hidden text-white">
                <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
                </svg>
            </div>
        </div>
        <section class="section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-6">
                        <div class="card blog blog-detail border-0 shadow rounded">
                            <img src="{!! asset('images/article/'.$a->article_images) !!}" class="img-fluid rounded-top" alt="">
                            <div class="card-body content text-muted">
                                <h6><i class="mdi mdi-folder text-primary mr-1"></i><a href="{{ url('kategori/'.$a->category->category_slug)}}" class="text-primary">{!! $a->category->category_name !!}</a></h6>
                                {!! $a->article_description !!}
                            </div>
                        </div>
                    </div>
                    @include('front.partials.widget')
                </div>
            </div>
        </section>
    @endsection
@endforeach

