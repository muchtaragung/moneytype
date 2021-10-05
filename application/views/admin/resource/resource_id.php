<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Resource ID</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
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
                            <form id="header" action="<?= base_url() ?>admin/resource/update_header_id" enctype="multipart/form-data" method="post">
                                <label for="">Header Image Resource</label>
                                <input type="hidden" id="id" name="id" value="<?= $resource->id_resource ?>">
                                <input type="hidden" name="gambar_lama" value="<?= $resource->img_header ?>">
                                <div class="text-center mb-4">

                                    <img width="250px" src="<?= base_url() ?>assets/assets/img/<?= $resource->img_header ?>" class="image-fluid" id="image-preview2" alt="image preview">

                                </div>
                                <div class="custom-file">
                                    <input type="file" required name="gambar" id="image-source2" class="custom-file-input" accept="image/x-png,image/jpg,image/jpeg" onchange="previewImage2();">
                                    <label class="custom-file-label" for="gallery-photo-add">Pilih Gambar</label>
                                    <small id="helpId" class="text-muted">*Maksimal 1 mb</small>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </form>
                            <hr>
                        </div>
                    </div>
                    <div class="card card-outline card-info">
                        <!-- /.card-header -->
                        <div class="card-body">
                            <button type="button" class="btn btn-outline-success block" onclick="add_resource()" data-bs-toggle="modal">
                                Tambah Resource
                            </button>
                            <div class="table-responsive">
                                <table id="table1" class="table table1 table-hover">
                                    <thead>
                                        <tr class="text-center">
                                            <th>No</th>
                                            <th>Judul</th>
                                            <th>Isi</th>
                                            <th>Kategori</th>
                                            <th>Image</th>
                                            <th>Tanggal</th>
                                            <th>AKSI</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        foreach ($resource_id as $data) { ?>
                                            <tr>
                                                <td><?= $no++ ?></td>
                                                <td><?= $data->judul ?></td>
                                                <td><?= $data->isi ?></td>
                                                <td><?= $data->nama_kategori ?></td>
                                                <td>
                                                    <a href="<?= base_url() ?>assets/assets/blog/<?= $data->img ?>" data-toggle="lightbox" data-title="Image Resource" data-gallery="gallery">
                                                        <img width="200px" class="img-fluid" src="<?= base_url() ?>assets/assets/blog/<?= $data->img ?>" alt="">
                                                    </a>
                                                </td>
                                                <td><?= $data->tanggal_post ?></td>
                                                <td class="text-center">
                                                    <a class="btn btn-outline-primary" href="<?php echo base_url() ?>admin/resource/edit_resource_id/<?php echo $data->id_blog ?>" title="Edit"><i class="fas fa-pen"></i></a>
                                                    <a title="Hapus" class="btn btn-outline-danger alert_notif" href="<?php echo base_url() ?>admin/resource/delete_resource_id/<?php echo $data->id_blog ?>"><i class="fas fa-trash"></i></a>
                                                </td>
                                            </tr>
                                        <?php  } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                    <div class="card card-outline card-info">
                        <!-- /.card-header -->
                        <div class="card-header">
                            <h4>Komentar Resource</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="table2" class="table table1 table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Judul</th>
                                            <th>Kategori</th>
                                            <th>Nama</th>
                                            <th>Email</th>
                                            <th>Website</th>
                                            <th>Komentar</th>
                                            <th>Status</th>
                                            <th>tanggal</th>
                                            <th>AKSI</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        foreach ($komen as $data) { ?>
                                            <tr>
                                                <td><?= $no++ ?></td>
                                                <td><?= $data->judul ?></td>
                                                <td><?= $data->nama_kategori ?></td>
                                                <td><?= $data->nama ?></td>
                                                <td><?= $data->email ?></td>
                                                <td><?= $data->website ?></td>
                                                <td><?= $data->komen ?></td>
                                                <?php if ($data->akses == 1) { ?>
                                                    <td><span class="badge badge-success">Tampil</span></td>
                                                <?php } elseif ($data->akses == 0) { ?>
                                                    <td><span class="badge badge-warning">Menunggu Konfirmasi</span></td>
                                                <?php } else { ?>
                                                    <td><span class="badge badge-danger">Tidak tampil</span></td>
                                                <?php } ?>
                                                <td><?= $data->tgl ?></td>
                                                <td class="text-center">
                                                    <a href="javascript:;" data-id="<?php echo $data->id_komen ?>" data-akses="<?php echo $data->akses ?>" data-toggle="modal" data-target="#edit-data">
                                                        <button data-toggle="modal" title="Edit Status" data-target="#ubah-data" class="btn btn-info"><i class="fas fa-pen"></i></button>
                                                    </a>
                                                    <a title="Hapus" class="btn btn-outline-danger alert_notif" href="<?php echo base_url() ?>admin/resource/delete_komen_id/<?php echo $data->id_komen ?>"><i class="fas fa-trash"></i></a>
                                                </td>
                                            </tr>
                                        <?php  } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<script>

</script>
<div class="modal fade text-left" id="default2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-dialog modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel1">Tambah Resource</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="form2" enctype="multipart/form-data" action="<?php echo base_url() ?>admin/resource/add_resource_id" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="">Kategori Resource</label>
                        <select name="kategori" required class="select2 form-control" id="kategori">
                            <option disabled selected value="">Pilih Kategori</option>
                            <?php
                            foreach ($kategori as $data) { ?>
                                <option value="<?= $data->id_kategori ?>"><?= $data->nama_kategori ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="judul">Judul</label>
                        <input type="text" required name="judul" class="form-control" id="judul">
                    </div>
                    <div class="form-group">
                        <label for="isi">Isi Resource</label>
                        <textarea required required name="isi" class="isi form-control" rows="20" id="isi"></textarea>
                    </div>
                    <label for="isi">Gambar</label>
                    <div class="text-center mb-4">
                        <img width="250px" class="image-fluid" style="display:none;" id="image-preview" alt="image preview">
                    </div>
                    <div class="custom-file">
                        <input type="file" required name="img" id="image-source" class="custom-file-input" accept="image/x-png,image/jpg,image/jpeg" onchange="previewImage();">
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
<div class="modal" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="edit-data" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Ubah Status Komentar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="status" action="<?= base_url() ?>admin/resource/update_status_id" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <!-- <label for="customFile">Custom File</label> -->
                        <input type="hidden" id="id" name="id">
                        <div class="form-group mb-3 mt-3">
                            <label for="akses">Status Komentar</label>
                            <select name="akses" class="form-control" id="akses">
                                <option disabled selected value="">Pilih Status</option>
                                <option value="1">Tampil</option>
                                <option value="2">Tidak Tampil</option>
                            </select>
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
<script>
    function previewImage2() {
        document.getElementById("image-preview2").style.display = "block";
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("image-source2").files[0]);
        oFReader.onload = function(oFREvent) {
            document.getElementById("image-preview2").src = oFREvent.target.result;
        };
    };

    function previewImage() {
        document.getElementById("image-preview").style.display = "block";
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("image-source").files[0]);
        oFReader.onload = function(oFREvent) {
            document.getElementById("image-preview").src = oFREvent.target.result;
        };
    };
    $(document).ready(function() {
        // Untuk sunting
        $('#edit-data').on('show.bs.modal', function(event) {
            var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
            var modal = $(this)

            // Isi nilai pada field
            modal.find('#id').attr("value", div.data('id'));
            modal.find('#akses').attr("value", div.data('akses'));
        });
    });

    $(function() {
        $('#image-source').change(function() {
            if (Math.round(this.files[0].size / (1024 * 1024)) > 1) {
                alert('Please select image size less than 1 MB');
                $("#image-source").val(null);
            }
        });
    });



    function add_resource() {
        save_method = 'add';
        $('#form2')[0].reset(); // reset form on modals
        $('#default2').modal('show'); // show bootstrap modal
        $('.modal-title').text('Tambah resouce'); // Set Title to Bootstrap modal title
    }


    jQuery(document).ready(function($) {
        $('#table1').on('click', '.alert_notif', function() {
            var getLink = $(this).attr('href');
            swal({
                title: "Apakah anda yakin?",
                text: "Data yang dihapus tidak dapat kembali.",
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
        $('#table2').on('click', '.alert_notif', function() {
            var getLink = $(this).attr('href');
            swal({
                title: "Apakah anda yakin?",
                text: "Data yang dihapus tidak dapat kembali.",
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