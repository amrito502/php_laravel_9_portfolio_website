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
                        <a href="about.html">Portfolio</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Start Portfolio Area -->
<div class="rn-portfolio-area rn-section-gap section-separator" id="portfolio">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-center">
                            <h2 class="title">My Portfolio</h2>
                            <span class="subtitle">Visit my portfolio and keep your feedback</span>
                        </div>
                    </div>
                </div>

                <div class="row row--25 mt--10 mt_md--10 mt_sm--10">
                @foreach($Portfolio as $key=>$portfolio)
                    <!-- Start Single Portfolio -->
                    <div data-aos="fade-up" data-aos-delay="100" data-aos-once="true" class="col-lg-6 col-xl-4 col-md-6 col-12 mt--50 mt_md--30 mt_sm--30">
                        <div class="rn-portfolio" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">
                            <div class="inner">
                                <div class="thumbnail">
                                    <a href="javascript:void(0)">
                                        <img src="{{ asset('images/portfolio/'.$portfolio->image) }}" alt="Personal Portfolio Images">
                                    </a>
                                </div>
                                <div class="content">
                                    <div class="category-info">
                                        <div class="category-list">
                                            <a href="javascript:void(0)">{{ $portfolio->item_1 }}</a>
                                        </div>
                                        <div class="meta">
                                            <span><a href="javascript:void(0)"><i class="feather-heart"></i></a>
                                        </span>
                                        </div>
                                    </div>
                                    <h4 class="title_cus"><a href="javascript:void(0)">{{ $portfolio->title }}<i
                                        class="feather-arrow-up-right"></i></a></h4>
                                        <a class="btn_cus" href="{{ route('view.portfolio',$portfolio->id) }}">view</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Portfolio -->
                @endforeach
                </div>
            </div>
        </div>
        <!-- End portfolio Area -->
<!-- ==========start-banner-section============= -->
@endsection