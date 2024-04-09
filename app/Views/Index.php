<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog</title>

    <!-- favicon -->

    <link rel=icon href="<?php echo base_url() ?>public/assets/img/favicon.png" sizes="20x20" type="image/png">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="<?php echo base_url() ?>public/assets/css/vendor.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>public/assets/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>public/assets/css/responsive.css">

</head>

<body>
    <!-- preloader area start -->
    <div class="preloader" id="preloader">
        <div class="preloader-inner">
            <div class="spinner">
                <div class="dot1"></div>
                <div class="dot2"></div>
            </div>
        </div>
    </div>

    <!-- search popup start-->
    <div class="td-search-popup" id="td-search-popup">
        <form action="index.html" class="search-form">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Search.....">
            </div>
            <button type="submit" class="submit-btn"><i class="fa fa-search"></i></button>
        </form>
    </div>
    <!-- search popup end-->
    <div class="body-overlay" id="body-overlay"></div>

    <!-- header start -->
    <div class="navbar-area">
        <!-- topbar end-->
        <div class="topbar-area">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-7 align-self-center">
                        <div class="topbar-menu text-md-left text-center">
                            <ul class="align-self-center">
                                <li><a href="#">Author</a></li>
                                <li><a href="#">Advertisment</a></li>
                                <li><a href="#">Member</a></li>
                                <li><a href="#">Sitemap</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-5 mt-2 mt-md-0 text-md-right text-center">
                        <div class="topbar-social">
                            <div class="topbar-date d-none d-lg-inline-block"><i class="fa fa-calendar"></i> Saturday,
                                October 7</div>
                            <ul class="social-area social-area-2">
                                <li><a class="facebook-icon" href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a class="twitter-icon" href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a class="youtube-icon" href="#"><i class="fa fa-youtube-play"></i></a></li>
                                <li><a class="instagram-icon" href="#"><i class="fa fa-instagram"></i></a></li>
                                <li><a class="google-icon" href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- topbar end-->

        <!-- adbar end-->
        <div class="adbar-area bg-black d-none d-lg-block">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-5 align-self-center">
                        <div class="logo text-md-left text-center">
                          <h2 style="color: #fff; font-weight:900"> MyBlog</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- adbar end-->

        <!-- navbar start -->
        <nav class="navbar navbar-expand-lg">
            <div class="container nav-container">
                <div class="responsive-mobile-menu">
                    <div class="logo d-lg-none d-block">
                        <a class="main-logo" href="index.html"><img
                                src="<?php echo base_url() ?>public/assets/img/logo.png" alt="img"></a>
                    </div>
                    <button class="menu toggle-btn d-block d-lg-none" data-target="#nextpage_main_menu"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-left"></span>
                        <span class="icon-right"></span>
                    </button>
                </div>
                <div class="nav-right-part nav-right-part-mobile">
                    <a class="search header-search" href="#"><i class="fa fa-search"></i></a>
                </div>
                <div class="collapse navbar-collapse" id="nextpage_main_menu">
                    <ul class="navbar-nav menu-open">
                        <li class="current-menu-item">
                            <a href="#banner">Home</a>
                        </li>
                        <li class="current-menu-item">
                            <a href="#trending">Trending News</a>
                        </li>
                        <li class="current-menu-item">
                            <a href="#grid">News Grid</a>
                        </li>
                    </ul>
                </div>
                <div class="nav-right-part nav-right-part-desktop">
                    <div class="menu-search-inner">
                        <input type="text" placeholder="Search For">
                        <button type="submit" class="submit-btn"><i class="fa fa-search"></i></button>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <!-- navbar end -->

    <!-- banner area start -->
    <div class="banner-area banner-inner-1 bg-black" id="banner">
        <!-- banner area start -->
        <div class="banner-inner pt-5">
            <div class="container">
                <div class="row">

                    <?php $a = 1;
                    foreach ($row as $k):
                        if ($a++ >= 2)
                            break; ?>
                        <div class="col-lg-6">
                            <div class="thumb after-left-top">
                                <img src="<?php echo base_url() ?>public/assets/upload/<?php echo $k['image'] ?>" alt="img">
                            </div>
                        </div>
                        <div class="col-lg-6 align-self-center mb-5">
                            <div class="banner-details mt-4 mt-lg-0">
                                <div class="post-meta-single">
                                    <ul>
                                        <li><a class="tag-base tag-blue" href="#">
                                                <?= $k['category'] ?>
                                            </a></li>
                                        <li class="date"><i class="fa fa-clock-o"></i>
                                            <?php echo $k['date'] ?>
                                        </li>
                                    </ul>
                                </div>
                                <h2>
                                    <?php echo $k['title'] ?>
                                </h2>
                                <p>
                                    <?php echo $k['short_desc'] ?>
                                </p>
                                <a class="btn btn-blue" href="<?php echo base_url('single_view/' . $k['id']) ?>">Read
                                    More</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
        <!-- banner area end -->

        <div class="container">
            <div class="row">
                <?php $i = 1; foreach ($row as $r):
                    if ($i++ == 1)
                        continue; ?>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-post-wrap style-white">
                            <div class="thumb">
                                <img src="<?php echo base_url() ?>public/assets/upload/<?php echo $r['image'] ?>" alt="img">
                                <a class="tag-base tag-blue" href="#">
                                    <?= $r['category'] ?>
                                </a>
                            </div>

                            <div class="details ">
                                <h4 class="text-white">
                                    <?php echo $r['title'] ?>
                                </h4>
                                <h6 class="title"><a href="<?= base_url('single_view/' . $r['id']) ?>">
                                        <?php echo $r['short_desc'] ?>
                                    </a></h6>
                                <div class="post-meta-single mt-3">
                                    <ul>
                                        <li><i class="fa fa-clock-o"></i>
                                            <?php echo $r['date'] ?>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <!-- banner area end -->

    <div class="post-area pd-top-75 pd-bottom-50" id="trending">

        <div class="bg-sky pd-top-80 pd-bottom-50" id="latest">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-post-wrap style-overlay-bg">
                            <div class="thumb">
                                <img src="<?php echo base_url() ?>public/assets/img/post/9.png" alt="img">
                            </div>
                            <div class="details">
                                <div class="post-meta-single mb-3">
                                    <ul>
                                        <li><a class="tag-base tag-blue" href="cat-fashion.html">fashion</a></li>
                                        <li>
                                            <p><i class="fa fa-clock-o"></i>08.22.2020</p>
                                        </li>
                                    </ul>
                                </div>
                                <h6 class="title"><a href="#">A Comparison of the Sony FE 85mm f/1.4 GM and Sigma</a>
                                </h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-post-wrap">
                            <div class="thumb">
                                <img src="<?php echo base_url() ?>public/assets/img/post/10.png" alt="img">
                                <p class="btn-date"><i class="fa fa-clock-o"></i>08.22.2020</p>
                            </div>
                            <div class="details">
                                <h6 class="title"><a href="#">Rocket Lab will resume launches no sooner than</a></h6>
                            </div>
                        </div>
                        <div class="single-post-wrap">
                            <div class="thumb">
                                <img src="<?php echo base_url() ?>public/assets/img/post/11.png" alt="img">
                                <p class="btn-date"><i class="fa fa-clock-o"></i>08.22.2020</p>
                            </div>
                            <div class="details">
                                <h6 class="title"><a href="#">P2P Exchanges in Africa Pivot: Nigeria and Kenya the</a>
                                </h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-post-wrap">
                            <div class="thumb">
                                <img src="<?php echo base_url() ?>public/assets/img/post/12.png" alt="img">
                                <p class="btn-date"><i class="fa fa-clock-o"></i>08.22.2020</p>
                            </div>
                            <div class="details">
                                <h6 class="title"><a href="#">Bitmex Restricts Ontario Residents as Mandated by</a></h6>
                            </div>
                        </div>
                        <div class="single-post-wrap">
                            <div class="thumb">
                                <img src="<?php echo base_url() ?>public/assets/img/post/13.png" alt="img">
                                <p class="btn-date"><i class="fa fa-clock-o"></i>08.22.2020</p>
                            </div>
                            <div class="details">
                                <h6 class="title"><a href="#">The Bitcoin Network Now 7 Plants Worth of Power</a></h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="trending-post style-box">
                            <div class="section-title">
                                <h6 class="title">Trending News</h6>
                            </div>
                            <div class="post-slider owl-carousel">
                                <div class="item">
                                    <div class="single-post-list-wrap">
                                        <div class="media">
                                            <div class="media-left">
                                                <img src="<?php echo base_url() ?>public/assets/img/post/list/1.png"
                                                    alt="img">
                                            </div>
                                            <div class="media-body">
                                                <div class="details">
                                                    <div class="post-meta-single">
                                                        <ul>
                                                            <li><i class="fa fa-clock-o"></i>08.22.2020</li>
                                                        </ul>
                                                    </div>
                                                    <h6 class="title"><a href="#">Important to rate more liquidity</a>
                                                    </h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-post-list-wrap">
                                        <div class="media">
                                            <div class="media-left">
                                                <img src="<?php echo base_url() ?>public/assets/img/post/list/2.png"
                                                    alt="img">
                                            </div>
                                            <div class="media-body">
                                                <div class="details">
                                                    <div class="post-meta-single">
                                                        <ul>
                                                            <li><i class="fa fa-clock-o"></i>08.22.2020</li>
                                                        </ul>
                                                    </div>
                                                    <h6 class="title"><a href="#">Sounds like John got the Josh</a></h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-post-list-wrap">
                                        <div class="media">
                                            <div class="media-left">
                                                <img src="<?php echo base_url() ?>public/assets/img/post/list/3.png"
                                                    alt="img">
                                            </div>
                                            <div class="media-body">
                                                <div class="details">
                                                    <div class="post-meta-single">
                                                        <ul>
                                                            <li><i class="fa fa-clock-o"></i>08.22.2020</li>
                                                        </ul>
                                                    </div>
                                                    <h6 class="title"><a href="#">Grayscale's and Bitcoin Trusts</a>
                                                    </h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-post-list-wrap">
                                        <div class="media">
                                            <div class="media-left">
                                                <img src="<?php echo base_url() ?>public/assets/img/post/list/4.png"
                                                    alt="img">
                                            </div>
                                            <div class="media-body">
                                                <div class="details">
                                                    <div class="post-meta-single">
                                                        <ul>
                                                            <li><i class="fa fa-clock-o"></i>08.22.2020</li>
                                                        </ul>
                                                    </div>
                                                    <h6 class="title"><a href="#">Sounds like John got the Josh</a></h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-post-list-wrap mb-0">
                                        <div class="media">
                                            <div class="media-left">
                                                <img src="<?php echo base_url() ?>public/assets/img/post/list/5.png"
                                                    alt="img">
                                            </div>
                                            <div class="media-body">
                                                <div class="details">
                                                    <div class="post-meta-single">
                                                        <ul>
                                                            <li><i class="fa fa-clock-o"></i>08.22.2020</li>
                                                        </ul>
                                                    </div>
                                                    <h6 class="title"><a href="#">Grayscale's and Bitcoin Trusts</a>
                                                    </h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="single-post-list-wrap">
                                        <div class="media">
                                            <div class="media-left">
                                                <img src="<?php echo base_url() ?>public/assets/img/post/list/1.png"
                                                    alt="img">
                                            </div>
                                            <div class="media-body">
                                                <div class="details">
                                                    <div class="post-meta-single">
                                                        <ul>
                                                            <li><i class="fa fa-clock-o"></i>08.22.2020</li>
                                                        </ul>
                                                    </div>
                                                    <h6 class="title"><a href="#">Important to rate more liquidity</a>
                                                    </h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-post-list-wrap">
                                        <div class="media">
                                            <div class="media-left">
                                                <img src="<?php echo base_url() ?>public/assets/img/post/list/2.png"
                                                    alt="img">
                                            </div>
                                            <div class="media-body">
                                                <div class="details">
                                                    <div class="post-meta-single">
                                                        <ul>
                                                            <li><i class="fa fa-clock-o"></i>08.22.2020</li>
                                                        </ul>
                                                    </div>
                                                    <h6 class="title"><a href="#">Sounds like John got the Josh</a></h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-post-list-wrap">
                                        <div class="media">
                                            <div class="media-left">
                                                <img src="<?php echo base_url() ?>public/assets/img/post/list/3.png"
                                                    alt="img">
                                            </div>
                                            <div class="media-body">
                                                <div class="details">
                                                    <div class="post-meta-single">
                                                        <ul>
                                                            <li><i class="fa fa-clock-o"></i>08.22.2020</li>
                                                        </ul>
                                                    </div>
                                                    <h6 class="title"><a href="#">Grayscale's and Bitcoin Trusts</a>
                                                    </h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-post-list-wrap">
                                        <div class="media">
                                            <div class="media-left">
                                                <img src="<?php echo base_url() ?>public/assets/img/post/list/4.png"
                                                    alt="img">
                                            </div>
                                            <div class="media-body">
                                                <div class="details">
                                                    <div class="post-meta-single">
                                                        <ul>
                                                            <li><i class="fa fa-clock-o"></i>08.22.2020</li>
                                                        </ul>
                                                    </div>
                                                    <h6 class="title"><a href="#">Sounds like John got the Josh</a></h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-post-list-wrap mb-0">
                                        <div class="media">
                                            <div class="media-left">
                                                <img src="<?php echo base_url() ?>public/assets/img/post/list/5.png"
                                                    alt="img">
                                            </div>
                                            <div class="media-body">
                                                <div class="details">
                                                    <div class="post-meta-single">
                                                        <ul>
                                                            <li><i class="fa fa-clock-o"></i>08.22.2020</li>
                                                        </ul>
                                                    </div>
                                                    <h6 class="title"><a href="#">Grayscale's and Bitcoin Trusts</a>
                                                    </h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="pd-top-80 pd-bottom-50" id="grid">
            <div class="container">
                <div class="row">
                    <?php foreach ($row as $k): ?>
                        <div class="col-lg-3 col-sm-6">
                            <div class="single-post-wrap style-overlay">
                                <div class="thumb">
                                    <img src="<?php echo base_url() ?>public/assets/upload/<?= $k['image'] ?>" alt="img">
                                    <a class="tag-base tag-purple" href="#">
                                        <?= $k['category'] ?>
                                    </a>
                                </div>
                                <div class="details">
                                    <div class="post-meta-single">
                                        <p><i class="fa fa-clock-o"></i>
                                            <?= $k['date'] ?>
                                        </p>
                                    </div>
                                    <h6 class="title"><a href="<?php echo base_url('single_view/' . $k['id']) ?>">
                                            <?= $k['title'] ?>
                                        </a></h6>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

        <div class="footer-area bg-black pd-top-95">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="widget">
                            <h5 class="widget-title">ABOUT US</h5>
                            <div class="widget_about">
                                <p>Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                    magna
                                    aliqua. Quis ipsum ultrices gravida. Risus commodo viverra maecenas accumsan lacus
                                    vel
                                    facilisis.</p>
                                <ul class="social-area social-area-2 mt-4">
                                    <li><a class="facebook-icon" href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a class="twitter-icon" href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a class="youtube-icon" href="#"><i class="fa fa-youtube-play"></i></a></li>
                                    <li><a class="instagram-icon" href="#"><i class="fa fa-instagram"></i></a></li>
                                    <li><a class="google-icon" href="#"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="widget widget_tag_cloud">
                            <h5 class="widget-title">TAGS</h5>
                            <div class="tagcloud">
                                <a href="#">Consectetur</a>
                                <a href="#">Video</a>
                                <a href="#">App</a>
                                <a href="#">Food</a>
                                <a href="#">Game</a>
                                <a href="#">Internet</a>
                                <a href="#">Phones</a>
                                <a href="#">Development</a>
                                <a href="#">Video</a>
                                <a href="#">Game</a>
                                <a href="#">Gadgets</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="widget">
                            <h5 class="widget-title">CONTACTS</h5>
                            <ul class="contact_info_list">
                                <li><i class="fa fa-map-marker"></i> 829 Cabell Avenue Arlington, VA 22202</li>
                                <li><i class="fa fa-phone"></i> +91 9876543210</li>
                                <li><i class="fa fa-envelope-o"></i> Ashant@gmail.com <br> Support@mail.com</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="widget widget_recent_post">
                            <h5 class="widget-title">POPULAR NEWS</h5>
                            <div class="single-post-list-wrap style-white">
                                <div class="media">
                                    <div class="media-left">
                                        <img src="<?php echo base_url() ?>public/assets/img/post/list/1.png" alt="img">
                                    </div>
                                    <div class="media-body">
                                        <div class="details">
                                            <div class="post-meta-single">
                                                <ul>
                                                    <li><i class="fa fa-clock-o"></i>08.22.2020</li>
                                                </ul>
                                            </div>
                                            <h6 class="title"><a href="#">Himachal Pradesh rules in order to allow
                                                    tourists
                                                </a></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-post-list-wrap style-white">
                                <div class="media">
                                    <div class="media-left">
                                        <img src="<?php echo base_url() ?>public/assets/img/post/list/2.png" alt="img">
                                    </div>
                                    <div class="media-body">
                                        <div class="details">
                                            <div class="post-meta-single">
                                                <ul>
                                                    <li><i class="fa fa-clock-o"></i>08.22.2020</li>
                                                </ul>
                                            </div>
                                            <h6 class="title"><a href="#">Himachal Pradesh rules in order to allow
                                                    tourists
                                                </a></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom text-center">
                    <ul class="widget_nav_menu">
                        <li><a href="#">About</a></li>
                        <li><a href="#">Terms & Conditions</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                    <p>Copyright ©2024 Ashant/Blog</p>
                </div>
            </div>
        </div>

        <!-- back to top area start -->
        <div class="back-to-top">
            <span class="back-top"><i class="fa fa-angle-up"></i></span>
        </div>
        <!-- back to top area end -->

        <!-- all plugins here -->
        <script src="<?php echo base_url() ?>public/assets/js/vendor.js"></script>
        <!-- main js  -->
        <script src="<?php echo base_url() ?>public/assets/js/main.js"></script>
</body>

</html>