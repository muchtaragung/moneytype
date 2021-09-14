<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>About</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-outline card-info">
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form action="<?= base_url() ?>admin/about/update" method="post">
                            <label for="">Gambar About</label>
                            <input type="hidden" id="id" name="id" value="<?= $about->id_about ?>">
                            <input type="hidden" name="gambar_lama" value="<?= $about->gambar ?>">
                            <div class="form-group text-center">
                                <img width="300px" id="previewImg" src="<?= base_url() ?>assets/admin/assets/icon/<?= $about->gambar ?>" alt="" srcset="">
                                <div class="custom-file mt-5">
                                    <input type="file" name="gambar" class="custom-file-input" id="gallery-photo-add" accept="image/x-png,image/jpg,image/jpeg" onchange="previewFile(this);">
                                    <label class="custom-file-label" for="gallery-photo-add">Pilih Gambar</label>
                                </div>
                            </div>
                            <hr>
                            <div class="form-group pt-4">
                                <label for="isi">Isi About</label>
                                <textarea id="isi" name="isi" placeholder="Isi tentang About" rows="40"><?= $about->isi ?></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /.col-->
        </div>
        <!-- ./row -->
    </section>
    <!-- /.content -->
</div>
<script>
    $(function() {
        CKEDITOR.replace('isi');
    });
    // $(function() {
    //     // Summernote
    //     $('#isi').summernote({
    //         fontSizes: ['8', '9', '10', '11', '12', '14', '18', '24', '36', '48', '64', '82', '150'],
    //         height: 300,
    //         placeholder: 'Isi About..',
    //         disableDragAndDrop: true,
    //         codeviewFilter: false,
    //         codeviewIframeFilter: true,
    //         toolbar: [
    //             ['style', ['style']],
    //             ['font', ['bold', 'underline', 'clear']],
    //             ['fontsize', ['fontsize']],
    //             ['fontname', ['fontname']],
    //             ['height', ['height']],
    //             ['color', ['color']],
    //             ['para', ['ul', 'ol', 'paragraph']],
    //             ['table', ['table']],
    //             ['view', ['fullscreen', 'help']],
    //         ],
    //     });
    // })
</script>