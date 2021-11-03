<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Template Email Moneytype EN</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
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
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form action="<?= base_url() ?>admin/user/update_template_en" method="post">
                                <h4>Template Email Moneytypes</h4>
                                <input type="hidden" name="id" value="<?= $email->id_email ?>">
                                <div class="form-group">
                                    <label for="isi">Isi Email</label>
                                    <textarea class="isi form-control" name="isi" id="isi" rows="3"><?= $email->isi ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="penutup">Penutup Email</label>
                                    <textarea class="isi form-control" name="penutup" id="penutup" rows="3"><?= $email->penutup ?></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Update</button>
                            </form>
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

</div>
<!-- /.content-wrapper -->