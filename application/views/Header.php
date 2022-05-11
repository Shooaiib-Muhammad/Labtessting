<!DOCTYPE html>
<html class="no-js" lang="en">

<!-- belle/index.html   11 Nov 2019 12:16:10 GMT -->

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Lab Testing Portal</title>
  <meta name="description" content="description">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Favicon -->
  <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/LabLogo.png" />
  <!-- Plugins CSS -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/plugins.css">
  <!-- Bootstap CSS -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
  <!-- Main Style CSS -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/responsive.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" >
  <style>
    .stickyNav {
      position: fixed;
      top: 0;
      z-index: 333;
      width: 100%;
      left: 0;
      background-color: #060606;
      color: white;
      box-shadow: 0 0 7px rgb(0 0 0 / 20%);
      -webkit-box-shadow: 0 0 7px rgb(0 0 0 / 20%);
    }
    @media only screen and (max-width: 480px){
.container-fluid, .home15-funiture-top .container-fluid, .home15-funiture-header .container-fluid {
    padding: 0 20px;
    background-color: black;
    color: white;
}
    }

    @media only screen and (max-width: 830px){
.container-fluid, .home15-funiture-top .container-fluid, .home15-funiture-header .container-fluid {
    padding: 0 20px;
    background-color: black;
    color: white;
}
    }


    @media only screen and (max-width: 480px) {
      #myVideo {
  position: absolute;
  /* margin-top:2%; */
  top:100px;
  bottom: 0;
  right: 0;
  width: 100%;
  height:100%;
}
video{
  object-fit:fill

}
    }

    @media only screen and (max-width: 830px) {
      #myVideo {
  position: absolute;
  /* margin-top:2%; */
  top:100px;
  bottom: 0;
  right: 0;
  width: 100%;
  height: 100;
}
video{
  object-fit:fill

}
}

@media only screen and (max-width: 1024px) {
  #myVideo {
  position: absolute;
  /* margin-top:2%; */
  bottom: 0;
  right: 0;
  width: 100%;
  height: 100;
}
}

@media only screen and (max-width: 1281px ) {
  #myVideo {
  position: absolute;
  /* margin-top:2%; */
  bottom: 0;
  right: 0;
  width: 100%;
  height: 100;
}
}
#myVideo {
  position: absolute;
  bottom: 0;
  right: 0;
  width: 100%;
  height: 100;
}







  </style>
</head>

<body class="template-index belle template-index-belle">
  <div id="pre-loader">
    <img src="<?php echo base_url(); ?>assets/images/loader4.gif" alt="Loading..." />
  </div>
  <div class="pageWrapper">
  <div class="modal fade" id="ballModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ball Modal</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Brand</label>
                            <input type="text" class="form-control" id="brandBall" placeholder="Enter Brand">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Modal</label>
                            <input type="text" class="form-control" id="modalBall" placeholder="Enter Modal">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Article No.</label>
                            <input type="text" class="form-control" id="articleBall" placeholder="Enter Article Number">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Size</label>
                            <input type="text" class="form-control" id="sizeBall" placeholder="Enter Size">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Material Type</label>
                            <input type="text" class="form-control" id="materialTypeBall" placeholder="Enter Material Type">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Ball Type</label>
                            <input type="text" class="form-control" id="ballTypeBall" placeholder="Enter Ball Type">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Description</label>
                            <input type="text" class="form-control" id="descriptionBall" placeholder="Enter Description">
                        </div>
                    </div>
                </div>







            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal" style="border-radius: 10px;background-color:rgba(255,0,0,0.8)">Close</button>
                <button type="button" class="btn btn-primary" id='ballCartButton' style="border-radius: 10px;">Add to Cart</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="bagModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Bag Modal</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Brand</label>
                            <input type="text" class="form-control" id="brandBag" placeholder="Enter Brand">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Modal</label>
                            <input type="text" class="form-control" id="modalBag" placeholder="Enter Modal">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Article No.</label>
                            <input type="text" class="form-control" id="articleBag" placeholder="Enter Article Number">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Item Type</label>
                            <input type="text" class="form-control" id="itemTypeBag" placeholder="Enter Item Type">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Cotting / Non-Coating</label>
                            <select class="form-control" id="CottingBag" >
                        <option value="Coating">Coating</option>
                        <option value="Non-Coating">Non-Coating</option>    
                        </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Color</label>
                            <input type="text" class="form-control" id="colorBag" placeholder="Enter Color">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Bag Type</label>
                            <input type="text" class="form-control" id="bagTypeBag" placeholder="Enter Bag Type">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Description</label>
                            <input type="text" class="form-control" id="descriptionBag" placeholder="Enter Description">
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal" style="border-radius: 10px;background-color:rgba(255,0,0,0.8)">Close</button>
                <button type="button" class="btn btn-primary" id='bagCartButton' style="border-radius: 10px;">Add to Cart</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="materialModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Material Modal</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Brand</label>
                            <input type="text" class="form-control" id="brandMaterial" placeholder="Enter Brand">
                        </div>
                    </div>
    
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Item Type</label>
                            <input type="text" class="form-control" id="itemTypeMaterial" placeholder="Enter Item Type">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Cotting / Non-Coating</label>
                            <select class="form-control" id="CottingMaterial" >
                        <option value="Coating">Coating</option>
                        <option value="Non-Coating">Non-Coating</option>    
                        </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Color</label>
                            <input type="text" class="form-control" id="colorMaterial" placeholder="Enter Color">
                        </div>
                    </div>
                
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Description</label>
                            <input type="text" class="form-control" id="descriptionMaterial" placeholder="Enter Description">
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal" style="border-radius: 10px;background-color:rgba(255,0,0,0.8)">Close</button>
                <button type="button" class="btn btn-primary" id='materialCartButton' style="border-radius: 10px;">Add to Cart</button>
            </div>
        </div>
    </div>
</div>
    <!--Search Form Drawer-->
    <div class="search">
      <div class="search__form">
        <form class="search-bar__form" action="#">
          <button class="go-btn search__button" type="submit"><i class="icon anm anm-search-l"></i></button>
          <input class="search__input" type="search" name="q" value="" placeholder="Search entire store..." aria-label="Search" autocomplete="off">
        </form>
        <button type="button" class="search-trigger close-btn"><i class="anm anm-times-l"></i></button>
      </div>
    </div>
    <!--End Search Form Drawer-->
    <!--Top Header-->
    <div class="top-header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-10 col-sm-8 col-md-5 col-lg-4">


            <p class="phone-no"><i class="anm anm-phone-s"></i> +92-523571801</p>
          </div>
          <div class="col-sm-4 col-md-4 col-lg-4 d-none d-lg-none d-md-block d-lg-block">
            <!-- <div class="text-center">
                            <p class="top-header_middle-text"> Worldwide Express Shipping</p>
                        </div> -->
          </div>
          <div class="col-2 col-sm-4 col-md-3 col-lg-4 text-right">
            <span class="user-menu d-block d-lg-none"><i class="anm anm-user-al" aria-hidden="true"></i></span>
            <ul class="customer-links list-inline">
              <?php
              if (!$this->session->has_userdata('user_id')) {
              ?>
                <li><a href="<?php echo base_url(); ?>Login">Login</a></li>
                <li><a href="<?php echo base_url(); ?>Login">Create Account</a></li>
              <?php
              } else {
              ?>
                <li><a href="<?php echo base_url(); ?>Dashboard"><i class="fa fa-user-circle" aria-hidden="true" style="font-size:medium;"></i> My Account</a></li>
                <li><a href="<?php echo base_url(); ?>Login/logout">Logout</a></li>
              <?php
              }
              ?>

              <!-- <li><a href=" wishlist.html">Wishlist</a></li> -->
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!--End Top Header-->
    <!--Header-->
    <div class="header-wrap classicHeader animated d-flex">
      <div class="container-fluid">
        <div class="row align-items-center">
          <!--Desktop Logo-->
          <div class="logo col-md-2 col-lg-2 d-none d-lg-block">
            <a href="<?php echo base_url(); ?>test">
              <img src="<?php echo base_url(); ?>assets/images/LabLogo.png" width="100" alt="Forward Sports Pvt Ltd." title="Forward Sports Pvt Ltd." />
            </a>
          </div>
          <!--End Desktop Logo-->
          <div class="col-2 col-sm-3 col-md-3 col-lg-8">
            <div class="d-block d-lg-none">
              <button type="button" class="btn--link site-header__menu js-mobile-nav-toggle mobile-nav--open" >
                <i class="icon anm anm-times-l" style="color: white;"></i>
                <i class="anm anm-bars-r" style="color: white;"></i>
              </button>
            </div>
            <!--Desktop Menu-->
            <?php
            $this->load->view('Nav');
            ?>
            <!--End Desktop Menu-->
          </div>
          <!--Mobile Logo-->
          <div class="col-4 col-sm-6 col-md-6 col-lg-2 d-block d-lg-none mobile-logo ml-0">
            <div class="logo">
              <a href="<?php echo base_url(); ?>test">
                <img src="<?php echo base_url(); ?>assets/images/Forward2.png" alt="Belle Multipurpose Html Template" title="Belle Multipurpose Html Template" />
              </a>
            </div>
          </div>
          <div class="col-2 col-sm-6 col-md-6 col-lg-2 d-block d-lg-none mobile-logo ml-0">
            <div class="logo">
              
            </div>
          </div>
          <!--Mobile Logo-->


          <!-- End Mobile Menu -->
          <div class="col-4 col-sm-3 col-md-3 col-lg-2">
            <?php
            if ($this->session->has_userdata('user_id')) {
            ?>
              <div class="site-cart">
                <a href="#;" class="site-header__cart" title="Cart">
                  <i class="icon anm anm-bag-l" style="color:white"></i>
                  <span id="CartCount" class="site-header__cart-count" data-cart-render="item_count"><?php echo count($_SESSION['Products']) ?></span>
                </a>
                <!--Minicart Popup-->

                <div id="header-cart" class="block block-cart">
                  <?php
                  $totalPrice = 0;
                  $index = 0;
                  if (count($_SESSION['Products']) > 0) {
                    echo '<ul class="mini-products-list">';
                    foreach ($_SESSION['Products'] as $products) {
                      $products[1] = intval($products[4]) * intval($products[3]);
                      $totalPrice +=  $products[1];
                      echo '<li class="item">';

                      echo '<a class="product-image" href="#"><img src="' . $products[2] . '" alt="' . $products[0] . '" title=""  /></a>';
                      echo '<div class="product-details">';
                      echo '  <a href="' . base_url() . '/ProductDetails/RemoveCartItem?id=' . $index . '" class="remove"><i class="anm anm-times-l" aria-hidden="true"></i></a>
               <a class="pName" href="#">' . $products[0] . '</a>
               <div class="wrapQtyBtn"><div class="qtyField"><span class="label" style="color:black">Qty:</span><a class="qtyBtn minus" data-src="'.$index.'" href="javascript:void(0);"><i class="fa anm anm-minus-r" aria-hidden="true"></i></a><input type="text" id="Quantity" name="quantity" value="'.$products[3].'" class="product-form__input qty" disabled><a class="qtyBtn plus" data-src="'.$index.'" href="javascript:void(0);"><i class="fa anm anm-plus-r" aria-hidden="true"></i></a></div></div>
             
               <div class="priceRow">
                <div class="product-price">
                 <span class="money"> $ ' . $products[1] . '</span>
                </div>
               </div>
              </div>
             </li>';
                      $index += 1;
                    }
                  } else {
                    echo '<li class="item">';

                    echo '<div class="product-details">';
                    echo '<a class="pName">No Items found in Cart</a>
           
           </div>
          </li>';
                  }
                  ?>









                  </ul>
                  <div class="total">
                    <div class="total-in">
                      <span class="label">Cart Subtotal:</span><span class="product-price"> <span class="money">$ <?php echo $totalPrice; ?></span></span>
                    </div>
                    <div class="buttonSet text-center">
                      <a href="<?php echo base_url(); ?>Test/Cart" class="btn btn-secondary btn--small" style='border-radius:10px;padding:10px'>View Cart</a>
                      <a href="<?php echo base_url(); ?>Test/checkout" class="btn btn-secondary btn--small" style='border-radius:10px;padding:10px'>Checkout</a>
                    </div>
                  </div>
                </div>
              <?php } ?>
              <!--EndMinicart Popup-->
              </div>
              <!-- <div class="site-header__search">
       <button type="button" class="search-trigger" style="color: white;"><i class="icon anm anm-search-l" style="color: white;"></i></button>
      </div> -->
          </div>

        </div>
      </div>
    </div>

    <!--Mobile Menu-->
    <div class="mobile-nav-wrapper" role="navigation">
      <div class="closemobileMenu"><i class="icon anm anm-times-l pull-right"></i> Close Menu</div>
      <ul id="MobileNav" class="mobile-nav">
        <li class="lvl1 parent megamenu"><a href="#">EXPLORE <i class="anm anm-plus-l"></i></a>
          <ul>
            <li><a href="<?php echo base_url(); ?>Innovation" class="site-nav">Innovations</a></li>
            <li><a href="<?php echo base_url(); ?>Organisation" class="site-nav">Organization Hierarchy</a></li>
            <li><a href="<?php echo base_url(); ?>Labtour" class="site-nav">Lab Tour </a></li>
          </ul>
        </li>
        <ul>
        <li class="lvl1 parent megamenu"><a href="#">TEST SERVICES <i class="anm anm-plus-l"></i></a>
          <ul>
            <li><a href="#" class="site-nav">BALLS <i class="anm anm-plus-l"></i></a>
              <ul class="dropdown">
                <?php
                foreach ($getData as $keys) {
                  if ($keys['TestType'] == 'Test') {
                    if ($keys['Type'] == 'Balls') {
                      $Name = $keys['Name'];
                      $TestID = $keys['TestID'];
                ?>
                      <li><a href="<?php echo base_url(); ?>ProductDetails/test/<?php echo $TestID; ?>" class="site-nav"><?php echo $Name; ?></a></li>
                <?php
                    }
                  }
                }
                ?>
              </ul>
            </li>
            <li><a href="#" class="site-nav">BAGS <i class="anm anm-plus-l"></i></a>
              <ul class="dropdown">
                <?php
                foreach ($getData as $keys) {
                  if ($keys['TestType'] == 'Test') {
                    if ($keys['Type'] == 'Bags') {
                      $Name = $keys['Name'];
                      $TestID = $keys['TestID'];
                ?>
                      <li><a href="<?php echo base_url(); ?>ProductDetails/test/<?php echo $TestID; ?>" class="site-nav"><?php echo $Name; ?></a></li>
                <?php
                    }
                  }
                }
                ?>
              </ul>
            </li>
            <li><a href="#" class="site-nav">RAW MATERIAL <i class="anm anm-plus-l"></i></a>
              <ul class="dropdown">
                <?php


                foreach ($getData as $keys) {
                  if ($keys['TestType'] == 'Test') {
                    if ($keys['Type'] == 'Raw Material') {
                      $Name = $keys['Name'];
                      $TestID = $keys['TestID'];
                ?>
                      <li><a href="<?php echo base_url(); ?>ProductDetails/test/<?php echo $TestID; ?>" class="site-nav"><?php echo $Name; ?></a></li>
                <?php
                    }
                  }
                }
                ?>

              </ul>
            </li>
          </ul>

        </li>
        </ul>
        
          <ul>
        <li class="lvl1 parent megamenu"><a href="#">OFFERED PACKAGES <i class="anm anm-plus-l"></i></a>
          <ul>
            <li><a href="#" class="site-nav">BALLS <i class="anm anm-plus-l"></i></a>
              <ul class="dropdown">
                <?php
                foreach ($getData as $keys) {
                  if ($keys['TestType'] == 'Package') {
                    if ($keys['Type'] == 'Balls') {
                      $Name = $keys['Name'];
                      $TestID = $keys['TestID'];
                ?>
                      <li><a href="<?php echo base_url(); ?>ProductDetails/test/<?php echo $TestID; ?>" class="site-nav"><?php echo $Name; ?></a></li>
                <?php
                    }
                  }
                }
                ?>
              </ul>
            </li>
            <li><a href="#" class="site-nav">BAGS <i class="anm anm-plus-l"></i></a>
              <ul class="dropdown">
                <?php
                foreach ($getData as $keys) {
                  if ($keys['TestType'] == 'Package') {
                    if ($keys['Type'] == 'Bags') {
                      $Name = $keys['Name'];
                      $TestID = $keys['TestID'];
                ?>
                      <li><a href="<?php echo base_url(); ?>ProductDetails/test/<?php echo $TestID; ?>" class="site-nav"><?php echo $Name; ?></a></li>
                <?php
                    }
                  }
                }
                ?>
              </ul>
            </li>
            <li><a href="#" class="site-nav">RAW MATERIAL <i class="anm anm-plus-l"></i></a>
              <ul class="dropdown">
                <?php

                foreach ($getData as $keys) {
                  if ($keys['TestType'] == 'Package') {
                    if ($keys['Type'] == 'Raw Material') {
                      $Name = $keys['Name'];
                      $TestID = $keys['TestID'];
                ?>
                      <li><a href="<?php echo base_url(); ?>ProductDetails/test/<?php echo $TestID; ?>" class="site-nav"><?php echo $Name; ?></a></li>
                <?php
                    }
                  }
                }
                ?>

              </ul>
            </li>
          
          </ul>
        </li>
        </ul>
        <ul>
        <li class="lvl1 parent megamenu"><a href="#">All Tests  <i class="anm anm-plus-l"></i></a>
          <ul>
            <li><a href="#" class="site-nav">Accredited <i class="anm anm-plus-l"></i></a>
              <ul class="dropdown">
               
                      <li><a href="<?php echo base_url(); ?>Accredited" class="site-nav">Accredited</a></li>
              
              </ul>
            </li>
            <li><a href="#" class="site-nav">Non-Accredited <i class="anm anm-plus-l"></i></a>
              <ul class="dropdown">
               
                      <li><a href="<?php echo base_url(); ?>NonAccredited" class="site-nav">Non-Accredited</a></li>
               
              </ul>
            </li>
          </ul>

        </li>
        </ul>
        <!-- <li><a href="<?php echo base_url(); ?>AlltestPackage" class="site-nav">Coming soon<span class="lbl nm_label1">New</span></a></li> -->
        <li class="lvl1"><a href="<?php echo base_url(); ?>ContactUs"><b>Contact Us</b></a>
        <li class="lvl1"><a href="<?php echo base_url(); ?>AlltestPackage"><b>BOOK NOW !</b></a>
        <li class="lvl1"><a href="<?php echo base_url(); ?>HowBook"><b>How To Book ? </b></a>
      </ul>
      </li>

      
      </li>
      </ul>
    </div>
    <!--End Mobile Menu-->