<?php
$this->load->view('Header');
?>

<!--End Mobile Menu-->

<!--Body Content-->
<div id="page-content">
    <!--Home slider-->
    <div class="slideshow slideshow-wrapper pb-section sliderFull">
        <div class="home-slideshow">
            <div class="slide">
                <div class="blur-up lazyload bg-size">
                    <img class="blur-up lazyload bg-img" data-src="assets/images/slideshow-banners/belle-banner1.jpg" src="assets/images/slideshow-banners/bg4.jpg" alt="Looking Forward to Quality" title="Looking Forward to Quality" />
                    <div class="slideshow__text-wrap slideshow__overlay classic bottom">
                        <div class="slideshow__text-content bottom">
                            <div class="wrap-caption center">
                                <h2 class="h1 mega-title slideshow__title">Keep Your Goal High </h2>
                                <span class="mega-subtitle slideshow__subtitle">A high-tech facility with latest testing equipment to perform testing as per international standards and practices</span>
                                <a href="<?php echo base_url(); ?>AlltestPackage"> <span class="btn">Book Now</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide">
                <div class="blur-up lazyload bg-size">
                    <img class="blur-up lazyload bg-img" data-src="assets/images/slideshow-banners/belle-banner2.jpg" src="assets/images/slideshow-banners/bg3.jpg" alt="Looking Forward to Quality" title="Looking Forward to Quality" />
                    <div class="slideshow__text-wrap slideshow__overlay classic bottom">
                        <div class="slideshow__text-content bottom">
                            <div class="wrap-caption center">
                                <h2 class="h1 mega-title slideshow__title">Looking Forward to Quality</h2>
                                <span class="mega-subtitle slideshow__subtitle">Forward Sports QA lab is the first ever accredited lab around the globe who can perform finish good test of soccer balls. </span>
                                <a href="<?php echo base_url(); ?>AlltestPackage"> <span class="btn">Book Now</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Home slider-->
    <!--Collection Tab slider-->
    <div class="product-rows section">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="section-header text-center">
                        <h2 class="h2">Featured packages</h2>
                        <p>Our Most popular packages</p>
                    </div>
                </div>
            </div>
            <div class="grid-products">
                <div class="row">
                    <?php
                    //print_r($getTop6);
                    foreach ($getTop6 as $keys) {
                        if ($keys['TestType'] == 'Package') {
                            $image = $keys['Image'];
                            $Name = $keys['Name'];
                            $StandardPrice = $keys['StandardPrice'];
                            $TestID = $keys['TestID'];
                    ?>
                            <div class="col-6 col-sm-6 col-md-4 col-lg-3 item grid-view-item style2">
                                <div class="grid-view_image">
                                    <!-- start product image -->
                                    <a href="<?php echo base_url(); ?>ProductDetails/test/<?php echo $TestID; ?>" class="grid-view-item__link">
                                        <!-- image -->
                                        <img class="grid-view-item__image primary blur-up lazyload" data-src="/sports/assets/img/img/<?php echo  $image; ?>" src="/sports/assets/img/img/<?php echo  $image; ?>" alt="image" width="100%" height="70%" title="product">
                                        <!-- End image -->
                                        <!-- Hover image -->
                                        <img class="grid-view-item__image hover blur-up lazyload" width="100%" height="70%" data-src="/sports/assets/img/img/<?php echo  $image; ?>" src="/sports/assets/img/img/<?php echo  $image; ?>" alt="image" title="product">
                                        <!-- End hover image -->
                                        <!-- product label -->

                                        <!-- End product label -->
                                    </a>
                                    <!-- end product image -->
                                    <!--start product details -->
                                    <div class="product-details hoverDetails text-center mobile">
                                        <!-- product name -->
                                        <div class="product-name">
                                            <a href="<?php echo base_url(); ?>ProductDetails/test/<?php echo $TestID; ?>"><?php echo $Name; ?></a>
                                        </div>
                                        <!-- End product name -->
                                        <!-- product price -->
                                        <div class="product-price">

                                            <span class="price"> $ <?php echo $StandardPrice; ?></span>
                                        </div>
                                        <!-- End product price -->

                                        <!-- product button -->
                                        <div class="button-set">
                                            <a href="javascript:void(0)" title="Quick View" class="quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                                <i class="icon anm anm-search-plus-r"></i>
                                            </a>
                                            <!-- Start product button -->
                                            <form class="variants add" action="#" onclick="window.location.href='cart.html'" method="post">
                                                <button class="btn cartIcon btn-addto-cart" type="button" tabindex="0"><i class="icon anm anm-bag-l"></i></button>
                                            </form>
                                            <div class="wishlist-btn">
                                                <a class="wishlist add-to-wishlist" href="wishlist.html">
                                                    <i class="icon anm anm-heart-l"></i>
                                                </a>
                                            </div>
                                            <div class="compare-btn">
                                                <a class="compare add-to-compare" href="compare.html" title="Add to Compare">
                                                    <i class="icon anm anm-random-r"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <!-- end product button -->
                                    </div>
                                    <!-- Variant -->

                                    <!-- End Variant -->
                                    <!-- End product details -->
                                </div>
                            </div>
                    <?php

                        }
                    }
                    ?>





                </div>
            </div>
        </div>
    </div>
    <div class="tab-slider-product section">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="section-header text-center">
                        <h2 class="h2">FEATURED TEST</h2>
                        <p>Browse the huge variety of Test</p>
                    </div>
                    <div class="tabs-listing">
                        <ul class="tabs clearfix">
                            <li class="active" rel="tab1">Balls</li>
                            <li rel="tab2">Bags</li>
                            <li rel="tab3">Raw Material</li>
                        </ul>
                        <div class="tab_container">
                            <div id="tab1" class="tab_content grid-products">
                                <div class="productSlider">
                                    <?php
                                    //print_r($getTop6);
                                    foreach ($getTop6 as $keys) {
                                        if ($keys['TestType'] == 'Test') {
                                            if ($keys['Type'] == 'Balls') {
                                                $Name = $keys['Name'];
                                                $StandardPrice = $keys['StandardPrice'];
                                                $image = $keys['Image'];
                                                //echo $image;
                                                $TestID = $keys['TestID'];
                                    ?>


                                                <div class="col-12 item">
                                                    <!-- start product image -->

                                                    <div class="product-image">
                                                        <!-- start product image -->
                                                        <a href="<?php echo base_url(); ?>ProductDetails/test/<?php echo $TestID; ?>">
                                                            <!-- image -->
                                                            <img class="primary blur-up lazyload" data-src="/sports/assets/img/img/<?php echo  $image; ?>" src="../sportsassets/img/img/<?php echo  $image; ?>" alt="image" title="product">
                                                            <!-- End image -->
                                                            <!-- Hover image -->
                                                            <img class="hover blur-up lazyload" id='Image<?php echo $TestID; ?>' data-src="/sports/assets/img/img/<?php echo  $image; ?>" src="../sportsassets/img/img/<?php echo  $image; ?>" alt="image" title="product">
                                                            <!-- End hover image -->
                                                            <!-- product label -->

                                                            <!-- End product label -->
                                                        </a>
                                                        <!-- end product image -->

                                                        <!-- countdown start -->

                                                        <!-- countdown end -->

                                                        <!-- Start product button -->
                                                        <form class="variants add" action="#" method="post">
                                                            <button class="btn btn-addto-cart AddToCartButton" type="button" tabindex="0" id='<?php echo $TestID; ?>'>Add To Cart</button>
                                                        </form>
                                                        <div class="button-set">
                                                            <a href="javascript:void(0)" title="Quick View" class="quick-view-popup quick-view" data-toggle="modal" data-target="<?php echo base_url(); ?>ProductDetails/test/<?php echo $TestID; ?>">
                                                                <i class="icon anm anm-search-plus-r"></i>
                                                            </a>

                                                        </div>
                                                        <!-- end product button -->
                                                    </div>


                                                    <!-- end product image -->
                                                    <!--start product details -->
                                                    <div class="product-details text-center">
                                                        <!-- product name -->
                                                        <div class="product-name">
                                                            <a id='Name<?php echo $TestID; ?>'><?php echo $Name ?></a>


                                                        </div>
                                                        <!-- End product name -->
                                                        <!-- product price -->
                                                        <div class="product-price">

                                                            <span class="price" id='Price<?php echo $TestID; ?>'> $ <?php echo $StandardPrice ?></span>
                                                        </div>
                                                        <!-- End product price -->


                                                        <!-- Variant -->

                                                        <!-- End Variant -->
                                                    </div>
                                                </div>

                                                <!-- End product details -->






                                    <?php
                                            }
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                            <div id="tab2" class="tab_content grid-products">

                                <div class="productSlider">
                                    <?php
                                    foreach ($getTop6 as $keys) {
                                        if ($keys['TestType'] == 'Test') {
                                            if ($keys['Type'] == 'Bags') {
                                                $Name = $keys['Name'];
                                                $StandardPrice = $keys['StandardPrice'];
                                                $image = $keys['Image'];
                                                $TestID = $keys['TestID']
                                    ?>

                                                <div class="col-12 item">
                                                    <!-- start product image -->

                                                    <div class="product-image">
                                                        <!-- start product image -->
                                                        <a href="<?php echo base_url(); ?>ProductDetails/test/<?php echo $TestID; ?>">
                                                            <!-- image -->
                                                            <img class="primary blur-up lazyload" data-src="/sports/assets/img/img/<?php echo  $image; ?>" src="../sports/assets/img/img/<?php echo  $image; ?>" alt="image" title="product">
                                                            <!-- End image -->
                                                            <!-- Hover image -->
                                                            <img class="hover blur-up lazyload" data-src="/sports/assets/img/img/<?php echo  $image; ?>" src="../sports/assets/img/img/<?php echo  $image; ?>" alt="image" title="product">
                                                            <!-- End hover image -->
                                                            <!-- product label -->

                                                            <!-- End product label -->
                                                        </a>
                                                        <!-- end product image -->

                                                        <!-- countdown start -->

                                                        <!-- countdown end -->

                                                        <!-- Start product button -->
                                                        <form class="variants add" action="#" onclick="window.location.href='cart.html'" method="post">
                                                            <button class="btn btn-addto-cart" type="button" tabindex="0">Add To Cart</button>
                                                        </form>
                                                        <div class="button-set">
                                                            <a href="javascript:void(0)" title="Quick View" class="quick-view-popup quick-view" data-toggle="modal" data-target="<?php echo base_url(); ?>ProductDetails/test/<?php echo $TestID; ?>">
                                                                <i class="icon anm anm-search-plus-r"></i>
                                                            </a>

                                                        </div>
                                                        <!-- end product button -->
                                                    </div>


                                                    <!-- end product image -->
                                                    <!--start product details -->
                                                    <div class="product-details text-center">
                                                        <!-- product name -->
                                                        <div class="product-name">
                                                            <a href="short-description.html"><?php echo $Name; ?>
                                                            </a>
                                                        </div>
                                                        <!-- End product name -->
                                                        <!-- product price -->
                                                        <div class="product-price">

                                                            <span class="price"> $ <?php echo $StandardPrice ?></span>
                                                        </div>
                                                        <!-- End product price -->


                                                        <!-- Variant -->

                                                        <!-- End Variant -->
                                                    </div>
                                                </div>

                                                <!-- End product details -->






                                    <?php
                                            }
                                        }
                                    }
                                    ?>


                                </div>

                            </div>
                            <div id="tab3" class="tab_content grid-products">
                                <div class="productSlider">





                                    <?php
                                    //print_r($getTop6);
                                    foreach ($getTop6 as $keys) {
                                        if ($keys['TestType'] == 'Test') {
                                            if ($keys['Type'] == 'Raw Material') {
                                                $Name = $keys['Name'];
                                                $StandardPrice = $keys['StandardPrice'];
                                                $image = $keys['Image'];
                                                $TestID = $keys['TestID'];
                                    ?>


                                                <div class="col-12 item">
                                                    <!-- start product image -->

                                                    <div class="product-image">
                                                        <!-- start product image -->
                                                        <a href="<?php echo base_url(); ?>ProductDetails/test/<?php echo $TestID; ?>">
                                                            <!-- image -->
                                                            <img class="primary blur-up lazyload" data-src="/sports/assets/img/img/<?php echo  $image; ?>" src="../sports/assets/img/img/<?php echo  $image; ?>" alt="image" title="product">
                                                            <!-- End image -->
                                                            <!-- Hover image -->
                                                            <img class="hover blur-up lazyload" data-src="/sports/assets/img/img/<?php echo  $image; ?>" src="../sports/assets/img/img/<?php echo  $image; ?>" alt="image" title="product">
                                                            <!-- End hover image -->
                                                            <!-- product label -->

                                                            <!-- End product label -->
                                                        </a>
                                                        <!-- end product image -->

                                                        <!-- countdown start -->

                                                        <!-- countdown end -->

                                                        <!-- Start product button -->
                                                        <form class="variants add" action="#" onclick="window.location.href='cart.html'" method="post">
                                                            <button class="btn btn-addto-cart" type="button" tabindex="0">Add To Cart</button>
                                                        </form>
                                                        <div class="button-set">
                                                            <a href="javascript:void(0)" title="Quick View" class="quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                                                <i class="icon anm anm-search-plus-r"></i>
                                                            </a>
                                                            <div class="wishlist-btn">
                                                                <a class="wishlist add-to-wishlist" href="wishlist.html">
                                                                    <i class="icon anm anm-heart-l"></i>
                                                                </a>
                                                            </div>
                                                            <div class="compare-btn">
                                                                <a class="compare add-to-compare" href="compare.html" title="Add to Compare">
                                                                    <i class="icon anm anm-random-r"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <!-- end product button -->
                                                    </div>


                                                    <!-- end product image -->
                                                    <!--start product details -->
                                                    <div class="product-details text-center">
                                                        <!-- product name -->
                                                        <div class="product-name">
                                                            <a href="short-description.html"><?php echo $Name ?></a>
                                                        </div>
                                                        <!-- End product name -->
                                                        <!-- product price -->
                                                        <div class="product-price">

                                                            <span class="price"> $ <?php echo $StandardPrice ?></span>
                                                        </div>
                                                        <!-- End product price -->


                                                        <!-- Variant -->

                                                        <!-- End Variant -->
                                                    </div>
                                                </div>

                                                <!-- End product details -->






                                    <?php
                                            }
                                        }
                                    }
                                    ?>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Collection Tab slider-->

<!--Collection Box slider-->

<!--End Collection Box slider-->

<!--Logo Slider-->
<div class="section logo-section">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <div class="logo-bar">
                    <div class="logo-bar__item">
                        <img src="assets/images/logo/brandlogo1.png" alt="" title="" />
                    </div>
                    <div class="logo-bar__item">
                        <img src="assets/images/logo/brandlogo2.png" alt="" title="" />
                    </div>
                    <div class="logo-bar__item">
                        <img src="assets/images/logo/brandlogo3.png" alt="" title="" />
                    </div>
                    <div class="logo-bar__item">
                        <img src="assets/images/logo/brandlogo4.png" alt="" title="" />
                    </div>
                    <div class="logo-bar__item">
                        <img src="assets/images/logo/brandlogo5.png" alt="" title="" />
                    </div>
                    <div class="logo-bar__item">
                        <img src="assets/images/logo/brandlogo6.png" alt="" title="" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--End Logo Slider-->

<!--Featured Product-->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $('.AddToCartButton').click(function(e) {
        let name = $(`#Name${this.id}`).text()
        let price = $(`#Price${this.id}`).text()
        let image = $(`#Image${this.id}`).attr("data-src")

        let url = '<?php echo base_url(); ?>ProductDetails/setCart';
        $.post(url, {
                'Name': name,
                'Price': price,
                'ImageURL': image
            },
            function(data, status) {
                console.log("Data", data);
            })
    });
</script>
<!--End Featured Product-->

<!--Latest Blog-->

<!--End Latest Blog-->

<!--Store Feature-->

<!--End Store Feature-->
</div>
<!--End Body Content-->

<!--Footer-->

<!--End Footer-->
<!--Scoll Top-->
<!-- End Newsletter Popup -->
<?php

$this->load->view('Footer');
?>