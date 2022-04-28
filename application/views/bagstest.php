<?php
$this->load->view('Header');
?>
<!--End Mobile Menu-->

<!--Body Content-->
<div id="page-content">
    <!--Page Title-->
    <div class="page section-header text-center">
        <div class="page-title">
            <div class="wrapper">
                <!-- <h1 class="page-width">Innovation</h1> -->
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <!--End Page Title-->


    <div class="container-fluid my-3">
        <div class="row">
            <!--Sidebar-->
            <div class="col-12 col-sm-12 col-md-3 col-lg-2 sidebar filterbar">
                <div class="closeFilter d-block d-md-none d-lg-none"><i class="icon icon anm anm-times-l"></i></div>
                <div class="sidebar_tags">
                    <!--Categories-->
                    <?php
                    $this->load->view('catagory');
                    ?>
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
                                                        <img class="grid-view-item__image" src="/sports/assets/img/img/<?php echo $image; ?>" alt="/sports/assets/img/img/<?php echo $image; ?>" />
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
                    <div class="container">
                        <div class="row">

                            <h2>Bags Test</h2>


                        </div>

                    </div>
                    <div class="grid-products grid--view-items">
                        <div class="row">
                            <?php
                            foreach ($getbagsT as $keys) {
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
    <?php

    $this->load->view('Footer');
    ?>