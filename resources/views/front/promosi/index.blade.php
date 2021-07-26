@extends('front.layouts.app')

@section('title', 'Promosi')

@section('content')
    <section class="bg-half d-table w-100" style="background: url('{!! asset('assets/images/hospital.jpg') !!}') center center;">
        <div class="bg-overlay bg-overlay-gradient"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 text-center">
                    <div class="page-next-level">
                        <h4 class="title text-white title-dark"> Promosi </h4>
                        <div class="page-next">
                            <nav aria-label="breadcrumb" class="d-inline-block">
                                <ul class="breadcrumb bg-white rounded shadow mb-0">
                                    <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Promosi</li>
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
                @foreach ($data as $p)
                    <div class="col-lg-4 col-md-6 mb-4 pb-2">
                        <div class="card blog rounded border-0 shadow overflow-hidden">
                            <div class="position-relative">
                                <img src="{!! asset('images/promotion/'.$p->promotion_images) !!}" class="card-img-top" alt="...">
                                <div class="overlay rounded-top bg-dark"></div>
                            </div>
                            <div class="card-body content">
                                <h5><a href="promosi/{{$p->promotion_slug}}" class="card-title title text-dark">{{$p->promotion_name}}</a></h5>
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
