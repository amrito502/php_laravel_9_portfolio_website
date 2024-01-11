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

    .view_s_img {
        width: 100%;
        height: 450px;
        margin-bottom: 20px;
    }

    .v_s_title {
        font-size: 20px;
        margin: 5px 0 10px 0;
    }

    .v_s_desc {
        text-align: justify;
    }

    .v_s_btn {
        text-align: center;
    display: inline-block;
    padding: 10px 10px;
    text-decoration: none;
    opacity: 0.4;
    border-radius: 6px;
    font-size: 16px;
    font-weight: 400;
    transition: .4s;
    width: 14%;
    margin-bottom: 20px;
    box-shadow: 0 0 20px 2px #adadad;
    }

    .v_s_btn:hover {
        color: red;
        z-index: 9999;
        opacity: 1;
    }

    .comment_blog {
        display: flex;
        justify-content: flex-start;
        flex-direction: column;
        border: 1px solid #e9e7e7;
        padding: 30px;
    }


    .blog_comment {
        width: 100%;
        height: 160px;
        padding: 30px;
        outline: 0;
        border: 1px solid #f1e7e7;
        color: #a99c9c;
        font-size: 15px;
        font-weight: 300;
    }

    .comment_btn {
        outline: 0;
        border: none;
        padding: 5px 10px;
        font-size: 14px;
        border-radius: 6px;
    }

    .comment_title {
        font-size: 22px;
    }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card shadow p-5">
                    <a class=" v_s_btn" href="{{ route('frontend.blog') }}">Back Main Blog</a>
                    <h6 class="view_p_s mb-2"><i class="fa-solid fa-eye"></i> View Blog</h6>
                    <img class="view_s_img" src="{{ asset('images/blog/'.$blog->image) }}" alt="" srcset=""
                        width="100%">
                    <h1 class="v_s_name">{{ $blog->name }}</h1>
                    <h6 class="v_s_title">{{ $blog->title }}</h6>
                    <p class="v_s_desc">{{ $blog->description }}</p>
                    <div class="comment_blog">
                        <h6 class="comment_title"><i class="fa-solid fa-comment"></i> Comments</h6>
                        <form action="" method="post">
                            @csrf
                            <textarea name="comment" class="blog_comment" placeholder="Write a comment..."></textarea>
                            <button type="submit" name="comment" class="comment_btn">Comment  <i class="fa-solid fa-paper-plane"></i></button>
                        </form>
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