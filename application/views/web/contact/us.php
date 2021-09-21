<style>
    .fa-map-marker-alt {
        color: orange;
    }

    .fa-phone {
        color: orange;
    }

    .fa-envelope {
        color: orange;
    }

    a,
    a:hover,
    a:focus,
    a:active {
        text-decoration: none;
        color: inherit;
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
            <!-- <p class="text-center w-responsive mx-auto mb-5">Apakah Anda memiliki pertanyaan? Jangan ragu untuk menghubungi kami secara langsung. Tim kami akan kembali kepada Anda dalam beberapa jam untuk membantu Anda.</p> -->
            <div class="row">

                <div class="col-md-8">
                    <h2 class="mb-3">CONTACT US</h2>
                    <form id="contact-form" name="contact-form" action="<?= base_url() ?>contact/email" method="POST">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <div class="form-group mb-0">
                                    <input type="text" title="Tidak boleh kosong!" id="nama" name="nama" class="form-control form-control-lg" placeholder="Your Name">
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="md-form mb-0">
                                    <input type="email" title="Tidak boleh kosong!" id="email" name="email" class="form-control form-control-lg" placeholder="Your Email">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <div class="md-form mb-0">
                                    <input type="number" title="Tidak boleh kosong!" id="phone" name="phone" class="form-control form-control-lg" placeholder="Phone Number">
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="md-form mb-0">
                                    <input type="text" title="Tidak boleh kosong!" id="subject" name="subject" class="form-control form-control-lg" placeholder="Subject">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <!--Grid column-->
                            <div class="col-md-12 mb-5">
                                <div class="md-form">
                                    <textarea type="text" title="Tidak boleh kosong!" id="message" name="message" rows="6" class="form-control form-control-lg" placeholder="Your Message"></textarea>
                                </div>

                            </div>
                        </div>
                        <div class="text-left text-md-left">
                            <button class="btn btn-warning" type="submit">Send</button>
                        </div>
                    </form>
                </div>
                <div class="col-md-4">
                    <h2>CONTACT INFO</h2>
                    <div class="row">
                        <div class="col-1 text-center">
                            <i class="fas fa-map-marker-alt mt-3"></i>
                        </div>
                        <div class="col-11">
                            <p style="font-size: medium;">
                                <?= $contact->alamat ?>
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-1 text-center">
                            <i class="fas fa-phone mt-3"></i>
                        </div>
                        <div class="col-11">
                            <p style="font-size: medium;">
                                <?php
                                echo preg_replace('/\d{3}/', '$0-', str_replace('.', 'null', trim($contact->phone)), 2);
                                ?>
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-1">
                            <i class="fas fa-envelope mt-3"></i>
                        </div>
                        <div class="col-11">
                            <p style="font-size: medium;">
                                <a class="" href="mailto:<?= $contact->email ?>">
                                    <?= $contact->email ?>
                                </a>
                            </p>
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
                phone: {
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