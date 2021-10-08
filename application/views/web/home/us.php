<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Vidira Home</title>
    <!-- Favicon-->
    <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url() ?>assets/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url() ?>assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url() ?>assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?= base_url() ?>assets/favicon/site.webmanifest">
    <!-- Bootstrap Icons-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" /> -->
    <!-- Google fonts-->
    <!-- <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" /> -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" /> -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <!-- SimpleLightbox plugin CSS-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="<?= base_url() ?>assets/home/css/styles.css" rel="stylesheet" />
    <script src="<?= base_url() ?>assets/admin/jquery/jquery.min.js" type="text/javascript"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.6.0/css/lightgallery.min.css" rel="stylesheet">
    <script src="<?= base_url() ?>assets/js/jquery.validate.js"></script>
    <link rel="stylesheet" href="<?= base_url() ?>assets/admin/package/dist/sweetalert2.min.css">
    <script src="<?= base_url() ?>assets/admin/package/dist/sweetalert2.min.js"></script>
</head>
<style>
    header.masthead {
        padding-top: 10rem;
        padding-bottom: calc(10rem - 4.5rem);
        background: url("<?= base_url() ?>assets/assets/img/<?= $home->image ?>");
        background-position: center;
        background-repeat: no-repeat;
        background-attachment: scroll;
        background-size: cover;
    }

    .card-footer {
        background: transparent;
        border-top: 0px;
    }
</style>


<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light text-uppercase fixed-top py-3" id="mainNav">
        <div class="container-fluid">
            <a class="navbar-brand px-4" href="#">
                <img src="<?= base_url() ?>assets/admin/assets/logo/<?= $logo->logo_footer ?>" width="180px" alt="">
            </a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav mx-auto my-2 my-lg-0">
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link rounded" href="<?= base_url() ?>">Home</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link rounded" href="<?= base_url() ?>about">About</a></li>

                    <li id="ocs1" class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Our Services
                        </a>
                        <!-- <a class="nav-link dropdown-toggle " href="<?= base_url() ?>one-coin-service" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    One-Coin Service
                                </a> -->
                        <div id="ocs2" class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="<?= base_url() ?>one-coin-service">One-Coin Service</a>
                            <ul style="list-style-type: none;">
                                <li class="">
                                    <a class="dropdown-item" href="<?= base_url() ?>financial-planning">Financial Planning</a>
                                    <a class="dropdown-item" href="<?= base_url() ?>money-coaching">Money Coaching</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li id="emt1" class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Money Types Explained
                        </a>
                        <!-- <a class="nav-link dropdown-toggle" href="<?= base_url() ?>eight-money-types" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    The Eight Money Types
                                </a> -->
                        <div id="emt2" class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="<?= base_url()  ?>eight-money-types"> The Eight Money Types</a>
                            <a class="dropdown-item" href="<?= base_url()  ?>moneytype">Take The Quiz Free!</a>
                        </div>
                    </li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link rounded" href="<?= base_url() ?>resource">Resources</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link rounded" href="<?= base_url() ?>contact">Contact</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Language
                        </a>
                        <div id="bahasa" class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="<?= base_url() ?>id/"> <img width="25px" src="<?= base_url() ?>assets/icon/id.png" alt="" srcset=""> Indonesia</a>
                            <a class="dropdown-item" href="<?= base_url() ?>"> <img width="25px" src="<?= base_url() ?>assets/icon/us.png" alt="" srcset=""> English</a>
                        </div>
                    </li>
                </ul>

            </div>
        </div>
    </nav>

    <!-- Masthead-->
    <header class="masthead">
        <div class="container px-4 px-lg-5 h-100">
            <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                <div class="col-lg-8 align-self-end">
                    <h1 class="text-white font-weight-bold"><?= $home->masthead_us ?></h1>
                </div>
            </div>
        </div>
    </header>
    <!-- Services-->
    <section class="page-section" id="services">
        <div class="container px-4 px-lg-5">
            <!-- <h2 class="text-center mt-0">At Your Service</h2> -->
            <!-- <hr class="divider" /> -->
            <div class="row gx-4 gx-lg-5">
                <div class="col-lg-3 col-md-6 text-center ">
                    <div class="card shadow-lg h-100">
                        <div class="card-body">
                            <img width="250px" class="img-fluid" src="<?= base_url() ?>assets/assets/img/ber1.jpg" alt="" srcset="">
                            <div class="mt-5">
                                <div class="mb-2"><i class="bi-gem fs-1 text-primary"></i></div>
                                <h3 class="h2 mb-2"><strong>COACH BOOKS</strong></h3>
                            </div>
                            <p style="line-height: 2; font-size: 16px" class="text-muted mt-5">You can buy books here for best prices. Clikasd gubergren sea takimata sanctus.</p>
                        </div>
                        <div class="card-footer text-muted mx-auto mb-5">
                            <a href="" class="btn btn-outline-dark btn-md">LEARN MORE</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="card shadow-lg h-100">
                        <div class="card-body ">
                            <img width="250px" class="img-fluid" src="<?= base_url() ?>assets/assets/img/ber2.jpg" alt="" srcset="">
                            <div class="mt-5">
                                <div class="mb-2"><i class="bi-gem fs-1 text-primary"></i></div>
                                <h3 class="h2 mb-2"><strong>COACH ARTICLES</strong></h3>
                            </div>
                            <p style="line-height: 2; font-size: 16px" class="text-muted mt-5">Check coache’s latest news and updates. Lorem ipsum dolor sit amet dolor sit amet.</p>
                        </div>
                        <div class="card-footer text-muted mx-auto mb-5">
                            <a href="" class="btn btn-outline-dark btn-md">LEARN MORE</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center ">
                    <div class="card shadow-lg h-100">
                        <div class="card-body ">
                            <img width="250px" class="img-fluid" src="<?= base_url() ?>assets/assets/img/ber3.jpg" alt="" srcset="">
                            <div class="mt-5">
                                <div class="mb-2"><i class="bi-gem fs-1 text-primary"></i></div>
                                <h3 class="h2 mb-2"><strong>COACH VIDEOS</strong></h3>
                            </div>
                            <p style="line-height: 2; font-size: 16px" class="text-muted mt-5">Check latest coache’s live presentations conseur sadipscing elitr sed diam.</p>
                        </div>
                        <div class="card-footer text-muted mx-auto mb-5">
                            <a href="" class="btn btn-outline-dark btn-md">LEARN MORE</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="card shadow-lg h-100">
                        <div class="card-body">
                            <img width="250px" class="img-fluid" src="<?= base_url() ?>assets/assets/img/ber4.jpg" alt="" srcset="">
                            <div class="mt-5">
                                <div class="mb-2"><i class="bi-gem fs-1 text-primary"></i></div>
                                <h3 class="h2 mb-2"><strong>Sturdy Themes</strong></h3>
                            </div>
                            <p style="line-height: 2; font-size: 16px" class="text-muted mt-5">Our themes are updated regularly to keep them bug free!</p>
                        </div>
                        <div class="card-footer text-muted mx-auto mb-5">
                            <a href="" class="btn btn-outline-dark btn-md">LEARN MORE</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php if ($this->session->flashdata('msg') != null) { ?>
        <script>
            Swal.fire({
                position: 'top-end',
                icon: 'success',
                text: "<?php echo $this->session->flashdata('msg'); ?>",
                timer: 4000,
                showConfirmButton: false,
                type: 'success'
            });
        </script>
    <?php } ?>
    <!-- Call to action-->
    <section class="page-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <h1 class="display-6 text"><?= $about->header_profile ?></span></h1>
                    <p class="lead text-muted mb-0"><?= $about->profile ?></p>
                    <a href="<?= base_url() ?>contact" class="btn btn-outline-warning px-5 rounded-pill mt-5 ">ABOUT ME</a>
                    <div class="text-left mt-5">
                        <h3>CALL NOW</h3>
                        <p style="font-size: 43px;">
                            <?php
                            echo preg_replace('/\d{3}/', '$0-', str_replace('.', 'null', trim($about->phone)), 2);
                            ?>
                        </p>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="text-center">
                        <img src="<?= base_url() ?>assets/assets/img/<?= $about->img_profile ?>" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-white py-5">
            <div class="container py-5">
                <div class="row text-center">
                    <!-- Team item-->
                    <?php foreach ($feature_en as $data) { ?>
                        <div class="col-xl-3 col-sm-6 mb-5">
                            <div class="bg-white rounded shadow-sm py-5 px-4 h-100">
                                <img width="50px" src="<?= base_url() ?>assets/icon/<?= $data->icon ?>" alt="" srcset="">
                                <h5 class="mb-4 mt-5"><strong><?= $data->title ?></strong></h5>
                                <p style="line-height: 2;"><?= $data->konten ?></p>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact-->
    <?php if ($status->akses == 1) { ?>
        <section class="page-section" id="contact">
            <!-- Page Content -->
            <div class="container">

                <h1 class="fw-light text-center text-lg-start mt-4 mb-0">Gallery</h1>

                <hr class="mt-2 mb-5">

                <div class="row justify-content-center text-lg-start">
                    <div class="galeri">
                        <!-- <div class="col-md-12"> -->
                        <?php foreach ($galeri as $data) { ?>
                            <!-- <div class="col-lg-3 col-md-4 col-6"> -->
                            <a href="<?= base_url() ?>assets/assets/galeri/<?= $data->img ?>" class="image-tile" data-abc="true">
                                <img width="270px" class="img-fluid img-thumbnail" src="<?= base_url() ?>assets/assets/galeri/<?= $data->img ?>" alt="Vidira Gallery">
                            </a>
                            <!-- </div> -->
                        <?php  } ?>
                    </div>
                </div>
        </section>
    <?php } ?>
    <!-- Footer-->
    <style>
        a,
        a:hover,
        a:focus,
        a:active {
            text-decoration: none;
            color: inherit;
        }
    </style>
    <footer class="footer">
        <div class="container">
            <div class="row">
                <!-- Footer Social Icons-->
                <div class="col-lg-3 mb-5 mb-lg-0">
                    <h4 class="text-uppercase text-center mb-4"><img class="img-fluid" width="270px" src="<?= base_url() ?>assets/admin/assets/logo/<?= $logo->logo_footer ?>" alt=""></h4>
                    <div class="row">
                        <div class="col-1 text-right">
                            <i class="fas fa-map-marker-alt mt-1"></i>
                        </div>
                        <div class="col-10">
                            <p style="font-size: medium;">
                                <?= $contact->alamat ?>
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-1 text-center">
                            <i class="fas fa-phone mt-1"></i>
                        </div>
                        <div class="col-10">
                            <p style="font-size: medium;">
                                <?php
                                echo preg_replace('/\d{3}/', '$0-', str_replace('.', 'null', trim($contact->phone)), 2);
                                ?>
                            </p>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-1">
                            <i class="fas fa-envelope mt-1"></i>
                        </div>
                        <div class="col-10">
                            <p style="font-size: medium;">
                                <a class="" href="mailto:<?= $contact->email ?>">
                                    <?= $contact->email ?>
                                </a>
                            </p>
                        </div>
                    </div>
                    <?php foreach ($sosmed as $key) { ?>
                        <a title="<?= $key->nama_sosmed ?>" target="_blank" href="<?= $key->link ?>" class="btn btn-sm btn-outline-light btn-social mx-1"><i class="fa-fw <?= $key->icon ?>"></i></a>
                    <?php  } ?>
                </div>
                <!-- Footer Location-->
                <div class="col-lg-3 mb-5 mt-3 mb-lg-0">
                    <h4 class="text-uppercase mb-4">RESOURCES</h4>
                    <?php foreach ($recent_footer as $key) { ?>
                        <a style="background-color:transparent" href="<?= base_url() ?>artikel/<?= $key->slug ?>">
                            <p class="lead mb-0">
                                <?= $key->judul ?>
                            </p>
                        </a>
                        <p style="color:orange"><?= date('d F Y', strtotime($key->tanggal_post)); ?></p>
                    <?php  } ?>
                </div>

                <!-- Footer About Text-->
                <div class="col-lg-3 mt-3 ">
                    <h4 class="text-uppercase mb-4">NEWSLETTER</h4>
                    <p class="lead mb-0">
                        Subscribe to our latest news to be updated, we promise not to spam!
                    </p>
                    <form id="subs" action="<?= base_url() ?>contact/subs" method="post">
                        <div class="row mt-3">
                            <div class="col-md-9">
                                <input type="email" required title="Email required" placeholder="Your Email" class="form-control form-control-sm" name="email">
                            </div>
                            <div class="col-md-3">
                                <button type="submit" class="btn btn-sm btn-outline-warning">Sub</button>
                            </div>
                        </div>
                    </form>

                </div>
                <div class="col-lg-3 mt-3">
                    <h4 class="text-uppercase mb-4">GALLERY</h4>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="galeri">
                                <!-- <div class="col-md-12"> -->
                                <?php if ($status->akses == 1) { ?>
                                    <?php foreach ($galeri as $data) { ?>
                                        <a href="<?= base_url() ?>assets/assets/galeri/<?= $data->img ?>" class="image-tile" data-abc="true">
                                            <img width="70px" src="<?= base_url() ?>assets/assets/galeri/<?= $data->img ?>" alt="Vidira Gallery">
                                        </a>
                                    <?php  } ?>
                                <?php  } ?>
                                <!-- </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div class="copyright py-4 bg-warning text-center text-dark">
        <div class="container"><small>Copyright &copy; vidiracoaching 2021</small></div>
    </div>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- SimpleLightbox plugin JS-->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>

    <!-- Core theme JS-->
    <script src="<?= base_url() ?>assets/home/js/scripts.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/lightgallery-all.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#subs').validate({ // initialize the plugin
                rules: {
                    messages: {
                        email: {
                            required: "Email required!"
                        }
                    },
                }
            });

        });
        $(document).ready(function() {
            $('.galeri').lightGallery();
        });
    </script>
    <script>
        $(function() {
            $(window).scroll(function() {
                if ($(this).scrollTop() > 100) {
                    $('.navbar .navbar-brand img').attr('src', '<?= base_url() ?>assets/admin/assets/logo/<?= $logo->logo ?>');
                }
                if ($(this).scrollTop() < 100) {
                    $('.navbar .navbar-brand img').attr('src', '<?= base_url() ?>assets/admin/assets/logo/<?= $logo->logo_footer ?>');
                }
            })
        });
    </script>
</body>

</html>