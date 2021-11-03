<div class="text-center bg-image mt-5" style="background-size: cover; background-repeat: no-repeat;background-image: url(<?= base_url() ?>assets/assets/img/<?= $resource->img_header ?>);height: 60vh;">
    <div class="mask h-100 w-100" style="background-color: rgba(0, 0, 0, 0.6);">
        <div class="d-flex justify-content-center align-items-center h-100">
            <div class="text-white">
                <h1 class="text-center display-4">Resources</h1>
                <!-- <a class="btn btn-warning btn-lg" href="<?= base_url() ?>moneytype" role="button">Money Type Quiz</a> -->
                <?php if ($this->session->flashdata('error') != null) { ?>
                    <script>
                        Swal.fire({
                            position: 'top-end',
                            icon: 'error',
                            text: "<?php echo $this->session->flashdata('error'); ?>",
                            timer: 2500,
                            showConfirmButton: false,
                            type: 'error'
                        });
                    </script>
                <?php } ?>
                <?php if ($this->session->flashdata('msg') != null) { ?>
                    <script>
                        Swal.fire({
                            position: 'top-end',
                            icon: 'success',
                            text: "<?php echo $this->session->flashdata('msg'); ?>",
                            timer: 2500,
                            showConfirmButton: false,
                            type: 'succes'
                        });
                    </script>
                <?php } ?>
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
                <?php if (!empty($resource_id_detail->judul)) { ?>
                    <div class="container">
                        <h1 class="display-5"><?= $resource_id_detail->judul ?></h1>
                        <p class="text-right" style="font-size: x-large;"><?= date('F d, Y', strtotime($resource_id_detail->tanggal_post)); ?></p>
                        <img src="<?= base_url() ?>assets/assets/blog/<?= $resource_id_detail->img ?>" class="img-fluid mb-4" alt="">
                        <div align="justify" style="font-size: large;" class="konten mb-5">
                            <?= $resource_id_detail->isi ?>
                        </div>
                        <div class="row mb-5">
                            <div class="col-md-6"><button disabled class="btn btn-warning"> <?= $resource_id_detail->nama_kategori ?> </button></div>
                            <div class="col-md-6 text-right">
                                <?php foreach ($sosmed as $key) { ?>
                                    <a title="<?= $key->nama_sosmed ?>" target="_blank" href="<?= $key->link ?>" class="btn btn-sm btn-outline-dark btn-social mx-1"><i class="fa-fw <?= $key->icon ?>"></i></a>
                                <?php  } ?>
                            </div>
                        </div>
                        <hr>
                        <?php
                        if (empty($komen)) { ?>
                            <h3>Tidak ada komentar</h3>
                        <?php }
                        foreach ($komen as $key) { ?>
                            <div class="row">
                                <div class="col-md-1">
                                    <img width="80px" src="<?= base_url() ?>assets/assets/img/none.png" class="img-fluid rounded-circle mb-4" alt="">
                                </div>
                                <div class="col-md-10">
                                    <p style="font-size: medium;"><?= $key->nama ?></p>
                                    <p style="font-size: small;" class="mb-3"><?= date('d F Y, H:i', strtotime($key->tgl)); ?></p>
                                    <p style="font-size: large;"><?= $key->komen ?></p>
                                </div>
                            </div>
                        <?php  } ?>
                        <hr>
                        <div class="comment mb-5">
                            <h2>Leave a Reply</h2>
                            <p>Your email address will not be published. Required fields are marked *</p>
                            <form id="komen_form" action="<?= base_url() ?>id/resource/add_komen" method="post">
                                <div class="form-group">
                                    <h4 class="mb-2" for="komen">Comment</h4>
                                    <input type="hidden" name="id_blog" value="<?= $resource_id_detail->id_blog ?>">
                                    <input type="hidden" name="slug" value="<?= $resource_id_detail->slug ?>">
                                    <textarea rows="10" required name="komen" id="komen" class="form-control" placeholder=""></textarea>
                                    <!-- <small id="helpId" class="text-muted">Help text</small> -->
                                </div>
                                <div class="form-group">
                                    <h4 class="mb-2" for="nama">Name</h4>
                                    <input type="text" name="nama" required id="nama" class="form-control" placeholder="">
                                    <!-- <small id="helpId" class="text-muted">Help text</small> -->
                                </div>
                                <div class="form-group">
                                    <h4 class="mb-2" for="email">Email</h4>
                                    <input type="email" name="email" required id="email" class="form-control" placeholder="">
                                    <!-- <small id="helpId" class="text-muted">Help text</small> -->
                                </div>
                                <div class="form-group">
                                    <h4 class="mb-2" for="web">Website</h4>
                                    <input type="text" name="web" id="web" required class="form-control" placeholder="">
                                    <!-- <small id="helpId" class="text-muted">Help text</small> -->
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-outline-warning">Kirim Komentar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                <?php  } ?>
            </div>
            <div class="col-md-4 mt-3 mb-5">
                <div class="container">
                    <h2 class="mb-5" style="border-bottom:2px solid #ffc107;">Postingan Terbaru</h2>
                    <?php foreach ($recent as $data) { ?>
                        <div class="cardborder-0 mt-3" style="max-width: 540px;">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <a href="<?= base_url() ?>id/artikel/<?= $data->slug ?>">
                                        <img src="<?= base_url() ?>assets/assets/blog/<?= $data->img ?>" class="card-img" alt="...">
                                    </a>
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
<script>
    $(document).ready(function() {
        $('#komen_form').validate({ // initialize the plugin
            rules: {
                messages: {
                    komen: {
                        required: "Komentar tidak boleh kosong"
                    }
                },
                messages: {
                    nama: {
                        required: "Nama tidak boleh kosong"
                    }
                },
                messages: {
                    email: {
                        required: "Email tidak boleh kosong"
                    }
                },
                messages: {
                    web: {
                        required: "Website tidak boleh kosong"
                    }
                }
            }
        });

    });
</script>