<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row justify-content-center mb-2">
                <h1 class="m-0">Logo WEB</h1>

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
                </div>
                <div class="card text-center" style="width: 30rem;">
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
                <h5 class="modal-title">Edit Logo</h5>
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
<script>
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