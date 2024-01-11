@extends('frontend.frontend_master')
@section('frontend_content')
<!-- =====start-section====== -->
<!-- Start Slider Area -->
<div id="home" class="rn-slider-area">
    <div class="slide slider-style-1">
        <div class="container">
            <div class="row row--30 align-items-center">
                <div class="order-2 order-lg-1 col-lg-7 mt_md--50 mt_sm--50 mt_lg--30">
                    <div class="content">
                        @foreach($BannerSection as $key=>$banner)
                        <div class="inner">
                            <span class="subtitle subtitle_c">{{ $banner->title }}</span>
                            <h1 class="title title_c">Hi, I’m <span>{{ $banner->name }}</span><br>
                                <span class="header-caption" id="page-top">
                                    <!-- type headline start-->
                                    <span class="cd-headline clip is-full-width">
                                        <span>a </span>
                                        <!-- ROTATING TEXT -->
                                        <span class="cd-words-wrapper">
                                            <b class="is-visible hero_prof">{{ $banner->pro }}.</b>
                                        </span>
                                    </span>
                                    <!-- type headline end -->
                                </span>
                            </h1>

                            <div>
                                <p class="description hero_descr">{{ $banner->description }}</p>
                            </div>
                        </div>
                        @endforeach
                        <div class="row">
                            <div class="col-lg-6 col-xl-6 col-md-6 col-sm-6 col-12">
                                <div class="social-share-inner-left">
                                    <span class="title">find with me</span>
                                    <ul class="social-share d-flex liststyle">
                                        @foreach($profile as $key=>$profile)
                                        <li class="facebook"><a href="{{ $profile->facebook }}" target="_blank"><i
                                                    data-feather="facebook"></i></a>
                                        </li>
                                        <li class="instagram"><a href="{{ $profile->instagram }}" target="_blank"><i
                                                    data-feather="instagram"></i></a>
                                        </li>
                                        <li class="linkedin"><a href="{{ $profile->linkedin }}" target="_blank"><i
                                                    data-feather="linkedin"></i></a>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-6 col-xl-6 col-md-6 col-sm-6 col-12 mt_mobile--30">
                                <div class="skill-share-inner">
                                    <span class="title">best skill on</span>
                                    <ul class="skill-share d-flex liststyle">
                                        <li><img src="assets/images/icons/icons-01.png" alt="Icons Images"></li>
                                        <li><img src="assets/images/icons/icons-02.png" alt="Icons Images"></li>
                                        <li><img src="assets/images/icons/icons-03.png" alt="Icons Images"></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="order-1 order-lg-2 col-lg-5">
                    <div class="thumbnail">
                        <div class="inner">
                            <img class="hero_img_r" src="{{ asset('images/banner/'.$banner->image) }}"
                                alt="Personal Portfolio Images">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Slider Area -->
<!-- Start about Area -->

<!-- ===========about-title============= -->
<section class="section-services">
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

<div style="padding-top: 40px; padding-bottom: 40px;" id="about" class="rn-about-area rn-section-gap">
    <div class="container">
    @foreach($about as $key=>$about)
        <div class="row">
            <div class="col-lg-5">
                <div data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100" data-aos-once="true"
                    class="image-area">
                    <div class="thumbnail shadow">
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
                    
                    <a class="rn-btn" href=""><span>GET A Quote</span></a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
<!-- End about Area -->
<!-- Start Service Area -->
<div style="padding-top: 60px;" class="rn-service-area rn-section-gap section-separator" id="features">
    <div class="container">
        <!-- ===========service-title============= -->
        <section class="section-services">
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-md-10 col-lg-8">
                        <div class="header-section">
                            <h2 class="title">OUR <span>SERVICES</span></h2>
                            <p class="description">There are many variations of passages of Lorem Ipsum available but
                                the
                                majority have suffered alteration in some injected humour</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ===========end-service-title========= -->
        <div class="row row--25 mt_md--10 mt_sm--10">
    @foreach($service as $key=>$service)
            <!-- Start Single Service -->
            <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="100" data-aos-once="true"
                class="col-lg-6 col-xl-4 col-md-6 col-sm-12 col-12 mt--50 mt_md--30 mt_sm--30">
                <div class="rn-service">
                    <div class="inner">
                        <div class="icon count_service_id">
                            {{ $key+1 }}
                        </div>
                        <div class="content">
                            <h4 class="title"><a href="#">{{ $service->name }}</a></h4>
                            <span class="d-block"><i class="fa-solid fa-check"></i><span> {{ $service->item_1 }}</span></span>
                            <span class="d-block"><i class="fa-solid fa-check"></i><span> {{ $service->item_2 }}</span></span>
                            <span class="d-block"><i class="fa-solid fa-check"></i><span> {{ $service->item_3 }}</span></span>
                            <span class="d-block"><i class="fa-solid fa-check"></i><span> {{ $service->item_4 }}</span></span>
                            
                            <a class="read-more-button" href="{{ route('frontend.services',$service->id) }}"><span>Go Main Service</span></a>
                        </div>
                    </div>
                    <a class="over-link" href="#"></a>
                </div>
            </div>
            <!-- End SIngle Service -->
            @endforeach
        </div>
    </div>
</div>
<!-- End Service Area  -->
<!-- ===========bg-image========== -->
<div class="bg-image-area-fitness attachment bg_image--2 bg_image">

</div>
<!-- ==========bg-image============ -->

<!-- ===========start-team-members========== -->
<div class="container-xxl py-5">
    <div class="container">
        <!-- ===========team-title============= -->
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
        <!-- ===========end-team-title========= -->
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
        <!-- <div class="row">
            <div class="col-lg-12">
                <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="100" data-aos-once="true"
                    class="section-title text-center mb--20 mb_md--20 mb_sm--20">
                    <span class="subtitle">What Clients Say</span>
                    <h2 class="title">Testimonial</h2>
                </div>
            </div>
        </div> -->

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



<!-- Start Contact section -->
<div class="contact_section rn-contact-area rn-section-gap section-separator" id="contacts">
    <!-- ===========about-title============= -->
    <section class="section-services">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-md-10 col-lg-8">
                    <div class="header-section">
                        <h2 class="title">Contact <span>Me</span></h2>
                        <p class="description">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Autem odio
                            officia eos,animi accusantium atque?</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ===========end-about-title========= -->
    <div class="container">
        <div class="main_contact">
            <div class="row mt--50 mt_md--40 mt_sm--40 mt-contact-sm">
                <div class="col-lg-5">
                    <div class="contact-about-area" style="height: auto!important;">
                        <div class="contact_content">
                            <img class="contact_img" src="assets/contact/con-1.png" alt="">
                            <h4 class="contact_title">ZamanIT Consulting</h4>
                            <p class="contact_address"><i class="fa fa-phone" aria-hidden="true"></i> Phone : +880
                                1788-789409</p>
                            <p class="contact_address"><i class="fa fa-envelope" aria-hidden="true"></i> Email :
                                admin@gmail.com</p>
                            <p class="contact_address"><i class="fa fa-location-arrow" aria-hidden="true"></i> Address :
                                Narail, Dhaka, Bangladesh</p>
                        </div>
                        <div class="social-area social_area">
                            <div class="name">FIND WITH ME</div>
                            <div class="social-icone">

                                <a href="{{ $profile->facebook }}" target="_blank"><i data-feather="facebook"></i></a>
                                <a href="{{ $profile->linkedin }}" target="_blank"><i data-feather="linkedin"></i></a>
                                <a href="{{ $profile->instagram }}" target="_blank"><i data-feather="instagram"></i></a>

                            </div>
                        </div>
                    </div>
                </div>
                <div data-aos-delay="600" class="col-lg-7 contact-input">
                    <div class="contact-form-wrapper">
                        <div class="introduce">
                            @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                            <p class="alert-success">
                                <?php

                                use Illuminate\Support\Facades\Session;

                                $message = Session::get('message');
                                if($message){
                                    echo $message;
                                    Session::put('message',null);
                                }
                                ?>
                            </p>
                            <form class="contact-form main_form" method="POST" action="{{ url('/store-message') }}">
                                <h5 class="message_titless">Message Me</h5>
                                @csrf
                                <div class="form-group single_group">
                                    <label for="name" class="message_label">Name</label>
                                    <input type="text" class="form-control single_input" id="name" name="name"
                                        placeholder="Enter Your Name">
                                </div>
                                <div class="form-group single_group">
                                    <label for="email" class="message_label">E-mail</label>
                                    <input type="text" class="form-control single_input" id="email" name="email"
                                        placeholder="Enter Your Email">
                                </div>
                                <div class="form-group single_group">
                                    <label for="message" class="message_label">Message</label>
                                    <textarea name="message" class="single_textarea"
                                        placeholder="Enter Your Message"></textarea>
                                </div>

                                <button type="submit" class="message_btn">Send Message</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Contuct section -->
<!-- =====end-section====== -->
@endsection