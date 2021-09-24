<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Resource ID</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form id="form1" enctype="multipart/form-data" action="<?php echo base_url() ?>admin/resource/update_resource_id" method="post">
                                <input type="hidden" name="id" value="<?= $resource->id_blog ?>">
                                <div class="form-group">
                                    <label for="">Kategori Resource</label>
                                    <select name="kategori" required class="select2 form-control" id="kategori">
                                        <option disabled value="<?= $resource->id_kategori ?>"><?= $resource->nama_kategori ?></option>
                                        <?php
                                        foreach ($kategori as $data) { ?>
                                            <option value="<?= $data->id_kategori ?>"><?= $data->nama_kategori ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="judul">Judul</label>
                                    <input type="text" required name="judul" value="<?= $resource->judul ?>" class="form-control" id="judul">
                                </div>
                                <div class="form-group">
                                    <label for="isi2">Isi Resource</label>
                                    <textarea required name="isi" class="isi form-control" rows="20" id="isi2"><?= $resource->isi ?></textarea>
                                </div>
                                <label for="isi">Gambar</label>
                                <div class="text-center mb-4">
                                    <input type="hidden" name="img_lama" value="<?= $resource->img ?>">
                                    <img width="250px" src="<?= base_url() ?>assets/assets/blog/<?= $resource->img ?>" class="image-fluid" id="image-preview" alt="image preview">
                                </div>
                                <div class="custom-file">
                                    <input type="file" name="img" id="image-source" class="custom-file-input" accept="image/x-png,image/jpg,image/jpeg" onchange="previewImage();">
                                    <label class="custom-file-label" for="gallery-photo-add">Pilih Gambar</label>
                                    <small id="helpId" class="text-muted">*Maksimal 1 mb</small>
                                </div>
                                <div class="text-right">
                                    <button type="submit" class="btn btn-primary ml-1">
                                        <i class="bx bx-check d-block d-sm-none"></i>
                                        <span class="d-none d-sm-block">Update</span>
                                    </button>
                                </div>
                            </form>
                        </div>

                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
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
        $('#table').on('click', '.alert_notif', function() {
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