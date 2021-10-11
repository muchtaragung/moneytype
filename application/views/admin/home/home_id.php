<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Home ID</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row justify-content-center">
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
                    <?php if ($this->session->flashdata('warning') != null) { ?>
                        <div class="alert alert-warning" role="alert">
                            <?php echo $this->session->flashdata('warning'); ?>
                        </div>
                    <?php } ?>
                </div>
                <div class="col-md-8 offset-md-3">
                    <div class="card text-center" style="width: 30rem;">
                        <div class="card-body">
                            <div class="shadow-lg p-3 mb-5 bg-white rounded">
                                <img src="<?= base_url() ?>assets/assets/img/<?= $home->image ?>" class="card-img-top" alt="...">
                            </div>
                            <div class="form-group mb-3">
                                <label for="email">Header Label</label>
                                <textarea readonly title="Tidak boleh kosong" name="email" id="email" class="form-control" placeholder="Email Contact"><?= $home->masthead_id ?></textarea>
                            </div>
                            <div class="mt-5 pt-5">
                                <a href="javascript:;" data-id="<?php echo $home->id_home ?>" data-image="<?php echo $home->image ?>" data-masthead="<?php echo $home->masthead_id ?>" data-toggle="modal" data-target="#edit-data">
                                    <button data-toggle="modal" data-target="#ubah-data" class="btn btn-info">Edit</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- Modal Ubah -->
<div class="modal" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="edit-data" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Home ID</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="image_contact" action="<?= base_url() ?>admin/home/update_id" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="text-center">
                        <img style="width: 250px; " id="previewImg" src="<?= base_url() ?>assets/icon/transparan.png" alt="Placeholder">
                    </div>
                    <div class="form-group pt-5">
                        <!-- <label for="customFile">Custom File</label> -->
                        <input type="hidden" id="id" name="id">
                        <input type="hidden" id="image_old" name="image_old">
                        <div class="custom-file">
                            <input type="file" name="image" id="image" class="custom-file-input" id="gallery-photo-add" accept="image/x-png,image/jpg,image/jpeg, image/gif" onchange="previewFile(this);">
                            <label class="custom-file-label" for="gallery-photo-add">Pilih Gambar</label>
                        </div>
                        <div class="form-group mb-3 mt-3">
                            <label for="masthead">Header Label</label>
                            <textarea title="Tidak boleh kosong" name="masthead" id="masthead" class="form-control" placeholder="Masthead"><?= $home->masthead_id ?></textarea>
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
    $(document).ready(function() {
        // Untuk sunting
        $('#edit-data').on('show.bs.modal', function(event) {
            var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
            var modal = $(this)

            // Isi nilai pada field
            modal.find('#id').attr("value", div.data('id'));
            modal.find('#masthead').attr("value", div.data('masthead'));
            modal.find('#image_old').attr("value", div.data('image'));
        });
    });
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
        $('#image').change(function() {
            if (Math.round(this.files[0].size / (1024 * 1024)) > 1) {
                alert('Please select image size less than 1 MB');
                $("#image").val(null);
            }
        });
    });
    $(document).ready(function() {
        $('#contact').validate({
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
</script>
<!-- Modal -->