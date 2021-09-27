<div class="text-center bg-image mt-5" style="background-size: cover; background-repeat: no-repeat;background-image: url(<?= base_url() ?>assets/assets/img/<?= $about->img_header ?>);height: 60vh;">
    <div class="mask h-100 w-100" style="background-color: rgba(0, 0, 0, 0.6);">
        <div class="d-flex justify-content-center align-items-center h-100">
            <div class="text-white">
                <h1 class="text-center display-4">About</h1>
                <!-- <a class="btn btn-warning btn-lg" href="<?= base_url() ?>moneytype" role="button">Money Type Quiz</a> -->
            </div>
        </div>
    </div>
</div>
<section class="page-section text-black mb-0">
    <div class="container">
        <div class="row h-100 align-items-center py-5">
            <div class="col-lg-5 mt-5">
                <h1 class="display-6 text"><?= $about->header_profile_id ?></span></h1>
                <p class="lead text-muted mb-0"><?= $about->profile_id ?></p>
                <a href="<?= base_url() . $this->uri->segment(1) ?>/contact" class="btn btn-outline-warning px-5 rounded-pill mt-5 ">Tentang Saya</a>
                <div class="text-left mt-5">
                    <h3>TELEPON SEKARANG</h3>
                    <p style="font-size: 43px;">
                        <?php
                        echo preg_replace('/\d{3}/', '$0-', str_replace('.', 'null', trim($about->phone)), 2);
                        ?></p>
                </div>
            </div>
            <div class="col-lg-7 mt-5 text-right"><img src="<?= base_url() ?>assets/assets/img/<?= $about->img_profile ?>" alt="" class="img-fluid"></div>
        </div>
    </div>
    <style>
        .pic {
            display: block;
            border-radius: 200px;
            box-sizing: border-box;
            background-color: #fff;
            border: 5px solid #cfd8dc;
        }

        .page-section {
            padding: 0;
        }

        i {
            border-radius: 50%;
            border: solid black;
            padding: 10px;
            width: 16px;
            height: 16px;
            text-align: center
        }
    </style>
    <div class="text-center bg-image" style="background-size: cover; background-repeat: no-repeat;background-image: url(<?= base_url() ?>assets/assets/img/<?= $about->img_testimoni ?>);height: auto;">
        <div class="mask h-100 w-100" style="background-color: rgba(0, 0, 0, 0.6);">
            <div class="container">
                <div class="row justify-content-center mt-5">
                    <div class="col-md-offset-3 col-md-6">
                        <div id="testimonial-slider" class="owl-carousel mb-5">
                            <?php foreach ($testimoni as $data) { ?>
                                <div class="testimonial">
                                    <div class="pic text-center mt-5 mb-4">
                                        <img src="<?= base_url() ?>assets/icon/<?= $data->img ?>" class="rounded-circle" alt="" />
                                    </div>
                                    <h3 class="text-center text-white mb-3">
                                        <?= $data->nama ?><small>, <?= $data->job ?></small>
                                    </h3>
                                    <div class="text-center text-warning" style="font-size: x-large;"><i class="fas fa-quote-left"></i></div>
                                    <p class="lead text-white mb-0">
                                        <?= $data->testimoni ?>
                                    </p>
                                </div>
                            <?php  } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-light py-5">
        <div class="container py-5">

            <div class="row text-center">
                <!-- Team item-->
                <?php foreach ($feature_id as $data) { ?>
                    <div class="col-xl-3 col-sm-6 mb-5">
                        <div class="bg-white rounded shadow-sm py-5 px-4 h-100">
                            <img width="50px" src="<?= base_url() ?>assets/icon/<?= $data->icon ?>" alt="" srcset="">
                            <h5 class="mb-4 mt-5"><strong><?= $data->title ?></strong></h5>
                            <p><?= $data->konten ?></p>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>
<script>
    $(document).ready(function() {
        $("#testimonial-slider").owlCarousel({
            items: 1,
            itemsDesktop: [1000, 1],
            itemsDesktopSmall: [979, 1],
            itemsTablet: [768, 1],
            pagination: true,
            navigation: false,
            navigationText: ["", ""],
            slideSpeed: 1000,
            singleItem: true,
            transitionStyle: "fade",
            autoPlay: true
        });
    });
</script>