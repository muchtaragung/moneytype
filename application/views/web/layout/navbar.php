<body id="page-top">
    <div id="nav-scroll" class="nav-scroll">
        <nav class="navbar navbar-expand-lg bg-warning text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand text-dark" href="#page-top"><img width="170px" src="<?= base_url() ?>assets/admin/assets/logo/<?= $logo->logo ?>" alt=""></a>
                <button class="navbar-toggler font-weight-bold bg-warning text-dark rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav navbar-logo mx-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="text-dark nav-link rounded" href="<?= base_url() ?>">Home</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="text-dark nav-link rounded" href="<?= base_url() ?>about">About</a></li>
                        <li class="nav-item dropdown">
                            <a class="text-dark nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                One-Coin Service
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Financial Planning</a>
                                <a class="dropdown-item" href="#">Money Coaching</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="text-dark nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                The Eight Money Types
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="<?= base_url() ?>moneytype">Take The Quiz Free!</a>
                            </div>
                        </li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="text-dark nav-link rounded" href="">Resources</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="text-dark nav-link rounded" href="<?= base_url() ?>contact">Contact</a></li>
                    </ul>
                    <ul class="navbar-nav ml-auto nav-flex-icons">
                        <li class="nav-item">
                            <a title="Facebook" target="_blank" href="<?= $sosmed->facebook ?>" class="text-dark nav-link waves-effect waves-light">
                                <i class="fab fa-facebook"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a title="Twitter" target="_blank" href="<?= $sosmed->twitter ?>" class="text-dark nav-link waves-effect waves-light">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a title="Instagram" target="_blank" href="<?= $sosmed->instagram ?>" class="text-dark nav-link waves-effect waves-light">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>