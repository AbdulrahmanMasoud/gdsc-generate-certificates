<div id="packages" class="header-bottom-area padding-top-110">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4">
                <div class="section-title desktop-center margin-bottom-60">
                    <span class="sub-title">Top Packages</span>
                    <h3 class="title">Explore <span>unique places</span> & get <span>amazing</span> experience </h3>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($tracks as $track)
                
            
            <div class="col-lg-3 col-md-6">
                <div class="single-package-item water-effect bg-image" style="background-image: url({{asset('front/images/01.jpg')}});">
                    <div class="content">
                        <div class="btn-wrapper">
                            <a href="#" class="boxed-btn">$250</a>
                        </div>
                        <h4 class="title"><a href="#">{{$track->name}}</a></h4>
                    </div>
                </div>
            </div>
            @endforeach


            {{-- <div class="col-lg-3 col-md-6">
                <div class="single-package-item water-effect bg-image" style="background-image: url({{asset('front/images/02.jpg')}});">
                    <div class="content">
                        <div class="btn-wrapper">
                            <a href="#" class="boxed-btn">$100</a>
                        </div>
                        <h4 class="title"><a href="#">Thailand</a></h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-package-item water-effect bg-image" style="background-image: url({{asset('front/images/03.jpg')}});">
                    <div class="content">
                        <div class="btn-wrapper">
                            <a href="#" class="boxed-btn">$200</a>
                        </div>
                        <h4 class="title"><a href="#">Thailand</a></h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-package-item water-effect bg-image" style="background-image: url({{asset('front/images/04.jpg')}});">
                    <div class="content">
                        <div class="btn-wrapper">
                            <a href="#" class="boxed-btn">$450</a>
                        </div>
                        <h4 class="title"><a href="#">Thailand</a></h4>
                    </div>
                </div>
            </div> --}}
        </div>
    </div> <!-- header bottom -->
</div>