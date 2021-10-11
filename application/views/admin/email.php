<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Email</h1>
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
                <div class="col-md-8">
                    <div class="card ">
                        <form action="" method="post">
                            <div class="card-body">
                                <div class="form-group mb-3">
                                    <label for="email">Alamat Email Penerima (Moneytypes, Contact)</label>
                                    <input readonly type="email" value="<?= $email->email ?>" title="Tidak boleh kosong" name="email" id="email" class="form-control" placeholder="Email Penerima">
                                </div>
                                <div class="form-group mt-3">
                                    <a href="javascript:;" data-id="<?= $email->id_email ?>" data-email="<?= $email->email ?>" data-toggle="modal" data-target="#edit-contact">
                                        <button data-toggle="modal" data-target="#ubah-data" class="btn btn-info">Edit</button>
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card ">
                        <form action="" method="post">
                            <div class="card-body">
                                <div class="form-group mb-3">
                                    <label for="email">Email Web</label>
                                    <input readonly type="email" value="<?= $email->email_web ?>" title="Tidak boleh kosong" name="email" id="email" class="form-control" placeholder="Email Penerima">
                                </div>
                                <div class="form-group mt-3">
                                    <a href="javascript:;" data-id="<?= $email->id_email ?>" data-email="<?= $email->email_web ?>" data-password="<?= $email->password ?>" data-toggle="modal" data-target="#edit-email">
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
<div class="modal" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="edit-contact" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Email</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="contact" action="<?= base_url() ?>admin/email/update" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <input type="hidden" name="id" value="<?= $email->id_email ?>">
                    <div class="form-group mb-3">
                        <label for="email">Alamat Email</label>
                        <input type="email" value="<?= $email->email ?>" title="Tidak boleh kosong" name="email" id="email" class="form-control" placeholder="Email Contact">
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
<div class="modal" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="edit-email" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Email</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="contact" action="<?= base_url() ?>admin/email/update_email_web" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <input type="hidden" name="id" value="<?= $email->id_email ?>">
                    <input type="hidden" name="password" value="<?= $email->password ?>">
                    <div class="form-group mb-3">
                        <label for="email">Alamat Email</label>
                        <input type="email" value="<?= $email->email_web ?>" title="Tidak boleh kosong" name="email_web" id="email" class="form-control" placeholder="Email Contact">
                    </div>
                    <div class="form-group mb-3">
                        <label for="password">Password Email</label>
                        <input type="password" name="password" id="password" class="form-control" placeholder="Password Email Web">
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
    $(document).ready(function() {
        // Untuk sunting
        $('#edit-contact').on('show.bs.modal', function(event) {
            var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
            var modal = $(this)

            // Isi nilai pada field
            modal.find('#id').attr("value", div.data('id'));
            modal.find('#email').attr("value", div.data('email'));
        });
    });
    $(document).ready(function() {
        // Untuk sunting
        $('#edit-email').on('show.bs.modal', function(event) {
            var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
            var modal = $(this)

            // Isi nilai pada field
            modal.find('#id').attr("value", div.data('id'));
            modal.find('#email').attr("value", div.data('email_web'));
            modal.find('#password_lama').attr("value", div.data('password'));
        });
    });
    $(document).ready(function() {
        $('#contact').validate({
            rules: {
                email: {
                    required: true
                },
            }
        });
    });
</script>
<!-- Modal -->