<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row justify-content-center mb-2">
                <h1 class="m-0">Ubah Password</h1>

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
                    <div class="card">
                        <div class="card-body">
                            <form action="<?= base_url() ?>admin/profile/update_password" method="post">
                                <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>">
                                <div class="form-group">
                                    <input type="password" name="password" class="form-control" placeholder="Password lama anda">
                                    <?php
                                    echo form_error('password');
                                    ?>
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password_baru" class="form-control" placeholder="Password baru anda">
                                    <?php
                                    echo form_error('password_baru');
                                    ?>
                                </div>
                                <div class="form-group">
                                    <input type="password" name="repassword" class="form-control" placeholder="Konfirmasi password anda">
                                    <?php
                                    echo form_error('repassword');
                                    ?>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-info btn-md">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>