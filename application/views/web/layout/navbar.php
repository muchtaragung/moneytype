<style>
    @media all and (min-width: 992px) {
        .navbar .nav-item .dropdown-menu {
            display: none;
        }

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
    <div id="nav-scroll" class="nav-scroll">
        <nav class="navbar navbar-expand-lg bg-warning text-uppercase fixed-top" id="mainNav">
            <div class="container-fluid">
                <a class="navbar-brand text-dark" href="#page-top"><img width="170px" src="<?= base_url() ?>assets/admin/assets/logo/<?= $logo->logo ?>" alt=""></a>

                <button class="navbar-toggler font-weight-bold bg-warning text-dark rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <?php if ($this->uri->segment(1) != "id") { ?>
                        <ul class="navbar-nav navbar-logo mx-auto">
                            <li class="nav-item mx-0 mx-lg-1"><a class="text-dark nav-link rounded" href="<?= base_url() ?>">Home</a></li>
                            <li class="nav-item mx-0 mx-lg-1"><a class="text-dark nav-link rounded" href="<?= base_url() ?>about">About</a></li>
                            <li id="ocs1" class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle " href="<?= base_url() ?>ocs" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">
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
                            <li class="nav-item mx-0 mx-lg-1"><a class="text-dark nav-link rounded" href="<?= base_url() ?>resource">Resources</a></li>
                            <li class="nav-item mx-0 mx-lg-1"><a class="text-dark nav-link rounded" href="<?= base_url() ?>contact">Contact</a></li>
                            <li class="nav-item dropdown">
                                <a class="text-dark nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Language
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="<?= base_url() ?>id/"> <img width="25px" src="<?= base_url() ?>assets/icon/id.png" alt="" srcset=""> Indonesia</a>
                                    <a class="dropdown-item" href="<?= base_url() ?>"> <img width="25px" src="<?= base_url() ?>assets/icon/us.png" alt="" srcset=""> English</a>
                                </div>
                            </li>
                        </ul>

                        <ul class="navbar-nav ml-auto nav-flex-icons">
                            <?php foreach ($sosmed as $key) { ?>
                                <li class="nav-item">
                                    <a title="<?= $key->nama_sosmed ?>" target="_blank" href="<?= $key->link ?>" class="text-dark nav-link waves-effect waves-light">
                                        <i class="<?= $key->icon ?>"></i>
                                    </a>
                                </li>
                            <?php  } ?>
                        </ul>
                    <?php } else { ?>
                        <ul class="navbar-nav navbar-logo mx-auto">
                            <li class="nav-item mx-0 mx-lg-1"><a class="text-dark nav-link rounded" href="<?= base_url() . $this->uri->segment(1) ?>/">Home</a></li>
                            <li class="nav-item mx-0 mx-lg-1"><a class="text-dark nav-link rounded" href="<?= base_url() . $this->uri->segment(1) ?>/about">About</a></li>
                            <li id="ocs1" class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="<?= base_url() . $this->uri->segment(1) ?>/ocs" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    One-Coin Service
                                </a>
                                <div id="ocs2" class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#">Financial Planning</a>
                                    <a class="dropdown-item" href="#">Money Coaching</a>
                                </div>
                            </li>
                            <li id="emt1" class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="<?= base_url() . $this->uri->segment(1) ?>/emt" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    The Eight Money Types
                                </a>
                                <div id="emt2" class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="<?= base_url() . $this->uri->segment(1) ?>/moneytype">Take The Quiz Free!</a>
                                </div>
                            </li>
                            <li class="nav-item mx-0 mx-lg-1"><a class="text-dark nav-link rounded" href="<?= base_url() . $this->uri->segment(1) ?>/resource">Resources</a></li>
                            <li class="nav-item mx-0 mx-lg-1"><a class="text-dark nav-link rounded" href="<?= base_url() . $this->uri->segment(1) ?>/contact">Contact</a></li>
                            <li class="nav-item dropdown">
                                <a class="text-dark nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Language
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="<?= base_url() ?>id/"> <img width="25px" src="<?= base_url() ?>assets/icon/id.png" alt="" srcset=""> Indonesia</a>
                                    <a class="dropdown-item" href="<?= base_url() ?>"> <img width="25px" src="<?= base_url() ?>assets/icon/us.png" alt="" srcset=""> English</a>
                                </div>
                            </li>
                        </ul>

                        <ul class="navbar-nav ml-auto nav-flex-icons">
                            <?php foreach ($sosmed as $key) { ?>
                                <li class="nav-item">
                                    <a title="<?= $key->nama_sosmed ?>" target="_blank" href="<?= $key->link ?>" class="text-dark nav-link waves-effect waves-light">
                                        <i class="<?= $key->icon ?>"></i>
                                    </a>
                                </li>
                            <?php  } ?>
                        </ul>
                    <?php } ?>
                </div>
            </div>
        </nav>
    </div>
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