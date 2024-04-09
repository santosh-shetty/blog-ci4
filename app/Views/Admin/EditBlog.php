<?= $this->extend('Admin/Dashboard_layout') ?>
<?= $this->section('content') ?>

<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
<style>
    #editor {
        height: 400px;
    }
</style>
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
                        <h5 class="card-title">Edit Blog</h5>

                        <!-- General Form Elements -->
                        <form action="<?= base_url('admin/blog/update/' . $row['id']) ?>" method="post"
                            enctype="multipart/form-data">
                            <input type="hidden" name="_method" value="PUT" />

                            <?php $validation = \Config\Services::validation(); ?>
                            <div class="row mb-4">
                                <label for="inputText" class="col-sm-2 col-form-label">Tittle</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="title"
                                        value="<?php echo $row['title'] ?>">
                                </div>
                                <div class="text-danger mt-1">
                                    <?= $validation->getError("title"); ?>
                                </div>
                            </div>

                            <div class="row mb-4">
                                <label for="inputText" class="col-sm-2 col-form-label">Excerpt</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" placeholder="Enter the Excerpt/Summery here"
                                        id="floatingTextarea2" style="height: 100px" name="short_desc"
                                        value="<?php echo $row['short_desc'] ?>"></textarea>
                                </div>
                            </div>


                            <div class="row mb-4">
                                <label for="inputNumber" class="col-sm-2 col-form-label">Feature Image</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="file" id="formFile" name="image"
                                        value="<?php echo $row['image'] ?>">
                                </div>

                            </div>


                            <!-- <div class="row mb-4">
                                <label for="inputDate" class="col-sm-2 col-form-label">Date</label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control" name="date"
                                        value="<?php echo set_value('date') ?>">
                                </div>
                                <div class="text-danger mt-1">
                                    <?= $validation->getError("date"); ?>
                                </div>
                            </div> -->

                            <!-- <div class="row mb-4">
                                <label for="inputTime" class="col-sm-2 col-form-label">Time</label>
                                <div class="col-sm-10">
                                    <input type="time" class="form-control" name="time"
                                        value="<?php echo set_value('time') ?>">
                                </div>
                                <div class="text-danger mt-1">
                                    <?= $validation->getError("time"); ?>
                                </div>
                            </div> -->

                            <div class="row mb-4">
                                <label class="col-sm-2 col-form-label">Category</label>
                                <div class="col-sm-10">
                                    <select class="form-select" aria-label="Default select example" name="category">

                                        <option value="<?= $row['category'] ?>"><?= $row['category'] ?></option>
                                    </select>
                                </div>
                            </div>


                            <div class="row mb-4">
                                <label for="inputText" class="col-sm-2 col-form-label">Description</label>
                                <div class="col-sm-10" id="editor" style="width:100%;">
                                    <textarea class="form-control" placeholder="Enter the Excerpt/Summery here"
                                        id="floatingTextarea2" style="height: 400px ; " name="short_desc"
                                        value="<?php echo $row['description'] ?>"></textarea>
                                </div>

                                <!-- <div class="col-sm-10">
                                    <div id="editor"></div>
                                    <textarea name="quill_text" style="display:none;"
                                        value="<?php echo set_value('quill_text') ?>"></textarea> -->

                            </div>



                            <div class="col-sm-10 mt-5">

                                <button type="submit" class="btn mx-auto px-4 py-2  d-table btn-primary">Upload
                                    Post</button>
                            </div>


                        </form><!-- End General Form Elements -->

                    </div>
                </div>

            </div>




        </div>

        </div>
    </section>

</main><!-- End #main -->
<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>

<script>
    var quill = new Quill('#editor', {
        theme: 'snow'
    });
    quill.on('text-change', function () {
        document.getElementsByName('quill_text')[0].value = quill.root.innerHTML;
    });
</script>



<?= $this->endSection() ?>