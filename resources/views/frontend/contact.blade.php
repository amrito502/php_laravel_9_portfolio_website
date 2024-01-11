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
                        <a href="about.html">Contact</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
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
                            <h4 class="contact_title">ZamanIT</h4>
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
                                <a href="#"><i data-feather="facebook"></i></a>
                                <a href="#"><i data-feather="linkedin"></i></a>
                                <a href="#"><i data-feather="instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div data-aos-delay="600" class="col-lg-7 contact-input">
                    @if(Session::has('msg'))
                    <p class="alert alert-success">{{ Session::get('msg') }}</p>
                    @endif
                    <div class="contact-form-wrapper">
                        <div class="introduce">
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
<!-- ==========start-banner-section============= -->
@endsection