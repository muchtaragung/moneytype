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
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Our Services
                                </a>
                                <!-- <a class="nav-link dropdown-toggle " href="<?= base_url() ?>one-coin-service" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    One-Coin Service
                                </a> -->
                                <div id="ocs2" class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="<?= base_url() ?>one-coin-service">One-Coin Service</a>
                                    <ul style="list-style-type: none;">
                                        <li class="px-3">
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
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Our Services
                                </a>
                                <div id="ocs2" class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="<?= base_url() . $this->uri->segment(1) ?>/one-coin-service">One-Coin Service</a>
                                    <ul style="list-style-type: none;">
                                        <li class="px-3">
                                            <a class="dropdown-item" href="<?= base_url() . $this->uri->segment(1) ?>/financial-planning">Financial Planning</a>
                                            <a class="dropdown-item" href="<?= base_url() . $this->uri->segment(1) ?>/money-coaching">Money Coaching</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li id="emt1" class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    The Eight Money Types
                                </a>
                                <div id="emt2" class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="<?= base_url() . $this->uri->segment(1) ?>/eight-money-types">Money Types Explained</a>
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
                                    <a class="dropdown-item" href="<?= base_url() ?>en/"> <img width="25px" src="<?= base_url() ?>assets/icon/us.png" alt="" srcset=""> English</a>
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