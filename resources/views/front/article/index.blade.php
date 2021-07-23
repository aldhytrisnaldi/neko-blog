@extends('front.layouts.app')

@section('title', 'Artikel')

@section('content')
    <section class="bg-half d-table w-100" style="background: url('{!! asset('assets/images/hospital.jpg') !!}') center center;">
        <div class="bg-overlay bg-overlay-gradient"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 text-center">
                    <div class="page-next-level">
                        <h4 class="title text-white title-dark"> Artikel </h4>
                        <div class="page-next">
                            <nav aria-label="breadcrumb" class="d-inline-block">
                                <ul class="breadcrumb bg-white rounded shadow mb-0">
                                    <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Artikel</li>
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
                @foreach ($data as $a)
                    <div class="col-lg-4 col-md-6 mb-4 pb-2">
                        <div class="card blog rounded border-0 shadow overflow-hidden">
                            <div class="position-relative">
                                <img src="{!! asset('images/article/'.$a->article_images) !!}" class="card-img-top" alt="...">
                                <div class="overlay rounded-top bg-dark"></div>
                            </div>
                            <div class="card-body content">
                                <h5><a href="artikel/{{$a->article_slug}}" class="card-title title text-dark">{{$a->article_title}}</a></h5>
                            </div>
                            <div class="author">
                                <small class="text-light user d-block"><i class="mdi mdi-account"></i> {{ $a->createdBy->username }}</small>
                                <small class="text-light date"><i class="mdi mdi-calendar-check"></i> {{ $a->createdBy->created_at->format('D, d M Y - H:i') }}</small>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="col-12">
                    {{$data->links()}}
                </div>
            </div>
        </div>
    </section>
@endsection
