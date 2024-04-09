<?= $this->extend('Views/Common_layout') ?>

<?= $this->section('content') ?>

<!-- banner area start -->
<div class="banner-area banner-inner-1 bg-black" id="banner">
    <!-- banner area start -->
    <div class="banner-inner pt-5 bg-white ">
        <div class="container">
            <div class="row">
                <?php foreach ($posts as $post): ?>
                    <div class="col-lg-6">
                        <div class="thumb after-left-top">
                            <img src="<?= $post['photo'] ?> " class="card-img-top" alt="<?= $post['title'] ?>">

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
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <!-- banner area end -->
    <!-- 
     
    </div> -->
    <!-- banner area end -->


</div>
<?= $this->endSection() ?>