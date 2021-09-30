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
<div class="text-center bg-image mt-5" style="background-size: cover; background-repeat: no-repeat;background-image: url(<?= base_url() ?>assets/assets/img/<?= $ocs->img_header ?>);height: 60vh;">
    <div class="mask h-100 w-100" style="background-color: rgba(0, 0, 0, 0.6);">
        <div class="d-flex align-items-center h-100">
            <div class="container">
                <div class="text-white">
                    <h1 class="text-center display-4"><strong>One-Coin Service</strong> </h1>
                    <!-- <p style="font-size: medium;" class="text-left">Efficiently unleash cross-media information without cross-media value. Quickly maximize timely deliverables for real-time schemas.</p> -->
                    <!-- <a class="btn btn-warning btn-lg" href="<?= base_url() ?>moneytype" role="button">Money Type Quiz</a> -->
                </div>
            </div>
        </div>
    </div>
</div>
<section class=" text-black mb-0">
    <div class="container">
        <div class="row h-100 align-items-center py-5">
            <div class="col-lg-6">
                <h1 class="display-4"><?= $ocs->feature ?></h1>
                <p style="font-size: large;" class="text-left mb-0"><?= $ocs->sub_feature ?></p>
                <a href="<?= base_url() ?>contact" class="btn btn-outline-warning px-5 rounded-pill shadow-sm mt-5 ">GET STARTED</a>
            </div>
            <div class="col-lg-6 mt-5 d-lg-block"><img width="700px" src="<?= base_url() ?>assets/assets/img/<?= $ocs->img_feature ?>" alt="" class="img-fluid"></div>
        </div>
        <hr>
    </div>
    <div class="bg-white py-5">
        <div class="container py-5">
            <div class="row">
                <?php
                foreach ($type as $data) { ?>
                    <div class="col-md-4 border-right border-left">
                        <h2 class="display-6"><?= $data->header ?></h2>
                        <p style="font-size: large;" class="text-left mb-5"><?= $data->konten ?></p>
                        <a href="<?= base_url() ?>contact" class="btn btn-outline-light mt-5 text-warning">LEARN MORE</a>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <div class="bg-image mt-5" style="background-size: cover; background-repeat: no-repeat;background-image: url(<?= base_url() ?>assets/assets/img/<?= $ocs->bg ?>);height: auto;">
        <div class="mask h-100 w-100" style="background-color: rgba(0, 0, 0, 0.6);">
            <div class="d-flex align-items-center h-100">
                <div class="container">
                    <div class="text-white">
                        <h1 class="text-left display-3 mt-5 pt-5"><strong><?= $header_feature->header ?></strong> </h1>
                        <p style="font-size: large;" class="text-left mb-5"><?= $header_feature->konten ?></p>
                    </div>
                    <div class="card mt-5">
                        <div class="card-body">
                            <div class="row">
                                <?php
                                foreach ($feature as $data) { ?>
                                    <div class="col-md-4 ">
                                        <h1><?= $data->header ?></h1>
                                        <p style="font-size: large;" class="text-left mb-5"><?= $data->konten ?></p>
                                        <a href="<?= base_url() ?>contact" class="btn btn-outline-light mt-5 text-warning">Get Started</a>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    <div class="text-center mb-5 pb-5 pt-5">
                        <a href="#" class="btn btn-outline-warning px-5 rounded-pill shadow-sm mt-5 ">GET STARTED</a>
                        <a href="#" class="btn btn-outline-light px-5 rounded-pill shadow-sm mt-5 ">LEARN MORE</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>