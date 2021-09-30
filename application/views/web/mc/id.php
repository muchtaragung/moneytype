<style>
    .border-right {
        border-right: 1px solid #ddd;
    }

    .borders {
        border-left: 1px solid #ddd;
        border-right: 1px solid #ddd;
        margin: -1px;
    }

    .border-left {
        border-left: 1px solid #ddd;
    }
</style>
<div class="text-center bg-image mt-5" style="background-size: cover; background-repeat: no-repeat;background-image: url(<?= base_url() ?>assets/assets/img/<?= $mc->img_header ?>);height: 60vh;">
    <div class="mask h-100 w-100" style="background-color: rgba(0, 0, 0, 0.6);">
        <div class="d-flex align-items-center h-100">
            <div class="container">
                <div class="text-white">
                    <h1 class="text-center display-4"><strong>Money Coaching</strong> </h1>
                    <!-- <p style="font-size: medium;" class="text-left">Efficiently unleash cross-media information without cross-media value. Quickly maximize timely deliverables for real-time schemas.</p> -->
                    <!-- <a class="btn btn-warning btn-lg" href="<?= base_url() ?>moneytype" role="button">Money Type Quiz</a> -->
                </div>
            </div>
        </div>
    </div>
</div>
<section class=" text-black mb-0 mt-5">
    <?php
    $genap = 1;
    foreach ($feature1 as $key) { ?>
        <?php
        if ($genap % 2 == 0) { ?>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 d-lg-block"><img src="<?= base_url() ?>assets/assets/img/<?= $key->img ?>" alt="" class="img-fluid"></div>
                    <div class="col-lg-6 mt-5">
                        <h1 class="display-5"><?= $key->header ?></h1>
                        <p style="font-size: large ;line-height: 2;" class="text-left mb-0"><?= $key->konten ?></p>
                        <a href="<?= base_url() ?>id/contact" class="btn btn-outline-warning px-5 rounded-pill shadow-sm mt-5 ">GET STARTED</a>
                        <a href="<?= base_url() ?>id/contact" class="btn btn-outline-light px-5 rounded-pill shadow-sm mt-5 text-dark">LEARN MORE <i class="fas fa-check"></i></a>
                    </div>
                </div>
            </div>
        <?php  } else { ?>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 mt-5">
                        <h1 class="display-5"><?= $key->header ?></h1>
                        <p style="font-size: large;line-height: 2;" class="text-left mb-0"><?= $key->konten ?></p>
                        <a href="<?= base_url() ?>id/contact" class="btn btn-outline-warning px-5 rounded-pill shadow-sm mt-5 ">GET STARTED</a>
                        <a href="<?= base_url() ?>id/contact" class="btn btn-outline-light px-5 rounded-pill shadow-sm mt-5 text-dark">LEARN MORE <i class="fas fa-check"></i></a>
                    </div>
                    <div class="col-lg-6 mt-3 d-lg-block"><img src="<?= base_url() ?>assets/assets/img/<?= $key->img ?>" alt="" class="img-fluid"></div>
                </div>
            </div>
        <?php    } ?>

    <?php
        $genap++;
    } ?>
    <div class="bg-image mt-5" style="background-size: cover; background-repeat: no-repeat;background-image: url(<?= base_url() ?>assets/assets/img/<?= $mc->bg ?>);height: auto;">
        <div class="mask h-100 w-100" style="background-color: rgba(0, 0, 0, 0.6);">
            <div class="d-flex align-items-center h-100">
                <div class="container">
                    <div class="text-white">
                        <p style="font-size: 32px; line-height: 2;" class="text-center mt-5"><?= $header_feature->header ?></p>
                        <h1 class="text-center display-5 mt-5"><strong><?= $header_feature->konten ?></strong> </h1>
                    </div>
                    <div class="row mt-5 mb-5">
                        <?php foreach ($feature2 as $key) { ?>
                            <div class="col-md-4 mb-5">
                                <div class="card h-100">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-2 mt-3">
                                                <img class="img-fluid" width="60px" src="<?= base_url() ?>assets/assets/img/<?= $key->img ?>" alt="" srcset="">
                                            </div>
                                            <div class="col-md-10">
                                                <p style="font-size: 20px;"><?= $key->header ?></p>
                                                <p style="font-size: 18px; line-height: 2;" class="text-left mb-5"><?= $key->konten ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row h-100 align-items-center py-5">
            <div class="col-lg-6 text-left mt-5 d-lg-block">
                <img width="400px" src="<?= base_url() ?>assets/assets/img/<?= $header3->img ?>" alt="" class="img-fluid">
            </div>
            <div class="col-lg-6">
                <h1 class="display-3"><?= $header3->header ?></h1>
                <p style="font-size: 20px; line-height: 2;" class="text-left mb-0"><?= $header3->konten ?></p>
                <?php foreach ($feature3 as $key) { ?>
                    <div class="row mt-5">
                        <div class="col-md-1 mt-3">
                            <img class="img-fluid" width="60px" src="<?= base_url() ?>assets/assets/img/<?= $key->img ?>" alt="" srcset="">
                        </div>
                        <div class="col-md-11">
                            <p style="font-size: 20px;" class=" text-left"><?= $key->header ?></p>
                            <p style="font-size: 16px;" class=" text-left"><?= $key->konten ?></p>
                        </div>
                    </div>
                <?php  } ?>
            </div>
        </div>
    </div>
</section>