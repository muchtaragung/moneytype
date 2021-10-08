<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Subscriber</span></h1>
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
                            <a class="btn btn-outline-primary" href="javascript:void(0)" title="Kirim email" onclick="send_all()"><i class="fas fa-mail-bulk"></i> Kirim ke semua</a>
                            <div class="table-responsive">
                                <table id="table_user" class="table table1 table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Email</th>
                                            <th class="text-center">AKSI</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        foreach ($subs as $data) { ?>
                                            <tr>
                                                <td><?php echo $no++ ?></td>
                                                <td><?php echo $data->email ?></td>
                                                <td class="text-center">
                                                    <a href="javascript:;" data-email="<?= $data->email ?>" data-toggle="modal" data-target="#edit-email">
                                                        <button data-toggle="modal" data-target="#ubah-data" class="btn btn-info"><i class="far fa-envelope"></i></button>
                                                    </a>
                                                </td>
                                            </tr>
                                        <?php }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
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
    function send_all() {
        save_method = 'add';
        $('#feature_modal').modal('show'); // show bootstrap modal
        $('.modal-title').text('Kirim Email'); // Set Title to Bootstrap modal title
    }
</script>
<div class="modal fade text-left" id="feature_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-dialog modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel1">Tambah Feature</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="feature" enctype="multipart/form-data" action="<?php echo base_url() ?>admin/contact/send_all" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="subjek">Subjek Email</label>
                        <input type="text" required name="subjek" id="subjek" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="isi">Isi Email</label>
                        <textarea name="isi" required rows="5" class="isi form-control" id="isi"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary ml-1">
                        <i class="bx bx-check d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Kirim</span>
                    </button>
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
            <form id="contact" action="<?= base_url() ?>admin/contact/send" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <input type="hidden" name="email" id="email" value="">
                    <div class="form-group">
                        <label for="subjek">Subjek Email</label>
                        <input type="text" required name="subjek" id="subjek" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="isi">Isi Email</label>
                        <textarea name="isi" required rows="5" class="isi form-control" id="isi"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Kirim</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        // Untuk sunting
        $('#edit-email').on('show.bs.modal', function(event) {
            var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
            var modal = $(this)

            // Isi nilai pada field
            modal.find('#email').attr("value", div.data('email'));
        });
    });
</script>