<!DOCTYPE html>
<html class="no-js" lang="en">

<!-- belle/index.html   11 Nov 2019 12:16:10 GMT -->

<head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <meta http-equiv="x-ua-compatible" content="ie=edge">
 <title>Forward Sports Pvt Ltd.</title>
 <meta name="description" content="description">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <!-- Favicon -->
 <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/Forward.png" />
 <!-- Plugins CSS -->
 <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/plugins.css">
 <!-- Bootstap CSS -->
 <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
 <!-- Main Style CSS -->
 <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
 <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/responsive.css">
</head>

<body class="template-index belle template-index-belle">
 <div id="pre-loader">
  <img src="<?php echo base_url(); ?>assets/images/loader.gif" alt="Loading..." />
 </div>
 <div class="pageWrapper">
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


      <p class="phone-no"><i class="anm anm-phone-s"></i> +052-3571801</p>
     </div>
     <div class="col-sm-4 col-md-4 col-lg-4 d-none d-lg-none d-md-block d-lg-block">
      <!-- <div class="text-center">
                            <p class="top-header_middle-text"> Worldwide Express Shipping</p>
                        </div> -->
     </div>
     <div class="col-2 col-sm-4 col-md-3 col-lg-4 text-right">
      <span class="user-menu d-block d-lg-none"><i class="anm anm-user-al" aria-hidden="true"></i></span>
      <ul class="customer-links list-inline">
       <li><a href="./Login">Login</a></li>
       <li><a href="./Login">Create Account</a></li>
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
      <a href="<?php echo base_url(); ?>/test">
       <img src="<?php echo base_url(); ?>assets/images/frwdlogo.jpg" width="100" alt="Forward Sports Pvt Ltd." title="Forward Sports Pvt Ltd." />
      </a>
     </div>
     <!--End Desktop Logo-->
     <div class="col-2 col-sm-3 col-md-3 col-lg-8">
      <div class="d-block d-lg-none">
       <button type="button" class="btn--link site-header__menu js-mobile-nav-toggle mobile-nav--open">
        <i class="icon anm anm-times-l"></i>
        <i class="anm anm-bars-r"></i>
       </button>
      </div>
      <!--Desktop Menu-->
      <?php
      $this->load->view('Nav');
      ?>
      <!--End Desktop Menu-->
     </div>
     <!--Mobile Logo-->
     <div class="col-6 col-sm-6 col-md-6 col-lg-2 d-block d-lg-none mobile-logo">
      <div class="logo">
       <a href="<?php echo base_url(); ?>/test">
        <img src="<?php echo base_url(); ?>assets/images/logo.svg" alt="Belle Multipurpose Html Template" title="Belle Multipurpose Html Template" />
       </a>
      </div>
     </div>
     <!--Mobile Logo-->
     <div class="col-4 col-sm-3 col-md-3 col-lg-2">
      <div class="site-cart">
       <a href="#;" class="site-header__cart" title="Cart">
        <i class="icon anm anm-bag-l"></i>
        <span id="CartCount" class="site-header__cart-count" data-cart-render="item_count">2</span>
       </a>
       <!--Minicart Popup-->
       <div id="header-cart" class="block block-cart">
        <ul class="mini-products-list">
         <li class="item">
          <a class="product-image" href="#">
           <img src="assets/images/product-images/cape-dress-1.jpg" alt="3/4 Sleeve Kimono Dress" title="" />
          </a>
          <div class="product-details">
           <a href="#" class="remove"><i class="anm anm-times-l" aria-hidden="true"></i></a>
           <a href="#" class="edit-i remove"><i class="anm anm-edit" aria-hidden="true"></i></a>
           <a class="pName" href="cart.html">Sleeve Kimono Dress</a>
           <div class="variant-cart">Black / XL</div>
           <div class="wrapQtyBtn">
            <div class="qtyField">
             <span class="label">Qty:</span>
             <a class="qtyBtn minus" href="javascript:void(0);"><i class="fa anm anm-minus-r" aria-hidden="true"></i></a>
             <input type="text" id="Quantity" name="quantity" value="1" class="product-form__input qty">
             <a class="qtyBtn plus" href="javascript:void(0);"><i class="fa anm anm-plus-r" aria-hidden="true"></i></a>
            </div>
           </div>
           <div class="priceRow">
            <div class="product-price">
             <span class="money">$59.00</span>
            </div>
           </div>
          </div>
         </li>
         <li class="item">
          <a class="product-image" href="#">
           <img src="assets/images/product-images/cape-dress-2.jpg" alt="Elastic Waist Dress - Black / Small" title="" />
          </a>
          <div class="product-details">
           <a href="#" class="remove"><i class="anm anm-times-l" aria-hidden="true"></i></a>
           <a href="#" class="edit-i remove"><i class="anm anm-edit" aria-hidden="true"></i></a>
           <a class="pName" href="cart.html">Elastic Waist Dress</a>
           <div class="variant-cart">Gray / XXL</div>
           <div class="wrapQtyBtn">
            <div class="qtyField">
             <span class="label">Qty:</span>
             <a class="qtyBtn minus" href="javascript:void(0);"><i class="fa anm anm-minus-r" aria-hidden="true"></i></a>
             <input type="text" id="Quantity" name="quantity" value="1" class="product-form__input qty">
             <a class="qtyBtn plus" href="javascript:void(0);"><i class="fa anm anm-plus-r" aria-hidden="true"></i></a>
            </div>
           </div>
           <div class="priceRow">
            <div class="product-price">
             <span class="money">$99.00</span>
            </div>
           </div>
          </div>
         </li>
        </ul>
        <div class="total">
         <div class="total-in">
          <span class="label">Cart Subtotal:</span><span class="product-price"><span class="money">$748.00</span></span>
         </div>
         <div class="buttonSet text-center">
          <a href="cart.html" class="btn btn-secondary btn--small">View Cart</a>
          <a href="checkout.html" class="btn btn-secondary btn--small">Checkout</a>
         </div>
        </div>
       </div>
       <!--EndMinicart Popup-->
      </div>
      <div class="site-header__search">
       <button type="button" class="search-trigger"><i class="icon anm anm-search-l"></i></button>
      </div>
     </div>
    </div>
   </div>
  </div>