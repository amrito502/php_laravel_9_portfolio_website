@extends('frontend.frontend_master')
@section('frontend_content')
<!-- ==========start-banner-section============= -->
<section class="banner_section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="banner">
                    <div class="back_btn">
                        <a href="index.html">Home</a>/
                        <a href="about.html">Team Members</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ===========start-team-members========== -->
<div class="container-xxl py-5">
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
<!-- Start Testimonia Area  -->
<div class="rn-testimonial-area testimonial-style-2 testimonial-with-carousel rn-section-gapTop pb--80 pb_md--50 section-separator"
    id="testimonial">
    <!-- ===========about-title============= -->
    <section class="section-services">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-md-10 col-lg-8">
                    <div class="header-section">
                        <h2 class="title">Testi<span>monial</span></h2>
                        <p class="description">What Clients Say</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ===========end-about-title========= -->
    <div class="container">
        <div class="testimonial-activation-item-3 slick-arrow-style-one mb--60" data-aos="fade-up"
            data-aos-duration="500" data-aos-delay="300" data-aos-once="true">
            @foreach($clients as $key=>$client)
            <!-- Start single Testimonial -->
            <div class="rn-testimonial">
                <div class="testimonial-inner">
                    <div class="testimonial-header">
                        <div class="thumbnail">
                            <img src="{{ asset('images/client/'.$client->image) }}" alt="client-image" class="test_logo_img">
                        </div>
                        <h5 class="ts-header">
                            <div class="info">
                                <div class="name">{{ $client->name }}</div>
                                <div class="job">{{ $client->client_pro }}</div>
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                        </h5>
                    </div>
                    <div class="testimonial-body">
                        <i class="fas fa-quote-left quote"></i>
                        <p style="font-size: 19px;">{{ $client->description }}</p>
                    </div>
                </div>
            </div>
            <!-- End single Testimonial -->
            @endforeach
        </div>
    </div>
</div>
<!-- End Testimonia Area  -->
<!-- ==========start-banner-section============= -->
@endsection