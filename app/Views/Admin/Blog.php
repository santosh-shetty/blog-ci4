<?= $this->extend('Admin/Dashboard_layout') ?>
<?= $this->section('content') ?>


<main id="main" class="main">

    <div class="pagetitle">
        <h1>Blog </h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url() ?>admin/dashboard">Home</a></li>
                <li class="breadcrumb-item active">Blog</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">

                        <div class=" mb-2 mt-4 d-flex justify-content-between">
                            <h4>Total Blogs</h4>
                            <button class="btn btn-primary ">
                                <a href="<?php echo base_url() ?>admin/posts" class="text-white">Add New
                                    Post</a>
                            </button>
                        </div>

                        <!-- Table with stripped rows -->
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th scop="col">sr no.</th>
                                    <th scope="col">Blog Title</th>
                                    <th scope="col">Excerpt</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Description</th>
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
                                            <?php echo $r['title']; ?>
                                        </td>

                                        <td class=" px-3 text-justify">
                                            <?php echo $r['short_desc']; ?>
                                        </td>

                                        <td>
                                            <?php echo $r['date']; ?>
                                        </td>

                                        <!-- <td class=" px-3 text-justify">
                                            <?php echo $r['description']; ?>
                                        </td> -->

                                        <td colspan="2">

                                            <a class="btn btn-success"
                                                href="<?php echo base_url('admin/blog/edit/') ?><?php echo $r['id']; ?>">Edit</a>

                                            <a class="btn btn-danger"
                                                href="<?php echo base_url('admin/blog/delete/') ?><?php echo $r['id']; ?>">Delete</a>

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