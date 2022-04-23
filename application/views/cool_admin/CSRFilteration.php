<?php  $this->load->view('cool_admin/layouts/head.php');?>
<style>
@import url('https://fonts.googleapis.com/css?family=Open+Sans&display=swap');

body {
    background-color: #eeeeee;
    font-family: 'Open Sans', serif
}

.container {
    margin-top: 50px;
    margin-bottom: 50px
}

.card {
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 1px solid rgba(0, 0, 0, 0.1);
    border-radius: 0.10rem
}

.card-header:first-child {
    border-radius: calc(0.37rem - 1px) calc(0.37rem - 1px) 0 0
}

.card-header {
    padding: 0.75rem 1.25rem;
    margin-bottom: 0;
    background-color: #fff;
    border-bottom: 1px solid rgba(0, 0, 0, 0.1)
}

.track {
    position: relative;
    background-color: #ddd;
    height: 7px;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    margin-bottom: 60px;
    margin-top: 50px
}

.track .step {
    -webkit-box-flex: 1;
    -ms-flex-positive: 1;
    flex-grow: 1;
    width: 25%;
    margin-top: -18px;
    text-align: center;
    position: relative
}

.track .step.active:before {
    background: #FF5722
}

.track .step::before {
    height: 7px;
    position: absolute;
    content: "";
    width: 100%;
    left: 0;
    top: 18px
}

.track .step.active .icon {
    background: #ee5435;
    color: #fff
}

.track .icon {
    display: inline-block;
    width: 40px;
    height: 40px;
    line-height: 40px;
    position: relative;
    border-radius: 100%;
    background: #ddd
}

.track .step.active .text {
    font-weight: 400;
    color: #000
}

.track .text {
    display: block;
    margin-top: 7px
}

.itemside {
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    width: 100%
}

.itemside .aside {
    position: relative;
    -ms-flex-negative: 0;
    flex-shrink: 0
}

.img-sm {
    width: 80px;
    height: 80px;
    padding: 7px
}

ul.row,
ul.row-sm {
    list-style: none;
    padding: 0
}

.itemside .info {
    padding-left: 15px;
    padding-right: 7px
}

.itemside .title {
    display: block;
    margin-bottom: 5px;
    color: #212529
}

p {
    margin-top: 0;
    margin-bottom: 1rem
}

.btn-warning {
    color: #ffffff;
    background-color: #ee5435;
    border-color: #ee5435;
    border-radius: 1px
}

.btn-warning:hover {
    color: #ffffff;
    background-color: #ff2b00;
    border-color: #ff2b00;
    border-radius: 1px
}
</style>
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
            
            <?php  $this->load->view('cool_admin/layouts/nav.php');?>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        

        <?php  $this->load->view('cool_admin/layouts/sidebar.php');?>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <?php  $this->load->view('cool_admin/layouts/header.php');?>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
            <div class="container">
         
    <article class="card">
        <header class="card-header"> CSR Filteration </header>
        <div class="row mb-6">
  <div class="col-sm-3">
       <label class="ml-2" for="invoice">Select Invoice:</label>

<select class="form-control ml-2 mt-3" name="invoice" id="invoice">
<option value="">Select option</option>
    <?php foreach($invoices as $inv){?>
<option value="<?php echo $inv['TID'] ?>"><?php echo $inv['invoice_ID'] ?></option>

<?php } ?>
</select></div>
  <div class="col-sm-4">
    
      <button onclick="search()" class="btn btn-info mt-5" type="button">Search</button>
   
  </div>
</div>
        <div class="card-body mt-4">
            <!-- <h6>Invoice ID: <span id="invoiceId"> </span></h6>
            <article class="card">
                <div class="card-body row">
                    <div class="col"> <strong>Supplier Name:</strong> <br><div id="supplier"> </div> </div>
                    <div class="col"> <strong>Recepient name:</strong> <br> <div id="name"> </div> </div>
                    <div class="col"> <strong>Email:</strong> <br> <div id="email"> </div> </div>
                    <div class="col"> <strong>Current Status:</strong> <br> <div id="status"> </div> </div>
                    <div class="col"> <strong>Amount#:</strong> <br> $  <span id="amount"></span></div>
                    <div class="col"> <strong>Request Date:</strong> <br> <div id="request_date"> </div> </div>
                </div>
            </article>
            <div class="track" id="track">
                <div class="step"> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text">Request Generated</span> </div>
                <div class="step"> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text"> Evidence Uploaded</span> </div>
                <div class="step"> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text"> Accounts Verify </span> </div>
                <div class="step"> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text">Lab Proceed</span> </div>
                <div class="step"> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text">Result Uploaded</span> </div>
            </div>
            <hr>
           
             <hr> <a href="#" class="btn btn-warning" data-abc="true"> <i class="fa fa-chevron-left"></i> Back to orders</a> -->
        </div> 
    </article>
</div>
            </div>
            
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    <?php  $this->load->view('cool_admin/layouts/foot.php');?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>

function search(){
    invoice=document.getElementById('invoice').value;
    location.href = `<?php echo base_url(); ?>CSR/CSRFiltered/${invoice}`;
}

    </script>
</body>

</html>
<!-- end document-->
