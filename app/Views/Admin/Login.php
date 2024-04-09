<!-- <form method="post" action="<?php echo base_url('admin/dashboard'); ?>">
    <input type="text" name="username" placeholder="Username">
    <input type="password" name="password" placeholder="Password">
    <button type="submit">Login</button>
</form> -->


<?= $this->extend('public') ?>

<?= $this->section('content') ?>

<div class="container">
    <div class="row mt-5">
        <div class="card mt-5 mx-auto col-4">
            <div class=" card-body">
                <h2 class="mb-4 mx-auto d-table">Login</h2>

                <?php $validation = \Config\Services::validation(); ?>

                <form action="<?= base_url('admin') ?>" method="post">
                    <div class="form-floating my-3">
                        <input type="text" class="form-control border-none" id="floatingInput" placeholder="Username"
                            name="username" value="<?= old('username') ?>">
                        <label for="floatingInput" for="username">Username</label>
                        <div class="text-danger">
                            <?= $validation->getError("username"); ?>
                        </div>
                    </div>


                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password"
                            name="password" value="<?= old('password') ?>">
                        <label for="floatingPassword" for="password">Password</label>
                        <div class="text-danger">
                            <?= $validation->getError("password"); ?>

                        </div>

                    </div>

                    <input type="submit" class="btn btn-primary w-100 py-2 mt-3 px-4" value="Submit">
                </form>
            </div>
        </div>

    </div>
</div>


<?= $this->endSection() ?>