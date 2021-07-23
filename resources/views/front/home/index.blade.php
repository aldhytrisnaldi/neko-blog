@extends('front.layouts.app')

@section('title', 'Home')

@section('content')

@include('front.partials.slider')
<section class="section pt-0">
    <div class="container mt-100 mt-60">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <div class="section-title mb-4 pb-2">
                    <h4 class="title mb-4">SPESIALIS KAMI</h4>
                    <p class="text-muted para-desc mb-0 mx-auto"><span class="text-primary font-weight-bold">RSIA NURAIDA</span> Menyediakan berbagai spesialis dan layanan kesehatan di dukung tenaga medis terbaik.</p>
                </div>
            </div><!--end col-->
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-12 mt-4 pt-2">
                <div class="card catagories text-center rounded border-0">
                    <div class="card-body">
                        <img src="{!! asset('assets/images/medicine/uterus.svg') !!}" class="avatar avatar-small mb-3" alt="">
                        <h6><a href="javascript:void(0)" class="text-dark">OBGYN</a></h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12 mt-4 pt-2">
                <div class="card catagories text-center rounded border-0">
                    <div class="card-body">
                        <img src="{!! asset('assets/images/medicine/kidneys.svg') !!}" class="avatar avatar-small mb-3" alt="">
                        <h6><a href="javascript:void(0)" class="text-dark">UROLOGI</a></h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12 mt-4 pt-2">
                <div class="card catagories text-center rounded border-0">
                    <div class="card-body">
                        <img src="{!! asset('assets/images/medicine/children.svg') !!}" class="avatar avatar-small mb-3" alt="">
                        <h6><a href="javascript:void(0)" class="text-dark">ANAK</a></h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12 mt-4 pt-2">
                <div class="card catagories text-center rounded border-0">
                    <div class="card-body">
                        <img src="{!! asset('assets/images/medicine/nutrion.svg') !!}" class="avatar avatar-small mb-3" alt="">
                        <h6><a href="javascript:void(0)" class="text-dark">GIZI</a></h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12 mt-4 pt-2">
                <div class="card catagories text-center rounded border-0">
                    <div class="card-body">
                        <img src="{!! asset('assets/images/medicine/lungs.svg') !!}" class="avatar avatar-small mb-3" alt="">
                        <h6><a href="javascript:void(0)" class="text-dark">PENYAKIT DALAM</a></h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12 mt-4 pt-2">
                <div class="card catagories text-center rounded border-0">
                    <div class="card-body">
                        <img src="{!! asset('assets/images/medicine/skin.svg') !!}" class="avatar avatar-small mb-3" alt="">
                        <h6><a href="javascript:void(0)" class="text-dark">KULIT & KELAMIN</a></h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12 mt-4 pt-2">
                <div class="card catagories text-center rounded border-0">
                    <div class="card-body">
                        <img src="{!! asset('assets/images/medicine/tooth.svg') !!}" class="avatar avatar-small mb-3" alt="">
                        <h6><a href="javascript:void(0)" class="text-dark">MULUT & GIGI</a></h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section bg-light pt-0">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-3 col-md-6 mt-4 pt-2">
                <img src="{!! asset('assets/images/kippa/kippa.png') !!}" width="300px">
            </div>
            <div class="col-lg-9 col-md-6 mt-4 pt-2">
                <div class="section-title ml-lg-5">
                    <h4 class="title mb-4">Program Unggulan - Klinik Ingin Program Punya Anak</h4>
                    <p class="text-muted">
                        Yaitu program usaha RSIA Nuraida untuk mewujudkan impian pasangan suami istri yang ingin memiliki buah hati yang sudah lama dinanti
                    </p>
                    <ul class="list-unstyled text-muted">
                        <li class="mb-0">
                            <span class="text-primary h5 mr-2">
                                <i class="uim uim-check-circle"></i>
                            </span>
                            USG 4D Fertilitas (Kesuburan): Automatic Follicles Count / Follicular Tracking using SonoAVC
                        </li>
                        <li class="mb-0">
                            <span class="text-primary h5 mr-2">
                                <i class="uim uim-check-circle"></i>
                            </span>
                            Konsultasi Dokter SpOG Konsultan Fertilitas (Kesuburan) dan Endokrin Reproduksi
                        </li>
                        <li class="mb-0">
                            <span class="text-primary h5 mr-2">
                                <i class="uim uim-check-circle"></i>
                            </span>
                            In Vitro Fertilization (IVF), Sampai tahap menjelang OPU (Ovum Pickup)
                        </li>
                        <li class="mb-0">
                            <span class="text-primary h5 mr-2">
                                <i class="uim uim-check-circle"></i>
                            </span>
                            Computerized Semen Quality Analyzer (SQA) / Automatic
                        </li>
                        <li class="mb-0">
                            <span class="text-primary h5 mr-2">
                                <i class="uim uim-check-circle"></i>
                            </span>
                            Pemeriksaan hormonal pria - wanita
                        </li>
                        <li class="mb-0">
                            <span class="text-primary h5 mr-2">
                                <i class="uim uim-check-circle"></i>
                            </span>
                            Hysterosalpingography (HSG)
                        </li>
                        <li class="mb-0">
                            <span class="text-primary h5 mr-2">
                                <i class="uim uim-check-circle"></i>
                            </span>
                            Inseminasi Intrauterin (IUI)
                        </li>
                        <li class="mb-0">
                            <span class="text-primary h5 mr-2">
                                <i class="uim uim-check-circle"></i>
                            </span>
                            Sperma Analisa (Manual)
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
