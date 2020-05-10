<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta property="og:title" content="Covid19">
    <meta property="og:image" content="{{asset('frontend/assets/')}}">
    <meta property="og:description" content="Covid-19">
    <meta name="full-screen" content="yes">
    <meta name="theme-color" content="#020018">
    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <title>Covid19 | Nobel Corona Virus</title>
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/fonts/font/flaticon.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/emoji/emojionearea.min.css')}}">

    <!---------favicon--------------->
    <link rel="icon" type="image/png" href="{{asset('frontend/assets/image/favicon.png')}}" sizes="16x16">
    <!---------favicon--------------->
    <style>
        .comment_reply p{
            text-align:center!important;
        }
        .button{
            padding: 0rem.75rem !important;
        }
        .blog_detail_comment{
            margin-top:50px;
        }
        .badge{
            width:100%;
            text-align: center;

        }

    </style>
</head>
<body class="home_page_two">
<div class="page_wapper">
    <!--Start Preloader-->
    <div class="preloader">
        <div class="preloader_box">
            <div class="loader">
                <div class="circle item0"></div>
                <div class="circle item1"></div>
                <div class="circle item2"></div>
            </div>
        </div>
    </div>
    <!--End Preloader-->
    <!--Header-->
    <header class="header_v2">
        <section class="header_top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="row">
                            <div class="col-lg-3 col-md-3">
                                <div class="heading">
                                    <h2>Today Updates</h2>
                                </div>
                            </div>
                            <div class="col-lg-9 col-md-9">
                                <div class="news_inner">
                                    <div class="owl-carousel owl-theme single_items">
                                        <div class="mid-text">
                                            <p><a href="#">Stabilitech's COVID-19 Vaccine Intended to Be Delivered in a Disruptive Thermally Stable Oral Capsule</a></p>
                                        </div>
                                        <div class="mid-text">
                                            <p><a href="#"> Controlled Release Drug Delivery Market Size Worth $69.8 Billion by 2027: Grand View Research, Inc.</a></p>
                                        </div>
                                        <div class="mid-text">
                                            <p><a href="#">  Drug Delivery Market Size Worth $69.8 Billion by 2027: Grand View Research, Inc.
                                                </a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="text_right">
                            <div class="social_media_icon">
                                <ul class="clearfix">
                                    <li>
                                        <a href="#" class="has-tooltip">
                                            <span class="fa fa-facebook"></span>
                                            <div class="c-tooltip">
                                                <div class="tooltip-inner">Facebook</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="has-tooltip">
                                            <span class="fa fa-twitter"></span>
                                            <div class="c-tooltip">
                                                <div class="tooltip-inner">Twitter</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="has-tooltip">
                                            <span class="fa fa-linkedin"></span>
                                            <div class="c-tooltip">
                                                <div class="tooltip-inner">Linkedin</div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="navbar_outer">
            <div class="navbar navbar-expand-lg  bsnav bsnav-sticky bsnav-sticky-slide">
                <div class="container">
                    <a class="navbar-brand" href="{{route('home')}}">
                        <img src="{{asset('frontend/assets/image/logo.png')}}" class="img-fluid log_normal" alt="img">
                    </a>
                    <button class="navbar-toggler toggler-spring"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse scroll-nav">
                        <ul class="navbar-nav navbar-mobile navbar_left  ml-auto" id="nav">
                            <li class="nav-item nav_item activ">
                                <a class="nav-link link_hd" href="{{url('/')}}">Home</a>
                            </li>
                            <li class="nav-item nav_item"><a class="nav-link link_hd" href="{{route('about')}}">About </a></li>
                            <li class="nav-item nav_item"><a class="nav-link link_hd" href="{{route('affactedCountries')}}">Statistics</a></li>
                            <li class="nav-item nav_item">
                                <a class="nav-link link_hd" href="{{route('blogs')}}">  Blog  </a>
                            </li>
                            <li class="nav-item nav_item dropdown">
                                <a class="nav-link link_hd" href="#">  <i class="fa fa-user"></i>  </a>
                                <ul class="navbar-nav submenu">
                                    @if (Route::has('login'))
                                        <div class="top-right links">
                                            @if (Auth::check())
                                                <li class="nav-item"><a class="nav-link" href="{{ url('/logout') }}">Logout</a></li>
                                                <li class="nav-item"><a class="nav-link" href="#">Profile</a></li>
                                            @else
                                                <li class="nav-item"><a class="nav-link" href="{{ url('/login') }}">Login</a></li>
                                                <li class="nav-item"><a class="nav-link" href="{{ url('/register') }}">Register</a></li>
                                            @endif
                                        </div>
                                    @endif
                                </ul>
                            </li>
                            <li class="nav-item nav_item"><a class="nav-link link_hd" href="{{route('contact')}}">Contact</a></li>
                            <li class="nav-item nav_item"><a class="nav-link link_hd" href="{{route('transaction')}}">Donations</a></li>

                        </ul>
                    </div>
                </div>
            </div>
        </section>

    </header>    <!--Header-->
    <!------main-content------>
    <main class="main-content">
        <section class="page_title">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 d-flex">
                        <div class="content_box">
                            <ul class="bread_crumb text-center">
                                <li class="bread_crumb-item"><a href="#">Home</a></li>
                                <li class="bread_crumb-item active">Blog Details</li>
                            </ul>
                            <h1>Single Post</h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="single_blog_box">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="blog_side_bar_left">
                            @include('sidebar.search')
                            <!----Categories---->
                            @include('sidebar.blogsidebar')
                            <!----Categories---->
                            <!---Popular Posts--->
                            @include('sidebar.recent-post')
                            <!---Popular Posts--->

                        </div>
                    </div>
                    <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                        <!--------list-of categories-------->
                        <div class="blog_details_content">
                            <div class="image_box">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="owl-carousel one_items">
                                            <div class="image">
                                                <img src="{{asset('uploads/'.$blogs->image)}}" class="img-fluid" alt="img" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <ul class="tags_upper">
                                <li><a href="{{route('searchByCategory',$blogs->category->slug)}}" class="category ">{{$blogs->category->title}}</a></li>
                                <li><a href="# " class="date "><span class="fa fa-clock-o"></span>{{$blogs->created_at->diffForHumans()}}</a></li>
                            </ul>
                            <h2 class="heading">{{$blogs->title}} </h2>

                            <div class="content_box">
                                {{$blogs->body}}
                            </div>
                            <div class="blog_detail_comment">
                                <div class="comment_inner">
                                    <ul class="comment_heading">
                                        <li>Comments ({{$blogs->comments->count()}})</li>
                                        <li>Leave a comment</li>
                                    </ul>
                                    @foreach($blogs->comments as $comment)
                                    <div class="comment_content_outer">
                                        <!----comment-----one--------------->
                                        <div class="comment_content_inner">
                                            <div class="image">
                                                <img src="{{asset('frontend/assets/image/resources/review-3.png')}}" class="img-fluid" alt="img" />
                                            </div>
                                            <div class="content_text">
                                                <ul>
                                                    <li class="first">{{$comment->author->name}}</li>
                                                    <li>{{$comment->created_at->diffForHumans()}} </li>
                                                </ul>
                                                <h6>{{$comment->text}}</h6>
                                                <span>Reply</span>
                                                <form class="reply-form" action="{{route('replies.store')}}" method="post">
                                                    @csrf
                                                    <div class="form-group texta">
                                                        <div class=" col-lg-12">
                                                            <div class="form-group texta">
                                                                <div class="input-group mb-3">
                                                                    @if (Auth::check())

                                                                    <input type="text"  name="reply" data-emoji-input="unicode" class="form-control example2" placeholder="reply" data-emojiable="true" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                                                    <input type="text" name="id" value="{{$comment->id}}" hidden>
                                                                    <input type="text" name="slug" value="{{$blogs->slug}}" hidden>
                                                                    <div class="input-group-append">
                                                                        <button class="btn btn-outline-secondary button" type="submit">Reply</button>
                                                                    </div>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        @foreach($comment->replies as $reply)
                                        <div class="comment_content_outer two">
                                            <!----comment-----two--------------->
                                            <div class="comment_content_inner">
                                                <div class="image">
                                                    <img src="{{asset('frontend/assets/image/resources/review-2.png')}}" class="img-fluid" alt="img" />
                                                </div>
                                                <div class="content_text">
                                                    <ul>
                                                        <li class="first">{{$reply->author->name}}</li>
                                                        <li>{{$reply->created_at->diffForHumans()}}</li>
                                                    </ul>
                                                    <h6>{{$reply->text}}</h6>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                    @endforeach
                                </div>
                                <div class="comment_reply">
                                    @if(session('status'))
                                        <p style="padding:10px 10px;" text="center" class="badge badge-success">{{session('status')}}</p>
                                    @endif
                                    <h2 class="text-center">Leave a reply</h2>
                                    <div class="form_inner">
                                        @if (Auth::check())
                                            <form action="{{route('comments.store')}}" method="post">
                                                @csrf
                                                <div class="row">
                                                    <div class=" col-lg-12">
                                                        <div class="form-group texta">
                                                            <label>Your Comment</label>
                                                            <textarea id="example1" name="message" placeholder="message" rows="6" data-emoji-input="unicode" class="form-control" placeholder="Input field" data-emojiable="true"> </textarea>
                                                        </div>
                                                    </div>
                                                    <div class=" col-lg-12">
                                                        <div class="form-group texta">
                                                            <input type="text" name="id" value="{{$blogs->id}}" hidden>
                                                        </div>
                                                    </div>
                                                    <div class=" col-lg-12">
                                                        <div class="form-group texta">
                                                            <input type="text" name="slug" value="{{$blogs->slug}}" hidden>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row comment_reply-btn ">
                                                    <div class=" col-lg-12">
                                                        <button type="submit" class="theme_btn tp_one">Submit Review</button>
                                                    </div>
                                                </div>
                                            </form>
                                        @else

                                            Please <a class="text-center" href="{{route('login')}}">signin</a> to Leave a comment.
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <section class="footer type_three">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-xs-12">
                        <div class="footer_widgets type_three">
                            <h3 class="widgets_title">About</h3>
                            <div class="inner_widgets">
                                <ul class="links">
                                    <li><a href="#">Situation Reports</a></li>
                                    <li><a href="#">Advice For Public</a></li>
                                    <li><a href="#">Prevention</a></li>
                                    <li><a href="#">Coronavirus Symptoms</a></li>
                                    <li><a href="#">Donor & Partners</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="footer_widgets type_three">
                            <h3 class="widgets_title">Prevention</h3>
                            <div class="inner_widgets">
                                <ul class="links">
                                    <li><a href="#">Wash your hands</a></li>
                                    <li><a href="#">Avoid touching your</a></li>
                                    <li><a href="#">Avoid close contact</a></li>
                                    <li><a href="#">Stay home if you are sick</a></li>
                                    <li><a href="#">Immediately wash your </a></li>
                                    <li><a href="#">Wear a facemask</a></li>
                                    <li><a href="#">Keep surfaces  clean</a></li>
                                    <li><a href="#">Cover your mouth  </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="footer_widgets type_three">
                            <h3 class="widgets_title">Follow the steps</h3>
                            <div class="inner_widgets">
                                <ul class="links">
                                    <li><a href="#"> Soap on Hand</a></li>
                                    <li><a href="#"> Palm to Palm</a></li>
                                    <li><a href="#"> Between Fingers</a></li>
                                    <li><a href="#"> Back to Hands</a></li>
                                    <li><a href="#"> Clean with Water</a></li>
                                    <li><a href="#">Focus on Wrist</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="footer_widgets type_three">
                            <h3 class="widgets_title logo">
                                <a href="index.html"><img src="{{asset('frontend/assets/image/logo.png')}}" class="img-fluid" alt="logo" /></a>
                            </h3>
                            <div class="inner_widgets">
                                <p>A novel coronavirus is a new coronavirus that has not been previously identified. The virus causing coronavirus disease 2019 (COVID-19)</p>
                                <div class="social_media_icon">
                                    <ul class="clearfix">
                                        <li>
                                            <a href="#" class="has-tooltip">
                                                <span class="fa fa-facebook"></span>
                                                <div class="c-tooltip">
                                                    <div class="tooltip-inner">Facebook</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="has-tooltip">
                                                <span class="fa fa-twitter"></span>
                                                <div class="c-tooltip">
                                                    <div class="tooltip-inner">Twitter</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="has-tooltip">
                                                <span class="fa fa-linkedin"></span>
                                                <div class="c-tooltip">
                                                    <div class="tooltip-inner">Linkedin</div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer_last type_three">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <p>Copyright © 2020 Tusher. All Rights Reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-------------main-centent-end--------------->
    </main>
    <!-------------pagewapper-end--------------->
</div>
<!--Scroll to top-->
<a href="# " id="scroll" class="default-bg " style="display: inline;"><span class="fa fa-angle-up "></span></a>
<!---------mbile-navbar----->
<div class="bsnav-mobile ">
    <div class="bsnav-mobile-overlay"></div>
    <div class="navbar ">
        <button class="navbar-toggler toggler-spring mobile-toggler"><span class="fa fa-close "></span></button>
    </div>
</div>
<!---------mbile-navbar----->
<!-- /.side-menu__block -->
<div class="side-menu__block">
    <div class="side-menu__block-overlay custom-cursor__overlay">
        <div class="cursor "></div>
        <div class="cursor-follower"></div>
    </div>
    <!-- /.side-menu__block-overlay -->
    <div class="side-menu__block-inner">
        <div class="row ">
            <div class="col-lg-12 ">
                <div class="logo_site ">
                    <a href="index.html"><img src="{{asset('frontend/assets/image/home-1-logo.png')}}" alt="logo " /></a>
                </div>
                <div class="side-menu__block-contact ">
                    <h2>Quick Online Consultancy Only on Few Minutes</h2>
                    <div class="form_outer ">
                        <form>
                            <div class="from_group ">
                                <input type="text" name="name" placeholder="Name " />
                            </div>
                            <div class="from_group ">
                                <input type="email" name="email" placeholder="Email " />
                            </div>
                            <div class="from_group">
                                <input type="text" name="phone" placeholder="Phone " />
                            </div>
                            <div class="from_group">
                                <textarea rows="4" placeholder="Share Your Thoughts "></textarea>
                            </div>
                            <div class="from_group ">
                                <button  class="theme_btn tp_two" type="submit">Contact Us</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /.side-menu__block-contact -->
                <div class="side-menu__block-contact ">
                    <h3 class="side-menu__block__title ">Contact Us</h3>
                    <!-- /.side-menu__block__title -->
                    <ul class="side-menu__block-contact__list ">
                        <li class="side-menu__block-contact__list-item ">
                            <i class="fa fa-map-marker "></i> Rock St 12, Newyork City, USA
                        </li>
                        <!-- /.side-menu__block-contact__list-item -->
                        <li class="side-menu__block-contact__list-item ">
                            <i class="fa fa-phone "></i>
                            <a href="tel:526-236-895-4732 ">(526) 236-895-4732</a>
                        </li>
                        <!-- /.side-menu__block-contact__list-item -->
                        <li class="side-menu__block-contact__list-item ">
                            <i class="fa fa-envelope "></i>
                            <a href="mailto:example@mail.com ">example@mail.com</a>
                        </li>
                        <!-- /.side-menu__block-contact__list-item -->
                        <li class="side-menu__block-contact__list-item ">
                            <i class="fa fa-clock-o "></i> Week Days: 09.00 to 18.00 Sunday: Closed
                        </li>
                        <!-- /.side-menu__block-contact__list-item -->
                    </ul>
                    <!-- /.side-menu__block-contact__list -->
                </div>
                <!-- /.side-menu__block-contact -->
                <p class="side-menu__block__text site-footer__copy-text "><a href="# ">corano</a> <i class="fa fa-copyright "></i> 2020 All Right Reserved</p>
            </div>
        </div>
        <!-- /.side-menu__block-inner -->
    </div>
</div>
<!-- /.side-menu__block -->
<!-- /.search-popup -->
<div class="search-popup">
    <div class="search-popup__overlay custom-cursor__overlay">
        <div class="cursor "></div>
        <div class="cursor-follower "></div>
    </div>
    <!-- /.search-popup__overlay -->
    <div class="search-popup__inner ">
        <form action="# " class="search-popup__form ">
            <input type="text" name="search" placeholder="Type here to Search.... ">
            <button type="submit"><i class="flaticon-magnifying-glass "></i></button>
        </form>
    </div>
    <!-- /.search-popup__inner -->
</div>
<!-- /.search-popup -->
<!-----------------------------------script-------------------------------------->
<script src="{{asset('frontend/assets/js/jquery.js')}}"></script>

<script src="{{asset('frontend/assets/js/popper.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/bsnav.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/jquery-ui.js')}}"></script>

<script src="{{asset('frontend/assets/js/wow.js')}}"></script>
<script src="{{asset('frontend/assets/js/owl.js')}}"></script>
<script src="{{asset('frontend/assets/js/jquery.fancybox.js')}}"></script>
<script src="{{asset('frontend/assets/js/TweenMax.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/validator.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/appear.js')}}"></script>
<script src="{{asset('frontend/assets/js/moment.js')}}"></script>
<script src="{{asset('frontend/assets/js/jquery.flexslider-min.js')}}"></script>
<script src="{{asset('frontend/assets/js/pagenav.js')}}"></script>
<script src="{{asset('frontend/assets/js/custom.js')}}"></script>
<script src="{{asset('frontend/assets/emoji/emojionearea.min.js')}}"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $("#example1").emojioneArea({
            autoHideFilters: true
        });
        $(".example2").emojioneArea({
            autoHideFilters: true
        });
    });
</script>
</body>

</html>
