<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>
    <div class="carousel-inner">

        <?php $i = 1;
        foreach ($slider as $slider) { ?>
            <div class="carousel-item <?php if ($i == 1) {
                                            echo 'active';
                                        } ?>">
                <img class="first-slide" src="<?php echo base_url('assets/upload/image/' . $slider->gambar) ?>" alt="<?php echo $slider->judul_galeri ?>">
                <div class="container">
                    <!-- div class="carousel-caption text-left">
                        <h1><?php echo $slider->judul_galeri ?></h1>
                        <p><?php echo strip_tags($slider->isi_galeri) ?> </p>
                        <p><a class="btn btn-lg btn-primary" href="<?php echo $slider->website ?>" role="button">Sign up today</a></p>
                    </!-->
                </div>
            </div>
        <?php $i++;
        } ?>
    </div>
    <br><br>
    </div>
    <div class="video-container"> <iframe allowfullscreen="" class="YOUTUBE-iframe-video" src="https://www.youtube.com/embed/zwnDY9aG6CU" width="320"></iframe> </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<!-- Marketing messaging and featurettes
================================================== -->
<!-- Wrap the rest of the page in another container to center all the content. -->

<div class="album py-5 bg-light">
    <div class="container">

        <div class="row judul">
            <div class="col-md-12 text-center">
                <h1>Selamat datang di Website Dealers Nissan kami</h1>
            </div>
        </div>
        <div class="row">
            <?php foreach ($berita as $berita) { ?>
                <div class="card">
                    <img src="<?php echo base_url('assets/upload/image/thumbs/' . $berita->gambar) ?>" alt="Card image cap">
                    <h2><a href="<?php echo base_url('berita/read/' . $berita->slug_berita) ?>"><?php echo $berita->judul_berita ?></a></h2>
                    <p class="card-text"><?php echo character_limiter(strip_tags($berita->isi_berita), 30) ?></p>
                    <p class="text-right"><a href="<?php echo base_url('berita/read/' . $berita->slug_berita) ?>" class="btn btn-sm btn-primary">View Details</a></p>
                </div>
            <?php } ?>
            <div class="clearfix"></div>
        </div>
    </div>
</div>