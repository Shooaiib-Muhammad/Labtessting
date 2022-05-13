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
                        <div id="Modaldepartment" class="modal fade">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header" style="background-color: rgb(83,78,130);color:white;font-weight:bolder">
                                        <h1 class="modal-title" id="changeTitle">Test Request Receiving Form</h1>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true" style="color: white;">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form name="formDepartment" id="myformDepartment" method="POST" action="<?php echo base_url(
                                                                                                                    ''
                                                                                                                ); ?>LabController/EditRequest">


                                            <div class="row" style="display:flex">


                                                <div class="col-md-6">

                                                    <label class="form-contol" for="customFile">Invice-NO.</label>
                                                    <input type="text" readonly="true" class="form-control" id="IdValue" name="ID">

                                                </div>

                                                <div class="col-md-6">

                                                    <label class="form-contol" for="customFile">CSS #</label>
                                                    <input type="text" class="form-control" id="cssNo" name="cssNo">

                                                </div>



                                                <!-- <div class="col-md-6 mt-2">

                                                <label class="form-contol" for="customFile">Quantity Returned</label>
                                                <input type="number" class="form-control" id="qReturned" name="qReturned">

                                            </div> -->



                                            </div>

                                            <div class="row">
                                                <div class="form-group">
                                                    <div>
                                                        <button type="button" class="btn btn-primary m-3" id="save">Save</button>

                                                        <!-- <input type = "reset" class="bg-secondary text-white btn-sm" id="btnClear" /> -->

                                                        <!-- <button class="btn btn-danger" data-dismiss="modal" style="display:inline-block;">Close</button> -->

                                                    </div>
                                                </div>
                                            </div>
                                        </form>

                                    </div>
                                </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                        </div>

                        <div id="panel-1" class="panel">
                            <div class="panel-hdr">
                                <h2>
                                    <i class='subheader-icon fal fa-vial'></i> Payment Requests</span>
                                </h2>


                                <!-- <button type="button" class="btn btn-primary" style="float:right;" data-toggle="modal" data-target="#Modaldepartment" class="d-grid gap-2 d-md-block" id="createDepartment">+ Create New Test</button> -->


                            </div>
                            <br>


                            <div class="panel-container show">
                                <div class="panel-content">

                                    <ul class="nav nav-pills" role="tablist">
                                        <li class="nav-item alert-dark"><a class="nav-link active" data-toggle="tab" href="#tab_direction-1">Pending</a></li> &nbsp;
                                        <li class="nav-item alert-dark"><a class="nav-link" data-toggle="tab" href="#tab_direction-2">Done</a></li>
                                        <li class="nav-item alert-dark"><a class="nav-link" data-toggle="tab" href="#tab_direction-3">Result</a></li>


                                    </ul>

                                    <div class="tab-content py-3">

                                        <div class="tab-pane fade show active" id="tab_direction-1" role="tabpanel">
                                            <div class=" table-responsive">
                                                <table class="table" id="example">
                                                    <thead>
                                                        <tr>
                                                            <th>Invoice ID</th>
                                                            <th>Request Date</th>
                                                            <th>Test Name</th>
                                                            <th>Amount</th>
                                                            <th>Request Status</th>

                                                            <th>Add Evidence</th>

                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>


                                                        <?php
                                                        foreach ($getpending as $Key) {
                                                            $InvoiceId = $Key['Invoice_ID'];
                                                            $testNames = explode(",", $Key['TestName']);
                                                            $TID = $Key['TID'];

                                                        ?>
                                                            <tr>
                                                                <form enctype="multipart/form-data" action="<?php echo base_url(''); ?>Payment/Submit" method="POST">
                                                                    <td><?php echo $InvoiceId; ?>
                                                                        <input type="text" value="<?php echo $TID; ?>" name="InvoiceID" hidden>
                                                                    </td>
                                                                    <td><?php echo $Key['RequestDate']; ?> </td>
                                                                    <td><?php echo $Key['Name']; ?> </td>
                                                                    <td>$ <?php echo $Key['Amount']; ?> </td>
                                                                    <td><span class="badge badge-primary p-1"><?php echo $Key['Request_Status']; ?> </span></td>

                                                                    <td> <input type="file" name="file" style="display: inline-block;" class="btn btn-info btn-xs " id="btn.<?php echo  $TID ?>"></input> </td>
                                                                    <td> <button type="submit" style="display: inline-block;" class="btn btn-info btn-xs updatebtn1">Update</button> </td>
                                                                </form>


                                                            </tr>
                                                        <?php
                                                        }
                                                        ?>



                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade " id="tab_direction-2" role="tabpanel">
                                            <div class=" table-responsive">
                                                <table class="table" id="ActivityData">
                                                    <thead>
                                                        <tr>
                                                            <th>Invoice ID</th>
                                                            <th>Request Date</th>
                                                            <th>Test Name</th>
                                                            <th>Amount</th>
                                                            <th>Evidence Status</th>
                                                            <th>Bank Recipient Uploaded Date</th>


                                                        </tr>
                                                    </thead>
                                                    <tbody>



                                                        <?php
                                                        foreach ($getDone as $Key) {
                                                            $InvoiceId = $Key['Invoice_ID'];
                                                            $testNames = explode(",", $Key['TestName']);
                                                            $TID = $Key['TID'];
                                                        ?>
                                                            <tr>
                                                                <form enctype="multipart/form-data" action="<?php echo base_url(''); ?>Payment/Submit" method="POST">
                                                                    <td><?php echo $TID; ?>
                                                                        <input type="text" value="<?php echo $TID; ?>" name="InvoiceID" hidden>
                                                                    </td>
                                                                    <td><?php echo $Key['RequestDate']; ?> </td>
                                                                    <td><?php echo $Key['Name']; ?> </td>
                                                                    <td>$ <?php echo $Key['Amount']; ?> </td>
                                                                    <td><span class="badge badge-primary p-1"><?php echo $Key['Request_Status']; ?> </span></td>
                                                                    <td><?php echo $Key['EDate']; ?> </td>



                                                            </tr>
                                                        <?php
                                                        }
                                                        ?>

                                                    </tbody>
                                                </table>
                                            </div>

                                        </div>

                                        <div class="tab-pane fade " id="tab_direction-3" role="tabpanel">
                                            <div class=" table-responsive">
                                                <table class="table" id="ActivityData">
                                                    <thead>
                                                        <tr>
                                                            <th>Invoice ID</th>
                                                            <th>Request Date</th>
                                                            <th>Test Name</th>
                                                            <th>Amount</th>
                                                            <th>Evidence Status</th>
                                                            <th>Bank Recipient Uploaded Date</th>
                                                            <th>View Result</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>



                                                        <?php
                                                        foreach ($getresult as $Key) {
                                                            $InvoiceId = $Key['Invoice_ID'];
                                                            $testNames = explode(",", $Key['TestName']);
                                                            $TID = $Key['TID'];
                                                        ?>
                                                            <tr>
                                                                <form enctype="multipart/form-data" action="<?php echo base_url(''); ?>Payment/Submit" method="POST">
                                                                    <td><?php echo $InvoiceId; ?>
                                                                        <input type="text" value="<?php echo $TID; ?>" name="InvoiceID" hidden>
                                                                    </td>
                                                                    <td><?php echo $Key['RequestDate']; ?> </td>
                                                                    <td><?php echo $Key['Name']; ?> </td>

                                                                    <td>$ <?php echo $Key['Amount']; ?> </td>
                                                                    <td><span class="badge badge-primary p-1"><?php echo $Key['Request_Status']; ?> </span></td>
                                                                    <td><?php echo $Key['EDate']; ?> </td>
                                                                    <td>
                                                                        <a target="_blank" href="<?php echo '/sports/assets/img/img/' . $Key['Result']; ?>">
                                                                            Result</a>
                                                                    </td>



                                                            </tr>
                                                        <?php
                                                        }
                                                        ?>

                                                    </tbody>
                                                </table>
                                            </div>

                                        </div>


                                    </div>

                                </div>
                                <div class="panel-content">







                                </div>

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


            $(".verifybtn").click(function(e) {
                $('#Modaldepartment').modal('toggle');




            });
        });
    </script>
</body>

</html>
<!-- end document-->