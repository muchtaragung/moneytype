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

    @media all and (min-width: 992px) {
        /* .navbar .nav-item .dropdown-menu {
            display: none;
        } */

        .navbar .nav-item:hover .nav-link {}

        .navbar .nav-item:hover .dropdown-menu {
            display: block;
        }

        .navbar .nav-item .dropdown-menu {
            margin-top: 0;
        }
    }
</style>


<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light text-uppercase fixed-top py-3" id="mainNav">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="<?= base_url() ?>assets/admin/assets/logo/<?= $logo->logo ?>" width="150px" alt="">
            </a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav mx-auto my-2 my-lg-0">
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link rounded" href="<?= base_url() ?>">Home</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link rounded" href="<?= base_url() ?>about">About</a></li>

                    <li id="ocs1" class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="<?= base_url() ?>ocs" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            One-Coin Service
                        </a>
                        <div id="ocs2" class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Financial Planning</a>
                            <a class="dropdown-item" href="#">Money Coaching</a>
                        </div>
                    </li>

                    <li id="emt1" class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="<?= base_url() ?>emt" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            The Eight Money Types
                        </a>
                        <div id="emt2" class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="<?= base_url()  ?>/moneytype">Take The Quiz Free!</a>
                        </div>
                    </li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link rounded" href="<?= base_url() ?>resource">Resources</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link rounded" href="<?= base_url() ?>contact">Contact</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Language
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
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
    <!-- About-->
    <section class="page-section bg-primary" id="about">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2 class="text-white mt-0">We've got what you need!</h2>
                    <hr class="divider divider-light" />
                    <p class="text-white-75 mb-4">Start Bootstrap has everything you need to get your new website up and running in no time! Choose one of our open source, free to download, and easy to use themes! No strings attached!</p>
                    <a class="btn btn-light btn-xl" href="#services">Get Started!</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Services-->
    <section class="page-section" id="services">
        <div class="container px-4 px-lg-5">
            <h2 class="text-center mt-0">At Your Service</h2>
            <hr class="divider" />
            <div class="row gx-4 gx-lg-5">
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <div class="mb-2"><i class="bi-gem fs-1 text-primary"></i></div>
                        <h3 class="h4 mb-2">Sturdy Themes</h3>
                        <p class="text-muted mb-0">Our themes are updated regularly to keep them bug free!</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <div class="mb-2"><i class="bi-laptop fs-1 text-primary"></i></div>
                        <h3 class="h4 mb-2">Up to Date</h3>
                        <p class="text-muted mb-0">All dependencies are kept current to keep things fresh.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <div class="mb-2"><i class="bi-globe fs-1 text-primary"></i></div>
                        <h3 class="h4 mb-2">Ready to Publish</h3>
                        <p class="text-muted mb-0">You can use this design as is, or you can make changes!</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <div class="mb-2"><i class="bi-heart fs-1 text-primary"></i></div>
                        <h3 class="h4 mb-2">Made with Love</h3>
                        <p class="text-muted mb-0">Is it really open source if it's not made with love?</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Call to action-->
    <section class="page-section bg-dark text-white">
        <div class="container px-4 px-lg-5 text-center">
            <h2 class="mb-4">Free Download at Start Bootstrap!</h2>
            <a class="btn btn-light btn-xl" href="https://startbootstrap.com/theme/creative/">Download Now!</a>
        </div>
    </section>
    <!-- Contact-->
    <section class="page-section" id="contact">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-lg-8 col-xl-6 text-center">
                    <h2 class="mt-0">Let's Get In Touch!</h2>
                    <hr class="divider" />
                    <p class="text-muted mb-5">Ready to start your next project with us? Send us a messages and we will get back to you as soon as possible!</p>
                </div>
            </div>
        </div>
    </section>
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
                    <h4 class="text-uppercase  mb-4"><img width="200px" src="<?= base_url() ?>assets/admin/assets/logo/<?= $logo->logo ?>" alt=""></a></h4>
                    <div class="row">
                        <div class="col-1 text-center">
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
                <div class="col-lg-3 mb-5 mb-lg-0">
                    <h4 class="text-uppercase mb-4">LATEST NEWS</h4>
                    <a style="background-color:transparent" href="">
                        <p class="lead mb-0">
                            Sit amet consetetur sadipscing tempor invidunt dolore.
                        </p>
                    </a>
                    <p style="color:orange">25 Desember 2021</p>
                    <a style="background-color:transparent" href="">
                        <p class="lead mb-0">
                            Sit amet consetetur sadipscing tempor invidunt dolore.
                        </p>
                    </a>
                    <p style="color:orange">19 Desember 2021</p>
                </div>

                <!-- Footer About Text-->
                <div class="col-lg-3">
                    <h4 class="text-uppercase mb-4">NEWSLETTER</h4>
                    <p class="lead mb-0">
                        Subscribe to our latest news to be updated, we promise not to spam!
                    </p>
                    <div class="row mt-3">
                        <div class="col-md-9">
                            <input type="text" class="form-control form-control-sm" name="sub">
                        </div>
                        <div class="col-md-3">
                            <button type="submit" class="btn btn-sm btn-warning">Sub</button>
                        </div>
                    </div>

                </div>
                <div class="col-lg-3">
                    <h4 class="text-uppercase mb-4">GALERY</h4>
                    <p class="lead mb-0">
                    </p>
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
    <script>
        $(document).ready(function() {
            if ($(document).width() < 769) {
                $('#ocs1').addClass('show');
                $('#ocs2').addClass('show');
            } else {
                $('#ocs1').removeClass('show');
                $('#ocs2').removeClass('show');
            }
        });
        $(document).ready(function() {
            if ($(document).width() < 769) {
                $('#emt1').addClass('show');
                $('#emt2').addClass('show');
            } else {
                $('#emt1').removeClass('show');
                $('#emt2').removeClass('show');
            }
        });
    </script>
    <script>
        $(function() {
            $(window).scroll(function() {
                if ($(this).scrollTop() > 100) {
                    $('.navbar .navbar-brand img').attr('src', '<?= base_url() ?>assets/admin/assets/logo/vidira.png');
                }
                if ($(this).scrollTop() < 100) {
                    $('.navbar .navbar-brand img').attr('src', '<?= base_url() ?>assets/admin/assets/logo/<?= $logo->logo ?>');
                }
            })
        });
    </script>
</body>

</html>