<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Home EN</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <?php if ($this->session->flashdata('error') != null) { ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo $this->session->flashdata('error'); ?>
                    </div>
                <?php } ?>
                <?php if ($this->session->flashdata('msg') != null) { ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo $this->session->flashdata('msg'); ?>
                    </div>
                <?php } ?>
                <div class="card card-outline card-info">
                    <div class="card-header">
                        <h4 class="mb-5">Header Home</h4>
                        <div class="text-right">
                            <div class="col-md-12">
                                <button type="button" class="btn btn-outline-success block" onclick="add_header()" data-bs-toggle="modal">
                                    Tambah Header
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="table1" class="table table1 table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Image</th>
                                        <th>Header EN</th>
                                        <th>Header ID</th>
                                        <th>Ukuran Font</th>
                                        <th>Warna Teks</th>
                                        <th>AKSI</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($home as $data) { ?>
                                        <tr>
                                            <td><?php echo $no++ ?></td>
                                            <td><img width="150px" src="<?= base_url() ?>assets/assets/img/<?= $data->image ?>"></td>
                                            <td><?php echo $data->masthead_us ?></td>
                                            <td><?php echo $data->masthead_id ?></td>
                                            <td><?php echo $data->font_size ?></td>
                                            <td><input disabled class="form-control" type="color" value="<?php echo $data->color ?>"></td>
                                            <td class="text-center">
                                                <a class="btn btn-outline-primary" href="javascript:void(0)" title="Edit" onclick="edit_header('<?php echo $data->id_home ?>')"><i class="fas fa-pen"></i></a>
                                                <a title="Hapus" class="btn btn-outline-danger alert_notif" href="<?php echo base_url() ?>admin/home/delete_header/<?php echo $data->id_home ?>"><i class="fas fa-trash"></i></a>
                                            </td>
                                        </tr>
                                    <?php }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.col-->
        </div>
        <!-- ./row -->
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-outline card-info">
                    <div class="card-header">
                        <h4 class="mb-5">Feature 1 EN</h4>
                    </div>
                    <div class="card-body">
                        <form action="<?= base_url() ?>admin/home/update_feature" method="post">
                            <input type="hidden" name="id" value="<?= $feature->id_feature ?>">
                            <div class="form-group">
                                <label for="header">Header</label>
                                <input type="text" required name="header" value="<?= $feature->header ?>" id="header" class="form-control" placeholder="Header">
                            </div>
                            <div class="form-group">
                                <label for="konten">Sub Header</label>
                                <textarea name="konten" required id="konten" class="form-control" rows="5" placeholder="Header"><?= $feature->konten ?></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /.col-->
        </div>
        <!-- ./row -->
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-outline card-info">
                    <!-- /.card-header -->
                    <div class="card-header">
                        <h4 class="mb-5">Feature 2 EN</h4>
                        <form action="<?= base_url() ?>admin/home/update_header_feature2_en" enctype="multipart/form-data" method="post">
                            <div class="form-group ">
                                <input type="hidden" id="id" name="id" value="<?= $header_feature2->id_feature ?>">
                                <label for="header">Header</label>
                                <input type="text" required name="header" value="<?= $header_feature2->header ?>" class="form-control" placeholder="Header Profile">
                            </div>
                            <div class="form-group pt-2">
                                <label for="konten">Sub Header</label>
                                <textarea id="konten" required name="konten" class="form-control" placeholder="konten" rows="5"><?= $header_feature2->konten ?></textarea>
                            </div>
                            <div class="text-left">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </form>
                    </div>
                    <div class="card-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6 mt-5">
                                    <a id="denied" type="button" class="btn btn-danger" href="<?= base_url() ?>admin/home/gambar_denied/<?= $status->id_admin ?>">
                                        Tidak tampilkan gambar
                                    </a>
                                    <a id="allow" type="button" class="btn btn-success" href="<?= base_url() ?>admin/home/gambar_allow/<?= $status->id_admin ?>">
                                        Tampilkan gambar
                                    </a>
                                </div>
                                <div class="col-md-6 text-right mt-5">
                                    <?php if ($status->akses == 1) { ?>
                                        <p>Status gambar : <span class="badge badge-success badge-lg">Tampil</span></p>
                                    <?php } elseif ($status->akses == 0) { ?>
                                        <p>Status gambar : <span class="badge badge-danger badge-lg">Tidak Tampil</span></p>
                                    <?php } ?>

                                </div>
                            </div>
                            <div class="row mt-5">
                                <div class="col-md-4">
                                    <div class="card text-center">
                                        <form enctype="multipart/form-data" action="<?= base_url() ?>admin/home/update_feature_ocs" method="post">
                                            <div class="card-body">
                                                <?php if ($status->akses == 1) { ?>
                                                    <div class="text-center mb-4">
                                                        <img class="img-fluid" src="<?= base_url() ?>assets/assets/img/<?= $feature2->img_ocs ?>" width="300px" class="image-fluid" id="image-preview3" alt="image preview">
                                                    </div>
                                                <?php } ?>
                                                <div class="custom-file">
                                                    <input type="hidden" name="gambar_lama" value="<?= $feature2->img_ocs ?>">
                                                    <input type="file" name="gambar" id="image-source3" class="custom-file-input" accept="image/x-png,image/jpg,image/jpeg" onchange="previewImage3();">
                                                    <label class="custom-file-label" for="gallery-photo-add">Pilih Gambar</label>
                                                    <small id="helpId" class="text-muted">*Maksimal 1 mb</small>
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" required name="header" value="<?= $feature2->header_ocs ?>" id="header" class="form-control" placeholder="Title">
                                                </div>
                                                <div class="form-group">
                                                    <textarea row="5" type="text" name="konten" id="konten" class="form-control" placeholder="Sub Title"><?= $feature2->konten_ocs ?></textarea>
                                                </div>
                                            </div>
                                            <div class="card-footer text-muted mx-auto mb-5">
                                                <button type="submit" class="btn btn-outline-warning text-dark btn-md">Update</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card text-center">
                                        <form enctype="multipart/form-data" action="<?= base_url() ?>admin/home/update_feature_fp" method="post">
                                            <input type="hidden" name="gambar_lama" value="<?= $feature2->img_fp ?>">
                                            <div class="card-body">
                                                <?php if ($status->akses == 1) { ?>
                                                    <div class="text-center mb-4">
                                                        <img class="img-fluid" src="<?= base_url() ?>assets/assets/img/<?= $feature2->img_fp ?>" width="300px" class="image-fluid" id="image-preview4" alt="image preview">
                                                    </div>
                                                <?php } ?>
                                                <div class="custom-file">
                                                    <input type="file" name="gambar" id="image-source4" class="custom-file-input" accept="image/x-png,image/jpg,image/jpeg" onchange="previewImage4();">
                                                    <label class="custom-file-label" for="gallery-photo-add">Pilih Gambar</label>
                                                    <small id="helpId" class="text-muted">*Maksimal 1 mb</small>
                                                </div>

                                                <div class="form-group">
                                                    <input type="text" required name="header" value="<?= $feature2->header_fp ?>" id="header" class="form-control" placeholder="Title">
                                                </div>
                                                <div class="form-group">
                                                    <textarea row="5" type="text" name="konten" id="konten" class="form-control" placeholder="Sub Title"><?= $feature2->konten_fp ?></textarea>
                                                </div>
                                            </div>
                                            <div class="card-footer text-muted mx-auto mb-5">
                                                <button type="submit" class="btn btn-outline-warning text-dark btn-md">Update</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card text-center">
                                        <form action="<?= base_url() ?>admin/home/update_feature_mc" method="post" enctype="multipart/form-data">
                                            <input type="hidden" name="gambar_lama" value="<?= $feature2->img_mc ?>">
                                            <div class="card-body">
                                                <?php if ($status->akses == 1) { ?>
                                                    <div class="text-center mb-4">
                                                        <img class="img-fluid" src="<?= base_url() ?>assets/assets/img/<?= $feature2->img_mc ?>" width="300px" class="image-fluid" id="image-preview5" alt="image preview">
                                                    </div>
                                                <?php } ?>
                                                <div class="custom-file">
                                                    <input type="file" name="gambar" id="image-source5" class="custom-file-input" accept="image/x-png,image/jpg,image/jpeg" onchange="previewImage5();">
                                                    <label class="custom-file-label" for="gallery-photo-add">Pilih Gambar</label>
                                                    <small id="helpId" class="text-muted">*Maksimal 1 mb</small>
                                                </div>

                                                <div class="form-group">
                                                    <input type="text" required name="header" value="<?= $feature2->header_mc ?>" id="header" class="form-control" placeholder="Title">
                                                </div>
                                                <div class="form-group">
                                                    <textarea row="5" type="text" name="konten" id="konten" class="form-control" placeholder="Sub Title"><?= $feature2->konten_mc ?></textarea>
                                                </div>
                                            </div>
                                            <div class="card-footer text-muted mx-auto mb-5">
                                                <button type="submit" class="btn btn-outline-warning text-dark btn-md">Update</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.col-->
            </div>
            <!-- ./row -->
    </section>
    <!-- /.content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-outline card-info">
                    <!-- /.card-header -->
                    <div class="card-header">
                        <h4 class="mb-5">Feature 3 EN</h4>
                        <form action="<?= base_url() ?>admin/home/update_feature3" enctype="multipart/form-data" method="post">
                            <div class="text-center">
                                <label for="">Background</label>
                            </div>
                            <div class="form-group">
                                <div class="text-center mb-4">
                                    <input type="hidden" id="id" name="id" value="<?= $feature3->id_feature ?>">
                                    <input type="hidden" name="gambar_lama" value="<?= $feature3->img ?>">
                                    <img width="300px" src="<?= base_url() ?>assets/assets/img/<?= $feature3->img ?>" class="image-fluid" id="image-preview6" alt="image preview">
                                </div>
                                <div class="custom-file">
                                    <input type="file" name="gambar" id="image-source6" class="custom-file-input" accept="image/x-png,image/jpg,image/jpeg" onchange="previewImage6();">
                                    <label class="custom-file-label" for="gallery-photo-add">Pilih Gambar</label>
                                    <small id="helpId" class="text-muted">*Maksimal 1 mb</small>
                                </div>
                            </div>

                            <div class="form-group ">
                                <input type="hidden" id="id" name="id" value="<?= $feature3->id_feature ?>">
                                <label for="header">Header</label>
                                <input type="text" required name="header" value="<?= $feature3->header ?>" class="form-control" placeholder="Header Profile">
                            </div>
                            <div class="form-group pt-2">
                                <label for="konten">Sub Header</label>
                                <textarea id="konten" required name="konten" class="form-control" placeholder="konten" rows="5"><?= $feature3->konten ?></textarea>
                            </div>
                            <div class="text-left">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /.col-->
            </div>
            <!-- ./row -->
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-outline card-info">
                    <!-- /.card-header -->
                    <div class="card-header">
                        <h4 class="mb-5">Feature 4 EN</h4>
                        <button type="button" class="btn btn-outline-success block" onclick="add_feature4()" data-bs-toggle="modal">
                            Tambah Feature 4
                        </button>
                    </div>
                    <div class="container">
                        <div class="row">
                            <?php foreach ($feature4 as $data) { ?>
                                <div class="col-md-4 mb-2">
                                    <div class="card h-100">
                                        <div class="bg-white text-center rounded shadow-sm py-5 px-4 h-100">
                                            <img width="50px" src="<?= base_url() ?>assets/assets/img/<?= $data->icon ?>" alt="" srcset="">
                                            <h5 class="mb-4 mt-5"><strong><?= $data->title ?></strong></h5>
                                            <p><?= $data->konten ?></p>
                                            <a class="btn btn-outline-primary" href="javascript:void(0)" title="Edit" onclick="edit_feature4('<?php echo $data->id_feature ?>')"><i class="fas fa-pen"></i></a>
                                            <a title="Hapus" class="btn btn-outline-danger alert_notif" href="<?php echo base_url() ?>admin/home/delete_feature4/<?php echo $data->id_feature ?>"><i class="fas fa-trash"></i></a>
                                        </div>
                                    </div>
                                </div>
                            <?php  } ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.col-->
        </div>
        <!-- ./row -->
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-outline card-info">
                    <!-- /.card-header -->
                    <div class="card-header">
                        <h4 class="mb-5">Feature 5 EN</h4>
                        <form action="<?= base_url() ?>admin/home/update_feature5" enctype="multipart/form-data" method="post">
                            <div class="text-center">
                                <label for="">Background</label>
                            </div>
                            <div class="form-group">
                                <div class="text-center mb-4">
                                    <input type="hidden" id="id" name="id" value="<?= $feature5->id_feature ?>">
                                    <input type="hidden" name="gambar_lama" value="<?= $feature5->img ?>">
                                    <img width="300px" src="<?= base_url() ?>assets/assets/img/<?= $feature5->img ?>" class="image-fluid" id="image-preview9" alt="image preview">
                                </div>
                                <div class="custom-file">
                                    <input type="file" name="gambar" id="image-source9" class="custom-file-input" accept="image/x-png,image/jpg,image/jpeg" onchange="previewImage9();">
                                    <label class="custom-file-label" for="gallery-photo-add">Pilih Gambar</label>
                                    <small id="helpId" class="text-muted">*Maksimal 1 mb</small>
                                </div>
                            </div>

                            <div class="form-group ">
                                <input type="hidden" id="id" name="id" value="<?= $feature5->id_feature ?>">
                                <label for="header">Header</label>
                                <input type="text" required name="header" value="<?= $feature5->header ?>" class="form-control" placeholder="Header Profile">
                            </div>
                            <div class="form-group pt-2">
                                <label for="konten">Sub Header</label>
                                <textarea id="konten" required name="konten" class="form-control" placeholder="konten" rows="5"><?= $feature5->konten ?></textarea>
                            </div>
                            <div class="text-left">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /.col-->
            </div>
            <!-- ./row -->
    </section>
</div>
<script>
    function add_header() {
        save_method = 'add';
        // $('#form2')[0].reset(); // reset form on modals
        $('#default2').modal('show'); // show bootstrap modal
    }

    function add_feature4() {
        save_method = 'add';
        // $('#form2')[0].reset(); // reset form on modals
        $('#feature_modal').modal('show'); // show bootstrap modal
    }

    function edit_header(id) {
        save_method = 'update';
        // $('#form1')[0].reset(); // reset form on modals

        //Ajax Load data from ajax
        $.ajax({
            url: "<?php echo site_url('admin/home/ajax_header') ?>/" + id,
            type: "GET",
            dataType: "JSON",
            success: function(data) {

                $('[name="id"]').val(data.id_home);
                $('[name="masthead_us"]').val(data.masthead_us);
                $('[name="masthead_id"]').val(data.masthead_id);
                $('[name="gambar_lama"]').val(data.image);
                $('[name="color"]').val(data.color);
                $('[name="font_size"]').val(data.font_size);
                $('#edit-data').modal('show'); // show bootstrap modal when complete loaded
                $('.modal-title').text('Edit Header'); // Set title to Bootstrap modal title

            },
            error: function(jqXHR, textStatus, errorThrown) {
                alert('Error get data from ajax');
            }
        });
    }

    function edit_feature4(id) {
        save_method = 'update';
        // $('#form1')[0].reset(); // reset form on modals

        //Ajax Load data from ajax
        $.ajax({
            url: "<?php echo site_url('admin/home/ajax_feature4') ?>/" + id,
            type: "GET",
            dataType: "JSON",
            success: function(data) {

                $('[name="id"]').val(data.id_feature);
                $('[name="title"]').val(data.title);
                $('[name="konten"]').val(data.konten);
                $('[name="gambar_lama"]').val(data.icon);
                $('#edit_feature').modal('show'); // show bootstrap modal when complete loaded
                $('.modal-title').text('Edit Feature'); // Set title to Bootstrap modal title
            },
            error: function(jqXHR, textStatus, errorThrown) {
                alert('Error get data from ajax');
            }
        });
    }
</script>
<div class="modal fade text-left" id="default2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-dialog modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel1">Tambah Header</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="form2" enctype="multipart/form-data" action="<?php echo base_url() ?>admin/home/add_header" method="post">
                <div class="modal-body">
                    <label class="mt-4" for="img">Foto</label><br>
                    <div class="text-center mb-4">
                        <img width="300px" style="display: none;" class="image-fluid" id="image-preview" alt="image preview">
                    </div>
                    <div class="custom-file">
                        <input type="file" required name="gambar" id="image-source" class="custom-file-input" accept="image/x-png,image/jpg,image/jpeg, image/gif" onchange="previewImage();">
                        <label class="custom-file-label" for="gallery-photo-add">Pilih Gambar</label>
                        <small id="helpId" class="text-muted">*Maksimal 1 mb</small>
                    </div>
                    <div class="form-group mb-3 mt-3">
                        <label for="email">Header Label EN</label>
                        <textarea required title="Tidak boleh kosong" name="masthead_us" id="masthead_us" class="form-control" placeholder="Header EN"></textarea>
                    </div>
                    <div class="form-group mb-3 mt-3">
                        <label for="email">Header Label ID</label>
                        <textarea required title="Tidak boleh kosong" name="masthead_id" id="masthead_id" class="form-control" placeholder="Header ID"></textarea>
                    </div>
                    <div class="form-group mb-3 mt-3">
                        <label for="email">Warna Teks</label>
                        <input type="color" name="color" id="color" class="form-control">
                    </div>
                    <div class="form-group mb-3 mt-3">
                        <label for="email">Size Teks</label>
                        <input type="number" name="font_size" id="font_size" class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary ml-1">
                        <i class="bx bx-check d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Accept</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Modal Ubah -->
<div class="modal" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="edit-data" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Home EN</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="edit_header" action="<?= base_url() ?>admin/home/update_header" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group pt-5">
                        <!-- <label for="customFile">Custom File</label> -->
                        <input type="hidden" id="id" name="id">
                        <input type="hidden" id="gambar_lama" name="gambar_lama">
                        <div class="text-center mb-4">
                            <img width="300px" style="display: none;" class="image-fluid" id="image-preview2" alt="image preview">
                        </div>
                        <div class="custom-file">
                            <input type="file" name="gambar" id="image-source2" class="custom-file-input" accept="image/x-png,image/jpg,image/jpeg, image/gif" onchange="previewImage2();">
                            <label class="custom-file-label" for="gallery-photo-add">Pilih Gambar</label>
                            <small id="helpId" class="text-muted">*Maksimal 1 mb</small>
                        </div>
                        <div class="form-group mb-3 mt-3">
                            <label for="email">Header Label EN</label>
                            <textarea required title="Tidak boleh kosong" name="masthead_us" id="masthead_us" class="form-control" placeholder="Masthead"></textarea>
                        </div>
                        <div class="form-group mb-3 mt-3">
                            <label for="email">Header Label ID</label>
                            <textarea required title="Tidak boleh kosong" name="masthead_id" id="masthead_id" class="form-control" placeholder="Masthead"></textarea>
                        </div>
                        <div class="form-group mb-3 mt-3">
                            <label for="email">Warna Teks</label>
                            <input type="color" name="color" id="color" class="form-control">
                        </div>
                        <div class="form-group mb-3 mt-3">
                            <label for="email">Size Teks</label>
                            <input type="number" name="font_size" id="font_size" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Update</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade text-left" id="feature_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-dialog modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel1">Tambah Feature</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="feature" enctype="multipart/form-data" action="<?php echo base_url() ?>admin/home/add_feature4" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" required name="title" class="form-control" id="title">
                    </div>
                    <div class="form-group">
                        <label for="konten">Content</label>
                        <textarea name="konten" required rows="5" class="form-control" id="konten"></textarea>
                    </div>
                    <label class="mt-4" for="icon">Icon</label><br>
                    <div class="text-center mb-4">
                        <img width="200px" style="display: none;" class="image-fluid" id="image-preview7" alt="image preview">
                    </div>
                    <div class="custom-file">
                        <input type="file" required name="gambar" id="image-source7" class="custom-file-input" accept="image/x-png,image/jpg,image/jpeg" onchange="previewImage7();">
                        <label class="custom-file-label" for="gallery-photo-add">Pilih Icon</label>
                        <small id="helpId" class="text-muted">*Maksimal 1 mb</small>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary ml-1">
                        <i class="bx bx-check d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Accept</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade text-left" id="edit_feature" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-dialog modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel1">Edit Feature 4</h5>
                <button type="button" class="close rounded-pill" data-bs-dismiss="modal" aria-label="Close">
                    <i data-feather="x"></i>
                </button>
            </div>
            <form id="edit_feature_form" enctype="multipart/form-data" action="<?php echo base_url() ?>admin/home/update_feature4" method="post">
                <div class="modal-body">
                    <input type="hidden" name="id" value="">
                    <input type="hidden" name="gambar_lama" value="">
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" required name="title" class="form-control" id="title">
                    </div>
                    <div class="form-group">
                        <label for="konten">Content</label>
                        <textarea name="konten" required rows="5" class="form-control" id="konten"></textarea>
                    </div>
                    <label class="mt-4" for="gambar">Icon</label><br>
                    <div class="text-center mb-4">
                        <input type="hidden" name="gambar_lama" value="">
                        <img width="200px" style="display: none;" class="image-fluid" id="image-preview8" alt="image preview">
                    </div>
                    <div class="custom-file">
                        <input type="file" name="gambar" id="image-source8" class="custom-file-input" accept="image/x-png,image/jpg,image/jpeg" onchange="previewImage8();">
                        <label class="custom-file-label" for="gallery-photo-add">Pilih Gambar</label>
                        <small id="helpId" class="text-muted">*Maksimal 1 mb</small>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary ml-1">
                        <i class="bx bx-check d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Accept</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    function previewImage() {
        document.getElementById("image-preview").style.display = "block";
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("image-source").files[0]);
        oFReader.onload = function(oFREvent) {
            document.getElementById("image-preview").src = oFREvent.target.result;
        };
    };

    function previewImage2() {
        document.getElementById("image-preview2").style.display = "block";
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("image-source2").files[0]);
        oFReader.onload = function(oFREvent) {
            document.getElementById("image-preview2").src = oFREvent.target.result;
        };
    };

    function previewImage3() {
        document.getElementById("image-preview3").style.display = "block";
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("image-source3").files[0]);
        oFReader.onload = function(oFREvent) {
            document.getElementById("image-preview3").src = oFREvent.target.result;
        };
    };

    function previewImage4() {
        document.getElementById("image-preview4").style.display = "block";
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("image-source4").files[0]);
        oFReader.onload = function(oFREvent) {
            document.getElementById("image-preview4").src = oFREvent.target.result;
        };
    };

    function previewImage5() {
        document.getElementById("image-preview5").style.display = "block";
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("image-source5").files[0]);
        oFReader.onload = function(oFREvent) {
            document.getElementById("image-preview5").src = oFREvent.target.result;
        };
    };

    function previewImage6() {
        document.getElementById("image-preview6").style.display = "block";
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("image-source6").files[0]);
        oFReader.onload = function(oFREvent) {
            document.getElementById("image-preview6").src = oFREvent.target.result;
        };
    };

    function previewImage7() {
        document.getElementById("image-preview7").style.display = "block";
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("image-source7").files[0]);
        oFReader.onload = function(oFREvent) {
            document.getElementById("image-preview7").src = oFREvent.target.result;
        };
    };

    function previewImage8() {
        document.getElementById("image-preview8").style.display = "block";
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("image-source8").files[0]);
        oFReader.onload = function(oFREvent) {
            document.getElementById("image-preview8").src = oFREvent.target.result;
        };
    };

    function previewImage9() {
        document.getElementById("image-preview9").style.display = "block";
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("image-source9").files[0]);
        oFReader.onload = function(oFREvent) {
            document.getElementById("image-preview9").src = oFREvent.target.result;
        };
    };
    $(document).ready(function() {
        $('#image_contact').validate({
            rules: {
                masthead: {
                    required: true
                },
            }
        });

    });
    $(function() {
        $('[name="gambar"]').change(function() {
            if (Math.round(this.files[0].size / (1024 * 1024)) > 1) {
                alert('Please select image size less than 1 MB');
                $('[name="gambar"]').val(null);
            }
        });
    });
    $(document).ready(function() {
        $('#edit_header').validate({
            rules: {
                email: {
                    required: true
                },
                phone: {
                    required: true
                },
                alamat: {
                    required: true
                }
            }
        });
    });
    jQuery(document).ready(function($) {
        $('#allow').on('click', function() {
            var getLink = $(this).attr('href');
            swal({
                title: "Apakah anda yakin?",
                text: "Gambar akan ditampilkan",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#5DADE2",
                confirmButtonText: "Ya, Tampilkan!",
                cancelButtonText: "Tidak, kembali!",
                closeOnConfirm: false,
                closeOnCancel: true
            }, function() {
                window.location.href = getLink
            });
            return false;
        });
    });
    jQuery(document).ready(function($) {
        $('#denied').on('click', function() {
            var getLink = $(this).attr('href');
            swal({
                title: "Apakah anda yakin?",
                text: "Gambar tidak akan ditampilkan",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#5DADE2",
                confirmButtonText: "Ya, jangan tampilkan!",
                cancelButtonText: "Tidak, kembali!",
                closeOnConfirm: false,
                closeOnCancel: true
            }, function() {
                window.location.href = getLink
            });
            return false;
        });
    });
</script>
<!-- Modal -->