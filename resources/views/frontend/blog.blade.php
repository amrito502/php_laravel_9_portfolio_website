@extends('frontend.frontend_master')
@section('frontend_content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/js/all.min.js"
        integrity="sha512-rpLlll167T5LJHwp0waJCh3ZRf7pO6IT1+LZOhAyP6phAirwchClbTZV3iqL3BMrVxIYRbzGTpli4rfxsCK6Vw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
    .blog_s_main {
        display: flex;
        width: 100%;
        flex-direction: row;
        padding: 20px;
        margin: 70px 0 50px;
        border: 2px solid #383838;
    }

    .blog_s_img {
        width: 95%;
        height: 260px;
        padding: 10px;
        border-radius: 16px;
    }

    .blog_s_title {
        font-size: 25px;
        font-weight: 300;
        word-spacing: 0.1px;
        letter-spacing: 1.1px;
        margin: 10px 0 10px 0;
    }

    .blog_s_btn {
        text-decoration: none;
        /* background: #212428; */
        padding: 10px 25px;
        font-size: 14px;
        transition: .4s;
        color: #fff;
        /* margin-top: 10px; */
        border-radius: 10px;
        box-shadow: 0 0 37px 0px #101010;
    }



    .blog_s_r {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: flex-start;
    }

    .blog_s_date {
        font-size: 14px;
        font-weight: 100;
        margin-top: -5px;
        color: #c18888;
        margin-bottom: 15px;
        
    }
    </style>
</head>

<body>
    <!-- ==========start-banner-section============= -->
    <section class="banner_section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="banner">
                        <div class="back_btn">
                            <a style="font-size: 20px!important; color:#fff; text-decoration: none;" href="index.html">Home</a>
                            <a style="font-size: 20px!important; color:#fff; text-decoration: none;" href="about.html">/ Blog</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Start News Area -->

    <div class="container">
        @foreach($Blog as $key=>$blog)

        <div class="row card bg-dark blog_s_main">
            <div class="blog_s_l col-md-5">
                <img class="blog_s_img" src="{{ asset('images/blog/'.$blog->image) }}" alt="">
            </div>
            <div class="blog_s_r col-md-7">
                <h5 class="blog_s_title text-white">{{ $blog->title }}</h5>
                <p class="blog_s_date">4 Feb 2023</p>
                <a class="blog_s_btn" href="{{ route('view.blog',$blog->id) }}">Read More</a>
            </div>
        </div>

        @endforeach
    </div>
    <!-- ENd Mews Area -->
    <!-- ==========start-banner-section============= -->

</body>

</html>
@endsection