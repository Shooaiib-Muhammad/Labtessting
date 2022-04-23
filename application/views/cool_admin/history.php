<?php $this->load->view('cool_admin/layouts/head.php'); ?>

<body class="animsition">
  <div class="page-wrapper">
    <!-- HEADER MOBILE-->
    <header class="header-mobile d-block d-lg-none">
      <div class="header-mobile__bar">
        <div class="container-fluid">
          <div class="header-mobile-inner">
            <a class="logo" href="index.html">
              <img src="<?php echo base_url() ?>Assets/cool_admin/images/icon/logo.png" alt="CoolAdmin" />
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
        <?php
        $Month = date('m');
        $Year = date('Y');
        $Day = date('d');
        $CurrentDate = $Year . '-' . $Month . '-' . $Day;
        ?>
  

        <div class="col-lg-12">
          <div class="card">

            <div class="card-body">
              <div class="card-title">

              </div>
              <hr>
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group mt-4">
                    <label class="form-control-label">From Date:</label>
                    <div class="input-group">
                      <input class="form-control" type="Date" id="SDate" name="Sdate" value="<?php echo $CurrentDate; ?>" style="width: 100%">
                    </div>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-group mt-4">
                    <label class="form-control-label">To Date:</label>
                    <div class="input-group">
                      <input class="form-control" type="Date" id="EDate" name="Edate" value="<?php echo $CurrentDate; ?>" style="width: 100%">
                    </div>
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="form-group ">

                    <button type="button" class="btn btn-success" style="margin-top:55px;" id="search">Search</button>
                  </div>
                </div>

              </div>
            </div>

            <div class="col-md-12" id="appendhere">
              <table id="example" class="table table-striped table-bordered" style="width:100%">

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
                  <?php foreach ($tabular as $tab) { ?>
                    <tr>
                      <td><?php echo $tab['Invoice_ID'] ?></td>
                      <td><?php echo $tab['RequestDate'] ?></td>
                      <td><?php echo $tab['TestName'] ?></td>
                      <td class="text-right">$<?php echo $tab['Amount'] ?></td>
                      <td class="text-right"><?php echo $tab['Request_Status'] ?></td>

                    </tr>
                  <?php } ?>
                </tbody>
                <tfoot style="background-color:black; color:White;">
    <tr>
      <td>Total </td>
      <td></td>
      <td> </td>
      <td class="text-right">$<?php echo $count; ?></td>
      <td> </td>
      
    </tr>
  </tfoot>
              </table>
            </div>
          </div>
        </div>

      </div>
      <!-- END MAIN CONTENT-->
      <!-- END PAGE CONTAINER-->
    </div>

  </div>

  <?php $this->load->view('cool_admin/layouts/foot.php'); ?>

  <script>
    $("#search").click(function() {
      $("#appendhere").html(' ');
      sdate = $("#SDate").val();
      edate = $("#EDate").val();
      url = "<?php echo base_url('CoolAdmin/historyTable') ?>"
      $.post(url, {
        "sdate": sdate,
        "edate": edate
      }, function(data, status) {
        var table = '';
        table += `   <table id="example" class="table table-striped table-bordered" style="width:100%">
     
     <thead>
         <tr>
             <th>Invoice_ID</th>
             <th>Request Date</th>
             <th>Test Name</th>
             <th class="text-right">Amount</th>
             <th>Request_Status</th>
             
         </tr>
     </thead>
     <tbody>`;
        data['tableData'].forEach(element => {
          table += `<tr>
                                                <td>${element.Invoice_ID}</td>
                                                <td>${element.RequestDate}</td>
                                                <td>${element.TestName}</td>
                                                <td class="text-right">$${element.Amount}</td>
                                                <td class="text-right">${element.Request_Status}</td>
                                               
                                            </tr>`

        });
        table += `<tfoot style="background-color:black; color:White;">
    <tr>
      <td>Total </td>
      <td></td>
      <td> </td>
      <td class="text-right">$${data['count']}</td>
      <td> </td>
      
    </tr>
  </tfoot>
                                </tbody>

                              </table>`
        $("#appendhere").append(table);
        $(document).ready(function() {
          var table = $('#example').DataTable({
            lengthChange: false,
            buttons: ['copy', 'excel', 'pdf']
          });

          table.buttons().container()
            .appendTo('#example_wrapper .col-md-6:eq(0)');
        });

      });
    });
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