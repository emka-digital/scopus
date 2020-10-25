<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="<?php echo base_url() . 'theme/member/dist/img/AdminLTELogo.png' ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Member Scopus</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?php echo base_url() . 'theme/member/dist/img/user2-160x160.jpg' ?>" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Alexander Pierce</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item has-treeview menu-open">

                    <ul class="nav nav-treeview">

                        <li class="nav-item">
                            <a href="<?php echo base_url() . 'member/dasboard' ?>" class="nav-link active">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>

                    </ul>
                </li>


                <li class="nav-item has-treeview">
                <li class="nav-item">
                    <a href="<?php echo base_url() . 'member/profile' ?>" class="nav-link">
                        <i class="nav-icon fas fa-users-cog"></i>
                        <p>Profile</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?php echo base_url() . 'member/profile' ?>" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>Refeal</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?php echo base_url() . 'member/story' ?>" class="nav-link">
                        <i class="nav-icon fas fa-shopping-cart"></i>
                        <p>Story Pesanan</p>
                    </a>
                </li>

                <li class="nav-header">EXAMPLES</li>
                <li class="nav-item">
                    <a href="<?php echo base_url() . 'member/kalender' ?>" class="nav-link">
                        <i class="nav-icon fas fa-calendar-alt"></i>
                        <p>
                            Calendar
                            <span class="badge badge-info right"></span>
                        </p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a href="<?php echo base_url() . 'member/email' ?>" class="nav-link">
                        <i class="nav-icon far fa-envelope"></i>
                        <p>
                            Mailbox
                        </p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a href="<?php echo base_url() . 'member/pesanan' ?>" class="nav-link">
                        <i class="nav-icon fas fa-dollar-sign"></i>
                        <p>
                            Invoice

                        </p>
                    </a>
                </li>

                <li class="nav-item has-treeview">
                    <a href="<?php echo base_url() . 'member/ambil' ?>" class="nav-link">
                        <i class="nav-icon fas fa-cloud-download-alt"></i>
                        <p>
                            Download

                        </p>
                    </a>
                </li>

                <li class="nav-item has-treeview">
                    <a href="<?php echo base_url() . '#' ?>" class="nav-link">
                        <i class="nav-icon fas fa-cloud-download-alt"></i>
                        <p>
                            E-Sertifikat

                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->

</aside>