@extends('frontend.layouts')
@section('content')

@include('frontend.home.sections.nav')

<div class="header-area header-bg" style="height:100vh; background-image:url({{asset('front/images/01_2.png')}});">
    <div class="bg-img" style="background-image:url({{asset('front/images/bike.png')}});"></div>
    <div class="bg-img-02" style="background-image:url({{asset('front/images/balloon.png')}});"></div>
    <div class="bg-img-03" style="background-image:url({{asset('front/images/balloon-03.png')}});"></div>
    <div class="bg-img-04" style="background-image:url({{asset('front/images/balloon-02.png')}});"></div>
    <div class="bg-img-05" style="background-image:url({{asset('front/images/leaf-01.png')}});"></div>
    <div class="bg-img-06" style="background-image:url({{asset('front/images/leaf-02.png')}});"></div>
    <div class="bg-img-07" style="background-image:url({{asset('front/images/leaf-04.png')}});"></div>
    <div class="bg-img-08" style="background-image:url({{asset('front/images/leaf-03.png')}});"></div>
    <div class="bg-img-09" style="background-image:url({{asset('front/images/leaf-05.png')}});"></div>
    <div class="bg-img-10" style="background-image:url({{asset('front/images/leaf-06.png')}});"></div>
    <div class="bg-img-11" style="background-image:url({{asset('front/images/cercle.png')}});"></div>
    <div class="container">
        <div class="row ">
            <div class="col-lg-8">
                <div class="header-inner ">
                    @foreach ($errors->all() as $error)
                    <div class="alert alert-danger text-center" dir="rtl" role="alert">
                        {{ $error }} &#128531; &#128530;
                      </div>
                    @endforeach

                    <!-- header inner -->
                    <h5 class="">
                        <blockquote>
                                <code>
                                    <span class="d-inline">SELECT</span> `course` <span class="d-inline">FROM</span> `courses` <span class="d-inline">WHERE</span> `email` = myEamil; 	&#128514;
                                </code>
                        </blockquote>
                        <blockquote>
                            <code>
                                <span class="d-inline">if</span> email <span class="d-inline">?</span> generateCertificat();	&#127881;
                            </code>
                        </blockquote>
                        
                    </h5>
                    <div class="btn-wrapper  desktop-left padding-top-30  w-50">
                        <form class="question-form d-block" action="{{route('generate.certificat')}}" method="POST">
                            @csrf
                            <div class="form-group ">
                                <select name="course_id" id="courseid" class="form-control h-100">
                                    @foreach ($track->courses as $course)
                                        <option value="{{$course->id}}">{{$course->name}}</option>
                                    @endforeach
                                </select>
                            </div><br>
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" placeholder="Enter your email">
                            </div>
                            <button type="submit" class="submit-btn  mt-3">Get Certificat</button>
                        </form>
                    </div>
                </div>
                <!-- //.header inner -->
            </div>
        </div>
    </div>
</div>


@endsection

