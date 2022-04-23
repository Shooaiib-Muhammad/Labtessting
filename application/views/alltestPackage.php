<?php
$this->load->view('Header');
?>
<!--End Header-->
<!--Mobile Menu-->
<!--End Mobile Menu-->

<!--Body Content-->
<div id="page-content">
    <!--Collection Banner-->
    <div class="collection-header">
        <div class="collection-hero">
            <div class=" collection-hero__imageCustom"><img class="blur-up lazyload" data-src="<?php echo base_url(); ?>assets/images/cat-women6.jpg" src="assets/images/cat-women2.jpg" height="150px" width="100%" style="background-size: fixed; background-repeat:no-repeat;" alt="Women" title="Women" /></div>
            <div class="collection-hero__title-wrapper">
                <!-- <h1 class="collection-hero__title page-width"></h1> -->
            </div>
        </div>
    </div>
    <br>
    <br>
    <!--End Collection Banner-->

    <div class="container-fluid my-3">
        <div class="row">
            <!--Sidebar-->
            <div class="col-12 col-sm-12 col-md-3 col-lg-2 sidebar filterbar">
                <div class="closeFilter d-block d-md-none d-lg-none"><i class="icon icon anm anm-times-l"></i></div>
                <div class="sidebar_tags">
                    <!--Categories-->
                    <div class="sidebar_widget categories filter-widget">
                        <div class="widget-title">
                            <h2>Categories</h2>
                        </div>
                        <div class="widget-content">
                            <ul class="sidebar_categories">
                                <li class="level1 sub-level"><a href="#;" class="site-nav"> <b>ITEMS</b></a>
                                    <ul class="sublinks">
                                        <li class="level2"><a href="#;" class="site-nav">Balls</a></li>
                                        <li class="level2"><a href="#;" class="site-nav">Bags</a></li>
                                        <li class="level2"><a href="#;" class="site-nav">Raw Material</a></li>
                                    </ul>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <!--Categories-->
                    <!--Price Filter-->
                    <!-- <div class="sidebar_widget filterBox filter-widget">
                            <div class="widget-title">
                            	<h2>Price</h2>
                            </div>
                            <form action="#" method="post" class="price-filter">
                                <div id="slider-range" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
                                	<div class="ui-slider-range ui-widget-header ui-corner-all"></div>
                                    <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                                    <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <p class="no-margin"><input id="amount" type="text"></p>
                                    </div>
                                    <div class="col-6 text-right margin-25px-top">
                                        <button class="btn btn-secondary btn--small">filter</button>
                                    </div>
                                </div>
                            </form>
                        </div> -->
                    <!--End Price Filter-->
                    <!--Size Swatches-->
                    <!-- <div class="sidebar_widget filterBox filter-widget size-swacthes">
                            <div class="widget-title"><h2>Size</h2></div>
                            <div class="filter-color swacth-list">
                            	<ul>
                                    <li><span class="swacth-btn checked">X</span></li>
                                    <li><span class="swacth-btn">XL</span></li>
                                    <li><span class="swacth-btn">XLL</span></li>
                                    <li><span class="swacth-btn">M</span></li>
                                    <li><span class="swacth-btn">L</span></li>
                                    <li><span class="swacth-btn">S</span></li>
                                    <li><span class="swacth-btn">XXXL</span></li>
                                    <li><span class="swacth-btn">XXL</span></li>
                                    <li><span class="swacth-btn">XS</span></span></li>
                                </ul>
                            </div>
                        </div> -->
                    <!--End Size Swatches-->
                    <!--Color Swatches-->
                    <!-- <div class="sidebar_widget filterBox filter-widget">
                            <div class="widget-title"><h2>Color</h2></div>
                            <div class="filter-color swacth-list clearfix">
                                <span class="swacth-btn black"></span>
                                <span class="swacth-btn white checked"></span>
                                <span class="swacth-btn red"></span>
                                <span class="swacth-btn blue"></span>
                                <span class="swacth-btn pink"></span>
                                <span class="swacth-btn gray"></span>
                                <span class="swacth-btn green"></span>
                                <span class="swacth-btn orange"></span>
                                <span class="swacth-btn yellow"></span>
                                <span class="swacth-btn blueviolet"></span>
                                <span class="swacth-btn brown"></span>
                                <span class="swacth-btn darkGoldenRod"></span> 
                                <span class="swacth-btn darkGreen"></span> 
                                <span class="swacth-btn darkRed"></span> 
                                <span class="swacth-btn dimGrey"></span>
                                <span class="swacth-btn khaki"></span> 
                            </div>
                        </div> -->
                    <!--End Color Swatches-->
                    <!--Brand-->
                    <!-- <div class="sidebar_widget filterBox filter-widget">
                            <div class="widget-title"><h2>Brands</h2></div>
                            <ul>
                                <li>
                                  <input type="checkbox" value="allen-vela" id="check1">
                                  <label for="check1"><span><span></span></span>Allen Vela</label>
                                </li>
                                <li>
                                  <input type="checkbox" value="oxymat" id="check3">
                                  <label for="check3"><span><span></span></span>Oxymat</label>
                                </li>
                                <li>
                                  <input type="checkbox" value="vanelas" id="check4">
                                  <label for="check4"><span><span></span></span>Vanelas</label>
                                </li>
                                <li>
                                  <input type="checkbox" value="pagini" id="check5">
                                  <label for="check5"><span><span></span></span>Pagini</label>
                                </li>
                                <li>
                                  <input type="checkbox" value="monark" id="check6">
                                  <label for="check6"><span><span></span></span>Monark</label>
                                </li>
                            </ul>
                        </div> -->
                    <!--End Brand-->
                    <!--Popular Products-->
                    <?php

                    // print_r($data);

                    // print_r($getTop4);
                    ?>
                    <div class="sidebar_widget">
                        <div class="widget-title">
                            <h2>Popular Test</h2>
                        </div>

                        <div class="widget-content">
                            <div class="list list-sidebar-products">
                                <div class="grid">
                                    <div class="grid__item">
                                        <?php
                                        foreach ($getTop4 as $keys) {
                                            $image = $keys['Image'];
                                            $TestID = $keys['TestID'];
                                        ?>
                                            <div class="mini-list-item">
                                                <div class="mini-view_image">
                                                    <a class="grid-view-item__link" href="#">
                                                        <img class="grid-view-item__image" src="../sports/assets/img/img/<?php echo $image; ?>" alt="../sports/assets/img/img/<?php echo $image; ?>" />
                                                    </a>
                                                </div>
                                                <div class="details"> <a class="grid-view-item__title" href="<?php echo base_url(); ?>ProductDetails/test/<?php echo $TestID; ?>"><?php echo $keys['Name']; ?></a>
                                                    <div class="grid-view-item__meta"><span class="product-price__price"><span class="money">$ <?php echo $keys['StandardPrice']; ?></span></span></div>
                                                </div>
                                            </div>
                                        <?php
                                        }
                                        ?>
                                    </div>



                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Popular Products-->
                    <!--Banner-->
                    <!-- <div class="sidebar_widget static-banner">
                            <img src="assets/images/side-banner-2.jpg" alt="" />
                        </div> -->
                    <!--Banner-->
                    <!--Information-->
                    <div class="sidebar_widget">
                        <div class="widget-title">
                            <h2>Information</h2>
                        </div>
                        <div class="widget-content">
                            <p>In March 2022, QA Lab of Forward Sports is officially received the certificate of accreditation of ISO/IEC-17025:2017 from “Pakistan National Accreditation Council”. QA lab of Forward Sports is the first ever accredited lab around the globe who can perform finish good test of soccer balls. </p>
                        </div>
                    </div>
                    <!--end Information-->
                    <!--Product Tags-->
                    <!-- <div class="sidebar_widget">
                          <div class="widget-title">
                            <h2>Product Tags</h2>
                          </div>
                          <div class="widget-content">
                            <ul class="product-tags">
                              <li><a href="#" title="Show products matching tag $100 - $400">$100 - $400</a></li>
                              <li><a href="#" title="Show products matching tag $400 - $600">$400 - $600</a></li>
                              <li><a href="#" title="Show products matching tag $600 - $800">$600 - $800</a></li>
                              <li><a href="#" title="Show products matching tag Above $800">Above $800</a></li>
                              <li><a href="#" title="Show products matching tag Allen Vela">Allen Vela</a></li>
                              <li><a href="#" title="Show products matching tag Black">Black</a></li>
                              <li><a href="#" title="Show products matching tag Blue">Blue</a></li>
                              <li><a href="#" title="Show products matching tag Cantitate">Cantitate</a></li>
                              <li><a href="#" title="Show products matching tag Famiza">Famiza</a></li>
                              <li><a href="#" title="Show products matching tag Gray">Gray</a></li>
                              <li><a href="#" title="Show products matching tag Green">Green</a></li>
                              <li><a href="#" title="Show products matching tag Hot">Hot</a></li>
                              <li><a href="#" title="Show products matching tag jean shop">jean shop</a></li>
                              <li><a href="#" title="Show products matching tag jesse kamm">jesse kamm</a></li>
                              <li><a href="#" title="Show products matching tag L">L</a></li>
                              <li><a href="#" title="Show products matching tag Lardini">Lardini</a></li>
                              <li><a href="#" title="Show products matching tag lareida">lareida</a></li>
                              <li><a href="#" title="Show products matching tag Lirisla">Lirisla</a></li>
                              <li><a href="#" title="Show products matching tag M">M</a></li>
                              <li><a href="#" title="Show products matching tag mini-dress">mini-dress</a></li>
                              <li><a href="#" title="Show products matching tag Monark">Monark</a></li>
                              <li><a href="#" title="Show products matching tag Navy">Navy</a></li>
                              <li><a href="#" title="Show products matching tag new">new</a></li>
                              <li><a href="#" title="Show products matching tag new arrivals">new arrivals</a></li>
                              <li><a href="#" title="Show products matching tag Orange">Orange</a></li>
                              <li><a href="#" title="Show products matching tag oxford">oxford</a></li>
                              <li><a href="#" title="Show products matching tag Oxymat">Oxymat</a></li>
                            </ul>
                            <span class="btn btn--small btnview">View all</span> </div>
                        </div> -->
                    <!--end Product Tags-->
                </div>
            </div>
            <!--End Sidebar-->
            <!--Main Content-->
            <div class="col-12 col-sm-12 col-md-9 col-lg-10 main-col">
                <div class="productList">
                    <!--Toolbar-->
                    <!-- <button type="button" class="btn btn-filter d-block d-md-none d-lg-none"> Product Filters</button>
                        <div class="toolbar">
                            <div class="filters-toolbar-wrapper">
                                <div class="row">
                                    <div class="col-4 col-md-4 col-lg-4 filters-toolbar__item collection-view-as d-flex justify-content-start align-items-center">
                                        <a href="shop-left-sidebar.html" title="Grid View" class="change-view change-view--active">
                                            <img src="assets/images/grid.jpg" alt="Grid" />
                                        </a>
                                        <a href="shop-listview.html" title="List View" class="change-view">
                                            <img src="assets/images/list.jpg" alt="List" />
                                        </a>
                                    </div>
                                    <div class="col-4 col-md-4 col-lg-4 text-center filters-toolbar__item filters-toolbar__item--count d-flex justify-content-center align-items-center">
                                       
                                    </div>
                                    <div class="col-4 col-md-4 col-lg-4 text-right">
                                        <div class="filters-toolbar__item">
                                            <label for="SortBy" class="hidden">Sort</label>
                                            <select name="SortBy" id="SortBy" class="filters-toolbar__input filters-toolbar__input--sort">
                                                <option value="title-ascending" selected="selected">Sort</option>
                                                <option>Best Selling</option>
                                                <option>Alphabetically, A-Z</option>
                                                <option>Alphabetically, Z-A</option>
                                                <option>Price, low to high</option>
                                                <option>Price, high to low</option>
                                                <option>Date, new to old</option>
                                                <option>Date, old to new</option>
                                            </select>
                                            <input class="collection-header__default-sort" type="hidden" value="manual">
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div> -->
                    <!--End Toolbar-->
                    <div class="grid-products grid--view-items">
                        <div class="row">
                            <?php
                            foreach ($getData as $keys) {
                                $Name = $keys['Name'];
                                $StandardPrice = $keys['StandardPrice'];
                                $image = $keys['Image'];
                                $TestID = $keys['TestID'];
                                //echo $image;
                            ?>
                                <a style="display: none;" id='Name<?php echo $TestID; ?>'><?php echo $Name; ?></a>
                                <span class="price" style="display: none;" id='Price<?php echo $TestID; ?>'><?php echo $StandardPrice; ?></span>
                                <div class="col-6 col-sm-6 col-md-4 col-lg-3 grid-view-item style2 item">
                                    <div class="grid-view_image">

                                        <!-- start product image -->
                                        <a href="<?php echo base_url(); ?>ProductDetails/test/<?php echo $TestID; ?>" class="grid-view-item__link">
                                            <!-- image -->
                                            <img class="grid-view-item__image primary blur-up lazyload" data-src="/sports/assets/img/img/<?php echo  $image; ?>" src="/sports/assets/img/img/<?php echo  $image; ?>" alt="image" title="product">
                                            <!-- End image -->
                                            <!-- Hover image -->
                                            <img class="grid-view-item__image hover blur-up lazyload" id='Image<?php echo $TestID; ?>' data-src="/sports/assets/img/img/<?php echo  $image; ?>" src="/sports/assets/img/img/<?php echo  $image; ?>" alt="image" title="product">
                                            <!-- End hover image -->
                                            <!-- product label -->

                                            <!-- End product label -->
                                        </a>
                                        <!-- end product image -->

                                        <!--start product details -->
                                        <div class="product-details hoverDetails text-center mobile">
                                            <!-- product name -->
                                            <div class="product-name">
                                                <a href="#"><?php echo $Name; ?></a>
                                            </div>
                                            <!-- End product name -->
                                            <!-- product price -->
                                            <div class="product-price">
                                                <!-- <span class="old-price">$500.00</span> -->
                                                <span class="price"><?php echo $StandardPrice; ?></span>
                                            </div>
                                            <!-- End product price -->
                                            <!-- <div class="product-review">
                                                    <i class="font-13 fa fa-star"></i>
                                                    <i class="font-13 fa fa-star"></i>
                                                    <i class="font-13 fa fa-star"></i>
                                                    <i class="font-13 fa fa-star-o"></i>
                                                    <i class="font-13 fa fa-star-o"></i>
                                                </div> -->
                                            <!-- product button -->
                                            <div class="button-set">
                                                <a href="<?php echo base_url(); ?>ProductDetails/test/<?php echo $TestID; ?>" title="Quick View" class="quick-view-popup quick-view" tabindex="0">
                                                    <i class="icon anm anm-search-plus-r"></i>
                                                </a>
                                                <!-- Start product button -->
                                                <?php
                                                if ($this->session->has_userdata('user_id')) {
                                                ?>
                                                    <form class="variants add" action="#" method="post">
                                                        <button class="btn cartIcon btn-addto-cart Login AddToCartButtonPackage" id='<?php echo $TestID; ?>' type="button" tabindex="0"><i class="icon anm anm-bag-l"></i></button>
                                                    </form>
                                                <?php } else { ?>
                                                    <form class="variants add" action="#" method="post">
                                                        <button class="btn cartIcon btn-addto-cart Login LoginAddToCartButtonPackage" id='<?php echo $TestID; ?>' type="button" tabindex="0"><i class="icon anm anm-bag-l"></i></button>
                                                    </form>
                                                <?php } ?>


                                            </div>
                                            
                                            <!-- end product button -->
                                        </div>

                                        <!-- End product details -->
                                    </div>
                                    <div class="product-details text-center">
                                        <!-- product name -->
                                        <div class="product-name">
                                            <a id='Name<?php echo $TestID; ?>'><?php echo $Name ?></a>


                                        </div>
                                        <!-- End product name -->
                                        <!-- product price -->
                                        <div class="product-price">

                                            <span>$</span> <span class="price" id='Price<?php echo $TestID; ?>'> <?php echo $StandardPrice ?></span>
                                        </div>
                                        <!-- End product price -->


                                        <!-- Variant -->

                                        <!-- End Variant -->
                                    </div>
                                </div>

                            <?php

                            }

                            ?>





                        </div>
                    </div>
                </div>
                <!--End Main Content-->
            </div>
        </div>
    </div>
    <!--End Body Content-->

    <!--Footer-->
    <footer id="footer">
        <div class="newsletter-wrap" id="popup-container">
            <div id="popup-window">
                <a class="btn closepopup"><i class="icon icon anm anm-times-l"></i></a>
                <!-- Modal content-->
                <div class="display-table splash-bg">
                    <div class="display-table-cell width40"><img src="assets/images/newsletter-img.jpg" alt="Join Our Mailing List" title="Join Our Mailing List" /> </div>
                    <div class="display-table-cell width60 text-center">
                        <div class="newsletter-left">
                            <h2>Join Our Mailing List</h2>
                            <p>Sign Up for our exclusive email list and be the first to know about new products and special offers</p>
                            <form action="#" method="post">
                                <div class="input-group">
                                    <input type="email" class="input-group__field newsletter__input" name="EMAIL" value="" placeholder="Email address" required="">
                                    <span class="input-group__btn">
                                        <button type="submit" class="btn newsletter__submit" name="commit" id="subscribeBtn"> <span class="newsletter__submit-text--large">Subscribe</span> </button>
                                    </span>
                                </div>
                            </form>
                            <ul class="list--inline site-footer__social-icons social-icons">
                                <li><a class="social-icons__link" href="#" title="Facebook"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></li>
                                <li><a class="social-icons__link" href="#" title="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a class="social-icons__link" href="#" title="Pinterest"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                <li><a class="social-icons__link" href="#" title="Instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                <li><a class="social-icons__link" href="#" title="YouTube"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                                <li><a class="social-icons__link" href="#" title="Vimeo"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
<!-- <div class="site-footer">
        	<div class="container">
     			Footer Links
            	<div class="footer-top">
                	<div class="row">
                    	<div class="col-12 col-sm-12 col-md-3 col-lg-3 footer-links">
                        	<h4 class="h4">Quick Shop</h4>
                            <ul>
                            	<li><a href="#">Women</a></li>
                                <li><a href="#">Men</a></li>
                                <li><a href="#">Kids</a></li>
                                <li><a href="#">Sportswear</a></li>
                                <li><a href="#">Sale</a></li>
                            </ul>
                        </div>
                        <div class="col-12 col-sm-12 col-md-3 col-lg-3 footer-links">
                        	<h4 class="h4">Informations</h4>
                            <ul>
                            	<li><a href="#">About us</a></li>
                                <li><a href="#">Careers</a></li>
                                <li><a href="#">Privacy policy</a></li>
                                <li><a href="#">Terms &amp; condition</a></li>
                                <li><a href="#">My Account</a></li>
                            </ul>
                        </div>
                        <div class="col-12 col-sm-12 col-md-3 col-lg-3 footer-links">
                        	<h4 class="h4">Customer Services</h4>
                            <ul>
                            	<li><a href="#">Request Personal Data</a></li>
                                <li><a href="#">FAQ's</a></li>
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="#">Orders and Returns</a></li>
                                <li><a href="#">Support Center</a></li>
                            </ul>
                        </div>
                        <div class="col-12 col-sm-12 col-md-3 col-lg-3 contact-box">
                        	<h4 class="h4">Contact Us</h4>
                            <ul class="addressFooter">
                            	<li><i class="icon anm anm-map-marker-al"></i><p>55 Gallaxy Enque,<br>2568 steet, 23568 NY</p></li>
                                <li class="phone"><i class="icon anm anm-phone-s"></i><p>(440) 000 000 0000</p></li>
                                <li class="email"><i class="icon anm anm-envelope-l"></i><p>sales@yousite.com</p></li>
                            </ul>
                        </div>
                    </div>
                </div>
                End Footer Links
                <hr>
                <div class="footer-bottom">
                	<div class="row">
                    	Footer Copyright
	                	<div class="col-12 col-sm-12 col-md-6 col-lg-6 order-1 order-md-0 order-lg-0 order-sm-1 copyright text-sm-center text-md-left text-lg-left"><span></span> <a href="templateshub.net">Templates Hub</a></div>
                        End Footer Copyright
                    Footer Payment Icon
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 order-0 order-md-1 order-lg-1 order-sm-0 payment-icons text-right text-md-center">
                        	<ul class="payment-icons list--inline">
                        		<li><i class="icon fa fa-cc-visa" aria-hidden="true"></i></li>
                                <li><i class="icon fa fa-cc-mastercard" aria-hidden="true"></i></li>
                                <li><i class="icon fa fa-cc-discover" aria-hidden="true"></i></li>
                                <li><i class="icon fa fa-cc-paypal" aria-hidden="true"></i></li>
                                <li><i class="icon fa fa-cc-amex" aria-hidden="true"></i></li>
                                <li><i class="icon fa fa-credit-card" aria-hidden="true"></i></li>
                            </ul>
                        </div>
                        End Footer Payment Icon
                    </div>
                </div>
            </div>
        </div> -->
</footer>
<!--End Footer-->

<!--Scoll Top-->
<span id="site-scroll"><i class="icon anm anm-angle-up-r"></i></span>
<!--End Scoll Top-->

<!--Quick View popup-->
<div class="modal fade quick-view-popup" id="content_quickview">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div id="ProductSection-product-template" class="product-template__container prstyle1">
                    <div class="product-single">
                        <!-- Start model close -->
                        <a href="javascript:void()" data-dismiss="modal" class="model-close-btn pull-right" title="close"><span class="icon icon anm anm-times-l"></span></a>
                        <!-- End model close -->
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="product-details-img">
                                    <div class="pl-20">
                                        <img src="assets/images/product-detail-page/camelia-reversible-big1.jpg" alt="" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="product-single__meta">
                                    <h2 class="product-single__title">Product Quick View Popup</h2>
                                    <div class="prInfoRow">
                                        <div class="product-stock"> <span class="instock ">In Stock</span> <span class="outstock hide">Unavailable</span> </div>
                                        <div class="product-sku">SKU: <span class="variant-sku">19115-rdxs</span></div>
                                    </div>
                                    <p class="product-single__price product-single__price-product-template">
                                        <span class="visually-hidden">Regular price</span>
                                        <s id="ComparePrice-product-template"><span class="money">$600.00</span></s>
                                        <span class="product-price__price product-price__price-product-template product-price__sale product-price__sale--single">
                                            <span id="ProductPrice-product-template"><span class="money">$500.00</span></span>
                                        </span>
                                    </p>
                                    <div class="product-single__description rte">
                                        Belle Multipurpose Bootstrap 4 Html Template that will give you and your customers a smooth shopping experience which can be used for various kinds of stores such as fashion,...
                                    </div>

                                    <form method="post" action="http://annimexweb.com/cart/add" id="product_form_10508262282" accept-charset="UTF-8" class="product-form product-form-product-template hidedropdown" enctype="multipart/form-data">
                                        <div class="swatch clearfix swatch-0 option1" data-option-index="0">
                                            <div class="product-form__item">
                                                <label class="header">Color: <span class="slVariant">Red</span></label>
                                                <div data-value="Red" class="swatch-element color red available">
                                                    <input class="swatchInput" id="swatch-0-red" type="radio" name="option-0" value="Red">
                                                    <label class="swatchLbl color medium rectangle" for="swatch-0-red" style="background-image:url(assets/images/product-detail-page/variant1-1.jpg);" title="Red"></label>
                                                </div>
                                                <div data-value="Blue" class="swatch-element color blue available">
                                                    <input class="swatchInput" id="swatch-0-blue" type="radio" name="option-0" value="Blue">
                                                    <label class="swatchLbl color medium rectangle" for="swatch-0-blue" style="background-image:url(assets/images/product-detail-page/variant1-2.jpg);" title="Blue"></label>
                                                </div>
                                                <div data-value="Green" class="swatch-element color green available">
                                                    <input class="swatchInput" id="swatch-0-green" type="radio" name="option-0" value="Green">
                                                    <label class="swatchLbl color medium rectangle" for="swatch-0-green" style="background-image:url(assets/images/product-detail-page/variant1-3.jpg);" title="Green"></label>
                                                </div>
                                                <div data-value="Gray" class="swatch-element color gray available">
                                                    <input class="swatchInput" id="swatch-0-gray" type="radio" name="option-0" value="Gray">
                                                    <label class="swatchLbl color medium rectangle" for="swatch-0-gray" style="background-image:url(assets/images/product-detail-page/variant1-4.jpg);" title="Gray"></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swatch clearfix swatch-1 option2" data-option-index="1">
                                            <div class="product-form__item">
                                                <label class="header">Size: <span class="slVariant">XS</span></label>
                                                <div data-value="XS" class="swatch-element xs available">
                                                    <input class="swatchInput" id="swatch-1-xs" type="radio" name="option-1" value="XS">
                                                    <label class="swatchLbl medium rectangle" for="swatch-1-xs" title="XS">XS</label>
                                                </div>
                                                <div data-value="S" class="swatch-element s available">
                                                    <input class="swatchInput" id="swatch-1-s" type="radio" name="option-1" value="S">
                                                    <label class="swatchLbl medium rectangle" for="swatch-1-s" title="S">S</label>
                                                </div>
                                                <div data-value="M" class="swatch-element m available">
                                                    <input class="swatchInput" id="swatch-1-m" type="radio" name="option-1" value="M">
                                                    <label class="swatchLbl medium rectangle" for="swatch-1-m" title="M">M</label>
                                                </div>
                                                <div data-value="L" class="swatch-element l available">
                                                    <input class="swatchInput" id="swatch-1-l" type="radio" name="option-1" value="L">
                                                    <label class="swatchLbl medium rectangle" for="swatch-1-l" title="L">L</label>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Action -->
                                        <div class="product-action clearfix">
                                            <div class="product-form__item--quantity">
                                                <div class="wrapQtyBtn">
                                                    <div class="qtyField">
                                                        <a class="qtyBtn minus" href="javascript:void(0);"><i class="fa anm anm-minus-r" aria-hidden="true"></i></a>
                                                        <input type="text" id="Quantity" name="quantity" value="1" class="product-form__input qty">
                                                        <a class="qtyBtn plus" href="javascript:void(0);"><i class="fa anm anm-plus-r" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-form__item--submit">
                                                <button type="button" name="add" class="btn product-form__cart-submit">
                                                    <span>Add to cart</span>
                                                </button>
                                            </div>
                                        </div>
                                        <!-- End Product Action -->
                                    </form>
                                    <div class="display-table shareRow">
                                        <div class="display-table-cell">
                                            <div class="wishlist-btn">
                                                <a class="wishlist add-to-wishlist" href="#" title="Add to Wishlist"><i class="icon anm anm-heart-l" aria-hidden="true"></i> <span>Add to Wishlist</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End-product-single-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $('.AddToCartButtonPackage').click(function(e) {
        let name = $(`#Name${this.id}`).text()
        let price = $(`#Price${this.id}`).text()
        let image = $(`#Image${this.id}`).attr("data-src")
        let TestId = $(`#Image${this.id}`).attr("data-src")
        let url = '<?php echo base_url(); ?>ProductDetails/setCart';
        $.post(url, {
                'Name': name,
                'Price': price,
                'ImageURL': image,
                'Quantity': 1,
                'TestId': this.id
            },
            function(data, status) {
                let htmlGet = data[1];
                let htmlGetModified = htmlGet.replace(/\\/g, '');
                $('#header-cart').html('');
                $('#CartCount').html('');
                $('#header-cart').html(htmlGetModified);
                $('#CartCount').html(data[2]);
            })
    });

    $('.LoginAddToCartButtonPackage').click(function(e) {
        let name = $(`#Name${this.id}`).text()
        let price = $(`#Price${this.id}`).text()
        let image = $(`#Image${this.id}`).attr("data-src")
        let url = '<?php echo base_url(); ?>ProductDetails/LoginsetCart';
        let url2 = '<?php echo base_url(); ?>';
        $.post(url, {
                'Name': name,
                'Price': price,
                'ImageURL': image
            },
            function(data, status) {

                window.location = `${url2}Login`
            })
    });
</script>
<!--End Quick View popup-->

<!-- Including Jquery -->
<?php

$this->load->view('Footer');
?>