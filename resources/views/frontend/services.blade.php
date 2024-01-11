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
                        <a href="about.html">Services</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ==========start-banner-section============= -->
<!-- Service Start -->
<div class="container-xxl service py-5">
<section class="section-services">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-md-10 col-lg-8">
                <div class="header-section">
                    <h2 class="title">Exclusive <span>Services</span></h2>
                    <p class="description">There are many variations of passages of Lorem Ipsum available but the
                        majority have suffered alteration in some injected humour</p>
                </div>
            </div>
        </div>
    </div>
</section>
    <div class="container">  
    @foreach($services as $key=>$service)
        <div class="row g-4 wow fadeInUp" data-wow-delay="0.3s">
         
            <div class="col-lg-12 shadow main_cus_service p-4">
                <div class="tab-content w-100">
                    
                    <div class="tab-pane fade show active main_pad_ser" id="">
                        
                        <div class="row g-4">
                            <div class="col-md-6" style="min-height: 350px;">
                                <div class="position-relative h-100">
                                    <img class="services_single_img position-absolute rounded " src="{{ asset('images/services/'.$service->image) }}"
                                        style="object-fit: cover;" alt="">
                                </div>
                            </div>
                            <div class="col-md-6 services_single_content">
                                <h3 class="services_single_content_title mb-4">{{ $service->title }}</h3>
                                <p class="services_single_content_desc mb-4">{{ $service->description }}</p>
                                <p class="services_single_content_item"><i class="fa fa-check text-primary me-3"></i>{{ $service->item_1 }}</p>
                                <p class="services_single_content_item"><i class="fa fa-check text-primary me-3"></i>{{ $service->item_2 }}</p>
                                <p class="services_single_content_item"><i class="fa fa-check text-primary me-3"></i>{{ $service->item_3 }}</p>
                                <a href="{{ route('view.services',$service->id) }}" class="services_single_content_btn">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
<!-- Service End -->
@endsection