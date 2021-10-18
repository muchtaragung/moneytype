<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>The Eight Money Types EN</h1>
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
                        <form id="header" action="<?= base_url() ?>admin/emt/update_header" enctype="multipart/form-data" method="post">
                            <label for="">Header Image Eight Money Types</label>
                            <input type="hidden" id="id" name="id" value="<?= $emt->id_emt ?>">
                            <input type="hidden" name="gambar_lama" value="<?= $emt->img_header ?>">
                            <div class="form-group text-center">
                                <img width="300px" id="previewImg" src="<?= base_url() ?>assets/assets/img/<?= $emt->img_header ?>" alt="" srcset="">
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
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form id="profile_form" action="<?= base_url() ?>admin/emt/update_profile" enctype="multipart/form-data" method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group pt-4">
                                        <input type="hidden" id="id" name="id" value="<?= $emt->id_emt ?>">
                                        <input type="hidden" name="gambar_lama" value="<?= $emt->img_feature ?>">
                                        <label for="feature">Header Eight Money Types EN</label>
                                        <input type="text" name="feature" value="<?= $emt->feature ?>" class="form-control" placeholder="Header Profile">
                                    </div>
                                    <div class="form-group pt-2">
                                        <label for="konten">Eight Money Types EN</label>
                                        <textarea id="konten" name="konten" class="form-control" placeholder="Profile" rows="14"><?= $emt->sub_feature ?></textarea>
                                    </div>
                                </div>
                                <div class="col-md-6 mt-4">
                                    <label for="isi">Image</label>
                                    <div class="text-center mb-4">
                                        <input type="hidden" name="gambar_lama" value="<?= $emt->img_feature ?>">
                                        <img width="300px" src="<?= base_url() ?>assets/assets/img/<?= $emt->img_feature ?>" class="image-fluid" id="image-preview" alt="image preview">
                                    </div>
                                    <div class="custom-file">
                                        <input type="file" name="gambar" id="image-source" class="custom-file-input" accept="image/x-png,image/jpg,image/jpeg" onchange="previewImage();">
                                        <label class="custom-file-label" for="gallery-photo-add">Pilih Gambar</label>
                                        <small id="helpId" class="text-muted">*Maksimal 1 mb</small>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
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
                    <div class="card-header">
                        <h4 class="mb-5">Type</h4>
                        <div class="text-right">
                            <div class="col-md-12">
                                <button type="button" class="btn btn-outline-success block" onclick="add_type()" data-bs-toggle="modal">
                                    Tambah Type
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
                                        <th>Header</th>
                                        <th>Content</th>
                                        <th>AKSI</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($type as $data) { ?>
                                        <tr>
                                            <td><?php echo $no++ ?></td>
                                            <td><?php echo $data->header ?></td>
                                            <td><?php echo $data->konten ?></td>
                                            <td class="text-center">
                                                <a class="btn btn-outline-primary" href="javascript:void(0)" title="Edit" onclick="edit_type('<?php echo $data->id_type ?>')"><i class="fas fa-pen"></i></a>
                                                <a title="Hapus" class="btn btn-outline-danger alert_notif" href="<?php echo base_url() ?>admin/emt/delete_type/<?php echo $data->id_type ?>"><i class="fas fa-trash"></i></a>
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
                        <h4 class="mb-5">Feature EN</h4>
                        <form action="<?= base_url() ?>admin/emt/update_bg" enctype="multipart/form-data" method="post">
                            <div class="text-center">
                                <label for="">Background Feature</label>
                            </div>
                            <div class="form-group">
                                <div class="text-center mb-4">
                                    <input type="hidden" id="id" name="id" value="<?= $emt->id_emt ?>">
                                    <input type="hidden" name="gambar_lama" value="<?= $emt->bg ?>">
                                    <img width="300px" src="<?= base_url() ?>assets/assets/img/<?= $emt->bg ?>" class="image-fluid" id="image-preview3" alt="image preview">
                                </div>
                                <div class="custom-file">
                                    <input type="file" name="gambar" id="image-source3" class="custom-file-input" accept="image/x-png,image/jpg,image/jpeg" onchange="previewImage3();">
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
                        <form action="<?= base_url() ?>admin/emt/update_header_feature_en" enctype="multipart/form-data" method="post">
                            <div class="form-group ">
                                <input type="hidden" id="id" name="id" value="<?= $header_feature->id_feature ?>">
                                <label for="header">Header Feature EN</label>
                                <input type="text" name="header" value="<?= $header_feature->header ?>" class="form-control" placeholder="Header Profile">
                            </div>
                            <div class="form-group pt-2">
                                <label for="konten">Sub Header Feature EN</label>
                                <textarea id="konten" name="konten" class="form-control" placeholder="konten" rows="5"><?= $header_feature->konten ?></textarea>
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
                                            <th>Header</th>
                                            <th>Content</th>
                                            <th>AKSI</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        foreach ($feature as $data) { ?>
                                            <tr>
                                                <td><?php echo $no++ ?></td>
                                                <td><?php echo $data->header ?></td>
                                                <td><?php echo $data->konten ?></td>
                                                <td class="text-center">
                                                    <a class="btn btn-outline-primary" href="javascript:void(0)" title="Edit" onclick="edit_feature('<?php echo $data->id_feature ?>')"><i class="fas fa-pen"></i></a>
                                                    <a title="Hapus" class="btn btn-outline-danger alert_notif" href="<?php echo base_url() ?>admin/emt/delete_feature_en/<?php echo $data->id_feature ?>"><i class="fas fa-trash"></i></a>
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
        $('.modal-title').text('Tambah Feature'); // Set Title to Bootstrap modal title
    }

    function edit_feature(id) {
        save_method = 'update';
        $('#form1')[0].reset(); // reset form on modals

        //Ajax Load data from ajax
        $.ajax({
            url: "<?php echo site_url('admin/emt/ajax_feature_en') ?>/" + id,
            type: "GET",
            dataType: "JSON",
            success: function(data) {

                $('[name="id"]').val(data.id_feature);
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
        $('.modal-title').text('Tambah type'); // Set Title to Bootstrap modal title
    }

    function edit_type(id) {
        save_method = 'update';
        $('#form1')[0].reset(); // reset form on modals

        //Ajax Load data from ajax
        $.ajax({
            url: "<?php echo site_url('admin/emt/ajax_type_us') ?>/" + id,
            type: "GET",
            dataType: "JSON",
            success: function(data) {

                $('[name="id"]').val(data.id_type);
                $('[name="header"]').val(data.header);
                $('[name="konten"]').val(data.konten);
                $('#default').modal('show'); // show bootstrap modal when complete loaded
                $('.modal-title').text('Edit Type'); // Set title to Bootstrap modal title

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
                <h5 class="modal-title" id="myModalLabel1">Tambah Type</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="form2" enctype="multipart/form-data" action="<?php echo base_url() ?>admin/emt/add_type" method="post">
                <div class="modal-body">
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
<div class="modal fade text-left" id="default" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-dialog modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel1">Edit Type</h5>
                <button type="button" class="close rounded-pill" data-bs-dismiss="modal" aria-label="Close">
                    <i data-feather="x"></i>
                </button>
            </div>
            <form id="form1" enctype="multipart/form-data" action="<?php echo base_url() ?>admin/emt/update_type" method="post">
                <div class="modal-body">
                    <input type="hidden" name="id" value="">
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
            <form id="feature" enctype="multipart/form-data" action="<?php echo base_url() ?>admin/emt/add_feature_en" method="post">
                <div class="modal-body">
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
            <form id="edit_feature_form" enctype="multipart/form-data" action="<?php echo base_url() ?>admin/emt/update_feature_en" method="post">
                <div class="modal-body">
                    <input type="hidden" name="id" value="">
                    <input type="hidden" name="icon_lama" value="">
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
<script>
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