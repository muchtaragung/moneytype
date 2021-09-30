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
                <img src="<?= base_url() ?>assets/admin/assets/icon/user.png" class="img-circle elevation-2" alt="User Image">
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
                            <a href="<?= base_url() ?>admin/home/id" <?= $this->uri->segment(3) == 'id' ? 'class="nav-link active"' : 'class="nav-link"' ?>>
                                <i class="far fa-circle nav-icon"></i>
                                <p>Indonesia</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url() ?>admin/home" <?= $this->uri->segment(3) == '' ? 'class="nav-link active"' : 'class="nav-link"' ?>>
                                <i class="far fa-circle nav-icon"></i>
                                <p>English</p>
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
                            <a href="<?= base_url() ?>admin/about/id" <?= $this->uri->segment(3) == 'id' ? 'class="nav-link active"' : 'class="nav-link"' ?>>
                                <i class="far fa-circle nav-icon"></i>
                                <p>Indonesia</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url() ?>admin/about" <?= $this->uri->segment(3) == '' ? 'class="nav-link active"' : 'class="nav-link"' ?>>
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
                            <a href="<?= base_url() ?>admin/ocs/id" <?= $this->uri->segment(3) == 'id' ? 'class="nav-link active"' : 'class="nav-link"' ?>>
                                <i class="far fa-circle nav-icon"></i>
                                <p>Indonesia</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url() ?>admin/ocs" <?= $this->uri->segment(3) == '' ? 'class="nav-link active"' : 'class="nav-link"' ?>>
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
                            <a href="<?= base_url() ?>admin/mc/id" <?= $this->uri->segment(3) == 'id' ? 'class="nav-link active"' : 'class="nav-link"' ?>>
                                <i class="far fa-circle nav-icon"></i>
                                <p>Indonesia</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url() ?>admin/mc" <?= $this->uri->segment(3) == '' ? 'class="nav-link active"' : 'class="nav-link"' ?>>
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
                                <p>Users</p>
                            </a>
                        </li>
                        <li class="nav-item active">
                            <a href="<?= base_url() ?>admin/emt/id" <?= $this->uri->segment(3) == 'id' ? 'class="nav-link active"' : 'class="nav-link"' ?>>
                                <i class="far fa-circle nav-icon"></i>
                                <p>Indonesia</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url() ?>admin/emt" <?= $this->uri->segment(3) == '' ? 'class="nav-link active"' : 'class="nav-link"' ?>>
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
                            Resource
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
                            <a href="<?= base_url() ?>admin/resource/id" <?= $this->uri->segment(3) == 'id' ? 'class="nav-link active"' : 'class="nav-link"' ?>>
                                <i class="far fa-circle nav-icon"></i>
                                <p>Indonesia</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url() ?>admin/resource" <?= $this->uri->segment(3) == '' ? 'class="nav-link active"' : 'class="nav-link"' ?>>
                                <i class="far fa-circle nav-icon"></i>
                                <p>English</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url() ?>admin/contact" <?= $this->uri->segment(2) == 'contact' ? 'class="nav-link active"' : 'class="nav-link"' ?>>
                        <i class="nav-icon fas fa-id-card"></i>
                        <p>
                            Contact
                        </p>
                    </a>
                </li>
                <li class="nav-header">SETTING</li>
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