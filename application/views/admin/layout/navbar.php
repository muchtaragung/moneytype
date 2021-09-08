<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
        <img src="<?= base_url() ?>assets/admin/assets/logo/<?= $logo->logo ?>" class="brand-image elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Vidira Coaching</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="row justify-content-center">
                <div class="info text-center">
                    <h4 class="text-white"><?= $this->session->userdata('name') ?></h4>
                </div>
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
                    <a href="<?= base_url() ?>admin/user" <?= $this->uri->segment(2) == 'user' ? 'class="nav-link active"' : 'class="nav-link"' ?>>
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Users
                        </p>
                    </a>
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
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>