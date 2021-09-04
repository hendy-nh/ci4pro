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
                        <h4 class="pull-left">Recent News <a href="#"><i class="fa fa-rss"></i></a></h4>
                    </div><!-- end blog-top -->
                    <div class="container">

                        <table class="table" id="example2">

                            <thead>
                                <th></th>
                            </thead>

                            <tbody>
                                <?php foreach ($data_news as $data) { ?>
                                    <tr>
                                        <td>
                                            <div class="col-md-4">
                                                <div class="post-media">
                                                    <a href="<?= base_url('detail_news/' . $data->id_news) ?>" title="">
                                                        <img src="<?= base_url('image/' . $data->image)  ?>" alt="" class="img-fluid">
                                                        <div class="hovereffect"></div>
                                                    </a>
                                                </div><!-- end media -->
                                            </div><!-- end col -->


                                            <div class="blog-meta big-meta col-md-8">
                                                <h4><a href="<?= base_url('detail_news/' . $data->id_news) ?>" title=""><?= $data->penulis ?></a></h4>
                                                <p><?= $data->content_news ?></p>
                                                <small class="firstsmall"><a class="bg-orange" href="tech-category-01.html" title=""><?= $data->penulis ?></a></small>
                                                <small><a href="<?= base_url('detail_news/' . $data->id_news) ?>" title=""><?= $data->tgl_news ?></a></small>
                                                <small><a href="<?= base_url('detail_news/' . $data->id_news) ?>" title=""><?= $data->penulis ?></a></small>

                                            </div><!-- end meta -->
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>


                        </table>
                    </div>






                </div><!-- end page-wrapper -->
            </div><!-- end col -->


        </div><!-- end row -->
    </div><!-- end container -->
</section>