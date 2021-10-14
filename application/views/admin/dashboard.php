<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-md-3 col-sm-6 col-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-info"><a href="<?= base_url() ?>admin/resource"><i class="far fa-newspaper"></i></a></span>

                        <div class="info-box-content">
                            <a style="color: black" href="<?= base_url() ?>admin/resource"><span class="info-box-text">Resource EN</span></a>
                            <span class="info-box-number"><?php echo $this->db->count_all_results('blog'); ?></span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <div class="col-md-3 col-sm-6 col-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-danger"><a href="<?= base_url() ?>admin/resource/id"><i class="far fa-newspaper"></i></a></span>

                        <div class="info-box-content">
                            <a style="color: black" href="<?= base_url() ?>admin/resource/id"><span class="info-box-text">Resource ID</span></a>
                            <span class="info-box-number"><?php echo $this->db->count_all_results('blog_id'); ?></span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <div class="col-md-3 col-sm-6 col-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-primary"> <a href="<?= base_url() ?>admin/resource"><i class="fas fa-users"></i></a></span>

                        <div class="info-box-content">
                            <a style="color: black" href="<?= base_url() ?>admin/contact/subs"><span class="info-box-text">Subscriber</span></a>
                            <span class="info-box-number"><?php echo $this->db->count_all_results('subs'); ?></span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <div class="col-md-3 col-sm-6 col-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-warning"> <a href="<?= base_url() ?>admin/resource/id"><i class="fas fa-user-lock"></i></a></span>
                        <div class="info-box-content">
                            <a style="color: black" href="<?= base_url() ?>admin/polling"><span class="info-box-text">User Polling Money Blocks</span></a>
                            <span class="info-box-number"><?php echo $komen_id ?></span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>

                <div class="col-lg-12 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3><?php echo $this->db->count_all_results('users'); ?></h3>
                            <p>User (visitor Money type)</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <a href="<?= base_url('admin/user') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
            </div>
            <!-- /.row -->
            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>