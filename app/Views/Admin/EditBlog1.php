<?= $this->extend('Admin/Dashboard_layout') ?>
<?= $this->section('content') ?>

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Edit Blog</h1>
        <nav>
            <ol class="breadcrumb mt-2">
                <li class="breadcrumb-item"><a href="<?php echo base_url() ?>admin/dashboard">Home</a></li>
                <li class=" breadcrumb-item active"><a href="<?php echo base_url() ?>admin/blog">Blog</a></li>
                <li class=" breadcrumb-item active">Edit Blogs</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">General Form Elements</h5>

                        <!-- General Form Elements -->
                        <form action="<?= base_url('admin/blog/update/' . $row['id']) ?>" method="post">
                            <input type="hidden" name="_method" value="PUT" />

                            <div class="row mb-4">
                                <label for="inputText" class="col-sm-2 col-form-label">Blog Title</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="title"
                                        value="<?php echo $row['title'] ?>">
                                </div>
                            </div>

                            <!-- <div class="row mb-4">
                                <label for="inputText" class="col-sm-2 col-form-label">Short Desc</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="short_desc"
                                        value="<//?php echo $row['short_desc'] ?>">
                                </div>
                            </div> -->

                            <div class="row mb-4">
                                <label for="inputText" class="col-sm-2 col-form-label">Short Desc</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" placeholder="Enter the Short Discription here"
                                        id="floatingTextarea2" style="height: 100px" name="short_desc"
                                        value="<?php echo $row['short_desc'] ?>"></textarea>
                                </div>
                            </div>

                            <div class="row mb-4">
                                <label for="inputText" class="col-sm-2 col-form-label">Feature Image</label>

                                <div class="col-sm-10">
                                    <div class="img">
                                        <img src="<?= base_url('/public/assets/upload/' . $row['image']) ?>"
                                            class="w-75" alt="" srcset="">
                                    </div>
                                    <input type="file" class="form-control" name="image"
                                        value="<?php echo $row['image'] ?>">
                                </div>
                            </div>

                            <div class="row mb-4">
                                <label for="inputText" class="col-sm-2 col-form-label">Description</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" placeholder="Enter the Post Description here"
                                        id="floatingTextarea2" style="height: 400px" name="description"
                                        value="<?php echo $row['description'] ?>"></textarea>
                                </div>
                            </div>

                            <div class="col-sm-12 mt-5 w-25">
                                <button type="submit" class="btn mx-auto px-4 py-2  d-table btn-primary">Update
                                    Blog</button>
                            </div>


                        </form><!-- End General Form Elements -->

                    </div>
                </div>

            </div>

        </div>
    </section>

</main><!-- End #main -->

<?= $this->endSection() ?>