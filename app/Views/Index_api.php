<?= $this->extend('Views/Common_layout') ?>

<?= $this->section('content') ?>

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

<div class="bg-sky post-area pd-top-25 mt-2" id="trending">

    <div class="pd-top-80 pd-bottom-50" id="latest">
        <h3 class="text-center">Trending Post</h3>
    </div>
    <div class="container">
        <div class="row">

            <?php
            $j = 0; foreach ($posts as $post):
                if ($j++ == 8) {
                    break;
                } ?>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-post-wrap style-overlay">
                        <div class="thumb">

                            <?php
                            $httpClient = \Config\Services::curlrequest();
                            $photoResponse = $httpClient->get('https://jsonplaceholder.typicode.com/photos/' . $post['id']);
                            $photo = json_decode($photoResponse->getBody(), true); ?>
                            <img src="<?= $photo['url'] ?>" alt="<?= $post['title'] ?>">
                        </div>
                        <div class="details">
                            <h6 class="title"><a href="<?php echo base_url('single_view_api/' . $post['id']) ?>">
                                    <?= $post['title'] ?>
                                </a></h6>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<?= $this->endSection() ?>