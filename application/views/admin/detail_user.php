<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Detail User</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <?php
    foreach ($user as $us) {
        $nama = $us->nama;
        $email = $us->email;
        $phone = $us->phone;
    }
    ?>
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h6>Detail user</h6>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="table" class="table">
                                            <tbody>
                                                <tr>
                                                    <td><strong>Nama</strong></td>
                                                    <td><?= $nama ?></td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Email</strong></td>
                                                    <td><?= $email ?></td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Nomer Telepon</strong></td>
                                                    <td><?= $phone ?></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h6>Result</h6>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="table" class="table">
                                            <thead>
                                                <tr>
                                                    <th>Archetype</th>
                                                    <th>SCORE</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $no = 1;
                                                foreach ($type as $data) { ?>
                                                    <tr>
                                                        <td><?php echo $data->archetype ?></td>
                                                        <td>
                                                            <div class="row">
                                                                <div class="col-md-8">
                                                                    <div class="progress">
                                                                        <div class="progress-bar" role="progressbar" aria-valuenow="<?= round($data->score, 0)  ?>" aria-valuemin="0" aria-valuemax="100" style="width:<?= round($data->score, 0)  ?>%">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <span><?= round($data->score, 0)  ?>%</span>
                                                                </div>
                                                            </div>
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
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h6>Type Kata</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="table" class="table">
                                    <thead>
                                        <tr>
                                            <th>Kata</th>
                                            <th>Checked</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        foreach ($kata as $data) { ?>
                                            <tr>
                                                <td><?php echo $data->nama_kata ?></td>
                                                <td>Yes</td>
                                            </tr>
                                        <?php }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->