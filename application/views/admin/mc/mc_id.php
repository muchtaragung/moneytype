<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Money Coaching ID</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
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
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form id="header" action="<?= base_url() ?>admin/mc/update_header_id" enctype="multipart/form-data" method="post">
                            <label for="">Header Money Coaching</label>
                            <input type="hidden" id="id" name="id" value="<?= $mc->id_mc ?>">
                            <input type="hidden" name="gambar_lama" value="<?= $mc->img_header ?>">
                            <div class="form-group text-center">
                                <img width="300px" id="previewImg" src="<?= base_url() ?>assets/assets/img/<?= $mc->img_header ?>" alt="" srcset="">
                                <div class="custom-file mt-5">
                                    <input type="file" name="gambar" class="custom-file-input" id="gambar" accept="image/x-png,image/jpg,image/jpeg" onchange="previewFile(this);">
                                    <label class="custom-file-label" for="gambar">Pilih Gambar</label>
                                    <small id="helpId" class="text-muted">*Maksimal 1 mb</small>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </form>
                        <hr>
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
                    <div class="card-header">
                        <h4 class="mb-5">Feature 1 ID</h4>
                        <div class="text-right">
                            <div class="col-md-12">
                                <button type="button" class="btn btn-outline-success block" onclick="add_type()" data-bs-toggle="modal">
                                    Tambah Feature
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
                                        <th>Title</th>
                                        <th>Content</th>
                                        <th>AKSI</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($feature1 as $data) { ?>
                                        <tr>
                                            <td><?php echo $no++ ?></td>
                                            <td><img width="150px" src="<?= base_url() ?>assets/assets/img/<?= $data->img ?>"></td>
                                            <td><?php echo $data->header ?></td>
                                            <td><?php echo $data->konten ?></td>
                                            <td class="text-center">
                                                <a class="btn btn-outline-primary" href="javascript:void(0)" title="Edit" onclick="edit_type('<?php echo $data->id_feature ?>')"><i class="fas fa-pen"></i></a>
                                                <a title="Hapus" class="btn btn-outline-danger alert_notif" href="<?php echo base_url() ?>admin/mc/delete_feature_id1/<?php echo $data->id_feature ?>"><i class="fas fa-trash"></i></a>
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
                    <!-- /.card-header -->
                    <div class="card-header">
                        <h4 class="mb-5">Feature 2 ID</h4>
                        <form action="<?= base_url() ?>admin/mc/update_bg_id" enctype="multipart/form-data" method="post">
                            <div class="text-center">
                                <label for="">Background Feature</label>
                            </div>
                            <div class="form-group">
                                <div class="text-center mb-4">
                                    <input type="hidden" id="id" name="id" value="<?= $mc->id_mc ?>">
                                    <input type="hidden" name="gambar_lama" value="<?= $mc->bg ?>">
                                    <img width="300px" src="<?= base_url() ?>assets/assets/img/<?= $mc->bg ?>" class="image-fluid" id="image-preview3" alt="image preview">
                                </div>
                                <div class="custom-file">
                                    <input required type="file" name="gambar" id="image-source3" class="custom-file-input" accept="image/x-png,image/jpg,image/jpeg" onchange="previewImage3();">
                                    <label class="custom-file-label" for="gallery-photo-add">Pilih Gambar</label>
                                    <small id="helpId" class="text-muted">*Maksimal 1 mb</small>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="text-left">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </div>
                        </form>
                        <hr>
                        <form action="<?= base_url() ?>admin/mc/update_header_feature_id" enctype="multipart/form-data" method="post">
                            <div class="form-group ">
                                <input type="hidden" id="id" name="id" value="<?= $header_feature->id_feature ?>">
                                <label for="header">Header</label>
                                <input type="text" required name="header" value="<?= $header_feature->header ?>" class="form-control" placeholder="Header Profile">
                            </div>
                            <div class="form-group pt-2">
                                <label for="konten">Sub Header</label>
                                <textarea id="konten" required name="konten" class="form-control" placeholder="konten" rows="5"><?= $header_feature->konten ?></textarea>
                            </div>
                            <div class="text-left">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </form>
                        <hr>
                        <div class="text-right">
                            <button type="button" class="btn btn-outline-success block" onclick="add_feature()" data-bs-toggle="modal">
                                Tambah Feature
                            </button>
                        </div>
                    </div>
                    <div class="card-bod">
                        <div class="container">
                            <div class="table-responsive">
                                <table id="table2" class="table table1 table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>icon</th>
                                            <th>Header</th>
                                            <th>Content</th>
                                            <th>AKSI</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        foreach ($feature2 as $data) { ?>
                                            <tr>
                                                <td><?php echo $no++ ?></td>
                                                <td><img width="50px" src="<?= base_url() ?>assets/assets/img/<?= $data->img ?>"></td>
                                                <td><?php echo $data->header ?></td>
                                                <td><?php echo $data->konten ?></td>
                                                <td class="text-center">
                                                    <a class="btn btn-outline-primary" href="javascript:void(0)" title="Edit" onclick="edit_feature('<?php echo $data->id_feature ?>')"><i class="fas fa-pen"></i></a>
                                                    <a title="Hapus" class="btn btn-outline-danger alert_notif" href="<?php echo base_url() ?>admin/mc/delete_feature_id2/<?php echo $data->id_feature ?>"><i class="fas fa-trash"></i></a>
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
                        <h4 class="mb-5">Feature 3 ID</h4>
                        <div class="row">
                            <div class="col-md-6">
                                <form action="<?= base_url() ?>admin/mc/update_header_feature3_id" enctype="multipart/form-data" method="post">
                                    <div class="text-center">
                                        <label for="">Image</label>
                                    </div>
                                    <div class="form-group">
                                        <div class="text-center mb-4">
                                            <input type="hidden" id="id" name="id" value="<?= $header3->id_feature ?>">
                                            <input type="hidden" name="gambar_lama" value="<?= $header3->img ?>">
                                            <img width="300px" src="<?= base_url() ?>assets/assets/img/<?= $header3->img ?>" class="image-fluid" id="image-preview7" alt="image preview">
                                        </div>
                                        <div class="custom-file">
                                            <input type="file" name="gambar" id="image-source7" class="custom-file-input" accept="image/x-png,image/jpg,image/jpeg" onchange="previewImage7();">
                                            <label class="custom-file-label" for="gallery-photo-add">Pilih Gambar</label>
                                            <small id="helpId" class="text-muted">*Maksimal 1 mb</small>
                                        </div>
                                    </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group ">
                                    <input type="hidden" id="id" name="id" value="<?= $header3->id_feature ?>">
                                    <label for="header">Header</label>
                                    <input type="text" required name="header" value="<?= $header3->header ?>" class="form-control" placeholder="Header Profile">
                                </div>
                                <div class="form-group pt-2">
                                    <label for="konten">Sub Header</label>
                                    <textarea id="konten" required name="konten" class="form-control" placeholder="konten" rows="5"><?= $header3->konten ?></textarea>
                                </div>
                                <div class="text-right">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                                </form>
                            </div>
                        </div>

                        <hr>
                        <div class="text-right">
                            <button type="button" class="btn btn-outline-success block" onclick="add_feature3()" data-bs-toggle="modal">
                                Tambah Feature
                            </button>
                        </div>
                    </div>
                    <div class="card-bod">
                        <div class="container">
                            <div class="table-responsive">
                                <table id="table2" class="table table1 table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Icon</th>
                                            <th>Header</th>
                                            <th>Content</th>
                                            <th>AKSI</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        foreach ($feature3 as $data) { ?>
                                            <tr>
                                                <td><?php echo $no++ ?></td>
                                                <td><img width="50px" src="<?= base_url() ?>assets/assets/img/<?= $data->img ?>"></td>
                                                <td><?php echo $data->header ?></td>
                                                <td><?php echo $data->konten ?></td>
                                                <td class="text-center">
                                                    <a class="btn btn-outline-primary" href="javascript:void(0)" title="Edit" onclick="edit_feature3('<?php echo $data->id_feature ?>')"><i class="fas fa-pen"></i></a>
                                                    <a title="Hapus" class="btn btn-outline-danger alert_notif" href="<?php echo base_url() ?>admin/mc/delete_feature_id3/<?php echo $data->id_feature ?>"><i class="fas fa-trash"></i></a>
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
            </div>
            <!-- /.col-->
        </div>
        <!-- ./row -->
    </section>
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

    function add_feature() {
        save_method = 'add';
        $('#feature')[0].reset(); // reset form on modals
        $('#feature_modal').modal('show'); // show bootstrap modal
        $('.modal-title').text('Tambah Feature 2'); // Set Title to Bootstrap modal title
    }

    function add_feature3() {
        save_method = 'add';
        $('#feature')[0].reset(); // reset form on modals
        $('#feature_modal3').modal('show'); // show bootstrap modal
        $('.modal-title').text('Tambah Feature 3'); // Set Title to Bootstrap modal title
    }

    function edit_feature3(id) {
        save_method = 'update';
        $('#form1')[0].reset(); // reset form on modals

        //Ajax Load data from ajax
        $.ajax({
            url: "<?php echo site_url('admin/mc/ajax_feature_id3') ?>/" + id,
            type: "GET",
            dataType: "JSON",
            success: function(data) {

                $('[name="id"]').val(data.id_feature);
                $('[name="gambar_lama"]').val(data.img);
                $('[name="header"]').val(data.header);
                $('[name="konten"]').val(data.konten);
                $('#edit_feature3').modal('show'); // show bootstrap modal when complete loaded
                $('.modal-title').text('Edit Feature 3'); // Set title to Bootstrap modal title

            },
            error: function(jqXHR, textStatus, errorThrown) {
                alert('Error get data from ajax');
            }
        });
    }

    function edit_feature(id) {
        save_method = 'update';
        $('#form1')[0].reset(); // reset form on modals

        //Ajax Load data from ajax
        $.ajax({
            url: "<?php echo site_url('admin/mc/ajax_feature_id2') ?>/" + id,
            type: "GET",
            dataType: "JSON",
            success: function(data) {

                $('[name="id"]').val(data.id_feature);
                $('[name="gambar_lama"]').val(data.img);
                $('[name="header"]').val(data.header);
                $('[name="konten"]').val(data.konten);
                $('#edit_feature').modal('show'); // show bootstrap modal when complete loaded
                $('.modal-title').text('Edit Feature'); // Set title to Bootstrap modal title

            },
            error: function(jqXHR, textStatus, errorThrown) {
                alert('Error get data from ajax');
            }
        });
    }

    function add_type() {
        save_method = 'add';
        $('#form2')[0].reset(); // reset form on modals
        $('#default2').modal('show'); // show bootstrap modal
        $('.modal-title').text('Tambah Feature 1'); // Set Title to Bootstrap modal title
    }

    function edit_type(id) {
        save_method = 'update';
        $('#form1')[0].reset(); // reset form on modals

        //Ajax Load data from ajax
        $.ajax({
            url: "<?php echo site_url('admin/mc/ajax_feature_id1') ?>/" + id,
            type: "GET",
            dataType: "JSON",
            success: function(data) {

                $('[name="id"]').val(data.id_feature);
                $('[name="gambar_lama"]').val(data.img);
                $('[name="header"]').val(data.header);
                $('[name="konten"]').val(data.konten);
                $('#default').modal('show'); // show bootstrap modal when complete loaded
                $('.modal-title').text('Edit Feature 1'); // Set title to Bootstrap modal title

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
                <h5 class="modal-title" id="myModalLabel1">Tambah Feature 1</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="form2" enctype="multipart/form-data" action="<?php echo base_url() ?>admin/mc/add_feature_id1" method="post">
                <div class="modal-body">
                    <label for="img">Image</label><br>
                    <div class="text-center mb-4">
                        <img width="300px" style="display: none;" class="image-fluid" id="image-preview4" alt="image preview">
                    </div>
                    <div class="custom-file">
                        <input type="file" name="gambar" id="image-source4" class="custom-file-input" accept="image/x-png,image/jpg,image/jpeg" onchange="previewImage4();">
                        <label class="custom-file-label" for="gallery-photo-add">Pilih Gambar</label>
                        <small id="helpId" class="text-muted">*Maksimal 1 mb</small>
                    </div>
                    <div class="form-group">
                        <label for="header">Title</label>
                        <input type="text" name="header" class="form-control" id="header">
                    </div>
                    <div class="form-group">
                        <label for="konten">Content</label>
                        <textarea name="konten" rows="5" class="form-control" id="konten"></textarea>
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
<div class="modal fade text-left" id="default" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-dialog modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel1">Edit Feature 1</h5>
                <button type="button" class="close rounded-pill" data-bs-dismiss="modal" aria-label="Close">
                    <i data-feather="x"></i>
                </button>
            </div>
            <form id="form1" enctype="multipart/form-data" action="<?php echo base_url() ?>admin/mc/update_feature_id1" method="post">
                <div class="modal-body">
                    <input type="hidden" name="id" value="">
                    <input type="hidden" name="gambar_lama" value="">
                    <div class="text-center mb-4">
                        <img width="300px" style="display: none;" class="image-fluid" id="image-preview5" alt="image preview">
                    </div>
                    <div class="custom-file">
                        <input type="file" name="gambar" id="image-source5" class="custom-file-input" accept="image/x-png,image/jpg,image/jpeg" onchange="previewImage5();">
                        <label class="custom-file-label" for="gallery-photo-add">Pilih Gambar</label>
                        <small id="helpId" class="text-muted">*Maksimal 1 mb</small>
                    </div>
                    <div class="form-group">
                        <label for="header">Header</label>
                        <input type="text" name="header" class="form-control" id="header">
                    </div>
                    <div class="form-group">
                        <label for="konten">Content</label>
                        <textarea name="konten" rows="5" class="form-control" id="konten"></textarea>
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
<div class="modal fade text-left" id="feature_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-dialog modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel1">Tambah Feature</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="feature" enctype="multipart/form-data" action="<?php echo base_url() ?>admin/mc/add_feature_id2" method="post">
                <div class="modal-body">
                    <label for="img">Image</label><br>
                    <div class="text-center mb-4">
                        <img width="300px" style="display: none;" class="image-fluid" id="image-preview2" alt="image preview">
                    </div>
                    <div class="custom-file">
                        <input type="file" name="gambar" id="image-source2" class="custom-file-input" accept="image/x-png,image/jpg,image/jpeg" onchange="previewImage2();">
                        <label class="custom-file-label" for="gallery-photo-add">Pilih Gambar</label>
                        <small id="helpId" class="text-muted">*Maksimal 1 mb</small>
                    </div>
                    <div class="form-group">
                        <label for="header">Header</label>
                        <input type="text" name="header" class="form-control" id="header">
                    </div>
                    <div class="form-group">
                        <label for="konten">Content</label>
                        <textarea name="konten" rows="5" class="form-control" id="konten"></textarea>
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
                <h5 class="modal-title" id="myModalLabel1">Edit Feature</h5>
                <button type="button" class="close rounded-pill" data-bs-dismiss="modal" aria-label="Close">
                    <i data-feather="x"></i>
                </button>
            </div>
            <form id="edit_feature_form" enctype="multipart/form-data" action="<?php echo base_url() ?>admin/mc/update_feature_id2" method="post">
                <div class="modal-body">
                    <input type="hidden" name="id" value="">
                    <input type="hidden" name="gambar_lama" value="">
                    <div class="text-center mb-4">
                        <img width="300px" style="display: none;" class="image-fluid" id="image-preview6" alt="image preview">
                    </div>
                    <div class="custom-file">
                        <input type="file" name="gambar" id="image-source6" class="custom-file-input" accept="image/x-png,image/jpg,image/jpeg" onchange="previewImage6();">
                        <label class="custom-file-label" for="gallery-photo-add">Pilih Gambar</label>
                        <small id="helpId" class="text-muted">*Maksimal 1 mb</small>
                    </div>
                    <div class="form-group">
                        <label for="header">Header</label>
                        <input type="text" name="header" class="form-control" id="header">
                    </div>
                    <div class="form-group">
                        <label for="konten">Content</label>
                        <textarea name="konten" rows="5" class="form-control" id="konten"></textarea>
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
<div class="modal fade text-left" id="feature_modal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-dialog modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel1">Tambah Feature</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="feature" enctype="multipart/form-data" action="<?php echo base_url() ?>admin/mc/add_feature_id3" method="post">
                <div class="modal-body">
                    <label for="img">Icon</label><br>
                    <div class="text-center mb-4">
                        <img width="300px" style="display: none;" class="image-fluid" id="image-preview2" alt="image preview">
                    </div>
                    <div class="custom-file">
                        <input type="file" required name="gambar" id="image-source2" class="custom-file-input" accept="image/x-png,image/jpg,image/jpeg" onchange="previewImage2();">
                        <label class="custom-file-label" for="gallery-photo-add">Pilih Gambar</label>
                        <small id="helpId" class="text-muted">*Maksimal 1 mb</small>
                    </div>
                    <div class="form-group">
                        <label for="header">Header</label>
                        <input type="text" required name="header" class="form-control" id="header">
                    </div>
                    <div class="form-group">
                        <label for="konten">Content</label>
                        <textarea name="konten" required rows="5" class="form-control" id="konten"></textarea>
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
<div class="modal fade text-left" id="edit_feature3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-dialog modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel1">Edit Feature</h5>
                <button type="button" class="close rounded-pill" data-bs-dismiss="modal" aria-label="Close">
                    <i data-feather="x"></i>
                </button>
            </div>
            <form id="edit_feature_form" enctype="multipart/form-data" action="<?php echo base_url() ?>admin/mc/update_feature_id3" method="post">
                <div class="modal-body">
                    <input type="hidden" name="id" value="">
                    <input type="hidden" name="gambar_lama" value="">
                    <div class="text-center mb-4">
                        <img width="300px" style="display: none;" class="image-fluid" id="image-preview8" alt="image preview">
                    </div>
                    <div class="custom-file">
                        <input type="file" name="gambar" id="image-source8" class="custom-file-input" accept="image/x-png,image/jpg,image/jpeg" onchange="previewImage8();">
                        <label class="custom-file-label" for="gallery-photo-add">Pilih Gambar</label>
                        <small id="helpId" class="text-muted">*Maksimal 1 mb</small>
                    </div>
                    <div class="form-group">
                        <label for="header">Header</label>
                        <input type="text" required name="header" class="form-control" id="header">
                    </div>
                    <div class="form-group">
                        <label for="konten">Content</label>
                        <textarea name="konten" required rows="5" class="form-control" id="konten"></textarea>
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
    function previewImage8() {
        document.getElementById("image-preview8").style.display = "block";
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("image-source8").files[0]);
        oFReader.onload = function(oFREvent) {
            document.getElementById("image-preview8").src = oFREvent.target.result;
        };
    };

    function previewImage7() {
        document.getElementById("image-preview8").style.display = "block";
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("image-source7").files[0]);
        oFReader.onload = function(oFREvent) {
            document.getElementById("image-preview7").src = oFREvent.target.result;
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

    function previewImage5() {
        document.getElementById("image-preview5").style.display = "block";
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("image-source5").files[0]);
        oFReader.onload = function(oFREvent) {
            document.getElementById("image-preview5").src = oFREvent.target.result;
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

    function previewImage3() {
        document.getElementById("image-preview3").style.display = "block";
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("image-source3").files[0]);
        oFReader.onload = function(oFREvent) {
            document.getElementById("image-preview3").src = oFREvent.target.result;
        };
    };
    $(document).ready(function() {
        $('#feature').validate({
            ignore: [],
            rules: {
                header: {
                    required: true,
                },
                konten: {
                    required: true,
                }
            }
        });
        $('#edit_feature_form').validate({
            ignore: [],
            rules: {
                header: {
                    required: true,
                },
                konten: {
                    required: true,
                }
            }
        });
        $('#form2').validate({
            ignore: [],
            rules: {
                gambar: {
                    required: true,
                    accept: 'png|jpg|jpeg'
                },
                header: {
                    required: true,
                },
                konten: {
                    required: true,
                },
            }
        });
        $('#form1').validate({
            ignore: [],
            rules: {
                header: {
                    required: true,
                },
                konten: {
                    required: true,
                },
            }
        });
        $('#header').validate({
            ignore: [],
            rules: {
                gambar: {
                    required: true,
                    accept: 'png|jpg|jpeg'
                },
            }
        });
        $('#header_testimoni').validate({
            ignore: [],
            rules: {
                gambar: {
                    required: true,
                    accept: 'png|jpg|jpeg'
                },
            }
        });
        $('#header').validate({
            ignore: [],
            rules: {
                gambar: {
                    required: true,
                    accept: 'png|jpg|jpeg'
                },
            }
        });
        $(function() {
            $("input[name=gambar]").change(function() {
                if (Math.round(this.files[0].size / (1024 * 1024)) > 1) {
                    alert('Please select image size less than 1 MB');
                    $("input[name=gambar]").val(null);
                }
            });
        });
    });
</script>