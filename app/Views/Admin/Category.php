<?= $this->extend('Admin/Dashboard_layout') ?>
<?= $this->section('content') ?>

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Category</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url() ?>admin/dashboard">Home</a></li>
                <li class="breadcrumb-item">Category</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Datatables</h5>
                        <div class="text-end mb-3">

                            <button class="btn btn-primary ">
                                <a href="<?php echo base_url() ?>admin/category/add" class="text-white">Add New
                                    Category</a>
                            </button>
                        </div>
                        <?php if (session()->getFlashdata('success')): ?>
                            <script>
                                window.onload = function () {
                                    alert('<?= session()->getFlashdata('success') ?>');
                                };
                            </script>
                        <?php endif; ?>
                        <!-- Table with stripped rows -->
                        <div style="overflow-x:auto;">

                            <table class="table datatable ">
                                <thead>
                                    <tr class="text-center">
                                        <th scop="col">sr no.</th>
                                        <th scope="col">Category Name</th>
                                        <th scope="col">Description</th>
                                        <th scope="col">Date</th>
                                        <!--<th scope="col">time</th> -->
                                        <th colspan="2" scope="col">Action</th>
                                    </tr>

                                </thead>
                                <tbody>
                                    <?php $i = 1;
                                    foreach ($row as $r): ?>
                                        <tr>
                                            <td>
                                                <?php echo $i++ ?>
                                            </td>
                                            <td>
                                                <?php echo $r['name']; ?>
                                            </td>
                                            <td class=" px-3 text-justify">
                                                <?php echo $r['description']; ?>
                                            </td>
                                            <td>
                                                <?php echo $r['date']; ?>
                                            </td>
                                            <!-- <td>
                                                <?php echo $r['time']; ?>
                                            </td> -->
                                            <td colspan="2">

                                                <a class="btn btn-success"
                                                    href="<?php echo base_url('admin/category/edit/') ?><?php echo $r['category_id']; ?>">Edit</a>

                                                <a class="btn btn-danger"
                                                    href="<?php echo base_url('admin/category/delete/') ?><?php echo $r['category_id']; ?>">Delete</a>

                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- End Table with stripped rows -->

                    </div>
                </div>

            </div>
        </div>
    </section>

</main><!-- End #main -->
<?= $this->endSection() ?>