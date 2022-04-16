

                            <?php  $this->load->view('cool_admin/layouts/head.php');?>
                            
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
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                    
                        <div class="row">
                        <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">Account Information</div>
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center title-2">User Profile</h3>
                                        </div>
                                        <hr>
                                        <form  novalidate="novalidate">
                                        <input id="id" name="id" type="hidden" class="form-control" aria-required="true" aria-invalid="false" value="<?php echo $userinfo[0]['UserID'] ?>">
                                            <div class="form-group">

                                                <label for="cc-payment" class="control-label mb-1">Email</label>
                                                <input id="email" name="email" type="text" class="form-control" aria-required="true" aria-invalid="false" value="<?php echo $userinfo[0]['Email'] ?>" disabled>
                                            </div>
                                            <div class="form-group has-success">
                                                <label for="cc-name" class="control-label mb-1">Supplier</label>
                                                <input id="supplier" name="supplier" type="text"  class="form-control cc-name valid" data-val="true" value="<?php echo $userinfo[0]['Supplier'] ?>"  data-val-required="Please enter the name of Supplier"
                                                    autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error">
                                                <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                                            </div>
                                            <div class="form-group">
                                                <label for="cc-number" class="control-label mb-1">Contact Number</label>
                                                <input id="number" name="cc-number" type="tel" class="form-control cc-number identified visa" value="<?php echo $userinfo[0]['Contactno'] ?>" data-val="true"
                                                    data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid card number"
                                                    autocomplete="cc-number">
                                                <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                            </div>
                                            <div class="row">
                                                <div class="col-12">
                                                <div class="form-group">
                                                <label for="cc-number" class="control-label mb-1">City</label>
                                                <input id="city" name="city" type="tel" class="form-control city identified visa" value="<?php echo $userinfo[0]['City'] ?>" data-val="true"
                                                    data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid city"
                                                    autocomplete="cc-number">
                                                <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                            </div>
                                            <div class="form-group">
                                                <label for="cc-number" class="control-label mb-1">Country</label>
                                                <input id="country" name="country" type="tel" class="form-control cc-number identified visa" value="<?php echo $userinfo[0]['Country'] ?>" data-val="true"
                                                    data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid country"
                                                    autocomplete="country">
                                                <span class="help-block" data-valmsg-for="country" data-valmsg-replace="true"></span>
                                            </div>
                                                </div>
                                               
                                            </div>
                                            <div>
                                                <button id="payment-button" class="btn btn-lg btn-info btn-block">
                                                    
                                                    Update
                                                    
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                      
                        <?php  $this->load->view('cool_admin/layouts/copyright.php');?>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    <?php  $this->load->view('cool_admin/layouts/foot.php');?>


    <script>

url="<?php echo base_url('CoolAdmin/updateUser') ?>";


$("#payment-button").click(function(e){
 e.preventDefault();

 email=$("#email").val();
 supplier=$("#supplier").val();
 contact=$("#number").val();
 city=$("#city").val();
 country=$("#country").val();
 id=$("#id").val();

 
 $.post(url, {"id":id,"email":email,"supplier":supplier,"contact":contact,"city":city,"country":country}, function(data){

  alert("User Updated Successfully!")
  location.reload();
    console.log(data)
  });
});

    </script>
</body>

</html>
<!-- end document-->
