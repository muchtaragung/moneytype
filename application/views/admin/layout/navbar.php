<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
        <img src="<?= base_url() ?>assets/admin/assets/logo/<?= $logo->logo_footer ?>" class="brand-image elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Vidira Coaching</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?= base_url() ?>assets/admin/assets/icon/user.svg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block"><?= $this->session->userdata('name') ?></a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="<?= base_url() ?>admin/dashboard" <?= $this->uri->segment(2) == 'dashboard' ? 'class="nav-link active"' : 'class="nav-link"' ?>>
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-laptop-house"></i>
                        <p>
                            Home
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item active">
                            <a href="<?= base_url() ?>admin/home/id" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Indonesia</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url() ?>admin/home" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>English</p>
                            </a>
                        </li>
                        <li class="nav-item active">
                            <a href="<?= base_url() ?>admin/home/galeri" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Gallery</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon far fa-address-card"></i>
                        <p>
                            About
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item active">
                            <a href="<?= base_url() ?>admin/about/id" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Indonesia</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url() ?>admin/about" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>English</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-coins"></i>
                        <p>
                            One-Coin Service
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item active">
                            <a href="<?= base_url() ?>admin/ocs/id" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Indonesia</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url() ?>admin/ocs" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>English</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-chart-bar"></i>
                        <p>
                            Financial Planning
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item active">
                            <a href="<?= base_url() ?>admin/fp/id" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Indonesia</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url() ?>admin/fp" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>English</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-wallet"></i>
                        <p>
                            Money Coaching
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item active">
                            <a href="<?= base_url() ?>admin/mc/id" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Indonesia</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url() ?>admin/mc" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>English</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-money-check-alt"></i>
                        <p>
                            The Eight Money Types
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item active">
                            <a href="<?= base_url() ?>admin/user" <?= $this->uri->segment(2) == 'user' ? 'class="nav-link active"' : 'class="nav-link"' ?>>
                                <i class="far fa-circle nav-icon"></i>
                                <p>Users Money types</p>
                            </a>
                        </li>
                        <li class="nav-item active">
                            <a href="<?= base_url() ?>admin/emt/id" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Indonesia</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url() ?>admin/emt" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>English</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon far fa-newspaper"></i>
                        <p>
                            Resources
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item active">
                            <a href="<?= base_url() ?>admin/resource/kategori" <?= $this->uri->segment(3) == 'kategori' ? 'class="nav-link active"' : 'class="nav-link"' ?>>
                                <i class="far fa-circle nav-icon"></i>
                                <p>Kategori</p>
                            </a>
                        </li>
                        <li class="nav-item active">
                            <a href="<?= base_url() ?>admin/resource/id" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Indonesia</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url() ?>admin/resource" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>English</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-id-card"></i>
                        <p>
                            Contact
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item active">
                            <a href="<?= base_url() ?>admin/contact/faq" <?= $this->uri->segment(2) == 'user' ? 'class="nav-link active"' : 'class="nav-link"' ?>>
                                <i class="far fa-circle nav-icon"></i>
                                <p>Faq English</p>
                            </a>
                        </li>
                        <li class="nav-item active">
                            <a href="<?= base_url() ?>admin/contact/faq_id" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Faq Indonesia</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url() ?>admin/contact" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Informasi</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url() ?>admin/contact/subs" <?= $this->uri->segment(3) == 'subs' ? 'class="nav-link active"' : 'class="nav-link"' ?>>
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Subscriber
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url() ?>admin/polling" <?= $this->uri->segment(2) == 'polling' ? 'class="nav-link active"' : 'class="nav-link"' ?>>
                        <i class="nav-icon fas fa-user-lock"></i>
                        <p>
                            Polling Money Blocks
                        </p>
                    </a>
                </li>
                <li class="nav-header">SETTING</li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-envelope-open-text"></i>
                        <p>
                            Template Email Money Types
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item active">
                            <a href="<?= base_url() ?>admin/user/email_id" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Indonesia</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url() ?>admin/user/email_en" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>English</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-window-restore"></i>
                        <p>
                            WEB
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item active">
                            <a href="<?= base_url() ?>admin/logo" <?= $this->uri->segment(2) == 'logo' ? 'class="nav-link active"' : 'class="nav-link"' ?>>
                                <i class="far fa-circle nav-icon"></i>
                                <p>Logo</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url() ?>admin/sosmed" <?= $this->uri->segment(2) == 'sosmed' ? 'class="nav-link active"' : 'class="nav-link"' ?>>
                                <i class="far fa-circle nav-icon"></i>
                                <p>Sosial Media</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url() ?>admin/email" <?= $this->uri->segment(2) == 'email' ? 'class="nav-link active"' : 'class="nav-link"' ?>>
                                <i class="far fa-circle nav-icon"></i>
                                <p>Email</p>
                            </a>
                        </li>
                    </ul>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>