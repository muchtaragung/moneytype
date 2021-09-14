<style>
    .card {
        border: 2px solid #f0ad4e;
    }
</style>
<div class="text-center bg-image mt-5" style="background-size: cover; background-repeat: no-repeat;background-image: url(<?= base_url() ?>assets/assets/img/<?= $contact->image ?>);height: 60vh;">
    <div class="mask h-100 w-100" style="background-color: rgba(0, 0, 0, 0.6);">
        <div class="d-flex justify-content-center align-items-center h-100">
            <div class="text-white">
                <h1 class="text-center display-4">Contact</h1>
                <!-- <a class="btn btn-warning btn-lg" href="<?= base_url() ?>moneytype" role="button">Money Type Quiz</a> -->
            </div>
        </div>
    </div>
</div>
<section class="page-section text-black mt-5 mb-0">
    <div class="container">
        <section class="mb-4">
            <!--Section heading-->
            <!--Section description-->
            <?php if ($this->session->flashdata('error') != null) { ?>
                <script>
                    Swal.fire({
                        position: 'top-end',
                        icon: 'error',
                        text: "<?php echo $this->session->flashdata('error'); ?>",
                        timer: 2500,
                        showConfirmButton: false,
                        type: 'error'
                    });
                </script>
            <?php } ?>
            <?php if ($this->session->flashdata('msg') != null) { ?>
                <script>
                    Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        text: "<?php echo $this->session->flashdata('msg'); ?>",
                        timer: 2500,
                        showConfirmButton: false,
                        type: 'success'
                    });
                </script>
            <?php } ?>
            <p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Feel free to contact us directly. Our team will get back to you in a few hours to assist you.</p>
            <div class="row">
                <div class="col-sm-4 d-flex">
                    <div class="card text-center flex-fill">
                        <div class="card-body">
                            <i class="fas fa-map-marker-alt mt-4 fa-2x"></i>

                            <p><?= $contact->alamat ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 d-flex">
                    <div class="card text-center flex-fill">
                        <div class="card-body">
                            <i class="fas fa-phone mt-4 fa-2x"></i>
                            <p><?= $contact->phone ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 d-flex">
                    <div class="card text-center flex-fill">
                        <div class="card-body">
                            <i class="fas fa-envelope mt-4 fa-2x"></i>
                            <a href="mailto:<?= $contact->email ?>">
                                <p><?= $contact->email ?></p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <p class="text-center">Or you can contact us via the form below.</p>
                <!--Grid column-->
                <div class="col-md-6 offset-md-3 mb-5">
                    <div class="card">
                        <div class="card-body">
                            <form id="contact-form" name="contact-form" action="<?= base_url() ?>contact/email" method="POST">
                                <!--Grid row-->
                                <div class="row">
                                    <!--Grid column-->
                                    <div class="col-md-6">
                                        <div class="form-group mb-0">
                                            <input type="text" title="Tidak boleh kosong!" id="nama" name="nama" class="form-control">
                                            <label for="nama">Your name</label>
                                        </div>
                                    </div>
                                    <!--Grid column-->
                                    <!--Grid column-->
                                    <div class="col-md-6">
                                        <div class="md-form mb-0">
                                            <input type="email" title="Tidak boleh kosong!" id="email" name="email" class="form-control">
                                            <label for="email" class="email">Your email</label>
                                        </div>
                                    </div>
                                    <!--Grid column-->
                                </div>
                                <!--Grid row-->
                                <!--Grid row-->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="md-form mb-0">
                                            <input type="text" title="Tidak boleh kosong!" id="subject" name="subject" class="form-control">
                                            <label for="subject" class="subject">Subject</label>
                                        </div>
                                    </div>
                                </div>
                                <!--Grid row-->
                                <!--Grid row-->
                                <div class="row">
                                    <!--Grid column-->
                                    <div class="col-md-12">
                                        <div class="md-form">
                                            <textarea type="text" title="Tidak boleh kosong!" id="message" name="message" rows="4" class="form-control md-textarea"></textarea>
                                            <label for="message">Your message</label>
                                        </div>

                                    </div>
                                </div>
                                <!--Grid row-->


                                <div class="text-center text-md-left">
                                    <button class="btn btn-warning" type="submit">Send</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </section>
    </div>
</section>
<script>
    $(document).ready(function() {
        $('#contact-form').validate({ // initialize the plugin
            rules: {
                nama: {
                    required: true,
                },
                email: {
                    required: true,
                },
                subject: {
                    required: true,
                },
                message: {
                    required: true,
                }
            }
        });

    });
</script>
<!--Section: Contact v.2-->