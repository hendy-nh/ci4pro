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
    <div class="col-lg-6" style="float:none;margin:auto;">

        <form action="<?= base_url('update_news/' . $id_news['id_news']) ?>" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Penulis</label>
                <input value="<?php echo $id_news['penulis'] ?>" type="text" name="penulis" class="form-control">

            </div>
            <!-- <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Tanggal Update</label>
            <input type="date" name="tanggal" class="form-control">
        </div> -->
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Content</label>
                <input value="<?php echo $id_news['content_news'] ?>" type=" text" name="content" class="form-control">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Image</label>
                <img src="<?= base_url('image/' . $id_news['image'])  ?>" width="100px" height="100px">
                <div class="col-lg-6">

                    <input value="<?php echo $id_news['image'] ?>" type="file" name="image" class="form-control">
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Insert Data</button>
        </form>
    </div>
</section>
<?php echo view('front/v_footer') ?>