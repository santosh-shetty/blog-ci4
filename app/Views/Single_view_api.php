<?= $this->extend('Views/Common_layout') ?>

<?= $this->section('content') ?>

<!-- banner area start -->
<div class="banner-area banner-inner-1 bg-black" id="banner">
    <!-- banner area start -->
    <div class="banner-inner pt-5 bg-white ">
        <div class="container">
            <div class="row">

                <div class="col-lg-6">
                    <div class="thumb after-left-top">
                        <?php
                        $httpClient = \Config\Services::curlrequest();
                        $photoResponse = $httpClient->get('https://jsonplaceholder.typicode.com/photos/' . $post['id']);
                        $photo = json_decode($photoResponse->getBody(), true); ?>

                        <img src="<?= $photo['url'] ?> " class="card-img-top" alt="<?= $post['title'] ?>">

                    </div>
                </div>
                <div class="col-lg-6 align-self-center">
                    <div class="banner-details mt-4 mt-lg-0">
                        <div class="post-meta-single">

                        </div>
                        <h2 style="color:black ">
                            <?php echo $post['title'] ?>
                        </h2>
                        <p style="color:black ">
                            <?php echo $post['body'] ?>
                        </p>
                    </div>
                </div>
                <div class="col-lg-12  mt-5">
                    <p class="text-black">
                        <?php echo $post['body'] ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- banner area end -->
    <!-- 
     
    </div> -->
    <!-- banner area end -->

    <div class="pd-top-80 pd-bottom-50" id="grid">
        <div class="container">
            <div class="row">
                <?php $i = 0;
                foreach ($row as $k):
                    if ($i++ == 8) {
                        break;
                    } ?>
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
                            </div>
                            <h6 class="title"><a href="<?php echo base_url('single_view/' . $k['id']) ?>">
                                    <?= $k['title'] ?>
                                </a></h6>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>