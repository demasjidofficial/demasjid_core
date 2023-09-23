<!--? Blog Area Start -->
<section class="home-blog-area section-padding24">
    <div class="container">
        <!-- Section Tittle -->
        <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-6 col-md-9 col-sm-10">
                <div class="section-tittle text-center mb-90">
                    <span>Berita Terbaru Kami</span>
                    <h3><b>Membagikan wawasan dari artikel-artikel kami</b></h3>
                </div>
            </div>
        </div>
        <div class="row">
            <?php if ($articles): ?>
            <?php foreach($articles as $article): ?>
            <div class="col-xl-6 col-lg-6 col-md-6">
                <div class="home-blog-single mb-30">
                    <div class="blog-img-cap">
                        <div class="blog-img">
                            <img src="<?= $article['path_image'] ?>"
                                alt="">
                            <!-- Blog date -->
                            <div class="blog-date text-center">
                                <span><?= explode(' ',local_date($article['created_at']))[0] ?></span>
                                <p><?= substr(explode(' ',local_date($article['created_at']))[1],0,3) ?></p>
                            </div>
                        </div>
                        <div class="blog-cap">
                            <p><?= $article['created_by'] ?></p>
                            <h3><a href="#"><?= $article['title'] ?></a></h3>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach ?>
            <?php endif ?>

        </div>
    </div>
</section>
<!-- Blog Area End -->