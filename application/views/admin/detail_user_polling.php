<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Detail User Polling Money Blocks</h1>
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
                <div class="col-md-12">
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
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h6>Kalimat yang dipilih</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="table" class="table">
                                    <thead>
                                        <tr>
                                            <th>Kalimat</th>
                                            <th>Checked</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        foreach ($kata as $data) { ?>
                                            <tr>
                                                <td><?php echo $data->kata ?></td>
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