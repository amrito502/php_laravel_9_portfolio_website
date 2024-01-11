@extends('frontend.frontend_master')
@section('frontend_content')
<section class="banner_section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="banner">
                    <div class="back_btn">
                        <a href="index.html">Home</a>/
                        <a href="about.html">About Me</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Start about Area -->
<!-- ===========about-title============= -->
<section class="section-services " style="margin-top: 60px; margin-bottom: -60px;">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-md-10 col-lg-8">
                <div class="header-section">
                    <h2 class="title">About <span>Me</span></h2>
                    <p class="description">There are many variations of passages of Lorem Ipsum available but the
                        majority have suffered alteration in some injected humour</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ===========end-about-title========= -->
<div id="about" class="rn-about-area rn-section-gap ">
    <div class="container">
    @foreach($AboutModel as $key=>$about)
        <div class="row">
        
            <div class="col-lg-5">
                <div data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100" data-aos-once="true"
                    class="image-area">
                    <div class="thumbnail">
                        <img src="{{ asset('images/about/'.$about->image) }}" alt="">
                    </div>
                </div>
            </div>
            <div data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100" data-aos-once="true"
                class="col-lg-7 mt_sm--30">
                <div class="contant">
                    <div class="section-title text-left">
                        <span class="subtitle">{{ $about->subtitle }}</span>
                        <h2 class="title">{{ $about->title }}</h2>
                    </div>
                    <p class="discription">
                    {{ $about->description }}
                    </p>
                    <a class="rn-btn" href="#contacts"><span>Hire Me</span></a>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</div>
<!-- End about Area -->
<!-- ===========start-team-members========== -->
<div class="container-xxl py-5 mb-5">
    <div class="container">
        <!-- ===========about-title============= -->
        <section class="section-services">
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-md-10 col-lg-8">
                        <div class="header-section">
                            <h2 class="title">Team <span>Members</span></h2>
                            <p class="description">There are many variations of passages of Lorem Ipsum available but
                                the
                                majority have suffered alteration in some injected humour</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ===========end-about-title========= -->
        <div class="row g-4">
        @foreach($teams as $key=>$team)
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s mb-5" style="margin-bottom: 40px!important;" >
                <div class="team-item rounded">
                <img src="{{ asset('images/team/'.$team->image) }}"  alt="img">
                    <div class="text-center p-4">
                        <h5>{{ $team->name }}</h5>
                        <span>{{ $team->title }}</span>
                    </div>
                    <div class="team-text text-center bg-dark p-4">
                        <h5>{{ $team->name }}</h5>
                        <p>{{ $team->title }}</p>
                        <div class="d-flex justify-content-center">
                            <a style="font-size: 19px;" class="btn btn-square btn-light m-1" href="{{ $team->facebook }}"><i
                                    class="fab fa-twitter"></i></a>
                            <a style="font-size: 19px;" class="btn btn-square btn-light m-1" href="{{ $team->facebook }}"><i
                                    class="fab fa-facebook-f"></i></a>
                            <a style="font-size: 19px;" class="btn btn-square btn-light m-1" href="{{ $team->facebook }}"><i
                                    class="fab fa-youtube"></i></a>
                            <a style="font-size: 19px;" class="btn btn-square btn-light m-1" href="{{ $team->facebook }}"><i
                                    class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- ===========end-team-members========== -->


<div class="get_in_touch_section mt-5">
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="get_in_touch">
                <p>Are You Want To Know About Something from me? Please Contact Me!</p>
                <a href="">GET A Quote</a>
            </div>
        </div>
    </div>
</div>
</div>


@endsection