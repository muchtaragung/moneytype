<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row justify-content-center mb-2">
                <h1 class="m-0">Sosial Media</h1>
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
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
                <div class="col-md-12">
                    <!-- <div class="row mb-3">
                        <div class="col-md-12">
                            <a href="#" class="btn btn-info text-center">Tambah Sosmed</a>
                        </div>
                    </div> -->
                    <div class="card ">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-10">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fab fa-facebook-square"></i></span>
                                        </div>
                                        <input type="text" readonly title="Tidak boleh kosong" value="<?php echo $sosmed->facebook ?>" name="facebook" id="facebook" class="form-control" placeholder="Link Facebook">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <a href="javascript:;" data-id="<?php echo $sosmed->id_sosmed ?>" data-facebook="<?php echo $sosmed->facebook ?>" data-toggle="modal" data-target="#edit-facebook">
                                        <button data-toggle="modal" data-target="#ubah-data" class="btn btn-info">Edit</button>
                                    </a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-10">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fab fa-twitter"></i></span>
                                        </div>
                                        <input type="text" readonly title="Tidak boleh kosong" value="<?php echo $sosmed->twitter ?>" name="twitter" class="form-control" placeholder="Link Twitter">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <a href="javascript:;" data-id="<?php echo $sosmed->id_sosmed ?>" data-twitter="<?php echo $sosmed->twitter ?>" data-toggle="modal" data-target="#edit-twitter">
                                        <button data-toggle="modal" data-target="#ubah-data" class="btn btn-info">Edit</button>
                                    </a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-10">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fab fa-instagram"></i></span>
                                        </div>
                                        <input type="text" readonly title="Tidak boleh kosong" value="<?php echo $sosmed->instagram ?>" name="instagram" class="form-control" placeholder="Link Instagram">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <a href="javascript:;" data-id="<?php echo $sosmed->id_sosmed ?>" data-instagram="<?php echo $sosmed->instagram ?>" data-toggle="modal" data-target="#edit-instagram">
                                        <button data-toggle="modal" data-target="#ubah-data" class="btn btn-info">Edit</button>
                                    </a>
                                </div>
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
<div class="modal" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="edit-facebook" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="sosmed_facebook" action="<?= base_url() ?>admin/sosmed/update" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group ">
                        <!-- <label for="customFile">Custom File</label> -->
                        <input type="hidden" id="id" name="id">
                        <input type="hidden" name="twitter">
                        <input type="hidden" name="instagram">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fab fa-facebook-square"></i></span>
                            </div>
                            <input type="text" title="Tidak boleh kosong" name="facebook" id="facebook" class="form-control" placeholder="Link Facebook">
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
<div class="modal" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="edit-twitter" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="sosmed_twitter" action="<?= base_url() ?>admin/sosmed/update" method="post" enctype="multipart/form-data">
                <div class="modal-body">

                    <div class="form-group ">
                        <!-- <label for="customFile">Custom File</label> -->
                        <input type="hidden" id="id" name="id">
                        <input type="hidden" name="facebook">
                        <input type="hidden" name="instagram">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fab fa-twitter"></i></span>
                            </div>
                            <input type="text" title="Tidak boleh kosong" name="twitter" id="twitter" class="form-control" placeholder="Link Twitter">
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
<div class="modal" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="edit-instagram" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="sosmed_instagram" action="<?= base_url() ?>admin/sosmed/update" method="post" enctype="multipart/form-data">
                <div class="modal-body">

                    <div class="form-group ">
                        <!-- <label for="customFile">Custom File</label> -->
                        <input type="hidden" id="id" name="id">
                        <input type="hidden" name="twitter">
                        <input type="hidden" name="facebook">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fab fa-instagram"></i></span>
                            </div>
                            <input type="text" title="Tidak boleh kosong" name="instagram" id="instagram" class="form-control" placeholder="Link Instagram">
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
        $('#edit-facebook').on('show.bs.modal', function(event) {
            var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
            var modal = $(this)

            // Isi nilai pada field
            modal.find('#id').attr("value", div.data('id'));
            modal.find('#facebook').attr("value", div.data('facebook'));
        });
    });
    $(document).ready(function() {
        // Untuk sunting
        $('#edit-twitter').on('show.bs.modal', function(event) {
            var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
            var modal = $(this)

            // Isi nilai pada field
            modal.find('#id').attr("value", div.data('id'));
            modal.find('#twitter').attr("value", div.data('twitter'));
        });
    });
    $(document).ready(function() {
        // Untuk sunting
        $('#edit-instagram').on('show.bs.modal', function(event) {
            var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
            var modal = $(this)

            // Isi nilai pada field
            modal.find('#id').attr("value", div.data('id'));
            modal.find('#instagram').attr("value", div.data('instagram'));
        });
    });
    $(document).ready(function() {
        $('#sosmed_facebook').validate({
            rules: {
                facebook: {
                    required: true
                }
            }
        });
        $('#sosmed_twitter').validate({
            rules: {
                twitter: {
                    required: true
                }
            }
        });
        $('#sosmed_instagram').validate({
            rules: {
                instagram: {
                    required: true
                }
            }
        });

    });
</script>
<!-- Modal -->