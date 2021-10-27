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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.transitions.css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
</head>
<style>
    header.masthead {
        padding-top: 10rem;
        padding-bottom: calc(10rem - 4.5rem);
        background-position: center;
        background-repeat: no-repeat;
        background-attachment: scroll;
        background-size: cover;
    }

    .card-footer {
        background: transparent;
        border-top: 0px;
    }

    .my-nav {
        position: absolute;
        z-index: 10;
        width: 100%;
    }

    .carousel-item {
        padding-top: 10rem;
        padding-bottom: calc(10rem - 4.5rem);
        height: 100vh;
        background-position: center;
        background-repeat: no-repeat;
        background-attachment: scroll;
        background-size: cover;
        background: no-repeat center center scroll;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;

    }



    .pic {
        display: block;
        border-radius: 200px;
        box-sizing: border-box;
        background-color: #fff;
        border: 5px solid #cfd8dc;
    }

    .page-section {
        padding: 0;
    }
</style>


<body id="page-top">
    <!-- Navigation-->

    <header class="mb-5">
        <nav class="my-nav navbar navbar-expand-lg navbar-light text-uppercase fixed-top py-3" id="mainNav">
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
                                The Eight Money Types
                            </a>
                            <!-- <a class="nav-link dropdown-toggle" href="<?= base_url() ?>eight-money-types" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    The Eight Money Types
                                </a> -->
                            <div id="emt2" class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="<?= base_url()  ?>eight-money-types">Money Types Explained</a>
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
                                <a class="dropdown-item" href="<?= base_url() ?>id"> <img width="25px" src="<?= base_url() ?>assets/icon/id.png" alt="" srcset=""> Indonesia</a>
                                <a class="dropdown-item" href="<?= base_url() ?>"> <img width="25px" src="<?= base_url() ?>assets/icon/us.png" alt="" srcset=""> English</a>
                            </div>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>

        <div id="Vidira" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner" role="listbox">
                <?php
                $i = 1;
                foreach ($home as $data) { ?>
                    <?php if ($i == 1) { ?>

                        <div class="carousel-item active" style="background-image: url('<?= base_url() ?>assets/assets/img/<?= $data->image ?>')">
                            <div class="container py-5 px-lg-5">
                                <div class="row py-5 gx-0 gx-lg-0">
                                    <div class="col-lg-8 align-self-end">
                                        <h1 style="color:<?= $data->color ?>; font-size: <?= $data->font_size ?>px; text-shadow: black 0.1em 0.1em 0.2em;"><?= $data->masthead_us ?></h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } else { ?>
                        <div class="carousel-item " style="background-image: url('<?= base_url() ?>assets/assets/img/<?= $data->image ?>')">
                            <div class="container py-5 px-lg-5">
                                <div class="row py-5 gx-0 gx-lg-0">
                                    <div class="col-lg-8 align-self-end">
                                        <h1 style="color:<?= $data->color ?>; font-size: <?= $data->font_size ?>px;text-shadow: black 0.1em 0.1em 0.2em;"><?= $data->masthead_us ?></h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php  } ?>
                    <?php $i++ ?>
                <?php   } ?>
            </div>
            <a class="carousel-control-prev" href="#Vidira" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#Vidira" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </header>
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
    <!-- Services-->
    <section class="page-section pt-5 mt-5 mb-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="display-6 text"><?= $feature->header ?></span></h1>
                    <p style="font-size: 16px;" class="lead text-muted mb-0"><?= $feature->konten ?></p>
                </div>
            </div>
        </div>
    </section>
    <section class="page-section mt-5 pt-5" id="services">
        <div class="container px-4 px-lg-5">
            <h2 class="text-center mt-0"><?= $header_feature2->header ?></h2>
            <p style="font-size: 16px;" class="lead text-muted mb-3"><?= $header_feature2->konten ?></p>
            <div class="row gx-4 gx-lg-5">
                <div class="col-lg-4 col-md-6 text-center ">
                    <div class="card shadow-lg h-100">
                        <div class="card-body">
                            <?php if ($status->akses == 1) { ?>
                                <img width="250px" class="img-fluid" src="<?= base_url() ?>assets/assets/img/<?= $feature2->img_ocs ?>" alt="" srcset="">
                            <?php } ?>
                            <div class="mt-5">
                                <div class="mb-2"><i class="bi-gem fs-1 text-primary"></i></div>
                                <h3 class="h2 mb-2"><strong><?= $feature2->header_ocs ?></strong></h3>
                            </div>
                            <p style="line-height: 2; font-size: 16px" class="text-muted mt-5"><?= $feature2->konten_ocs ?></p>
                        </div>
                        <div class="card-footer text-muted mx-auto mb-5">
                            <a href="<?= base_url() ?>one-coin-service" class="btn btn-outline-warning text-dark btn-md">LEARN MORE</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="card shadow-lg h-100">
                        <div class="card-body ">
                            <?php if ($status->akses == 1) { ?>
                                <img width="250px" class="img-fluid" src="<?= base_url() ?>assets/assets/img/<?= $feature2->img_fp ?>" alt="" srcset="">
                            <?php } ?>
                            <div class="mt-5">
                                <div class="mb-2"><i class="bi-gem fs-1 text-primary"></i></div>
                                <h3 class="h2 mb-2"><strong><?= $feature2->header_fp ?></strong></h3>
                            </div>
                            <p style="line-height: 2; font-size: 16px" class="text-muted mt-5"><?= $feature2->konten_fp ?></p>
                        </div>
                        <div class="card-footer text-muted mx-auto mb-5">
                            <a href="<?= base_url() ?>financial-planning" class="btn btn-outline-warning text-dark btn-md">LEARN MORE</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 text-center ">
                    <div class="card shadow-lg h-100">
                        <div class="card-body ">
                            <?php if ($status->akses == 1) { ?>
                                <img width="250px" class="img-fluid" src="<?= base_url() ?>assets/assets/img/<?= $feature2->img_mc ?>" alt="" srcset="">
                            <?php } ?>
                            <div class="mt-5">
                                <div class="mb-2"><i class="bi-gem fs-1 text-primary"></i></div>
                                <h3 class="h2 mb-2"><strong><?= $feature2->header_mc ?></strong></h3>
                            </div>
                            <p style="line-height: 2; font-size: 16px" class="text-muted mt-5"><?= $feature2->konten_mc ?></p>
                        </div>
                        <div class="card-footer text-muted mx-auto mb-5">
                            <a href="<?= base_url() ?>money-coaching" class="btn btn-outline-warning text-dark btn-md"> LEARN MORE</a>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <button type="button" class="mt-5 text-center btn btn-lg btn-warning text-dark" data-toggle="modal" data-target=".bd-example-modal-lg">Polling Money Blocks</button>
                </div>
            </div>
        </div>
    </section>
    <section class="page-section mb-5" id="services">
        <div class="text-center bg-image mt-5" style="background-size: cover; background-repeat: no-repeat;background-image: url(<?= base_url() ?>assets/assets/img/<?= $feature3->img ?>);height: 80vh;">
            <div class="mask h-100 w-100" style="background-color: rgba(0, 0, 0, 0.6);">
                <div class="d-flex justify-content-center align-items-center h-100">
                    <div class="text-white">
                        <h1 class="text-center display-4"><?= $feature3->header ?></h1>
                        <p class="text-center"><?= $feature3->konten ?></p>
                        <!-- <a class="btn btn-warning btn-lg" href="<?= base_url() ?>moneytype" role="button">Money Type Quiz</a> -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to action-->
    <section class="page-section">
        <div class="text-center bg-image " style="background-size: cover; background-repeat: no-repeat;height: auto;">
            <div class="mask h-100 w-100" style="background-color: white;">
                <div class="container">
                    <div class="row justify-content-center mt-5">
                        <div class="col-md-offset-3 col-md-6">
                            <div id="testimonial-slider" class="owl-carousel mb-5 mt-5">
                                <?php foreach ($testimoni as $data) { ?>
                                    <div class="testimonial">
                                        <h3 class="text-center text-dark mb-3">
                                            <?= $data->nama ?><small>, <?= $data->job ?></small>
                                        </h3>
                                        <div class="text-center text-warning" style="font-size: x-large;"><i class="fas fa-quote-left"></i></div>
                                        <p class="lead text-dark mb-0">
                                            <?= $data->testimoni ?>
                                        </p>
                                    </div>
                                <?php  } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-white py-5">
            <div class="container py-5">
                <div class="row text-center">
                    <!-- Team item-->
                    <?php foreach ($feature4 as $data) { ?>
                        <div class="col-xl-4 col-sm-6 mb-5 ">
                            <div class="bg-white rounded shadow py-5 px-4 h-100">
                                <img width="50px" src="<?= base_url() ?>assets/assets/img/<?= $data->icon ?>" alt="" srcset="">
                                <h5 class="mb-4 mt-5"><strong><?= $data->title ?></strong></h5>
                                <p style="line-height: 2;"><?= $data->konten ?></p>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>
    <section class="page-section" id="services">
        <div class="text-center bg-image mt-5" style="background-size: cover; background-repeat: no-repeat;background-image: url(<?= base_url() ?>assets/assets/img/<?= $feature5->img ?>);height: 80vh;">
            <div class="mask h-100 w-100" style="background-color: rgba(0, 0, 0, 0.6);">
                <div class="d-flex justify-content-center align-items-center h-100">
                    <div class="text-white">
                        <h1 class="text-center display-4"><?= $feature5->header ?></h1>
                        <p class="text-center"><?= $feature5->konten ?></p>
                        <a class="btn btn-warning btn-lg" href="<?= base_url() ?>moneytype" role="button">Take the Money Type Quiz</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact-->
    <?php if ($status_galeri->akses == 1) { ?>
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
                    <h4 class="text-uppercase text-left"><img class="img-fluid" width="270px" src="<?= base_url() ?>assets/admin/assets/logo/<?= $logo->logo_footer ?>" alt=""></h4>
                    <h4 class="text-uppercase text-left px-0 mb-4"><img class="img-fluid" width="280px" src="<?= base_url() ?>assets/admin/assets/logo/cmc.png" alt=""></h4>

                </div>
                <!-- Footer Location-->
                <div class="col-lg-3 mb-5 mt-3 mb-lg-0">
                    <h4 class="text-uppercase mb-4">CONTACT</h4>
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
    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">POLLING MONEY MENTAL BLOCK</h5>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <form id="polling" action="<?= base_url() ?>main/polling" method="post">
                            <div class="row">
                                <div class="form-group mb-1">
                                    <input class="form-control form-control-sm" name="nama" required type="text" title="Kami membutuhkan nama anda" placeholder="Siapa nama anda?">
                                    <label for="name"></label>
                                </div>
                                <!-- Email address input-->
                                <div class="form-group mb-1">
                                    <input class="form-control form-control-sm" name="email" type="email" placeholder="Alamat email">
                                    <label for="email"></label>
                                </div>
                                <!-- Phone number input-->
                                <div class="form-group mb-1">
                                    <input class="form-control form-control-sm" name="phone" minlength="10" min="0" type="number" placeholder="Nomer Telepon/Whatsapp">
                                    <label for="phone"></label>
                                </div>
                                <h6 style="font-size: 18px;" class="text-center mb-5">Silahkan memilih Money Mental Block mana yang saat ini masih Anda miliki <br> (boleh memilih lebih dari satu):</h6>
                                <div class="col-md-6">
                                    <div class="form-group mb-2">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" name="kata1" id="kata1" value="Saya tidak berani/layak punya income besar">
                                                Saya tidak berani/layak punya income besar
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group mb-2">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" name="kata2" id="kata2" value="Saya tidak bisa menabung tiap bulan (uang selalu habis)">
                                                Saya tidak bisa menabung tiap bulan (uang selalu habis)
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group mb-2">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" name="kata3" id="kata3" value="Uang tidak membawa bahagia/uang sumber masalah">
                                                Uang tidak membawa bahagia/uang sumber masalah
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group mb-2">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" name="kata4" id="kata4" value="Cari uang itu susah/uang tidak tertarik dengan saya">
                                                Cari uang itu susah/uang tidak tertarik dengan saya
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group mb-2">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" name="kata5" id="kata5" value="Saya tidak tahu/bisa/pintar atur uang">
                                                Saya tidak tahu/bisa/pintar atur uang
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group mb-2">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" name="kata6" id="kata6" value="Uang/orang kaya itu jahat">
                                                Uang/orang kaya itu jahat
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mb-2">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" name="kata7" id="kata7" value="Uang gak perlu diatur/direncanakan, yang penting ada uang masuk">
                                                Uang gak perlu diatur/direncanakan, yang penting ada uang masuk
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group mb-2">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" name="kata8" id="kata8" value="Saya tidak butuh uang">
                                                Saya tidak butuh uang
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group mb-2">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" name="kata9" id="kata9" value="Kaya raya = bahagia/sukses">
                                                Kaya raya = bahagia/sukses
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group mb-2">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" name="kata10" id="kata10" value="Tidak ada istilah cukup uang">
                                                Tidak ada istilah cukup uang
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group mb-2">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" name="kata11" id="kata11" value="Saya harus pelit pada diri sendiri">
                                                Saya harus pelit pada diri sendiri
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group mb-2">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" name="kata12" id="kata12" value="Orang mau berteman dengan saya hanya jika saya memiliki banyak uang">
                                                Orang mau berteman dengan saya hanya jika saya memiliki banyak uang
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center mt-5">
                                    <button type="button" class="btn btn-light" data-dismiss="modal">Tutup</button>
                                    <button type="submit" class="btn btn-outline-warning text-dark ml-1">Kirim
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
            $("#testimonial-slider").owlCarousel({
                items: 1,
                itemsDesktop: [1000, 1],
                itemsDesktopSmall: [979, 1],
                itemsTablet: [768, 1],
                pagination: true,
                navigation: false,
                navigationText: ["", ""],
                slideSpeed: 1000,
                singleItem: true,
                transitionStyle: "fade",
                autoPlay: true
            });
        });
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
            $('#polling').validate({ // initialize the plugin
                rules: {
                    messages: {
                        nama: {
                            required: "Nama required!"
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