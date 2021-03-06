<section class="home-slider position-relative">
    <div id="carouselControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            @forelse ( $article as $a )
                <div class="carousel-item align-items-center active" style="background-image:url('{!! asset('images/article/'. $a->article_images) !!}');">
                    <a href="{{ url('artikel/'. $a->article_slug) }}"><div class="bg-overlay"></div></a>
                </div>
            @empty
                <div class="carousel-item align-items-center active" style="background-image:url('{!! asset('assets/images/coworking/bg01.jpg') !!}');">
                    <a href="#"><div class="bg-overlay"></div></a>
                </div>
            @endforelse

            @forelse ($promotion as $p)
                <div class="carousel-item align-items-center" style="background-image:url('{!! asset('images/promotion/'. $p->promotion_images) !!}');">
                    <a href="{{ url('promosi/'. $p->promotion_slug) }}"><div class="bg-overlay"></div></a>
                </div>
            @empty
                <div class="carousel-item align-items-center" style="background-image:url('{!! asset('assets/images/coworking/bg01.jpg') !!}');">
                    <a href="#"><div class="bg-overlay"></div></a>
                </div>
            @endforelse
        </div>
        <a class="carousel-control-prev" href="#carouselControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</section>
