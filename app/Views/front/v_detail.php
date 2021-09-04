<?php echo view('front/v_head') ?>
<?php echo view('front/v_header') ?>

<section class="section single-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                <div class="page-wrapper">
                    <div class="blog-title-area text-center">
                        <ol class="breadcrumb hidden-xs-down">
                            <li class="breadcrumb-item"><a href="#">Detail News</a></li>

                        </ol>

                        <span class="color-orange"><a href="tech-category-01.html" title="">Technology</a></span>

                        <h3><?php echo $id_news['content_news'] ?></h3>

                        <div class="blog-meta big-meta">
                            <small><a href="tech-single.html" title=""><?php echo $id_news['tgl_news'] ?></a></small>
                            <small><a href="tech-author.html" title="">by <?php echo $id_news['penulis'] ?></a></small>

                        </div><!-- end meta -->

                    </div><!-- end title -->
                    <div class="container" style="margin:30%">
                        <div class="blog-content">
                            <div class="pp">
                                <?php echo $id_news['content_news'] ?>
                                <br>
                                <img src="<?= base_url('image/' . $id_news['image'])  ?>" width="300px" height="300px">
                            </div><!-- end pp -->

                        </div><!-- end content -->
                        <br>
                        <div class="container" style="margin:15%">
                            <a class="btn btn-prymary" href="<?= base_url('/') ?>">Back</a>
                        </div>
                    </div>

                </div><!-- end col -->
            </div><!-- end col -->
        </div><!-- end row -->
    </div><!-- end container -->
</section>
<?php echo view('front/v_footer') ?>