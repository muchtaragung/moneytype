<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Contact</h1>
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
                                <img src="<?= base_url() ?>assets/assets/img/<?= $contact->image ?>" class="card-img-top" alt="...">
                            </div>
                            <div class="mt-5 pt-5">
                                <a href="javascript:;" data-id="<?php echo $contact->id_contact ?>" data-logo="<?php echo $contact->image ?>" data-toggle="modal" data-target="#edit-data">
                                    <button data-toggle="modal" data-target="#ubah-data" class="btn btn-info">Edit Gambar</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card ">
                        <form action="" method="post">
                            <div class="card-body">
                                <input type="hidden" name="id" value="<?= $contact->id_contact ?>">
                                <div class="form-group mb-3">
                                    <label for="email">Alamat Email</label>
                                    <input readonly type="email" value="<?= $contact->email ?>" title="Tidak boleh kosong" name="email" id="email" class="form-control" placeholder="Email Contact">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="phone">Nomer telepon</label>
                                    <input readonly type="number" value="<?= $contact->phone ?>" title="Tidak boleh kosong" name="phone" id="phone" class="form-control" placeholder="Nomer Telepon">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="alamat">Alamat Perusahaan</label>
                                    <textarea readonly placeholder="Alamat" name="alamat" title="Tidak boleh kosong" id="alamat" class="form-control" cols="30" rows="5"><?= $contact->alamat ?></textarea>
                                </div>
                                <div class="form-group mt-3">
                                    <a href="javascript:;" data-id="<?= $contact->id_contact ?>" data-email="<?= $contact->email ?>" data-phone="<?= $contact->phone ?>" data-alamat="<?= $contact->alamat ?>" data-toggle="modal" data-target="#edit-contact">
                                        <button data-toggle="modal" data-target="#ubah-data" class="btn btn-info">Edit</button>
                                    </a>
                                </div>
                            </div>
                        </form>
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
                <h5 class="modal-title">Edit Gambar Contact</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="image_contact" action="<?= base_url() ?>admin/contact/update_image" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="text-center">
                        <img style="width: 250px; " id="previewImg" src="<?= base_url() ?>assets/icon/transparan.png" alt="Placeholder">
                    </div>
                    <div class="form-group pt-5">
                        <!-- <label for="customFile">Custom File</label> -->
                        <input type="hidden" id="id" name="id">
                        <div class="custom-file">
                            <input type="file" name="image" class="custom-file-input" id="image" accept="image/x-png,image/jpg,image/jpeg" onchange="previewFile(this);">
                            <label class="custom-file-label" for="image">Pilih Gambar</label>
                            <small id="helpId" class="text-muted">*Maksimal 1 mb</small>
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
<div class="modal" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="edit-contact" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Contact</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="contact" action="<?= base_url() ?>admin/contact/update" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <input type="hidden" name="id" value="<?= $contact->id_contact ?>">
                    <div class="form-group mb-3">
                        <label for="email">Alamat Email</label>
                        <input type="email" value="<?= $contact->email ?>" title="Tidak boleh kosong" name="email" id="email" class="form-control" placeholder="Email Contact">
                    </div>
                    <div class="form-group mb-3">
                        <label for="phone">Nomer telepon</label>
                        <input type="number" value="<?= $contact->phone ?>" title="Tidak boleh kosong" name="phone" id="phone" class="form-control" placeholder="Nomer Telepon">
                    </div>
                    <div class="form-group mb-3">
                        <label for="alamat">Alamat Perusahaan</label>
                        <textarea placeholder="Alamat" name="alamat" title="Tidak boleh kosong" id="alamat" class="form-control" cols="30" rows="5"><?= $contact->alamat ?></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Update</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    $(function() {
        $('#image').change(function() {
            if (Math.round(this.files[0].size / (1024 * 1024)) > 1) {
                alert('Please select image size less than 1 MB');
                $("#image").val(null);
            }
        });
    });
    $(document).ready(function() {
        // Untuk sunting
        $('#edit-contact').on('show.bs.modal', function(event) {
            var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
            var modal = $(this)

            // Isi nilai pada field
            modal.find('#id').attr("value", div.data('id'));
            modal.find('#email').attr("value", div.data('email'));
            modal.find('#phone').attr("value", div.data('phone'));
            modal.find('#alamat').attr("value", div.data('alamat'));
        });
    });
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
        $('#image_contact').validate({
            ignore: [],
            rules: {
                image: {
                    required: true,
                    accept: 'png|jpg|jpeg'
                }
            }
        });

    });
    $(document).ready(function() {
        $('#image').bind('change', function() {
            var a = (this.files[0].size);
            alert(a);
            if (a > 1000000) {
                alert('large');
            };
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