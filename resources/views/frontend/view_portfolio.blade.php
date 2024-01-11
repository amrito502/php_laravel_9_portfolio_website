<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>View Services</title>
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
    body {
        font-family: 'Roboto', sans-serif;
    }

    .main_portfolio {
        display: flex;
        flex-direction: row;
    }

    .left_s_p {
        padding: 10px 20px 10px 5px;
    }

    .p_name {
        font-size: 34px;
        text-transform: uppercase;
    }

  

    .p_desc {
        text-align: justify;
    }

    .p_item {
        font-size: 15px;
        margin-bottom: 10px;
        font-weight: 400;
    }

 

    .p_img {
        width: 100%;
        height: 460px;
    }

    .p_btn {
        text-decoration: none;
        font-size: 14px;
        box-shadow: 0 0 12px 1px #bdbbbb;
        padding: 9px 15px;
        color: #40df8e;
        margin-top: 7px !important;
        display: inline-block;
        border-radius: 6px;
    }

    .view_p_s {
        font-size: 17px;
        color: #40df8e;
    }
    </style>
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="shadow p-4">

                <div class="card p-3 main_portfolio">
                    <div class="row">
                    <div class="col-md-6">
                        <div class="left_s_p">
                            <h6 class="view_p_s"><i class="fa-solid fa-eye"></i> View Portfolio</h6>
                            <h4 class="p_name">{{ $portfolio->item_1 }}</h4>
                            <h5 class="p_title">{{ $portfolio->title }}</h5>
                            <p class="p_desc">{{ $portfolio->desc }}</p>
                            <p class="p_item"><i class="fa-solid fa-check"></i> {{ $portfolio->item_2 }}</p>
                            <p class="p_item"><i class="fa-solid fa-check"></i> {{ $portfolio->item_3 }}</p>
                            <p class="p_item"><i class="fa-solid fa-check"></i> {{ $portfolio->item_4 }}</p>
                            <p class="p_item"><i class="fa-solid fa-check"></i> {{ $portfolio->item_5 }}</p>
                            <a class="p_btn" href="{{ route('frontend.portfolio') }}">Back Portfolio</a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="right_s_p">
                            <img src="{{ asset('images/portfolio/'.$portfolio->image) }}" alt="" class="p_img">
                        </div>
                    </div>
                    </div>

                </div>
            </div>
        </div>
    </div>







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>