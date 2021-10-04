<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-5">
                <div class="col-sm-12 mb-2">
                    <h1 class="text-center">Logo Web</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content-header -->
    <style>
        .card {
            margin: 0 auto;
            /* Added */
            float: none;
            /* Added */
            margin-bottom: 10px;
            /* Added */
        }
    </style>
    <!-- Main content -->
    <section class="content">
        <div class="container">
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
                </div>
                <div class="col-md-6">
                    <h4 class="text-center">Logo Header</h4>
                    <div class="card text-center" style="width: 19rem;">
                        <div class="card-body">
                            <div class="shadow-lg p-3 mb-5 bg-white rounded">
                                <img src="<?= base_url() ?>assets/admin/assets/logo/<?= $logo->logo ?>" class="card-img-top" alt="...">
                            </div>
                            <div class="mt-5 pt-5">
                                <a href="javascript:;" data-id="<?php echo $logo->id_logo ?>" data-logo="<?php echo $logo->logo ?>" data-toggle="modal" data-target="#edit-data">
                                    <button data-toggle="modal" data-target="#ubah-data" class="btn btn-info">Edit Logo</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <h4 class="text-center">Logo Footer</h4>
                    <div class="card text-center" style="width: 19rem;">
                        <div class="card-body">
                            <div class="shadow-lg p-3 mb-5 bg-white rounded">
                                <img src="<?= base_url() ?>assets/admin/assets/logo/<?= $logo->logo_footer ?>" class="card-img-top" alt="...">
                            </div>
                            <div class="mt-5 pt-5">
                                <a href="javascript:;" data-id="<?php echo $logo->id_logo ?>" data-logo="<?php echo $logo->logo_footer ?>" data-toggle="modal" data-target="#edit-data2">
                                    <button data-toggle="modal" data-target="#ubah-data" class="btn btn-info">Edit Logo</button>
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
                <h5 class="modal-title">Edit Logo Header</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="logo_web" action="<?= base_url() ?>admin/logo/update" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="text-center">
                        <img style="width: 250px; " id="previewImg" src="<?= base_url() ?>assets/icon/transparan.png" alt="Placeholder">
                    </div>
                    <div class="form-group pt-5">
                        <!-- <label for="customFile">Custom File</label> -->
                        <input type="hidden" id="id" name="id">
                        <div class="custom-file">
                            <input type="file" name="logo" class="custom-file-input" id="logo" accept="image/x-png,image/jpg,image/jpeg" onchange="previewFile(this);">
                            <label class="custom-file-label" for="logo">Pilih Logo</label>
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
<div class="modal" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="edit-data2" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Logo Footer</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="logo_web2" action="<?= base_url() ?>admin/logo/update_footer" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="text-center">
                        <img style="width: 250px; " id="previewImg2" src="<?= base_url() ?>assets/icon/transparan.png" alt="Placeholder">
                    </div>
                    <div class="form-group pt-5">
                        <!-- <label for="customFile">Custom File</label> -->
                        <input type="hidden" id="id" name="id">
                        <div class="custom-file">
                            <input type="file" name="logo" class="custom-file-input" id="logo2" accept="image/x-png,image/jpg,image/jpeg" onchange="previewFile2(this);">
                            <label class="custom-file-label" for="logo">Pilih Logo</label>
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
    function previewFile2(input) {
        var file = $("#logo2").get(0).files[0];

        if (file) {
            var reader = new FileReader();
            reader.onload = function() {
                $("#previewImg2").attr("src", reader.result);
            }
            reader.readAsDataURL(file);
        }
    }
    $(document).ready(function() {
        // Untuk sunting
        $('#edit-data').on('show.bs.modal', function(event) {
            var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
            var modal = $(this)

            // Isi nilai pada field
            modal.find('#id').attr("value", div.data('id'));
        });
    });
    $(document).ready(function() {
        // Untuk sunting
        $('#edit-data2').on('show.bs.modal', function(event) {
            var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
            var modal = $(this)

            // Isi nilai pada field
            modal.find('#id').attr("value", div.data('id'));
        });
    });
    $(document).ready(function() {
        $('#logo_web').validate({
            ignore: [],
            rules: {
                logo: {
                    required: true,
                    accept: 'png|jpg|jpeg'
                }
            }
        });

    });
    $(document).ready(function() {
        $('#logo_web2').validate({
            ignore: [],
            rules: {
                logo: {
                    required: true,
                    accept: 'png|jpg|jpeg'
                }
            }
        });

    });
    $(function() {
        $('#logo').change(function() {
            if (Math.round(this.files[0].size / (1024 * 1024)) > 1) {
                alert('Please select image size less than 1 MB');
                $("#logo").val(null);
            }
        });
    });
</script>
<!-- END Modal Ubah -->