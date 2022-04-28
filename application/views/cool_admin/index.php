<?php $this->load->view('cool_admin/layouts/head.php'); ?>
<style>

</style>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="<?php echo base_url() ?>Assets/cool_admin/images/icon/logo.png" alt="Dashboard" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>

            <?php $this->load->view('cool_admin/layouts/nav.php'); ?>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->


        <?php $this->load->view('cool_admin/layouts/sidebar.php'); ?>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <?php $this->load->view('cool_admin/layouts/header.php'); ?>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">overview</h2>

                                </div>
                            </div>
                        </div>
                        <div class="row m-t-25">
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c1">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-account-o"></i>
                                            </div>
                                            <div class="text">
                                                <h2><?php echo $totalRequests ? $totalRequests[0]['Invoice_ID'] : '0'; ?></h2>
                                                <span><a style="color:#FFFFFF99" href="#">Total Requests</a></span>
                                                <!-- <span><a style="color:#FFFFFF99" href="<?php echo base_url() ?>CoolAdmin/totalrequests">Total Requests</a></span> -->
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart1"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c2">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-shopping-cart"></i>
                                            </div>
                                            <div class="text">
                                                <h2><?php echo $pendingRequests ? $pendingRequests[0]['Counter'] : '0'; ?></h2>
                                                <span> <a style="color:#FFFFFF99" href="#">Pending Requests</a></span>
                                                <!-- <span> <a style="color:#FFFFFF99" href="<?php echo base_url() ?>CoolAdmin/pendingRequests">Pending Requests</a></span> -->
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart2"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c3">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-calendar-note"></i>
                                            </div>
                                            <div class="text">
                                                <h2><?php echo $approved ? $approved[0]['Counter'] : '0'; ?></h2>
                                                <!-- <span><a style="color:#FFFFFF99" href="<?php echo base_url() ?>CoolAdmin/approved">Approved</a></span> -->
                                                <span><a style="color:#FFFFFF99" href="#">Approved</a></span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart3"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c4">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-money"></i>
                                            </div>
                                            <div class="text">
                                                <h2>$<?php echo $payedAmount ? $payedAmount[0]['Amount'] : '0'; ?></h2>
                                                <span><a style="color:#FFFFFF99" href="#">Amount Payable</a></span>
                                                <!-- <span><a style="color:#FFFFFF99" href="<?php echo base_url() ?>CoolAdmin/amountPayed">Amount Payed</a></span> -->
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart4"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <h2 class="title-1 m-b-25">Orders Detail</h2>
                                <div class="table-responsive table--no-card m-b-40">
                                    <table id="example" class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>Invoice_ID</th>
                                                <th>Request Date</th>
                                                <th>Test Name</th>
                                                <th class="text-right">Amount</th>
                                                <th>Request_Status</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($tabular as $tab) {

                                                $TID = $tab['TID'];
                                            ?>
                                                <tr>
                                                    <td><a href="<?php base_url(); ?>CSR/CSRFiltered/<?php echo $TID; ?>"><?php echo $tab['Invoice_ID'] ?></a> </td>
                                                    <td><?php echo $tab['RequestDate'] ?></td>
                                                    <td><?php echo $tab['TestName'] ?></td>
                                                    <td>$<?php echo $tab['Amount'] ?></td>
                                                    <td><?php echo $tab['Request_Status'] ?></td>

                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div id="calendarContainer"></div>
                                <div id="organizerContainer"></div>
                            </div>
                        </div>

                        <?php $this->load->view('cool_admin/layouts/copyright.php'); ?>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    <?php $this->load->view('cool_admin/layouts/foot.php'); ?>
    <script>
        $(document).ready(function() {
            var table = $('#example').DataTable({
                lengthChange: false,
                buttons: ['copy', 'excel', 'pdf']
            });

            table.buttons().container()
                .appendTo('#example_wrapper .col-md-6:eq(0)');
        });
    </script>
</body>

</html>
<!-- end document-->