<section class="page-section text-black mt-5 mb-0">
    <div class="container">
        <section class="mb-4">

            <!--Section heading-->
            <h2 class="text-center display-4">Contact</h2>
            <!--Section description-->
            <p class="text-center w-responsive mx-auto mb-5">Apakah Anda memiliki pertanyaan? Jangan ragu untuk menghubungi kami secara langsung. Tim kami akan kembali kepada Anda dalam beberapa jam untuk membantu Anda.</p>
            <div class="row">
                <div class="col-sm-4 d-flex">
                    <div class="card text-center flex-fill">
                        <div class="card-body">
                            <i class="fas fa-map-marker-alt mt-4 fa-2x"></i>

                            <p>Jl. Kramat Blok B06, Pangkalan Jati, Cinere, Depok </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 d-flex">
                    <div class="card text-center flex-fill">
                        <div class="card-body">
                            <i class="fas fa-phone mt-4 fa-2x"></i>
                            <p>+ 01 234 567 89</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 d-flex">
                    <div class="card text-center flex-fill">
                        <div class="card-body">
                            <i class="fas fa-envelope mt-4 fa-2x"></i>
                            <a href="mailto:info@vidiracoaching.com">
                                <p>info@vidiracoaching.com</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <p class="text-center">Atau Anda bisa menghubungi kami melalui form dibawah ini.</p>
                <!--Grid column-->
                <div class="col-md-6 offset-md-3 mb-5">
                    <div class="card">
                        <div class="card-body">
                            <form id="contact-form" name="contact-form" action="mail.php" method="POST">
                                <!--Grid row-->
                                <div class="row">
                                    <!--Grid column-->
                                    <div class="col-md-6">
                                        <div class="form-group mb-0">
                                            <input type="text" id="name" name="name" class="form-control">
                                            <label for="name">Nama Anda</label>
                                        </div>
                                    </div>
                                    <!--Grid column-->

                                    <!--Grid column-->
                                    <div class="col-md-6">
                                        <div class="md-form mb-0">
                                            <input type="text" id="email" name="email" class="form-control">
                                            <label for="email" class="">Email Anda</label>
                                        </div>
                                    </div>
                                    <!--Grid column-->

                                </div>
                                <!--Grid row-->

                                <!--Grid row-->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="md-form mb-0">
                                            <input type="text" id="subject" name="subject" class="form-control">
                                            <label for="subject" class="">Subjek</label>
                                        </div>
                                    </div>
                                </div>
                                <!--Grid row-->

                                <!--Grid row-->
                                <div class="row">

                                    <!--Grid column-->
                                    <div class="col-md-12">

                                        <div class="md-form">
                                            <textarea type="text" id="message" name="message" rows="4" class="form-control md-textarea"></textarea>
                                            <label for="message">Pesan Anda</label>
                                        </div>

                                    </div>
                                </div>
                                <!--Grid row-->

                            </form>
                            <div class="text-center text-md-left">
                                <a class="btn btn-warning" onclick="document.getElementById('contact-form').submit();">Kirim</a>
                            </div>
                            <div class="status"></div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
    </div>
</section>
<!--Section: Contact v.2-->