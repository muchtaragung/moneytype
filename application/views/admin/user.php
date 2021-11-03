<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Users <span style="font-size: 19px;">(Visitor Money Type Quiz)</span></h1>
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
                            <div class="table-responsive">
                                <table id="table_user" class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Email</th>
                                            <th>Nomer Telepon/Whatsapp</th>
                                            <th>AKSI</th>
                                        </tr>
                                    </thead>
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
    var save_method; //for save method string
    var table;
    $(document).ready(function() {
        var token = "<?php echo $this->security->get_csrf_hash(); ?>";
        table = $('#table_user').DataTable({
            "responsive": true,
            "lengthChange": false,
            "searching": true,
            "processing": true, //Feature control the processing indicator.
            "serverSide": true, //Feature control DataTables' server-side processing mode.

            // Load data for the table's content from an Ajax source
            "ajax": {
                "url": "<?php echo site_url('admin/user/ajax_list') ?>",
                "type": "POST",
                data: function(d) {
                    d.<?php echo $this->security->get_csrf_token_name(); ?> = token;
                }
            },

            //Set column definition initialisation properties.
            "columnDefs": [{
                "targets": [0], //last column
                "orderable": false, //set not orderable
            }, ],

        });
        table.on('xhr.dt', function(e, settings, json, xhr) {
            token = json.<?= $this->security->get_csrf_token_name(); ?>;
        });
    });

    function reload_table() {
        table.ajax.reload(null, false); //reload datatable ajax 
    }

    function delete_pelanggan(id) {
        // CSRF hash
        swal({
            title: 'Apakah anda yakin?',
            text: "Data tidak dapat dikembalikan lagi!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, Hapus!',
            closeOnConfirm: false
        }).then(function(isConfirm) {
            if (isConfirm) {
                $.ajax({
                    url: "<?php echo site_url('admin/pelanggan/ajax_delete/') ?>" + id,
                    type: "POST",
                    data: {
                        '<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>'
                    },
                    dataType: "JSON",
                    success: function(data) {
                        $('#modal_form').modal('hide');
                        var table = $('#table').DataTable();
                        reload_table();
                        swal(
                            'Terhapus!',
                            'Data berhasil dihapus.',
                            'success'
                        );
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        swal(
                            'Gagal!',
                            'Terjadi kesalahan',
                            'warning'
                        )
                    }
                });


            }
        })

    }

    function add_pelanggan() {
        save_method = 'add';
        $('#form2')[0].reset(); // reset form on modals
        $('#default2').modal('show'); // show bootstrap modal
        $('.modal-title').text('Tambah Pelanggan'); // Set Title to Bootstrap modal title
    }

    function edit_pelanggan(id) {
        save_method = 'update';
        $('#form1')[0].reset(); // reset form on modals

        //Ajax Load data from ajax
        $.ajax({
            url: "<?php echo site_url('admin/pelanggan/ajax_edit') ?>/" + id,
            type: "GET",
            dataType: "JSON",
            success: function(data) {

                $('[name="id"]').val(data.id_pelanggan);
                $('[name="nama_pelanggan"]').val(data.nama_pelanggan);
                $('[name="no_hp"]').val(data.no_hp);
                $('[name="email"]').val(data.email);
                $('[name="alamat"]').val(data.alamat);
                $('#default1').modal('show'); // show bootstrap modal when complete loaded
                $('.modal-title').text('Edit Pelanggan'); // Set title to Bootstrap modal title

            },
            error: function(jqXHR, textStatus, errorThrown) {
                alert('Error get data from ajax');
            }
        });
    }
    jQuery(document).ready(function($) {
        $('#table_user').on('click', '.alert_notif', function() {
            var getLink = $(this).attr('href');
            swal({
                title: "Apakah anda yakin?",
                text: "Data yang dihapus tidak dapat kembali.",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Ya, hapus!",
                cancelButtonText: "Tidak, kembali!",
                closeOnConfirm: false,
                closeOnCancel: true
            }, function() {
                window.location.href = getLink
            });
            return false;
        });
    });
</script>