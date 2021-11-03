<div class="text-center bg-image mt-5" style="background-size: cover; background-repeat: no-repeat;background-image: url(<?= base_url() ?>assets/assets/img/<?= $resource->img_header ?>);height: 60vh;">
    <div class="mask h-100 w-100" style="background-color: rgba(0, 0, 0, 0.6);">
        <div class="d-flex justify-content-center align-items-center h-100">
            <div class="text-white">
                <h1 class="text-center display-4">Resources</h1>
                <!-- <a class="btn btn-warning btn-lg" href="<?= base_url() ?>moneytype" role="button">Money Type Quiz</a> -->
            </div>
        </div>
    </div>
</div>
<div class="page-content">
    <div class="container-fluid">
        <div class="row mt-5">
            <div class="col-md-8"></div>
            <div class="col-md-4">
                <div class="text-center">
                    <div class="container">
                        <form action="<?= base_url() ?>id/search" method="post">
                            <div class="input-group rounded">
                                <input name="search" style="border-radius: 1rem" type="search" class="form-control form-control-warning" placeholder="Looking for..." aria-label="Search" aria-describedby="search-addon" />
                                <button type="submit" style="border-radius: 1rem" class="btn btn-md btn-outline-black" id="search-addon">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-md-8">
                <div class="container px-0">
                    <div class="pp-gallery">
                        <div class="card-columns">
                            <?php foreach ($resource_id_kategori as $data) { ?>
                                <div class="card" data-groups="[&quot;<?= $data->nama_kategori ?>&quot;]">
                                    <a href="<?= base_url() ?>id/artikel/<?= $data->slug ?>">
                                        <figure class="pp-effect">
                                            <img class="img-fluid" src="<?= base_url() ?>assets/assets/blog/<?= $data->img ?>" alt="Nature" />
                                            <figcaption>
                                                <div class="h4"><?= $data->judul ?></div>
                                                <p><?= date('d F Y', strtotime($data->tanggal_post)); ?></p>
                                            </figcaption>
                                        </figure>
                                    </a>
                                </div>
                            <?php } ?>
                            <?php if (empty($resource_id_kategori)) { ?>
                                <h1 class="text-center">Artikel tidak ditemukan</h1>
                            <?php  } ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mt-3 mb-5">
                <div class="container">
                    <h2 class="mb-5" style="border-bottom:2px solid #ffc107;">Postingan Terbaru</h2>
                    <?php foreach ($recent as $data) { ?>
                        <div class="cardborder-0 mt-3" style="max-width: 540px;">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <a href="<?= base_url() ?>id/artikel/<?= $data->slug ?>"><img src="<?= base_url() ?>assets/assets/blog/<?= $data->img ?>" class="card-img" alt="..."></a>
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <p class="card-text"><?= date('d F Y', strtotime($data->tanggal_post)); ?></p>
                                        <a href="<?= base_url() ?>id/artikel/<?= $data->slug ?>">
                                            <h5 class="card-title"><?= $data->judul ?></h5>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                    <h2 class="mb-4 mt-3" style="border-bottom:2px solid #ffc107;">Arsip</h2>

                    <?php
                    // var_dump($archives);
                    foreach ($archives as $data) { ?>
                        <a href="<?= base_url() ?>id/resource/archive/<?= $data['Month(tanggal_post)'] ?>">
                            <h4 class="mb-3" style="border-bottom:1px"><?= bulan($data['Month(tanggal_post)']) ?> (<?= $data['jml'] ?>)</h4>
                        </a>
                    <?php } ?>
                    <h2 class="mb-4 mt-5" style="border-bottom:2px solid #ffc107;">Kategori</h2>
                    <div class="container">
                        <div class="pp-category-filter">
                            <div class="row">
                                <div class="col-md-12">
                                    <a style="color: black; background:white" class="rounded btn btn-warning" href="<?= base_url() ?>id/resource">Semua</a>
                                    <?php foreach ($kategori as $data) { ?>
                                        <a style="color: black; background:white" class="rounded btn btn-outline-warning" href="<?= base_url() ?>id/resource/category/<?= $data->nama_kategori ?>"><?= $data->nama_kategori ?></a>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<?php
function bulan($bulan)
{
    switch ($bulan) {
        case 1:
            $bulan = "Januari";
            break;
        case 2:
            $bulan = "Februari";
            break;
        case 3:
            $bulan = "Maret";
            break;
        case 4:
            $bulan = "April";
            break;
        case 5:
            $bulan = "Mei";
            break;
        case 6:
            $bulan = "Juni";
            break;
        case 7:
            $bulan = "Juli";
            break;
        case 8:
            $bulan = "Agustus";
            break;
        case 9:
            $bulan = "September";
            break;
        case 10:
            $bulan = "Oktober";
            break;
        case 11:
            $bulan = "November";
            break;
        case 12:
            $bulan = "Desember";
            break;
    }
    return $bulan;
}
?>