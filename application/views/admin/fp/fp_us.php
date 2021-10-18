<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Financial Planning EN</h1>
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
                        <form id="header" action="<?= base_url() ?>admin/fp/update_header" enctype="multipart/form-data" method="post">
                            <label for="">Header Financial Planning</label>
                            <input type="hidden" id="id" name="id" value="<?= $fp->id_fp ?>">
                            <input type="hidden" name="gambar_lama" value="<?= $fp->img_header ?>">
                            <div class="form-group text-center">
                                <img width="300px" id="previewImg" src="<?= base_url() ?>assets/assets/img/<?= $fp->img_header ?>" alt="" srcset="">
                                <div class="custom-file mt-5">
                                    <input type="file" name="gambar" class="custom-file-input" id="gambar" accept="image/x-png,image/jpg,image/jpeg" onchange="previewFile(this);">
                                    <label class="custom-file-label" for="gambar">Pilih Gambar</label>
                                    <small id="helpId" class="text-muted">*Maksimal 1 mb</small>
                                </div>
                            </div>
                            <div class="text-right">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
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
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-outline card-info">
                    <!-- /.card-header -->
                    <div class="card-header">
                        <h4 class="mb-5">Feature 1 EN</h4>
                        <div class="row">
                            <div class="col-md-6">
                                <form action="<?= base_url() ?>admin/fp/update_header_feature_en1" enctype="multipart/form-data" method="post">
                                    <div class="form-group ">
                                        <input type="hidden" id="id" name="id" value="<?= $header_feature->id_feature ?>">
                                        <label for="header">Header</label>
                                        <input type="text" required name="header" value="<?= $header_feature->header ?>" class="form-control" placeholder="Header Profile">
                                    </div>
                                    <div class="form-group pt-2">
                                        <label for="konten">Sub Header</label>
                                        <textarea id="konten" required name="konten" class="form-control" placeholder="konten" rows="5"><?= $header_feature->konten ?></textarea>
                                    </div>
                            </div>
                            <div class="col-md-6">
                                <div class="text-center">
                                    <label for="">Image</label>
                                </div>
                                <div class="form-group">
                                    <div class="text-center mb-4">
                                        <input type="hidden" id="id" name="id" value="<?= $header_feature->id_feature ?>">
                                        <input type="hidden" name="gambar_lama" value="<?= $header_feature->img ?>">
                                        <img width="300px" src="<?= base_url() ?>assets/assets/img/<?= $header_feature->img ?>" class="image-fluid" id="image-preview5" alt="image preview">
                                    </div>
                                    <div class="custom-file">
                                        <input type="file" name="gambar" id="image-source5" class="custom-file-input" accept="image/x-png,image/jpg,image/jpeg" onchange="previewImage5();">
                                        <label class="custom-file-label" for="gallery-photo-add">Pilih Gambar</label>
                                        <small id="helpId" class="text-muted">*Maksimal 1 mb</small>
                                    </div>
                                </div>
                                <div class="text-right">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                                </form>
                            </div>
                        </div>

                        <hr>
                        <div class="text-left">
                            <button type="button" class="btn btn-outline-success block" onclick="add_feature()" data-bs-toggle="modal">
                                Tambah Feature
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
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
                                        foreach ($feature1 as $data) { ?>
                                            <tr>
                                                <td><?php echo $no++ ?></td>
                                                <td><img width="50px" src="<?= base_url() ?>assets/assets/img/<?= $data->img ?>"></td>
                                                <td><?php echo $data->header ?></td>
                                                <td><?php echo $data->konten ?></td>
                                                <td class="text-center">
                                                    <a class="btn btn-outline-primary" href="javascript:void(0)" title="Edit" onclick="edit_feature('<?php echo $data->id_feature ?>')"><i class="fas fa-pen"></i></a>
                                                    <a title="Hapus" class="btn btn-outline-danger alert_notif" href="<?php echo base_url() ?>admin/fp/delete_feature_en1/<?php echo $data->id_feature ?>"><i class="fas fa-trash"></i></a>
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
                        <h4 class="mb-5">Feature 2 EN</h4>
                        <div class="row">
                            <div class="col-md-6">
                                <form action="<?= base_url() ?>admin/fp/update_feature2_us" enctype="multipart/form-data" method="post">
                                    <div class="form-group ">
                                        <input type="hidden" id="id" name="id" value="<?= $feature2->id_feature ?>">
                                        <label for="header">Header</label>
                                        <input type="text" required name="header" value="<?= $feature2->header ?>" class="form-control" placeholder="Header Profile">
                                    </div>
                                    <div class="form-group pt-2">
                                        <label for="konten">Sub Header</label>
                                        <textarea id="konten" required name="konten" class="form-control" placeholder="konten" rows="5"><?= $feature2->konten ?></textarea>
                                    </div>
                            </div>
                            <div class="col-md-6">
                                <div class="text-center">
                                    <label for="">Image</label>
                                </div>
                                <div class="form-group">
                                    <div class="text-center mb-4">
                                        <input type="hidden" id="id" name="id" value="<?= $feature2->id_feature ?>">
                                        <input type="hidden" name="gambar_lama" value="<?= $feature2->img ?>">
                                        <img width="300px" src="<?= base_url() ?>assets/assets/img/<?= $feature2->img ?>" class="image-fluid" id="image-preview3" alt="image preview">
                                    </div>
                                    <div class="custom-file">
                                        <input type="file" name="gambar" id="image-source3" class="custom-file-input" accept="image/x-png,image/jpg,image/jpeg" onchange="previewImage3();">
                                        <label class="custom-file-label" for="gallery-photo-add">Pilih Gambar</label>
                                        <small id="helpId" class="text-muted">*Maksimal 1 mb</small>
                                    </div>
                                </div>
                                <div class="text-right">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                                </form>
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
                        <h4 class="mb-5">Feature 3 EN</h4>
                        <div class="row">
                            <div class="col-md-6">
                                <form action="<?= base_url() ?>admin/fp/update_header_feature_en3" enctype="multipart/form-data" method="post">
                                    <div class="text-center">
                                        <label for="">Image</label>
                                    </div>
                                    <div class="form-group">
                                        <div class="text-center mb-4">
                                            <input type="hidden" id="id" name="id" value="<?= $header_feature3->id_feature ?>">
                                            <input type="hidden" name="gambar_lama" value="<?= $header_feature3->img ?>">
                                            <img width="300px" src="<?= base_url() ?>assets/assets/img/<?= $header_feature3->img ?>" class="image-fluid" id="image-preview6" alt="image preview">
                                        </div>
                                        <div class="custom-file">
                                            <input type="file" name="gambar" id="image-source6" class="custom-file-input" accept="image/x-png,image/jpg,image/jpeg" onchange="previewImage6();">
                                            <label class="custom-file-label" for="gallery-photo-add">Pilih Gambar</label>
                                            <small id="helpId" class="text-muted">*Maksimal 1 mb</small>
                                        </div>
                                    </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group ">
                                    <input type="hidden" id="id" name="id" value="<?= $header_feature3->id_feature ?>">
                                    <label for="header">Header</label>
                                    <input type="text" required name="header" value="<?= $header_feature3->header ?>" class="form-control" placeholder="Header Profile">
                                </div>
                                <div class="form-group pt-2">
                                    <label for="konten">Sub Header</label>
                                    <textarea id="konten" required name="konten" class="form-control" placeholder="konten" rows="5"><?= $header_feature3->konten ?></textarea>
                                </div>
                                <div class="text-right">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                                </form>
                            </div>
                        </div>

                        <hr>
                        <div class="text-left">
                            <button type="button" class="btn btn-outline-success block" onclick="add_feature3()" data-bs-toggle="modal">
                                Tambah Feature
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
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
                                                    <a title="Hapus" class="btn btn-outline-danger alert_notif" href="<?php echo base_url() ?>admin/fp/delete_feature_en3/<?php echo $data->id_feature ?>"><i class="fas fa-trash"></i></a>
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
                        <h4 class="mb-5">Feature 4 EN</h4>
                        <div class="row">
                            <div class="text-left">
                                <button type="button" class="btn btn-outline-success block" onclick="add_feature4()" data-bs-toggle="modal">
                                    Tambah Feature
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
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
                                            foreach ($feature4 as $data) { ?>
                                                <tr>
                                                    <td><?php echo $no++ ?></td>
                                                    <td><?php echo $data->header ?></td>
                                                    <td><?php echo $data->konten ?></td>
                                                    <td class="text-center">
                                                        <a class="btn btn-outline-primary" href="javascript:void(0)" title="Edit" onclick="edit_feature4('<?php echo $data->id_feature ?>')"><i class="fas fa-pen"></i></a>
                                                        <a title="Hapus" class="btn btn-outline-danger alert_notif" href="<?php echo base_url() ?>admin/fp/delete_feature_en4/<?php echo $data->id_feature ?>"><i class="fas fa-trash"></i></a>
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
                        <h4 class="mb-5">Feature 5 EN</h4>
                        <form action="<?= base_url() ?>admin/fp/update_bg" enctype="multipart/form-data" method="post">
                            <div class="text-center">
                                <label for="">Background</label>
                            </div>
                            <div class="form-group">
                                <div class="text-center mb-4">
                                    <input type="hidden" id="id" name="id" value="<?= $fp->id_fp ?>">
                                    <input type="hidden" name="gambar_lama" value="<?= $fp->bg ?>">
                                    <img width="300px" src="<?= base_url() ?>assets/assets/img/<?= $fp->bg ?>" class="image-fluid" id="image-preview9" alt="image preview">
                                </div>
                                <div class="custom-file">
                                    <input type="file" required name="gambar" id="image-source9" class="custom-file-input" accept="image/x-png,image/jpg,image/jpeg" onchange="previewImage9();">
                                    <label class="custom-file-label" for="gallery-photo-add">Pilih Gambar</label>
                                    <small id="helpId" class="text-muted">*Maksimal 1 mb</small>
                                </div>
                            </div>
                            <div class="text-right">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </form>
                        <hr>
                        <form action="<?= base_url() ?>admin/fp/update_header_feature_en5" enctype="multipart/form-data" method="post">
                            <div class="form-group ">
                                <input type="hidden" id="id" name="id" value="<?= $header_feature5->id_feature ?>">
                                <label for="header">Header</label>
                                <input type="text" required name="header" value="<?= $header_feature5->header ?>" class="form-control" placeholder="Header Profile">
                            </div>
                            <div class="form-group pt-2">
                                <label for="konten">Sub Header</label>
                                <textarea id="konten" required name="konten" class="form-control" placeholder="konten" rows="5"><?= $header_feature5->konten ?></textarea>
                            </div>
                            <div class="text-right">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </form>
                        <hr>
                        <div class="text-left">
                            <button type="button" class="btn btn-outline-success block" onclick="add_feature5()" data-bs-toggle="modal">
                                Tambah Feature
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
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
                                        foreach ($feature5 as $data) { ?>
                                            <tr>
                                                <td><?php echo $no++ ?></td>
                                                <td><img width="50px" src="<?= base_url() ?>assets/assets/img/<?= $data->img ?>"></td>
                                                <td><?php echo $data->header ?></td>
                                                <td><?php echo $data->konten ?></td>
                                                <td class="text-center">
                                                    <a class="btn btn-outline-primary" href="javascript:void(0)" title="Edit" onclick="edit_feature5('<?php echo $data->id_feature ?>')"><i class="fas fa-pen"></i></a>
                                                    <a title="Hapus" class="btn btn-outline-danger alert_notif" href="<?php echo base_url() ?>admin/fp/delete_feature_en5/<?php echo $data->id_feature ?>"><i class="fas fa-trash"></i></a>
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
        $('#feature_modal1').modal('show'); // show bootstrap modal
        $('.modal-title').text('Tambah Feature 1'); // Set Title to Bootstrap modal title
    }

    function edit_feature(id) {
        save_method = 'update';
        $('#edit_feature_form')[0].reset(); // reset form on modals

        //Ajax Load data from ajax
        $.ajax({
            url: "<?php echo site_url('admin/fp/ajax_feature_en1') ?>/" + id,
            type: "GET",
            dataType: "JSON",
            success: function(data) {

                $('[name="id"]').val(data.id_feature);
                $('[name="gambar_lama"]').val(data.img);
                $('[name="header"]').val(data.header);
                $('[name="konten"]').val(data.konten);
                $('#edit_feature1').modal('show'); // show bootstrap modal when complete loaded
                $('.modal-title').text('Edit Feature 1'); // Set title to Bootstrap modal title

            },
            error: function(jqXHR, textStatus, errorThrown) {
                alert('Error get data from ajax');
            }
        });
    }

    function add_feature3() {
        save_method = 'add';
        $('#feature')[0].reset(); // reset form on modals
        $('#feature_modal3').modal('show'); // show bootstrap modal
        $('.modal-title').text('Tambah Feature 3'); // Set Title to Bootstrap modal title
    }

    function edit_feature3(id) {
        save_method = 'update';
        $('#edit_feature_form')[0].reset(); // reset form on modals

        //Ajax Load data from ajax
        $.ajax({
            url: "<?php echo site_url('admin/fp/ajax_feature_en3') ?>/" + id,
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

    function add_feature4() {
        save_method = 'add';
        $('#feature')[0].reset(); // reset form on modals
        $('#feature_modal4').modal('show'); // show bootstrap modal
        $('.modal-title').text('Tambah Feature 4'); // Set Title to Bootstrap modal title
    }

    function edit_feature4(id) {
        save_method = 'update';
        $('#edit_feature_form')[0].reset(); // reset form on modals

        //Ajax Load data from ajax
        $.ajax({
            url: "<?php echo site_url('admin/fp/ajax_feature_en4') ?>/" + id,
            type: "GET",
            dataType: "JSON",
            success: function(data) {

                $('[name="id"]').val(data.id_feature);
                $('[name="header"]').val(data.header);
                $('[name="konten"]').val(data.konten);
                $('#edit_feature4').modal('show'); // show bootstrap modal when complete loaded
                $('.modal-title').text('Edit Feature 4'); // Set title to Bootstrap modal title

            },
            error: function(jqXHR, textStatus, errorThrown) {
                alert('Error get data from ajax');
            }
        });
    }

    function add_feature5() {
        save_method = 'add';
        $('#feature')[0].reset(); // reset form on modals
        $('#feature_modal5').modal('show'); // show bootstrap modal
        $('.modal-title').text('Tambah Feature 4'); // Set Title to Bootstrap modal title
    }

    function edit_feature5(id) {
        save_method = 'update';
        $('#edit_feature_form')[0].reset(); // reset form on modals

        //Ajax Load data from ajax
        $.ajax({
            url: "<?php echo site_url('admin/fp/ajax_feature_en5') ?>/" + id,
            type: "GET",
            dataType: "JSON",
            success: function(data) {
                $('[name="id"]').val(data.id_feature);
                $('[name="gambar_lama"]').val(data.img);
                $('[name="header"]').val(data.header);
                $('[name="konten"]').val(data.konten);
                $('#edit_feature5').modal('show'); // show bootstrap modal when complete loaded
                $('.modal-title').text('Edit Feature 5'); // Set title to Bootstrap modal title

            },
            error: function(jqXHR, textStatus, errorThrown) {
                alert('Error get data from ajax');
            }
        });
    }
</script>
<div class="modal fade text-left" id="feature_modal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-dialog modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel1">Tambah Feature</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="feature" enctype="multipart/form-data" action="<?php echo base_url() ?>admin/fp/add_feature_en1" method="post">
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
<div class="modal fade text-left" id="edit_feature1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-dialog modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel1">Edit Feature</h5>
                <button type="button" class="close rounded-pill" data-bs-dismiss="modal" aria-label="Close">
                    <i data-feather="x"></i>
                </button>
            </div>
            <form id="edit_feature_form" enctype="multipart/form-data" action="<?php echo base_url() ?>admin/fp/update_feature_en1" method="post">
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
<div class="modal fade text-left" id="feature_modal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-dialog modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel1">Tambah Feature</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="feature" enctype="multipart/form-data" action="<?php echo base_url() ?>admin/fp/add_feature_en3" method="post">
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
<div class="modal fade text-left" id="edit_feature3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-dialog modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel1">Edit Feature</h5>
                <button type="button" class="close rounded-pill" data-bs-dismiss="modal" aria-label="Close">
                    <i data-feather="x"></i>
                </button>
            </div>
            <form id="edit_feature_form" enctype="multipart/form-data" action="<?php echo base_url() ?>admin/fp/update_feature_en3" method="post">
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
<div class="modal fade text-left" id="feature_modal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-dialog modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel1">Tambah Feature</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="feature" enctype="multipart/form-data" action="<?php echo base_url() ?>admin/fp/add_feature_en4" method="post">
                <div class="modal-body">
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
<div class="modal fade text-left" id="edit_feature4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-dialog modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel1">Edit Feature</h5>
                <button type="button" class="close rounded-pill" data-bs-dismiss="modal" aria-label="Close">
                    <i data-feather="x"></i>
                </button>
            </div>
            <form id="edit_feature_form" enctype="multipart/form-data" action="<?php echo base_url() ?>admin/fp/update_feature_en4" method="post">
                <div class="modal-body">
                    <input type="hidden" name="id" value="">
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
<div class="modal fade text-left" id="feature_modal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-dialog modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel1">Tambah Feature</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="feature" enctype="multipart/form-data" action="<?php echo base_url() ?>admin/fp/add_feature_en5" method="post">
                <div class="modal-body">
                    <label for="img">Image</label><br>
                    <div class="text-center mb-4">
                        <img width="300px" style="display: none;" class="image-fluid" id="image-preview10" alt="image preview">
                    </div>
                    <div class="custom-file">
                        <input type="file" required name="gambar" id="image-source10" class="custom-file-input" accept="image/x-png,image/jpg,image/jpeg" onchange="previewImage10();">
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
<div class="modal fade text-left" id="edit_feature5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-dialog modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel1">Edit Feature</h5>
                <button type="button" class="close rounded-pill" data-bs-dismiss="modal" aria-label="Close">
                    <i data-feather="x"></i>
                </button>
            </div>
            <form id="edit_feature_form" enctype="multipart/form-data" action="<?php echo base_url() ?>admin/fp/update_feature_en5" method="post">
                <div class="modal-body">
                    <input type="hidden" name="id" value="">
                    <input type="hidden" name="gambar_lama" value="">
                    <div class="text-center mb-4">
                        <img width="300px" style="display: none;" class="image-fluid" id="image-preview11" alt="image preview">
                    </div>
                    <div class="custom-file">
                        <input type="file" name="gambar" id="image-source11" class="custom-file-input" accept="image/x-png,image/jpg,image/jpeg" onchange="previewImage11();">
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
    function previewImage11() {
        document.getElementById("image-preview11").style.display = "block";
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("image-source11").files[0]);
        oFReader.onload = function(oFREvent) {
            document.getElementById("image-preview11").src = oFREvent.target.result;
        };
    };

    function previewImage10() {
        document.getElementById("image-preview10").style.display = "block";
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("image-source10").files[0]);
        oFReader.onload = function(oFREvent) {
            document.getElementById("image-preview10").src = oFREvent.target.result;
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