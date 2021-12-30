<div id="packages" class="header-bottom-area padding-top-110">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4">
                <div class="section-title desktop-center margin-bottom-60">
                    <span class="sub-title">Tracks</span>
                    <h3 class="title">Explore all<span>Tracks</span> & get your <span>Certificate</span></h3>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($tracks as $key => $track)
               
           
                <div class="col-lg-3 col-md-6">
                    <div class="single-package-item water-effect bg-image" style="background-image: url({{asset('front/images/ima/0'.intval($key).'.jpg')}});">
                        <div class="content">
                            
                            <div class="btn-wrapper">
                                <a href="#" class="boxed-btn">Courses {{$track->courses->count()}}</a>
                            </div>
                            <h4 class="title"><a href="{{route('track.show',$track->id)}}">{{$track->name}}</a></h4>
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