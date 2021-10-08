<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Gallery</h1>
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
                        <div class="row">
                            <div class="col-md-6 mt-5">
                                <button type="button" class="btn btn-outline-info block" onclick="add_foto()" data-bs-toggle="modal">
                                    Tambah Foto
                                </button>
                                <a id="denied" type="button" class="btn btn-danger" href="<?= base_url() ?>admin/home/galeri_denied/<?= $status->id_admin ?>">
                                    Tidak tampilkan
                                </a>
                                <button id="allow" type="button" class="btn btn-success" href="<?= base_url() ?>admin/home/galeri_allow/<?= $status->id_admin ?>">
                                    Tampilkan
                                </button>
                            </div>
                            <div class="col-md-6 text-right mt-5">
                                <?php if ($status->akses == 1) { ?>
                                    <p>Status : <span class="badge badge-success badge-lg">Tampil</span></p>
                                <?php } elseif ($status->akses == 0) { ?>
                                    <p>Status : <span class="badge badge-danger badge-lg">Tidak Tampil</span></p>
                                <?php } ?>

                            </div>
                        </div>
                        <div class="table-responsive">
                            <table id="table" class="table table1 table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Foto</th>
                                        <th>AKSI</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($galeri as $data) { ?>
                                        <tr class="text-center">
                                            <td><?php echo $no++ ?></td>
                                            <td> <a href="<?= base_url() ?>assets/assets/galeri/<?= $data->img ?>" data-toggle="lightbox" data-title="Gallery" data-gallery="gallery">
                                                    <img width="200px" class="img-fluid" src="<?= base_url() ?>assets/assets/galeri/<?= $data->img ?>" alt="">
                                                </a></td>
                                            <td class="text-center">
                                                <a title="Hapus" class="btn btn-outline-danger alert_notif" href="<?php echo base_url() ?>admin/home/delete_foto/<?php echo $data->id_galeri ?>"><i class="fas fa-trash"></i></a>
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

    function add_foto() {
        save_method = 'add';
        $('#form2')[0].reset(); // reset form on modals
        $('#default2').modal('show'); // show bootstrap modal
        $('.modal-title').text('Tambah Foto'); // Set Title to Bootstrap modal title
    }
</script>
<div class="modal fade text-left" id="default2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-dialog modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel1">Tambah Foto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="form2" enctype="multipart/form-data" action="<?php echo base_url() ?>admin/home/add_galeri" method="post">
                <div class="modal-body">
                    <label class="mt-4" for="img">Foto</label><br>
                    <div class="text-center mb-4">
                        <img width="300px" style="display: none;" class="image-fluid" id="image-preview" alt="image preview">
                    </div>
                    <div class="custom-file">
                        <input type="file" required name="gambar" id="image-source" class="custom-file-input" accept="image/x-png,image/jpg,image/jpeg" onchange="previewImage();">
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
    $(document).ready(function() {
        $(function() {
            $('#image-source').change(function() {
                if (Math.round(this.files[0].size / (1024 * 1024)) > 1) {
                    alert('Please select image size less than 1 MB');
                    $("#image-source").val(null);
                }
            });
        });
        $(function() {
            $('#image-source2').change(function() {
                if (Math.round(this.files[0].size / (1024 * 1024)) > 1) {
                    alert('Please select image size less than 1 MB');
                    $("#image-source2").val(null);
                }
            });
        });
    });

    jQuery(document).ready(function($) {
        $('#allow').on('click', function() {
            var getLink = $(this).attr('href');
            swal({
                title: "Apakah anda yakin?",
                text: "Galeri akan ditampilkan",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Ya, hapus!",
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
                text: "Galeri tidak akan ditampilkan",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Ya, hapus!",
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