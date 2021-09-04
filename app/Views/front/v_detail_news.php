<?php echo view('front/v_head') ?>
<section class="section first-section">
    <div class="container-fluid">
        <div class="masonry-blog clearfix">
            <div class="first-slot">
                <div class="masonry-box post-media">
                    <img src="<?= base_url() ?>/template/upload/tech_01.jpg" alt="" class="img-fluid">
                    <div class="shadoweffect">
                        <div class="shadow-desc">
                            <div class="blog-meta">
                                <span class="bg-orange"><a href="tech-category-01.html" title="">Technology</a></span>
                                <h4><a href="tech-single.html" title="">Say hello to real handmade office furniture! Clean & beautiful design</a></h4>
                                <small><a href="tech-single.html" title="">24 July, 2017</a></small>
                                <small><a href="tech-author.html" title="">by Amanda</a></small>
                            </div><!-- end meta -->
                        </div><!-- end shadow-desc -->
                    </div><!-- end shadow -->
                </div><!-- end post-media -->
            </div><!-- end first-side -->

            <div class="second-slot">
                <div class="masonry-box post-media">
                    <img src="<?= base_url() ?>/template/upload/tech_02.jpg" alt="" class="img-fluid">
                    <div class="shadoweffect">
                        <div class="shadow-desc">
                            <div class="blog-meta">
                                <span class="bg-orange"><a href="tech-category-01.html" title="">Gadgets</a></span>
                                <h4><a href="tech-single.html" title="">Do not make mistakes when choosing web hosting</a></h4>
                                <small><a href="tech-single.html" title="">03 July, 2017</a></small>
                                <small><a href="tech-author.html" title="">by Jessica</a></small>
                            </div><!-- end meta -->
                        </div><!-- end shadow-desc -->
                    </div><!-- end shadow -->
                </div><!-- end post-media -->
            </div><!-- end second-side -->

            <div class="last-slot">
                <div class="masonry-box post-media">
                    <img src="<?= base_url() ?>/template/upload/tech_03.jpg" alt="" class="img-fluid">
                    <div class="shadoweffect">
                        <div class="shadow-desc">
                            <div class="blog-meta">
                                <span class="bg-orange"><a href="tech-category-01.html" title="">Technology</a></span>
                                <h4><a href="tech-single.html" title="">The most reliable Galaxy Note 8 images leaked</a></h4>
                                <small><a href="tech-single.html" title="">01 July, 2017</a></small>
                                <small><a href="tech-author.html" title="">by Jessica</a></small>
                            </div><!-- end meta -->
                        </div><!-- end shadow-desc -->
                    </div><!-- end shadow -->
                </div><!-- end post-media -->
            </div><!-- end second-side -->
        </div><!-- end masonry -->
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                <div class="page-wrapper">
                    <div class="blog-top clearfix">
                        <h4 class="pull-left">Detail News <a href="#"><i class="fa fa-rss"></i></a></h4>
                    </div><!-- end blog-top -->



                    <div class="blog-list clearfix">
                        <div class="col-lg-6" style="float:none;margin:auto;">


                            <div class="mb-3">
                                <th>Penulis : <?php echo $id_news['penulis'] ?></th>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Tgl Update : <?php echo $id_news['tgl_news'] ?></label>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Content :</label>
                                <br>
                                <?php echo $id_news['content_news'] ?>

                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Image</label>
                                <br>
                                <img src="<?= base_url('image/' . $id_news['image'])  ?>" width="300px" height="300px">
                                <div class="col-lg-6">
                                </div>
                            </div>


                            <div>
                                <a class="btn btn-prymary" href="<?= base_url('/') ?>">Back</a>
                            </div>

                            </form>
                        </div>

                    </div>
                </div><!-- end page-wrapper -->


            </div><!-- end row -->
        </div><!-- end container -->
</section>
<?php echo view('front/v_footer') ?>