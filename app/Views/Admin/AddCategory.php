<?= $this->extend('Admin/Dashboard_layout') ?>
<?= $this->section('content') ?>

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Add New Category</h1>
        <nav>
            <ol class="breadcrumb mt-2">
                <li class="breadcrumb-item"><a href="<?php echo base_url() ?>admin/dashboard">Home</a></li>
                <li class=" breadcrumb-item active"><a href="<?php echo base_url() ?>admin/category">Category</a></li>
                <li class=" breadcrumb-item active">Add New Category</li>
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
                        <form action="<?php echo base_url() ?>admin/category/add" method="post">

                            <?php if (session()->getFlashdata('success')): ?>
                                <script>
                                    window.onload = function () {
                                        alert('<?= session()->getFlashdata('success') ?>');
                                    };
                                </script>
                            <?php endif; ?>

                            <?php $validation = \Config\Services::validation(); ?>
                            <div class="row mb-4">
                                <label for="inputText" class="col-sm-2 col-form-label">Category Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="name"
                                        value="<?php echo set_value('name') ?>">
                                </div>
                                <div class="text-danger">
                                    <?= $validation->getError("name"); ?>
                                </div>
                            </div>

                            <div class="row mb-4">
                                <label for="inputText" class="col-sm-2 col-form-label">Description</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" placeholder="Enter the Category Description here"
                                        id="floatingTextarea2" style="height: 100px" name="description"></textarea>
                                </div>
                                <div class="text-danger">
                                    <?= $validation->getError("description"); ?>
                                </div>
                            </div>



                            <div class="col-sm-12 mt-5">
                                <button type="submit" class="btn mx-auto px-4 py-2  d-table btn-primary">Add
                                    Category</button>
                            </div>


                        </form><!-- End General Form Elements -->

                    </div>
                </div>

            </div>

        </div>
    </section>

</main><!-- End #main -->

<?= $this->endSection() ?>