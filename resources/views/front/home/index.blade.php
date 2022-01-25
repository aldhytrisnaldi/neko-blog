@extends('front.layouts.app')

@section('title', 'Home')

@section('content')
<section class="bg-half-170 d-table w-100 overflow-hidden" id="home">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7 col-md-7">
                <div class="title-heading mt-4">
                    <h1 class="heading mb-3"><span class="text-primary">Nekoproject</span> provide the best IT Solutions for you!</h1>
                    <p class="para-desc text-muted">
                        Use our services, now you can easily manage an Information System (Software, Hardware, Network, Server). Use a variety of the best services from us that can make your work easier.
                    </p>
                </div>
            </div>

            <div class="col-lg-5 col-md-5 mt-4 pt-2 mt-sm-0 pt-sm-0">
                <div class="classic-app-image position-relative">
                    <div class="bg-app-shape position-relative">
                        <img src="{{ asset('assets/images/app/classic01.png') }}" class="img-fluid mover mx-auto d-block " alt="">
                    </div>
                    <div class="app-images d-none d-md-block">
                        <img src="{{ asset('assets/images/app/calender.png') }}" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="position-relative">
    <div class="shape overflow-hidden text-light">
        <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
        </svg>
    </div>
</div>
<section class="section bg-light" id="service">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <div class="section-title mb-4 pb-2">
                    <h4 class="title mb-4">Service</h4>
                    <p class="text-muted para-desc mb-0 mx-auto">Start working with <span class="text-primary fw-bold">Nekoproject</span> that can provide everything you need to IT Solution.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-4 mt-4 pt-2">
                <div class="card features fea-primary rounded p-4 text-center position-relative overflow-hidden border-0">
                    <span class="h1 icon2 text-primary">
                        <i class="uil uil-apps"></i>
                    </span>
                    <div class="card-body p-0 content">
                        <h5>Web Application</h5>
                        <p class="para text-muted mb-0">
                            Create a website based application to facilitate your activities and work.
                        </p>
                    </div>
                    <span class="big-icon text-center">
                        <i class="uil uil-apps"></i>
                    </span>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 mt-4 pt-2">
                <div class="card features fea-primary rounded p-4 text-center position-relative overflow-hidden border-0">
                    <span class="h1 icon2 text-primary">
                        <i class="uil uil-globe"></i>
                    </span>
                    <div class="card-body p-0 content">
                        <h5>Official Website</h5>
                        <p class="para text-muted mb-0">
                            Make your official website so that many people know your profile.
                        </p>
                    </div>
                    <span class="big-icon text-center">
                        <i class="uil uil-globe"></i>
                    </span>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 mt-4 pt-2">
                <div class="card features fea-primary rounded p-4 text-center position-relative overflow-hidden border-0">
                    <span class="h1 icon2 text-primary">
                        <i class="uil uil-wifi-router"></i>
                    </span>
                    <div class="card-body p-0 content">
                        <h5>Network Security</h5>
                        <p class="para text-muted mb-0">
                            management of your network to speed up data processing.
                        </p>
                    </div>
                    <span class="big-icon text-center">
                        <i class="uil uil-wifi-router"></i>
                    </span>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 mt-4 pt-2">
                <div class="card features fea-primary rounded p-4 text-center position-relative overflow-hidden border-0">
                    <span class="h1 icon2 text-primary">
                        <i class="uil uil-servers "></i>
                    </span>
                    <div class="card-body p-0 content">
                        <h5>Server Management</h5>
                        <p class="para text-muted mb-0">
                            Optimize and secure the data on your server to keep you safe.
                        </p>
                    </div>
                    <span class="big-icon text-center">
                        <i class="uil uil-servers "></i>
                    </span>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
