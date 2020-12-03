<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>

            </ul>

            <!-- SEARCH FORM -->
            <form class="form-inline ml-3">
                <div class="input-group input-group-sm">
                    <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-navbar" type="submit">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
            </form>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Messages Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-comments"></i>
                        <span class="badge badge-danger navbar-badge">3</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="../../dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Brad Diesel
                                        <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">Call me whenever you can...</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="../../dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        John Pierce
                                        <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">I got your message bro</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="../../dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Nora Silvester
                                        <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">The subject goes here</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                    </div>
                </li>
                <!-- Notifications Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-bell"></i>
                        <span class="badge badge-warning navbar-badge">15</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <span class="dropdown-item dropdown-header">15 Notifications</span>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-envelope mr-2"></i> 4 new messages
                            <span class="float-right text-muted text-sm">3 mins</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-users mr-2"></i> 8 friend requests
                            <span class="float-right text-muted text-sm">12 hours</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-file mr-2"></i> 3 new reports
                            <span class="float-right text-muted text-sm">2 days</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                    </div>
                </li>

            </ul>
        </nav>
        <!-- /.navbar -->
        \


        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Invoice</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Invoice</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="callout callout-info" style="background-color: 00C0EF; color:white;">
                                <h5><i class="fas fa-info"></i> Note:</h5>
                                This page has been enhanced for printing. Click the print button at the bottom of the invoice to test.
                            </div>


                            <!-- Main content -->
                            <div class="invoice p-3 mb-3">
                                <!-- title row -->
                                <div class="row">
                                    <div class="col-12">
                                        <h4>
                                            <img src="<?php echo base_url() . 'theme/images/logo/favicon-32x32.png' ?>"></i> Rumah Scopus
                                            <small class="float-right">Date: <?= date('d F Y'); ?></small>
                                        </h4>
                                    </div>
                                    <!-- /.col -->
                                </div>
                                <!-- info row -->
                                <div class="row invoice-info">
                                    <div class="col-sm-4 invoice-col">
                                        From
                                        <address>
                                            <strong>Rumah Scopus</strong><br>
                                            795 Folsom Ave, Suite 600<br>
                                            San Francisco, CA 94107<br>
                                            Phone: 0812-2688-32808<br>
                                            Email: rumahscopus@gmail.com
                                        </address>
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-sm-4 invoice-col">
                                        To
                                        <address>
                                            <strong><?= $user['nama']; ?></strong><br>
                                            <?= $user['alamat']; ?><br>
                                            Phone: <?= $user['no_hp']; ?><br>
                                            Email: <?= $user['email']; ?>
                                        </address>
                                    </div>
                                    <!-- /.col -->
                                    <?php
                                    $id_webinar = $this->uri->segment(4);
                                    $webinar = $this->db->get_where('tbl_webinar', ['id' => $id_webinar])->row_array();
                                    ?>
                                    <div class="col-sm-4 invoice-col">
                                        <b>Invoice #007612</b><br>
                                        <br>
                                        <b>Order ID:</b> 4F3S8J<br>
                                        <b>Payment Due:</b> <?= date('d F Y'); ?><br>
                                    </div>
                                    <!-- /.col -->
                                </div>
                                <!-- /.row -->

                                <!-- Table row -->
                                <div class="row">
                                    <div class="col-12 table-responsive">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Qty</th>
                                                    <th>Product</th>
                                                    <th>Serial #</th>
                                                    <th>Description</th>
                                                    <th>Subtotal</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <?php
                                            $id_webinar = $this->uri->segment(4);
                                            $webinar = $this->db->get_where('tbl_webinar', ['id' => $id_webinar])->row_array();
                                            ?>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td><?= $webinar['nama_webinar'] ?></td>
                                                    <td>455-981-221</td>
                                                    <td><?= $webinar['deskripsi'] ?></td>
                                                    <td>$64.50</td>
                                                    <td><button type="button" class="btn btn-danger">Cancel</button></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.col -->
                                </div>
                                <!-- /.row -->

                                <div class="row">
                                    <!-- accepted payments column -->
                                    <div class="col-6">
                                        <p class="lead"><strong> Support Payment</strong></p>
                                        <img style="width: 50px; height:50px;" src="<?php echo base_url() . 'theme/images/logo/bri.png' ?>" title="BANK BRI">
                                        <img style="width: 70px; height:50px;" src="<?php echo base_url() . 'theme/images/logo/mandiri.png' ?>" title="BANK MANDIRI">
                                        <img style="width: 90px; height:50px;" src="<?php echo base_url() . 'theme/images/logo/bca.png' ?>" title="BANK BCA">
                                        <img style="width: 70px; height:60px;" src="<?php echo base_url() . 'theme/images/logo/bni.png' ?>" title="BANK BNI">
                                        <img style="width: 70px; height:50px;" src="<?php echo base_url() . 'theme/images/logo/btpn.png' ?>" title="BANK BTPN">

                                    </div>
                                    <!-- /.col -->
                                    <div class="col-6">
                                        <p class="lead">Amount Due <?= date('d F Y'); ?></p>

                                        <div class="table-responsive">
                                            <table class="table">
                                                <tr>
                                                    <th style="width:50%">Subtotal:</th>
                                                    <td colspan="2">: Rp.<?= $webinar['harga'] ?></td>
                                                </tr>
                                                <tr>
                                                    <th>Tax (9.3%)</th>
                                                    <td>$10.34</td>
                                                </tr>
                                                <tr>
                                                    <th>Shipping:</th>
                                                    <td>$5.80</td>
                                                </tr>
                                                <tr>
                                                    <th>Total:</th>
                                                    <td>$265.24</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- /.col -->
                                </div>
                                <!-- /.row -->

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">PAYMENT</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="col-md-12">
                                                    <button class="btn btn-primary color m-3" data-toggle="modal" data-target="#exampleModal">
                                                        <img style="width: 50px; height:50px;" src="<?php echo base_url() . 'theme/images/logo/bri.png' ?>" title="BANK BRI">
                                                    </button>
                                                    <button class="btn btn-primary color m-3" data-toggle="modal" data-target="#exampleModal">
                                                        <img style="width: 70px; height:50px;" src="<?php echo base_url() . 'theme/images/logo/mandiri.png' ?>" title="BANK MANDIRI">
                                                    </button>
                                                    <button class="btn btn-primary color m-3" data-toggle="modal" data-target="#exampleModal">
                                                        <img style="width: 90px; height:50px;" src="<?php echo base_url() . 'theme/images/logo/bca.png' ?>" title="BANK BCA">
                                                    </button>
                                                    <button class="btn btn-primary color m-3" data-toggle="modal" data-target="#exampleModal">
                                                        <img style="width: 70px; height:60px;" src="<?php echo base_url() . 'theme/images/logo/bni.png' ?>" title="BANK BNI">
                                                    </button>
                                                    <button class="btn btn-primary color m-3" data-toggle="modal" data-target="#exampleModal">
                                                        <img style="width: 70px; height:50px;" src="<?php echo base_url() . 'theme/images/logo/btpn.png' ?>" title="BANK BTPN">
                                                    </button>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                    <!--<button type="button" class="btn btn-primary" data-dismiss="modal">Bayar!</button>-->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- this row will not appear when printing -->
                                <div class="row no-print">
                                    <div class="col-12">
                                        <a href="<?php echo base_url() . 'member/cetak' ?>" type="button" target="_blank" class="btn btn-primary"><i class="fas fa-print"></i> Print</a>
                                        <button type="button" class="btn btn-success float-right" data-toggle="modal" data-target="#exampleModal">
                                            <i class="far fa-credit-card"></i> Submit
                                            Payment
                                        </button>
                                        <!--<button type="button" class="btn btn-primary float-right" style="margin-right: 5px;">
                                            <i class="fas fa-download"></i> Generate PDF
                                        </button>-->
                                    </div>
                                </div>
                            </div>
                            <!-- /.invoice -->
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->