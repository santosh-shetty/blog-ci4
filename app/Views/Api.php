<?= $this->extend('Common_layout') ?>

<?= $this->section('content') ?>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

<div class="bg-sky post-area pd-top-25 mt-2" id="trending">

    <div class="pd-top-80 pd-bottom-50 row" id="latest">
        <h3 class="text-right col-lg-6 ">API Post</h3>
        <div class="col-3"></div>
        <div class=" col-lg-3">
            <select id="category-filter" class="bg-badge-primary">
                <option value="">All Categories</option>
                <?php foreach ($categories as $category): ?>
                    <option value="<?= $category['category_id'] ?>"><?= $category['name'] ?></option>
                <?php endforeach ?>
            </select>
        </div>
    </div>

    <div class="container">

        <div class="row" id="filtered-blogs">
            <!-- ajax fetch data here -->
        </div>

    </div>
</div>

<script>

    // read more Button function when it call
    function readMore() {
        var count = 4;
        var hiddenPosts = $('.post-item.hidden');
        for (var i = 0; i < hiddenPosts.length; i++) {

            if (i < count) {
                $(hiddenPosts[i]).removeClass('hidden d-none');
            }
        }
        if ($('.post-item.hidden').length == 0) {
            $('.load-more').hide();
        }
    }
    $(document).ready(function () {

        // Read More Button Code
        var moreBtn = '<div class="load-more btn btn-primary d-table mx-auto mb-3">Read More</div>';


        // On Load   
        var limit = 7;
        $.ajax({
            url: '<?= base_url('/apiController/allPosts') ?>',
            method: 'post',
            dataType: "json",
            success: function (posts) {
                var html = '';

                $.each(posts, function (i, post) {

                    if (i > limit) {
                        html += '<div class="col-lg-3 col-sm-6 post-item hidden d-none">';
                    }
                    else {
                        html += '<div class="col-lg-3 col-sm-6 post-item">';
                    }
                    html += '<div class="single-post-wrap style-overlay">';
                    html += '<div class="thumb">';
                    html += '<img src="' + post.photo + '" alt="' + post.title + '">';
                    html += '</div>';
                    html += '<div class="details">';
                    html += '<h6 class="title"><a href="<?= base_url() ?>api/single_view_api_db/' + post.id + '">' + post.title + '</a></h6>';
                    html += '</div>';
                    html += '</div>';
                    html += '</div>';
                });

                $('#filtered-blogs').html(html + moreBtn);

                $(document).on('click', '.load-more', readMore);
            }
        });


        // On Select Option by user
        $('#category-filter').change(function () {
            var category_id = $(this).val();

            if (category_id == '') {
                $.ajax({
                    url: '<?= base_url('/apiController/allPosts') ?>',
                    method: 'post',
                    dataType: "json",
                    success: function (posts) {
                        var html = '';

                        $.each(posts, function (i, post) {
                            if (i > limit) {
                                html += '<div class="col-lg-3 col-sm-6 post-item hidden d-none">';
                            }
                            else {
                                html += '<div class="col-lg-3 col-sm-6 post-item">';
                            }
                            html += '<div class="single-post-wrap style-overlay">';
                            html += '<div class="thumb">';
                            html += '<img src="' + post.photo + '" alt="' + post.title + '">';
                            html += '</div>';
                            html += '<div class="details">';
                            html += '<h6 class="title"><a href="<?= base_url() ?>/api/single_view_api_db/' + post.id + '">' + post.title + '</a></h6>';
                            html += '</div>';
                            html += '</div>';
                            html += '</div>';
                        });
                        $('#filtered-blogs').html(html + moreBtn);

                        $(document).on('click', '.load-more', readMore);
                    }
                })
            }
            else {
                $.ajax({
                    url: '<?= base_url('/apiController/filter') ?>',
                    method: 'post',
                    dataType: "json",
                    data: {
                        category_id: category_id
                    },

                    success: function (posts) {
                        var html = '';

                        if (posts.length == 0) {
                            // If Posts is null
                            html = ('<h2 style="color:gray; margin-bottom:20px">No records found</2>');
                            $('#filtered-blogs').html(html);
                        }
                        else {
                            $.each(posts, function (i, post) {
                                // If Posts not is null
                                if (i > limit) {
                                    html += '<div class="col-lg-3 col-sm-6 post-item hidden d-none">';
                                }
                                else {
                                    html += '<div class="col-lg-3 col-sm-6 post-item">';
                                }
                                html += '<div class="single-post-wrap style-overlay">';
                                html += '<div class="thumb">';
                                html += '<img src="' + post.photo + '" alt="' + post.title + '">';
                                html += '</div>';
                                html += '<div class="details">';
                                html += '<h6 class="title"><a href="<?= base_url() ?>api/single_view_api_db/' + post.id + '">' + post.title + '</a></h6>';
                                html += '</div>';
                                html += '</div>';
                                html += '</div>';
                            });
                            $('#filtered-blogs').html(html + moreBtn);

                            $(document).on('click', '.load-more', readMore);
                        }
                    }
                });
            }
        });
    });

</script>

<?= $this->endSection() ?>