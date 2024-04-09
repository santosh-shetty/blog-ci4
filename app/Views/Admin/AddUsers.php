<?= $this->extend('Admin/Dashboard_layout') ?>
<?= $this->section('content') ?>

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Add New User</h1>
        <nav>
            <ol class="breadcrumb mt-2">
                <li class="breadcrumb-item"><a href="<?php echo base_url() ?>admin/dashboard">Home</a></li>
                <li class=" breadcrumb-item active"><a href="<?php echo base_url() ?>admin/users">Users</a></li>
                <li class=" breadcrumb-item active">Add New User</li>
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
                        <form action="<?php echo base_url() ?>admin/users/add" method="post">
                            <?php $validation = \Config\Services::validation(); ?>
                            <div class="row mb-4">
                                <label for="inputText" class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="name"
                                        value="<?php echo set_value('name') ?>">
                                </div>
                                <div class="text-danger">
                                    <?= $validation->getError("name"); ?>
                                </div>
                            </div>

                            <div class="row mb-4">
                                <label for="inputText" class="col-sm-2 col-form-label">Username</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="username"
                                        value="<?php echo set_value('username') ?>">
                                </div>
                                <div class="text-danger">
                                    <?= $validation->getError("username"); ?>
                                </div>
                            </div>

                            <div class="row mb-4">
                                <label for="inputText" class="col-sm-2 col-form-label">password</label>
                                <div class="col-sm-10">
                                    <input type="password" class="form-control" name="password"
                                        value="<?php echo set_value('password') ?>">
                                </div>
                                <div class="text-danger">
                                    <?= $validation->getError("password"); ?>
                                </div>
                            </div>

                            <div class="row mb-4">
                                <label for="inputText" class="col-sm-2 col-form-label">Position</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="position"
                                        value="<?php echo set_value('position') ?>">
                                </div>
                                <div class="text-danger">
                                    <?= $validation->getError("position"); ?>
                                </div>
                            </div>

                            <div class="col-sm-12 mt-5">
                                <button type="submit" class="btn mx-auto px-4 py-2  d-table btn-primary">Add
                                    Users</button>
                            </div>


                        </form><!-- End General Form Elements -->

                    </div>
                </div>

            </div>

        </div>
    </section>

</main><!-- End #main -->

<?= $this->endSection() ?>