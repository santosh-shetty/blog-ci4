<?= $this->extend('Views/Common_layout') ?>

<?= $this->section('content') ?>

<!-- banner area start -->
<div class="banner-area banner-inner-1 bg-black" id="banner">
    <!-- banner area start -->
    <div class="banner-inner pt-5 bg-white ">
        <div class="container">
            <div class="row">

                <?php foreach ($row as $r): ?>

                    <div class="col-lg-6">
                        <div class="thumb after-left-top">
                            <img src="<?php echo base_url() ?>public/assets/upload/<?php echo $r['image'] ?>" alt="img">
                        </div>
                    </div>
                    <div class="col-lg-6 align-self-center">
                        <div class="banner-details mt-4 mt-lg-0">
                            <div class="post-meta-single">
                                <ul>
                                    <li><a class="tag-base tag-blue" href="#">
                                            <?php echo $r['category'] ?>
                                        </a></li>
                                    <li class="date" style="color:black "><i class="fa fa-clock-o"></i>
                                        <?php echo $r['date'] ?>
                                    </li>
                                </ul>
                            </div>
                            <h2 style="color:black ">
                                <?php echo $r['title'] ?>
                            </h2>
                            <p style="color:black ">
                                <?php echo $r['short_desc'] ?>
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-12  mt-5">
                        <p class="text-white">
                            <?php echo $r['description'] ?>
                        </p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <!-- banner area end -->

    <!-- banner area end -->

    <div class="pd-top-80 pd-bottom-50  " id="grid">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="single-post-wrap style-overlay">
                        <div class="thumb">
                            <img src="<?php echo base_url() ?>public/assets/img/post/15.png" alt="img">
                            <a class="tag-base tag-purple" href="#">Tech</a>
                        </div>
                        <div class="details">
                            <div class="post-meta-single">
                                <p><i class="fa fa-clock-o"></i>08.22.2020</p>
                            </div>
                            <h6 class="title"><a href="#">Why Are the Offspring of Older </a></h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-post-wrap style-overlay">
                        <div class="thumb">
                            <img src="<?php echo base_url() ?>public/assets/img/post/16.png" alt="img">
                            <a class="tag-base tag-green" href="#">Tech</a>
                        </div>
                        <div class="details">
                            <div class="post-meta-single">
                                <p><i class="fa fa-clock-o"></i>08.22.2020</p>
                            </div>
                            <h6 class="title"><a href="#">People Who Eat a Late Dinner May</a></h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-post-wrap style-overlay">
                        <div class="thumb">
                            <img src="<?php echo base_url() ?>public/assets/img/post/17.png" alt="img">
                            <a class="tag-base tag-red" href="#">Tech</a>
                        </div>
                        <div class="details">
                            <div class="post-meta-single">
                                <p><i class="fa fa-clock-o"></i>08.22.2020</p>
                            </div>
                            <h6 class="title"><a href="#">Kids eat more calories in </a></h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-post-wrap style-overlay">
                        <div class="thumb">
                            <img src="<?php echo base_url() ?>public/assets/img/post/18.png" alt="img">
                            <a class="tag-base tag-purple" href="#">Tech</a>
                        </div>
                        <div class="details">
                            <div class="post-meta-single">
                                <p><i class="fa fa-clock-o"></i>08.22.2020</p>
                            </div>
                            <h6 class="title"><a href="#">The FAA will test drone </a></h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-post-wrap style-overlay">
                        <div class="thumb">
                            <img src="<?php echo base_url() ?>public/assets/img/post/19.png" alt="img">
                            <a class="tag-base tag-red" href="#">Tech</a>
                        </div>
                        <div class="details">
                            <div class="post-meta-single">
                                <p><i class="fa fa-clock-o"></i>08.22.2020</p>
                            </div>
                            <h6 class="title"><a href="#">Lifting Weights Makes Your Nervous</a></h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-post-wrap style-overlay">
                        <div class="thumb">
                            <img src="<?php echo base_url() ?>public/assets/img/post/20.png" alt="img">
                            <a class="tag-base tag-blue" href="#">Tech</a>
                        </div>
                        <div class="details">
                            <div class="post-meta-single">
                                <p><i class="fa fa-clock-o"></i>08.22.2020</p>
                            </div>
                            <h6 class="title"><a href="#">New, Remote Weight-Loss Method </a></h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-post-wrap style-overlay">
                        <div class="thumb">
                            <img src="<?php echo base_url() ?>public/assets/img/post/21.png" alt="img">
                            <a class="tag-base tag-light-green" href="#">Tech</a>
                        </div>
                        <div class="details">
                            <div class="post-meta-single">
                                <p><i class="fa fa-clock-o"></i>08.22.2020</p>
                            </div>
                            <h6 class="title"><a href="#">Social Connection Boosts Fitness App </a></h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-post-wrap style-overlay">
                        <div class="thumb">
                            <img src="<?php echo base_url() ?>public/assets/img/post/22.png" alt="img">
                            <a class="tag-base tag-blue" href="#">Tech</a>
                        </div>
                        <div class="details">
                            <div class="post-meta-single">
                                <p><i class="fa fa-clock-o"></i>08.22.2020</p>
                            </div>
                            <h6 class="title"><a href="#">Internet For Things - New results </a></h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?= $this->endSection() ?>