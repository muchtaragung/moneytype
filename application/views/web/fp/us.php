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
<div class="text-center bg-image mt-5" style="background-size: cover; background-repeat: no-repeat;background-image: url(<?= base_url() ?>assets/assets/img/<?= $fp->img_header ?>);height: 60vh;">
    <div class="mask h-100 w-100" style="background-color: rgba(0, 0, 0, 0.6);">
        <div class="d-flex align-items-center h-100">
            <div class="container">
                <div class="text-white">
                    <h1 class="text-center display-4"><strong>Financial Planning</strong> </h1>
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
                <h1 class="display-3"><?= $header_feature->header ?></h1>
                <p style="font-size: 20px; line-height: 2;" class="text-left mb-0"><?= $header_feature->konten ?></p>
                <?php foreach ($feature1 as $data) { ?>
                    <div class="row mt-5">
                        <div class="col-md-1 mt-3">
                            <img width="30px" src="<?= base_url() ?>assets/assets/img/<?= $data->img ?>">
                        </div>
                        <div class="col-md-11">
                            <p style="font-size: 20px;" class=" text-left"><?= $data->header ?></p>
                            <p style="font-size: 16px;" class=" text-left"><?= $data->konten ?></p>
                        </div>
                    </div>
                <?php   } ?>
            </div>
            <div class="col-lg-6 text-center mt-5 d-lg-block">
                <img src="<?= base_url() ?>assets/assets/img/<?= $header_feature->img ?>" alt="" class="img-fluid">
            </div>
        </div>
        <hr>
    </div>
    <div class="container">
        <div class="row h-100 align-items-center py-5">
            <div class="col-lg-5 d-lg-block"><img width="550px" src="<?= base_url() ?>assets/assets/img/<?= $feature2->img ?>" alt="" class="img-fluid"></div>
            <div class="col-md-1"></div>
            <div class="col-lg-6 mt-5">
                <h1 class="display-4"><?= $feature2->header ?></h1>
                <p style="font-size: large;" class="text-left mb-0"><?= $feature2->konten ?></p>
                <a href="<?= base_url() ?>contact" class="btn btn-outline-warning px-5 rounded-pill shadow-sm mt-5 ">GET STARTED</a>
            </div>
        </div>
        <hr>
    </div>
    <div class="container">
        <div class="row h-100 align-items-center py-5">
            <div class="col-lg-6 text-center mt-5 d-lg-block">
                <img src="<?= base_url() ?>assets/assets/img/<?= $header_feature3->img ?>" alt="" class="img-fluid">
            </div>
            <div class="col-lg-6">
                <h1 class="display-3"><?= $header_feature3->header ?></h1>
                <p style="font-size: 20px; line-height: 2;" class="text-left mb-0"><?= $header_feature3->konten ?></p>
                <?php foreach ($feature3 as $data) { ?>
                    <div class="row mt-5">
                        <div class="col-md-1 mt-3">
                            <img width="30px" src="<?= base_url() ?>assets/assets/img/<?= $data->img ?>">
                        </div>
                        <div class="col-md-11">
                            <p style="font-size: 20px;" class=" text-left"><?= $data->header ?></p>
                            <p style="font-size: 16px;" class=" text-left"><?= $data->konten ?></p>
                        </div>
                    </div>
                <?php   } ?>
            </div>

        </div>
        <hr>
    </div>
    <div class="bg-white py-5">
        <div class="container py-5">
            <div class="row">
                <?php foreach ($feature4 as $data) { ?>
                    <div class="col-md-4 border-right">
                        <h2 class="display-6"><?= $data->header ?></h2>
                        <p style="font-size: 16px; line-height: 2;" class="text-left mb-5"><?= $data->konten ?>.</p>
                        <a href="<?= base_url() ?>contact" class="btn btn-light mt-5 text-warning">LEARN MORE</a>
                    </div>
                <?php   } ?>
            </div>
        </div>
    </div>
    <div class="bg-image mt-5" style="background-size: cover; background-repeat: no-repeat;background-image: url(<?= base_url() ?>assets/assets/img/<?= $fp->bg ?>);height: auto;">
        <div class="mask h-100 w-100" style="background-color: rgba(0, 0, 0, 0.6);">
            <div class="d-flex align-items-center h-100">
                <div class="container">
                    <div class="text-white">
                        <p style="font-size: 32px; line-height: 2;" class="text-center mt-5"><?= $header_feature5->header ?></p>
                        <h1 class="text-center display-5 mt-5"><strong><?= $header_feature5->konten ?></strong> </h1>
                    </div>
                    <div class="row mt-5 mb-5">
                        <?php foreach ($feature5 as $data) { ?>
                            <div class="col-md-4 mb-5">
                                <div class="card">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-2 mt-3">
                                                <img width="30px" src="<?= base_url() ?>assets/assets/img/<?= $data->img ?>">
                                            </div>
                                            <div class="col-md-10">
                                                <p style="font-size: 20px;"><?= $data->header ?></p>
                                                <p style="font-size: 18px; line-height: 2;" class="text-left mb-5"><?= $data->konten ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php   } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>