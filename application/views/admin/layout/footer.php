<footer class="main-footer">
    <strong>Copyright &copy; 2021 <a href="https://vidiracoaching.com">Vidira Coaching</a>.</strong> All rights reserved.
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<!-- Bootstrap 4 -->
<script src="<?= base_url() ?>assets/admin/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url() ?>assets/admin/jquery-ui/jquery-ui.min.js"></script>
<!-- DataTables  & Plugins -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
<script src="<?= base_url() ?>assets/admin/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url() ?>assets/admin/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url() ?>assets/admin/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url() ?>assets/admin/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?= base_url() ?>assets/admin/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?= base_url() ?>assets/admin/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?= base_url() ?>assets/admin/jszip/jszip.min.js"></script>
<script src="<?= base_url() ?>assets/admin/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?= base_url() ?>assets/admin/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?= base_url() ?>assets/admin/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url() ?>assets/admin/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<script src="<?= base_url() ?>assets/admin/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url() ?>assets/admin/ekko-lightbox/ekko-lightbox.min.js"></script>
<script src="<?= base_url() ?>assets/admin/demo.js"></script>
<!-- <script src="<?php echo base_url() . 'assets/admin/ckeditor/ckeditor.js' ?>"></script> -->
<script src="<?= base_url() ?>assets/admin/summernote/summernote-bs4.min.js"></script>
<script src="<?= base_url() ?>assets/admin//select2/js/select2.full.min.js"></script>
<script type="text/javascript">
    $(function() {
        $(document).on('click', '[data-toggle="lightbox"]', function(event) {
            event.preventDefault();
            $(this).ekkoLightbox({
                alwaysShowClose: true
            });
        });
    })
    $('.isi').summernote({
        height: 400,
        toolbar: [

            // [groupName, [list of button]]
            ['style', ['bold', 'italic', 'underline', 'clear']],
            ['font', ['strikethrough']],
            ['para', ['ul', 'ol']],
            ['insert', ['link']],
        ]
    });
    //Initialize Select2 Elements
    $('#kategori').select2({
        theme: 'bootstrap4'
    })

    $(function() {
        bsCustomFileInput.init();
    });

    function previewFile(input) {
        var file = $("input[type=file]").get(0).files[0];

        if (file) {
            var reader = new FileReader();
            reader.onload = function() {
                $("#previewImg").attr("src", reader.result);
            }
            reader.readAsDataURL(file);
        }
    }
    jQuery(document).ready(function($) {
        $('.alert_notif').on('click', function() {
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
    $(function() {
        $(".table1").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });
</script>
</body>

</html>