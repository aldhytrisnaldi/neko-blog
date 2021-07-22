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
                    @foreach ($category as $c)
                        <li><a href=""></a>{{$c->category_name}} <span class="float-right">{{$c->categories->count() }}</span></li>
                    @endforeach
                </ul>
            </div>
            <div class="widget mb-4 pb-2">
                <h4 class="widget-title">Recent Post</h4>
                <div class="mt-4">
                    <div class="clearfix post-recent">
                        <div class="post-recent-thumb float-left"> <a href="jvascript:void(0)"> <img alt="img" src="{!! asset('assets/images/blog/07.jpg') !!}" class="img-fluid rounded"></a></div>
                        <div class="post-recent-content float-left"><a href="jvascript:void(0)">Consultant Business</a><span class="text-muted mt-2">15th June, 2019</span></div>
                    </div>
                    <div class="clearfix post-recent">
                        <div class="post-recent-thumb float-left"> <a href="jvascript:void(0)"> <img alt="img" src="{!! asset('assets/images/blog/08.jpg') !!}" class="img-fluid rounded"></a></div>
                        <div class="post-recent-content float-left"><a href="jvascript:void(0)">Look On The Glorious Balance</a> <span class="text-muted mt-2">15th June, 2019</span></div>
                    </div>
                    <div class="clearfix post-recent">
                        <div class="post-recent-thumb float-left"> <a href="jvascript:void(0)"> <img alt="img" src="{!! asset('assets/images/blog/01.jpg') !!}" class="img-fluid rounded"></a></div>
                        <div class="post-recent-content float-left"><a href="jvascript:void(0)">Research Financial.</a> <span class="text-muted mt-2">15th June, 2019</span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
