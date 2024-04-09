<?= $this->extend('Admin/Dashboard_layout') ?>
<?= $this->section('content') ?>

<style>
    .datatable-sorter {
        text-align: center !important;

    }
</style>
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Blog </h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url() ?>admin/dashboard">Home</a></li>
                <li class="breadcrumb-item active">Users</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">

                        <div class=" mb-2 mt-4 d-flex justify-content-between">
                            <h4>Total Users</h4>
                            <button class="btn btn-primary ">
                                <a href="<?php echo base_url() ?>admin/users/add" class="text-white">Add New
                                    User</a>
                            </button>
                        </div>

                        <!-- Table with stripped rows -->
                        <table class="table datatable text-center">
                            <thead>
                                <tr>
                                    <th scop="col">sr no.</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Position</th>
                                    <th colspan="2" scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1;
                                foreach ($users as $r): ?>
                                    <tr>
                                        <td>
                                            <?php echo $i++ ?>
                                        </td>
                                        <td>
                                            <?php echo $r['name']; ?>
                                        </td>

                                        <td class=" px-3 ">

                                            <?php echo $r['position']; ?>
                                        </td>

                                        <td colspan="2">

                                            <a class="btn btn-success me-3"
                                                href="<?php echo base_url('admin/users/edit/') ?><?php echo $r['id']; ?>">Edit</a>

                                            <a class="btn btn-danger"
                                                href="<?php echo base_url('admin/users/delete/') ?><?php echo $r['id']; ?>">Delete</a>

                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                        <!-- End Table with stripped rows -->

                    </div>
                </div>

            </div>
        </div>
    </section>

</main><!-- End #main -->


<?= $this->endSection() ?>