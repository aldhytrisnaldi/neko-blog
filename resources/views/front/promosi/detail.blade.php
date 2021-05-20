@extends('front.layouts.app')

@foreach ( $data as $p )
    @section('title', $p->promotion_name)

    @section('content')
        <section class="bg-half d-table w-100" style="background: url('{!! asset('assets/images/2.jpg') !!}') center center;">
            <div class="bg-overlay"></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12 text-center">
                        <div class="page-next-level">
                            <h4 class="title text-white title-dark"> Promosi </h4>
                            <div class="page-next">
                                <nav aria-label="breadcrumb" class="d-inline-block">
                                    <ul class="breadcrumb bg-white rounded shadow mb-0">
                                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Promosi</li>
                                        <li class="breadcrumb-item active" aria-current="page">{{ $p->promotion_name }}</li>
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
                            <img src="{!! asset('images/promotion/'.$p->promotion_images) !!}" class="img-fluid rounded-top" alt="">
                            <div class="card-body content">
                                <p class="text-muted mt-3">The most well-known dummy text is the 'Lorem Ipsum', which is said to have originated in the 16th century. Lorem Ipsum is composed in a pseudo-Latin language which more or less corresponds to 'proper' Latin. It contains a series of real Latin words. This ancient dummy text is also incomprehensible, but it imitates the rhythm of most European languages in Latin script. </p>
                                <p class="text-muted">The advantage of its Latin origin and the relative meaninglessness of Lorum Ipsum is that the text does not attract attention to itself or distract the viewer's attention from the layout.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                        <div class="card border-0 sidebar sticky-bar rounded shadow">
                            <div class="card-body">
                                <div class="widget mb-4 pb-2">
                                    <h4 class="widget-title">Search</h4>
                                    <div id="search2" class="widget-search mt-4 mb-0">
                                        <form role="search" method="get" id="searchform" class="searchform">
                                            <div>
                                                <input type="text" class="border rounded" name="s" id="s" placeholder="Search Keywords...">
                                                <input type="submit" id="searchsubmit" value="Search">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="widget mb-4 pb-2">
                                    <h4 class="widget-title">Catagories</h4>
                                    <ul class="list-unstyled mt-4 mb-0 blog-catagories">
                                        <li><a href="jvascript:void(0)">Finance</a> <span class="float-right">13</span></li>
                                        <li><a href="jvascript:void(0)">Business</a> <span class="float-right">09</span></li>
                                        <li><a href="jvascript:void(0)">Blog</a> <span class="float-right">18</span></li>
                                        <li><a href="jvascript:void(0)">Corporate</a> <span class="float-right">20</span></li>
                                        <li><a href="jvascript:void(0)">Investment</a> <span class="float-right">22</span></li>
                                    </ul>
                                </div>
                                <div class="widget mb-4 pb-2">
                                    <h4 class="widget-title">Recent Post</h4>
                                    <div class="mt-4">
                                        <div class="clearfix post-recent">
                                            <div class="post-recent-thumb float-left"> <a href="jvascript:void(0)"> <img alt="img" src="images/blog/07.jpg" class="img-fluid rounded"></a></div>
                                            <div class="post-recent-content float-left"><a href="jvascript:void(0)">Consultant Business</a><span class="text-muted mt-2">15th June, 2019</span></div>
                                        </div>
                                        <div class="clearfix post-recent">
                                            <div class="post-recent-thumb float-left"> <a href="jvascript:void(0)"> <img alt="img" src="images/blog/08.jpg" class="img-fluid rounded"></a></div>
                                            <div class="post-recent-content float-left"><a href="jvascript:void(0)">Look On The Glorious Balance</a> <span class="text-muted mt-2">15th June, 2019</span></div>
                                        </div>
                                        <div class="clearfix post-recent">
                                            <div class="post-recent-thumb float-left"> <a href="jvascript:void(0)"> <img alt="img" src="images/blog/01.jpg" class="img-fluid rounded"></a></div>
                                            <div class="post-recent-content float-left"><a href="jvascript:void(0)">Research Financial.</a> <span class="text-muted mt-2">15th June, 2019</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget mb-4 pb-2">
                                    <h4 class="widget-title">Tags Cloud</h4>
                                    <div class="tagcloud mt-4">
                                        <a href="jvascript:void(0)" class="rounded">Business</a>
                                        <a href="jvascript:void(0)" class="rounded">Finance</a>
                                        <a href="jvascript:void(0)" class="rounded">Marketing</a>
                                        <a href="jvascript:void(0)" class="rounded">Fashion</a>
                                        <a href="jvascript:void(0)" class="rounded">Bride</a>
                                        <a href="jvascript:void(0)" class="rounded">Lifestyle</a>
                                        <a href="jvascript:void(0)" class="rounded">Travel</a>
                                        <a href="jvascript:void(0)" class="rounded">Beauty</a>
                                        <a href="jvascript:void(0)" class="rounded">Video</a>
                                        <a href="jvascript:void(0)" class="rounded">Audio</a>
                                    </div>
                                </div>
                                <div class="widget">
                                    <h4 class="widget-title">Follow us</h4>
                                    <ul class="list-unstyled social-icon mb-0 mt-4">
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="facebook" class="fea icon-sm fea-social"></i></a></li>
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="instagram" class="fea icon-sm fea-social"></i></a></li>
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="twitter" class="fea icon-sm fea-social"></i></a></li>
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="linkedin" class="fea icon-sm fea-social"></i></a></li>
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="github" class="fea icon-sm fea-social"></i></a></li>
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="youtube" class="fea icon-sm fea-social"></i></a></li>
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="gitlab" class="fea icon-sm fea-social"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endsection
@endforeach

