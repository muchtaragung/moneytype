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
                    <?php if ($this->session->flashdata('warning') != null) { ?>
                        <div class="alert alert-warning" role="alert">
                            <?php echo $this->session->flashdata('warning'); ?>
                        </div>
                    <?php } ?>
                </div>
                <div class="col-md-12">
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <a href="javascript:;" data-toggle="modal" data-target="#tambah-sosmed">
                                <button data-toggle="modal" data-target="#ubah-data" class="btn btn-success">Tambah</button>
                            </a>
                        </div>
                    </div>
                    <div class="card ">
                        <div class="card-body">
                            <?php foreach ($sosmed as $key) { ?>
                                <div class="row">
                                    <div class="col-md-10">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="<?= $key->icon ?>"></i></span>
                                            </div>
                                            <input type="text" readonly title="Tidak boleh kosong" value="<?= $key->link ?>" class="form-control" placeholder="Link Facebook">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <a href="javascript:;" data-id="<?= $key->id_sosmed ?>" data-link="<?= $key->link ?>" data-toggle="modal" data-target="#edit-sosmed">
                                            <button data-toggle="modal" data-target="#ubah-data" title="Edit link" class="btn btn-info"><i class="fas fa-pencil-alt"></i></button>
                                        </a>
                                        <a class="alert_notif btn btn-danger" title="Hapus" href="<?= base_url() ?>admin/sosmed/delete/<?= $key->id_sosmed ?>">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                    </div>
                                </div>
                            <?php  } ?>
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
<?php foreach ($sosmed as $key) { ?>
    <div class="modal" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="edit-sosmed" class="modal fade" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="sosmed" action="<?= base_url() ?>admin/sosmed/update" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="form-group ">
                            <!-- <label for="customFile">Custom File</label> -->
                            <input type="hidden" id="id" name="id">
                            <div class="form-group mb-3">
                                <label for="link">Link Sosial Media</label>
                                <input type="text" title="Tidak boleh kosong" name="link" id="link" class="form-control" placeholder="Link Sosial Media">
                            </div>
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
<?php } ?>
<div class="modal" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="tambah-sosmed" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Sosial Media</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="tambah_sosmed" action="<?= base_url() ?>admin/sosmed/create" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="nama_sosmed">Nama Sosial Media</label>
                        <select class="form-control" title="Tidak boleh kosong" name="nama_sosmed" id="nama_sosmed">
                            <option value="" selected disabled>Pilih Sosial Media</option>
                            <option value="Facebook"><i class="fab fa-twitter">Facebook</i> </option>
                            <option value="Twitter">Twitter</option>
                            <option value="Instagram">Instagram</option>
                            <option value="Youtube">YouTube</option>
                            <option value="Linkedin">LinkedIn</option>
                            <option value="Tiktok">Tiktok</option>
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" title="Tidak boleh kosong" name="link" id="link" class="form-control" placeholder="Link Sosial Media">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        // Untuk sunting
        $('#edit-sosmed').on('show.bs.modal', function(event) {
            var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
            var modal = $(this)

            // Isi nilai pada field
            modal.find('#id').attr("value", div.data('id'));
            modal.find('#icon').attr("value", div.data('icon'));
            modal.find('#link').attr("value", div.data('link'));
        });
    });
    $(document).ready(function() {
        $('#sosmed').validate({
            rules: {
                nama_sosmed: {
                    required: true
                }
            }
        });
        $('#tambah_sosmed').validate({
            rules: {
                nama_sosmed: {
                    required: true
                },
                link: {
                    required: true
                }
            }
        });
    });
</script>
<!-- Modal -->