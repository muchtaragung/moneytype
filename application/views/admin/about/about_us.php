<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>About EN</h1>
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
                        <form id="header" action="<?= base_url() ?>admin/about/update_header" enctype="multipart/form-data" method="post">
                            <label for="">Header Image About</label>
                            <input type="hidden" id="id" name="id" value="<?= $about->id_about ?>">
                            <input type="hidden" name="gambar_lama" value="<?= $about->img_header ?>">
                            <div class="form-group text-center">
                                <img width="300px" id="previewImg" src="<?= base_url() ?>assets/assets/img/<?= $about->img_header ?>" alt="" srcset="">
                                <div class="custom-file mt-5">
                                    <input type="file" name="gambar" class="custom-file-input" id="gambar" accept="image/x-png,image/jpg,image/jpeg" onchange="previewFile(this);">
                                    <label class="custom-file-label" for="gambar">Pilih Gambar</label>
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
                        <form id="profile_form" action="<?= base_url() ?>admin/about/update_profile" enctype="multipart/form-data" method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group pt-4">
                                        <input type="hidden" id="id" name="id" value="<?= $about->id_about ?>">
                                        <input type="hidden" name="gambar_lama" value="<?= $about->img_profile ?>">
                                        <label for="header_profile">Header Profile EN</label>
                                        <input type="text" name="header_profile" value="<?= $about->header_profile ?>" class="form-control" placeholder="Header Profile">
                                    </div>
                                    <div class="form-group pt-2">
                                        <label for="profile">Profile EN</label>
                                        <textarea id="profile" name="profile" class="form-control" placeholder="Profile" rows="14"><?= $about->profile ?></textarea>
                                    </div>
                                    <div class="form-group pt-2">
                                        <label for="phone">Number Phone</label>
                                        <input type="number" maxlength="12" min="0" name="phone" value="<?= $about->phone ?>" class="form-control" placeholder="Header Profile">
                                    </div>
                                </div>
                                <div class="col-md-6 mt-4">
                                    <label for="isi">Profile Header</label>
                                    <div class="text-center mb-4">
                                        <input type="hidden" name="gambar_lama" value="<?= $about->img_profile ?>">
                                        <img width="300px" src="<?= base_url() ?>assets/assets/img/<?= $about->img_profile ?>" class="image-fluid" id="image-preview" alt="image preview">
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
                        <h4 class="mb-5">Testimoni</h4>
                    </div>
                    <div class="card-body">
                        <form id="header_testimoni" action="<?= base_url() ?>admin/about/update_header_testimoni" enctype="multipart/form-data" method="post">
                            <label for="">Background Testimoni</label>
                            <input type="hidden" id="id" name="id" value="<?= $about->id_about ?>">
                            <input type="hidden" name="gambar_lama" value="<?= $about->img_testimoni ?>">
                            <div class="text-center mb-4">
                                <input type="hidden" name="gambar_lama" value="<?= $about->img_testimoni ?>">
                                <img width="300px" src="<?= base_url() ?>assets/assets/img/<?= $about->img_testimoni ?>" class="image-fluid" id="image-preview2" alt="image preview">
                            </div>
                            <div class="custom-file">
                                <input type="file" name="gambar" id="image-source2" class="custom-file-input" accept="image/x-png,image/jpg,image/jpeg" onchange="previewImage2();">
                                <label class="custom-file-label" for="gallery-photo-add">Pilih Gambar</label>
                                <small id="helpId" class="text-muted">*Maksimal 1 mb</small>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card-header -->
                    <div class="col-md-4">
                        <button type="button" class="btn btn-outline-success block" onclick="add_testimoni()" data-bs-toggle="modal">
                            Tambah Testimoni
                        </button>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="table" class="table table1 table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Pekerjaan</th>
                                        <th>Testimoni</th>
                                        <th>Foto</th>
                                        <th>AKSI</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($testimoni as $data) { ?>
                                        <tr>
                                            <td><?php echo $no++ ?></td>
                                            <td><?php echo $data->nama ?></td>
                                            <td><?php echo $data->job ?></td>
                                            <td><?php echo $data->testimoni ?></td>
                                            <td><img width="50px" class="rounded-circle" src="<?= base_url() ?>assets/icon/<?php echo $data->img ?>"> </td>
                                            <td class="text-center">
                                                <a class="btn btn-outline-primary" href="javascript:void(0)" title="Edit" onclick="edit_testimoni('<?php echo $data->id_testimoni ?>')"><i class="fas fa-pen"></i></a>
                                                <a title="Hapus" class="btn btn-outline-danger alert_notif" href="<?php echo base_url() ?>admin/about/delete_testimoni/<?php echo $data->id_testimoni ?>"><i class="fas fa-trash"></i></a>
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
                        <button type="button" class="btn btn-outline-success block" onclick="add_feature()" data-bs-toggle="modal">
                            Tambah Feature
                        </button>
                    </div>
                    <div class="container">
                        <div class="row">
                            <?php foreach ($feature_en as $data) { ?>
                                <div class="col-md-3 ">
                                    <div class="card h-100">
                                        <div class="bg-white text-center rounded shadow-sm py-5 px-4 h-100">
                                            <img width="50px" src="<?= base_url() ?>assets/icon/<?= $data->icon ?>" alt="" srcset="">
                                            <h5 class="mb-4 mt-5"><strong><?= $data->title ?></strong></h5>
                                            <p><?= $data->konten ?></p>
                                            <a class="btn btn-outline-primary" href="javascript:void(0)" title="Edit" onclick="edit_feature('<?php echo $data->id_feature ?>')"><i class="fas fa-pen"></i></a>
                                            <a title="Hapus" class="btn btn-outline-danger alert_notif" href="<?php echo base_url() ?>admin/about/delete_feature_en/<?php echo $data->id_feature ?>"><i class="fas fa-trash"></i></a>
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
            url: "<?php echo site_url('admin/about/ajax_feature_en') ?>/" + id,
            type: "GET",
            dataType: "JSON",
            success: function(data) {

                $('[name="id"]').val(data.id_feature);
                $('[name="title"]').val(data.title);
                $('[name="konten"]').val(data.konten);
                $('[name="icon_lama"]').val(data.icon);
                $('#edit_feature').modal('show'); // show bootstrap modal when complete loaded
                $('.modal-title').text('Edit Feature'); // Set title to Bootstrap modal title

            },
            error: function(jqXHR, textStatus, errorThrown) {
                alert('Error get data from ajax');
            }
        });
    }

    function add_testimoni() {
        save_method = 'add';
        $('#form2')[0].reset(); // reset form on modals
        $('#default2').modal('show'); // show bootstrap modal
        $('.modal-title').text('Tambah Testimoni'); // Set Title to Bootstrap modal title
    }

    function edit_testimoni(id) {
        save_method = 'update';
        $('#form1')[0].reset(); // reset form on modals

        //Ajax Load data from ajax
        $.ajax({
            url: "<?php echo site_url('admin/about/ajax_testimoni') ?>/" + id,
            type: "GET",
            dataType: "JSON",
            success: function(data) {

                $('[name="id"]').val(data.id_testimoni);
                $('[name="nama"]').val(data.nama);
                $('[name="job"]').val(data.job);
                $('[name="testimoni"]').val(data.testimoni);
                $('[name="img_lama"]').val(data.img);
                $('#default').modal('show'); // show bootstrap modal when complete loaded
                $('.modal-title').text('Edit Testimoni'); // Set title to Bootstrap modal title

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
                <h5 class="modal-title" id="myModalLabel1">Tambah Testimoni</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="form2" enctype="multipart/form-data" action="<?php echo base_url() ?>admin/about/add_testimoni" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" class="form-control" id="nama">
                    </div>
                    <div class="form-group">
                        <label for="job">Pekerjaan</label>
                        <input type="text" name="job" class="form-control" id="job">
                    </div>
                    <div class="form-group">
                        <label for="testimoni">Testimoni</label>
                        <textarea name="testimoni" rows="10" class="form-control" id="testimoni"></textarea>
                    </div>
                    <label class="mt-4" for="img">Foto testimoni</label><br>
                    <div class="text-center mb-4">
                        <img width="300px" style="display: none;" class="image-fluid" id="image-preview3" alt="image preview">
                    </div>
                    <div class="custom-file">
                        <input type="file" name="img" id="image-source3" class="custom-file-input" accept="image/x-png,image/jpg,image/jpeg" onchange="previewImage3();">
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
<div class="modal fade text-left" id="default" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-dialog modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel1">Edit Testimoni</h5>
                <button type="button" class="close rounded-pill" data-bs-dismiss="modal" aria-label="Close">
                    <i data-feather="x"></i>
                </button>
            </div>
            <form id="form1" enctype="multipart/form-data" action="<?php echo base_url() ?>admin/about/update_testimoni" method="post">
                <div class="modal-body">
                    <input type="hidden" name="id" value="">
                    <input type="hidden" name="img_lama" value="">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" class="form-control" id="nama">
                    </div>
                    <div class="form-group">
                        <label for="job">Pekerjaan</label>
                        <input type="text" name="job" class="form-control" id="job">
                    </div>
                    <div class="form-group">
                        <label for="testimoni">Testimoni</label>
                        <textarea name="testimoni" class="form-control" rows="10" id="testimoni"></textarea>
                    </div>
                    <label class="mt-4" for="img">Foto testimoni</label><br>
                    <div class="text-center mb-4">
                        <input type="hidden" name="img_lama" value="">
                        <img width="300px" style="display: none;" class="image-fluid" id="image-preview4" alt="image preview">
                    </div>
                    <div class="custom-file">
                        <input type="file" name="img" id="image-source4" class="custom-file-input" accept="image/x-png,image/jpg,image/jpeg" onchange="previewImage4();">
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
<div class="modal fade text-left" id="feature_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-dialog modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel1">Tambah Feature</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="feature" enctype="multipart/form-data" action="<?php echo base_url() ?>admin/about/add_feature_en" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" class="form-control" id="title">
                    </div>
                    <div class="form-group">
                        <label for="konten">Content</label>
                        <textarea name="konten" rows="5" class="form-control" id="konten"></textarea>
                    </div>
                    <label class="mt-4" for="icon">Icon</label><br>
                    <div class="text-center mb-4">
                        <img width="200px" style="display: none;" class="image-fluid" id="image-preview5" alt="image preview">
                    </div>
                    <div class="custom-file">
                        <input type="file" name="icon" id="image-source5" class="custom-file-input" accept="image/x-png,image/jpg,image/jpeg" onchange="previewImage5();">
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
                <h5 class="modal-title" id="myModalLabel1">Edit Feature</h5>
                <button type="button" class="close rounded-pill" data-bs-dismiss="modal" aria-label="Close">
                    <i data-feather="x"></i>
                </button>
            </div>
            <form id="edit_feature_form" enctype="multipart/form-data" action="<?php echo base_url() ?>admin/about/update_feature_en" method="post">
                <div class="modal-body">
                    <input type="hidden" name="id" value="">
                    <input type="hidden" name="icon_lama" value="">
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" class="form-control" id="title">
                    </div>
                    <div class="form-group">
                        <label for="konten">Content</label>
                        <textarea name="konten" rows="5" class="form-control" id="konten"></textarea>
                    </div>
                    <label class="mt-4" for="icon">Icon</label><br>
                    <div class="text-center mb-4">
                        <input type="hidden" name="icon_lama" value="">
                        <img width="200px" style="display: none;" class="image-fluid" id="image-preview6" alt="image preview">
                    </div>
                    <div class="custom-file">
                        <input type="file" name="icon" id="image-source6" class="custom-file-input" accept="image/x-png,image/jpg,image/jpeg" onchange="previewImage6();">
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
                icon: {
                    required: true,
                    accept: 'png|jpg|jpeg|svg'
                },
                title: {
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
                title: {
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
                img: {
                    required: true,
                    accept: 'png|jpg|jpeg'
                },
                nama: {
                    required: true,
                },
                job: {
                    required: true,
                },
                testimoni: {
                    required: true,
                }
            }
        });
        $('#form1').validate({
            ignore: [],
            rules: {
                nama: {
                    required: true,
                },
                job: {
                    required: true,
                },
                testimoni: {
                    required: true,
                }
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
        $('#profile_form').validate({
            ignore: [],
            rules: {
                header_profile: {
                    required: true,
                },
                profile: {
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
        $(function() {
            $('#img').change(function() {
                if (Math.round(this.files[0].size / (1024 * 1024)) > 1) {
                    alert('Please select image size less than 1 MB');
                    $("#img").val(null);
                }
            });
        });
        $(function() {
            $('#img2').change(function() {
                if (Math.round(this.files[0].size / (1024 * 1024)) > 1) {
                    alert('Please select image size less than 1 MB');
                    $("#img2").val(null);
                }
            });
        });
        $(function() {
            $('#img_testimoni').change(function() {
                if (Math.round(this.files[0].size / (1024 * 1024)) > 1) {
                    alert('Please select image size less than 1 MB');
                    $("#img_testimoni").val(null);
                }
            });
        });
        $(function() {
            $('#gambar').change(function() {
                if (Math.round(this.files[0].size / (1024 * 1024)) > 1) {
                    alert('Please select image size less than 1 MB');
                    $("#gambar").val(null);
                }
            });
        });
        $(function() {
            $('#gambar2').change(function() {
                if (Math.round(this.files[0].size / (1024 * 1024)) > 1) {
                    alert('Please select image size less than 1 MB');
                    $("#gambar2").val(null);
                }
            });
        });
        $(function() {
            $('#icon').change(function() {
                if (Math.round(this.files[0].size / (1024 * 1024)) > 1) {
                    alert('Please select image size less than 1 MB');
                    $("#icon").val(null);
                }
            });
        });
        $(function() {
            $('#icon2').change(function() {
                if (Math.round(this.files[0].size / (1024 * 1024)) > 1) {
                    alert('Please select image size less than 1 MB');
                    $("#icon2").val(null);
                }
            });
        });
    });
</script>