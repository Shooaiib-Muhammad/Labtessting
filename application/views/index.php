<?php
// print_r($_SESSION['Products']);
// die;
$this->load->view('Header');
?>

<!--End Mobile Menu-->

<!--Body Content-->
<!-- Modal -->
<div id="page-content">
    <!--Home slider-->
    <div class="slideshow slideshow-wrapper pb-section sliderFull">
        <div class="home-slideshow">
            <div class="slide">
                <div class="blur-up lazyload bg-size">
                    <img class="blur-up lazyload bg-img" data-src="assets/images/slideshow-banners/belle-banner1.jpg" src="<?php echo base_url(); ?>assets/images/slideshow-banners/bg3.jpg" alt="Looking Forward to Quality" title="Looking Forward to Quality" />
                    <div class="slideshow__text-wrap slideshow__overlay classic bottom">
                        <div class="slideshow__text-content bottom">
                            <div class="wrap-caption center">
                                <h2 class="h1 mega-title slideshow__title">Keep your Goal High </h2>
                                <span class="mega-subtitle slideshow__subtitle">A high-tech facility with latest testing equipment to perform testing as per international standards and practices</span>
                                <a href="<?php echo base_url(); ?>AlltestPackage"> <span class="btn">Book Now</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide">
                <div class="blur-up lazyload bg-size">
                    <img class="blur-up lazyload bg-img" data-src="assets/images/slideshow-banners/belle-banner2.jpg" src="<?php echo base_url(); ?>assets/images/slideshow-banners/bg4.jpg" alt="Looking Forward to Quality" title="Looking Forward to Quality" />
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
                        <p>Our most popular packages</p>
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
                            <a style="display: none;" id='Name<?php echo $TestID; ?>'><?php echo $Name; ?></a>
                            <span class="price" style="display: none;" id='Price<?php echo $TestID; ?>'><?php echo $StandardPrice; ?></span>
                            <div class="col-6 col-sm-6 col-md-4 col-lg-3 item grid-view-item style2">
                                <div class="grid-view_image">
                                    <!-- start product image -->

                                    <a href="<?php echo base_url(); ?>ProductDetails/test/<?php echo $TestID; ?>" class="grid-view-item__link">
                                        <!-- image -->
                                        <img class="grid-view-item__image primary blur-up lazyload" height="280px" width="392px" data-src="/sports/assets/img/img/<?php echo  $image; ?>" src="/sports/assets/img/img/<?php echo  $image; ?>" alt="image" title="product">
                                        <!-- End image -->
                                        <!-- Hover image -->
                                        <img class="grid-view-item__image hover blur-up lazyload" height="280px" width="392px" id='Image<?php echo $TestID; ?>' data-src="/sports/assets/img/img/<?php echo  $image; ?>" src="/sports/assets/img/img/<?php echo  $image; ?>" alt="image" title="product">
                                        <!-- End hover image -->
                                        <!-- product label -->

                                        <!-- End product label -->
                                    </a>
                                    <!-- end product image -->
                                    <!--start product details -->
                                    <div class="product-details hoverDetails text-center mobile">
                                        <!-- product name -->
                                        <div class="product-name">
                                            <a><?php echo $Name; ?></a>
                                        </div>
                                        <!-- End product name -->
                                        <!-- product price -->
                                        <div class="product-price">

                                            <span>$</span><span class="price"> <?php echo $StandardPrice; ?></span>
                                        </div>
                                        <!-- End product price -->

                                        <!-- product button -->
                                        <div class="button-set">
                                            <a href="javascript:void(0)" title="Quick View" class="quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                                <i class="icon anm anm-search-plus-r"></i>
                                            </a>
                                            <!-- Start product button -->
                                            <?php
                                            if ($this->session->has_userdata('user_id')) {
                                            ?>
                                                <form class="variants add" action="#" method="post">
                                                    <button class="btn cartIcon btn-addto-cart Login AddToCartButtonPackage" id='<?php echo $TestID; ?>' type="button" tabindex="0" data-src="<?php echo $keys['Type']; ?>"><i class="icon anm anm-bag-l"></i></button>
                                                </form>
                                            <?php } else { ?>
                                                <form class="variants add" action="#" method="post">
                                                    <button class="btn cartIcon btn-addto-cart Login LoginAddToCartButtonPackage" id='<?php echo $TestID; ?>' type="button" tabindex="0" data-src="<?php echo $keys['Type']; ?>"><i class="icon anm anm-bag-l"></i></button>
                                                </form>
                                            <?php } ?>

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
    <div class="section logo-section">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="logo-bar">
                        <div class="logo-bar__item">
                            <img src="assets/images/logo/logo8.jpg" alt="" title="" />
                        </div>
                        <div class="logo-bar__item">
                            <img src="assets/images/logo/logo1.jpg" alt="" title="" />
                        </div>
                        <div class="logo-bar__item">
                            <img src="assets/images/logo/logo2.jpg" alt="" title="" />
                        </div>
                        <div class="logo-bar__item">
                            <img src="assets/images/logo/logo3.jpg" alt="" title="" />
                        </div>
                        <div class="logo-bar__item">
                            <img src="assets/images/logo/logo4.jpg" alt="" title="" />
                        </div>
                        <div class="logo-bar__item">
                            <img src="assets/images/logo/logo5.jpg" alt="" title="" />
                        </div>
                        <div class="logo-bar__item">
                            <img src="assets/images/logo/logo6.jpg" alt="" title="" />
                        </div>
                        <div class="logo-bar__item">
                            <img src="assets/images/logo/logo7.jpg" alt="" title="" />
                        </div>
                    </div>
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
                                                        <a href="<?php echo base_url(); ?>ProductDetails/test/<?php echo $TestID; ?>" tabindex="0">

                                                            <!-- image -->
                                                            <img class="primary blur-up lazyload" data-src="/sports/assets/img/img/<?php echo  $image; ?>" src="../sports/assets/img/img/<?php echo  $image; ?>" alt="image" title="product">
                                                            <!-- End image -->
                                                            <!-- Hover image -->
                                                            <img class="hover blur-up lazyload" id='Image<?php echo $TestID; ?>' data-src="/sports/assets/img/img/<?php echo  $image; ?>" src="../sports/assets/img/img/<?php echo  $image; ?>" alt="image" title="product">
                                                            <!-- End hover image -->
                                                            <!-- product label -->

                                                            <!-- End product label -->
                                                        </a>
                                                        <!-- end product image -->

                                                        <!-- countdown start -->

                                                        <!-- countdown end -->

                                                        <!-- Start product button -->
                                                        <?php
                                                        if ($this->session->has_userdata('user_id')) {
                                                        ?>
                                                            <form class="variants add" action="#" method="post">
                                                                <button class="btn btn-addto-cart AddToCartButton" type="button" tabindex="0" id='<?php echo $TestID; ?>' data-src="<?php echo $keys['Type']; ?>">Add To Cart</button>
                                                            </form>
                                                        <?php } else { ?>
                                                            <form class="variants add" action="#" method="post">
                                                                <button class="btn btn-addto-cart LoginAddToCartButton" type="button" tabindex="0" id='<?php echo $TestID; ?>' data-src="<?php echo $keys['Type']; ?>">Add To Cart</button>
                                                            </form>
                                                        <?php } ?>
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

                                                            <span>$</span> <span class="price" id='Price<?php echo $TestID; ?>'> <?php echo $StandardPrice ?></span>
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
                                                            <img class="hover blur-up lazyload" id='Image<?php echo $TestID; ?>' data-src="/sports/assets/img/img/<?php echo  $image; ?>" src="../sports/assets/img/img/<?php echo  $image; ?>" alt="image" title="product">
                                                            <!-- End hover image -->
                                                            <!-- product label -->

                                                            <!-- End product label -->
                                                        </a>
                                                        <!-- end product image -->

                                                        <!-- countdown start -->

                                                        <!-- countdown end -->

                                                        <!-- Start product button -->
                                                        <?php
                                                        if ($this->session->has_userdata('user_id')) {
                                                        ?>
                                                            <form class="variants add" action="#" method="post">
                                                                <button class="btn btn-addto-cart AddToCartButtonBags" type="button" tabindex="0" id='<?php echo $TestID; ?>' data-src="<?php echo $keys['Type']; ?>">Add To Cart</button>
                                                            </form>
                                                        <?php } else { ?>
                                                            <form class="variants add" action="#" method="post">
                                                                <button class="btn btn-addto-cart LoginAddToCartButtonBags" type="button" tabindex="0" id='<?php echo $TestID; ?>' data-src="<?php echo $keys['Type']; ?>">Add To Cart</button>
                                                            </form>
                                                        <?php } ?>
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
                                                            <a id='Name<?php echo $TestID; ?>'><?php echo $Name; ?>
                                                            </a>
                                                        </div>
                                                        <!-- End product name -->
                                                        <!-- product price -->
                                                        <div class="product-price">

                                                            <span>$</span> <span id='Price<?php echo $TestID; ?>' class="price"><?php echo $StandardPrice ?></span>
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
                                                            <img class="hover blur-up lazyload" id='Image<?php echo $TestID; ?>' data-src="/sports/assets/img/img/<?php echo  $image; ?>" src="../sports/assets/img/img/<?php echo  $image; ?>" alt="image" title="product">
                                                            <!-- End hover image -->
                                                            <!-- product label -->

                                                            <!-- End product label -->
                                                        </a>
                                                        <!-- end product image -->

                                                        <!-- countdown start -->

                                                        <!-- countdown end -->

                                                        <!-- Start product button -->
                                                        <?php
                                                        if ($this->session->has_userdata('user_id')) {
                                                        ?>
                                                            <form class="variants add" action="#" method="post">
                                                                <button class="btn btn-addto-cart AddToCartButtonMaterial" type="button" tabindex="0" id='<?php echo $TestID; ?>' data-src="<?php echo $keys['Type']; ?>" data-src="<?php echo $keys['Type']; ?>">Add To Cart</button>
                                                            </form>
                                                        <?php } else { ?>
                                                            <form class="variants add" action="#" method="post">
                                                                <button class="btn btn-addto-cart LoginAddToCartButtonMaterial" type="button" tabindex="0" id='<?php echo $TestID; ?>' data-src="<?php echo $keys['Type']; ?>" data-src="<?php echo $keys['Type']; ?>">Add To Cart</button>
                                                            </form>
                                                        <?php } ?>
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
                                                            <a id='Name<?php echo $TestID; ?>'><?php echo $Name ?></a>
                                                        </div>
                                                        <!-- End product name -->
                                                        <!-- product price -->
                                                        <div class="product-price">

                                                            <span>$</span> <span id='Price<?php echo $TestID; ?>' class="price"><?php echo $StandardPrice ?></span>
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
<input type="hidden" value="" id="NameValue" />
<input type="hidden" value="" id="priceValue" />
<input type="hidden" value="" id="imageValue" />
<input type="hidden" value="" id="TestValue" />
<input type="hidden" value="" id="TestType" />

<!--Collection Tab slider-->

<!--Collection Box slider-->

<!--End Collection Box slider-->

<!--Logo Slider-->

<!--End Logo Slider-->

<!--Featured Product-->
<?php

$this->load->view('Footer');
?>
<script>
    $('.AddToCartButton').click(function(e) {
        let name = $(`#Name${this.id}`).text()
        $(`#NameValue`).val(name)
        let price = $(`#Price${this.id}`).text()
        $(`#priceValue`).val(price)
        let image = $(`#Image${this.id}`).attr("data-src")
        $(`#imageValue`).val(image)
        let testId = this.id;
        $(`#TestValue`).val(testId)
        let type = $(this).attr("data-src");
        $(`#TestType`).val(type)
        console.log("Type", type)
        if (type == 'Balls') {
            $('#ballModal').modal('show');
        } else if (type == 'Bags') {
            $('#bagModal').modal('show');
        } else {
            $('#materialModal').modal('show');
        }
        localStorage.setItem('LoginStatus', true)
        // let url = '<?php echo base_url(); ?>ProductDetails/setCart';
        // $.post(url, {
        //         'Name': name,
        //         'Price': price,
        //         'ImageURL': image,
        //         'Quantity': 1,
        //         'TestId': this.id
        //     },
        //     function(data, status) {

        //         let htmlGet = data[1];
        //         let htmlGetModified = htmlGet.replace(/\\/g, '');
        //         $('#header-cart').html('');
        //         $('#CartCount').html('');
        //         $('#header-cart').html(htmlGetModified);
        //         $('#CartCount').html(data[2]);
        //         toastr.success(`Item has been added to cart. Kindly check it at top-right corner!`,`Cart Count: ${data[2]}`);
        // toastr.options.progressBar = true;
        // toastr.options.timeOut = 3000;
        //     })
    });

    $('.LoginAddToCartButton').click(function(e) {
        let name = $(`#Name${this.id}`).text()
        let price = $(`#Price${this.id}`).text()
        let image = $(`#Image${this.id}`).attr("data-src")
        let testId = this.id;

        $(`#NameValue`).val(name)
        $(`#priceValue`).val(price)
        $(`#imageValue`).val(image)
        $(`#TestValue`).val(testId)
        let type = $(this).attr("data-src");
        $(`#TestType`).val(type)
        console.log("Type", type)
        if (type == 'Balls') {
            $('#ballModal').modal('show');
        } else if (type == 'Bags') {
            $('#bagModal').modal('show');
        } else {
            $('#materialModal').modal('show');
        }
        localStorage.setItem('LoginStatus', false)
        // let url = '<?php echo base_url(); ?>ProductDetails/LoginsetCart';
        // let url2 = '<?php echo base_url(); ?>';

        // $.post(url, {
        //         'Name': name,
        //         'Price': price,
        //         'ImageURL': image,
        //         'Quantity': 1,
        //         'TestId': this.id
        //     },
        //     function(data, status) {

        //         window.location = `${url2}Login`
        //     })
    });

    $('#ballCartButton').click(function(e) {
        let name = $(`#NameValue`).val()
        let price = $(`#priceValue`).val()
        let image = $(`#imageValue`).val()
        let testId = $(`#TestValue`).val()
        let brand = $(`#brandBall`).val();
        let modalBall = $(`#modalBall`).val();
        let articleBall = $(`#articleBall`).val();
        let sizeBall = $(`#sizeBall`).val();
        let materialTypeBall = $(`#materialTypeBall`).val();
        let ballTypeBall = $(`#ballTypeBall`).val();
        let descriptionBall = $(`#descriptionBall`).val();
        let testType = $(`#TestType`).val()
        console.log("Login Status",typeof localStorage.getItem("LoginStatus"))
        if (localStorage.getItem("LoginStatus") == 'false') {
            let url = '<?php echo base_url(); ?>ProductDetails/LoginsetCartBall';
            let url2 = '<?php echo base_url(); ?>';

            $.post(url, {
                    'Name': name,
                    'Price': price,
                    'ImageURL': image,
                    'Quantity': 1,
                    'TestId': testId,
                    'brand':brand,
                    'modalBall':modalBall,
                    'articleBall':articleBall,
                    'sizeBall':sizeBall,
                    'materialTypeBall':materialTypeBall,
                    'ballTypeBall':ballTypeBall,
                    'descriptionBall':descriptionBall,
                    'TestType':testType
                },
                function(data, status) {

                    window.location = `${url2}Login`
                })
        } else {
            let url = '<?php echo base_url(); ?>ProductDetails/setCartBall';
            $.post(url, {
                    'Name': name,
                    'Price': price,
                    'ImageURL': image,
                    'Quantity': 1,
                    'TestId': testId,
                    'brand':brand,
                    'modalBall':modalBall,
                    'articleBall':articleBall,
                    'sizeBall':sizeBall,
                    'materialTypeBall':materialTypeBall,
                    'ballTypeBall':ballTypeBall,
                    'descriptionBall':descriptionBall,
                    'TestType':testType
                },
                function(data, status) {

                    let htmlGet = data[1];
                    let htmlGetModified = htmlGet.replace(/\\/g, '');
                    $('#header-cart').html('');
                    $('#CartCount').html('');
                    $('#header-cart').html(htmlGetModified);
                    $('#CartCount').html(data[2]);
                    toastr.success(`Item has been added to cart. Kindly check it at top-right corner!`, `Cart Count: ${data[2]}`);
                    toastr.options.progressBar = true;
                    toastr.options.timeOut = 3000;
                    $(".close").click()
                    $(`#brandBall`).val('');
                $(`#modalBall`).val('');
                $(`#articleBall`).val('');
                $(`#sizeBall`).val('');
                $(`#materialTypeBall`).val('');
                $(`#ballTypeBall`).val('');
                $(`#descriptionBall`).val('');
                })
        }

    });

    $('#tab2').on('click', ".AddToCartButtonBags", function(e) {
        let name = $(`#Name${this.id}`).text()
        let price = $(`#Price${this.id}`).text()
        console.log("Price Value", price)
        let image = $(`#Image${this.id}`).attr("data-src")
        let testId = this.id;
        $(`#NameValue`).val(name)
        $(`#priceValue`).val(price)
        $(`#imageValue`).val(image)
        $(`#TestValue`).val(testId)
    
        let type = $(this).attr("data-src");
        $(`#TestType`).val(type)
        if (type == 'Balls') {
            $('#ballModal').modal('show');
        } else if (type == 'Bags') {
            $('#bagModal').modal('show');
        } else {
            $('#materialModal').modal('show');
        }
        localStorage.setItem('LoginStatus', true)
        // let url = '<?php echo base_url(); ?>ProductDetails/setCart';
        // $.post(url, {
        //         'Name': name,
        //         'Price': price,
        //         'ImageURL': image,
        //         'Quantity': 1,
        //         'TestId': this.id
        //     },
        //     function(data, status) {
        //         let htmlGet = data[1];
        //         let htmlGetModified = htmlGet.replace(/\\/g, '');
        //         $('#header-cart').html('');
        //         $('#CartCount').html('');
        //         $('#header-cart').html(htmlGetModified);
        //         $('#CartCount').html(data[2]);
        //         toastr.success(`Item has been added to cart. Kindly check it at top-right corner!`,`Cart Count: ${data[2]}`);
        // toastr.options.progressBar = true;
        // toastr.options.timeOut = 3000;
        //     })
    });

    $('#tab2').on('click', ".LoginAddToCartButtonBags", function(e) {

        let name = $(`#Name${this.id}`).text()
        let price = $(`#Price${this.id}`).text()
        let image = $(`#Image${this.id}`).attr("data-src")
        let testId = this.id;
        $(`#NameValue`).val(name)
        $(`#priceValue`).val(price)
        $(`#imageValue`).val(image)
        $(`#TestValue`).val(testId)
        let type = $(this).attr("data-src");
        $(`#TestType`).val(type)
        console.log("Type", type)
        if (type == 'Balls') {
            $('#ballModal').modal('show');
        } else if (type == 'Bags') {
            $('#bagModal').modal('show');
        } else {
            $('#materialModal').modal('show');
        }
        localStorage.setItem('LoginStatus', false)
        // let url = '<?php echo base_url(); ?>ProductDetails/LoginsetCart';
        // let url2 = '<?php echo base_url(); ?>';
        // $.post(url, {
        //         'Name': name,
        //         'Price': price,
        //         'ImageURL': image,
        //         'Quantity': 1,
        //         'TestId': this.id
        //     },
        //     function(data, status) {

        //         window.location = `${url2}Login`
        //     })
    });

    $('#bagCartButton').click(function(e) {
        let name = $(`#NameValue`).val()
        let price = $(`#priceValue`).val()
        let image = $(`#imageValue`).val()
        let testId = $(`#TestValue`).val()
        console.log("Test Id",   testId)
        let brand = $(`#brandBag`).val();
        let modalBag = $(`#modalBag`).val();
        let articleBag = $(`#articleBag`).val();
        let itemTypeBag = $(`#itemTypeBag`).val();
        let CottingBag = $(`#CottingBag`).val();
        let colorBag = $(`#colorBag`).val();
        let bagTypeBag = $(`#bagTypeBag`).val();
        let descriptionBag = $(`#descriptionBag`).val();
        let testType = $(`#TestType`).val()
        console.log("Login Status",typeof localStorage.getItem("LoginStatus"))
        if (localStorage.getItem("LoginStatus") == 'false') {
            let url = '<?php echo base_url(); ?>ProductDetails/LoginsetCartBags';
            let url2 = '<?php echo base_url(); ?>';

            $.post(url, {
                    'Name': name,
                    'Price': price,
                    'ImageURL': image,
                    'Quantity': 1,
                    'TestId': testId,
                    'brand':brand,
                    'modalBag':modalBag,
                    'articleBag':articleBag,
                    'itemTypeBag':itemTypeBag,
                    'CottingBag':CottingBag,
                    'colorBag':colorBag,
                    'descriptionBag':descriptionBag,
                    'bagTypeBag':bagTypeBag,
                    'TestType':testType
                },
                function(data, status) {

                    window.location = `${url2}Login`
                })
        } else {
            let url = '<?php echo base_url(); ?>ProductDetails/setCartBags';
            $.post(url, {
                    'Name': name,
                    'Price': price,
                    'ImageURL': image,
                    'Quantity': 1,
                    'TestId': testId,
                    'brand':brand,
                    'modalBag':modalBag,
                    'articleBag':articleBag,
                    'itemTypeBag':itemTypeBag,
                    'CottingBag':CottingBag,
                    'colorBag':colorBag,
                    'descriptionBag':descriptionBag,
                    'bagTypeBag':bagTypeBag,
                    'TestType':testType
                },
                function(data, status) {

                    let htmlGet = data[1];
                    let htmlGetModified = htmlGet.replace(/\\/g, '');
                    $('#header-cart').html('');
                    $('#CartCount').html('');
                    $('#header-cart').html(htmlGetModified);
                    $('#CartCount').html(data[2]);
                    toastr.success(`Item has been added to cart. Kindly check it at top-right corner!`, `Cart Count: ${data[2]}`);
                    toastr.options.progressBar = true;
                    toastr.options.timeOut = 3000;
                    $(".close").click()
                    $(`#brandBag`).val('');
                    $(`#modalBag`).val('');
                    $(`#articleBag`).val('');
                    $(`#itemTypeBag`).val('');
                    $(`#CottingBag`).val('Coating');
                    $(`#colorBag`).val('');
                    $(`#bagTypeBag`).val('');
                    $(`#descriptionBag`).val('');
                })
        }

    });


    $('#tab3').on('click', ".AddToCartButtonMaterial", function(e) {
        let name = $(`#Name${this.id}`).text()
        let price = $(`#Price${this.id}`).text()
        let image = $(`#Image${this.id}`).attr("data-src")
        let testId = this.id;
        $(`#NameValue`).val(name)
        $(`#priceValue`).val(price)
        $(`#imageValue`).val(image)
        $(`#TestValue`).val(testId)
        let type = $(this).attr("data-src");
        $(`#TestType`).val(type)
        console.log("Type", type)
        if (type == 'Balls') {
            $('#ballModal').modal('show');
        } else if (type == 'Bags') {
            $('#bagModal').modal('show');
        } else {
            $('#materialModal').modal('show');
        }
        localStorage.setItem('LoginStatus', true)
        // let url = '<?php echo base_url(); ?>ProductDetails/setCart';
        // $.post(url, {
        //         'Name': name,
        //         'Price': price,
        //         'ImageURL': image,
        //         'Quantity': 1,
        //         'TestId': this.id
        //     },
        //     function(data, status) {
        //         let htmlGet = data[1];
        //         let htmlGetModified = htmlGet.replace(/\\/g, '');
        //         $('#header-cart').html('');
        //         $('#CartCount').html('');
        //         $('#header-cart').html(htmlGetModified);
        //         $('#CartCount').html(data[2]);
        //         toastr.success(`Item has been added to cart. Kindly check it at top-right corner!`,`Cart Count: ${data[2]}`);
        // toastr.options.progressBar = true;
        // toastr.options.timeOut = 3000;
        //     })
    });

    $('#tab3').on('click', ".LoginAddToCartButtonMaterial", function(e) {
        let name = $(`#Name${this.id}`).text()
        let price = $(`#Price${this.id}`).text()
        let image = $(`#Image${this.id}`).attr("data-src")
        let testId = this.id;
        $(`#NameValue`).val(name)
        $(`#priceValue`).val(price)
        $(`#imageValue`).val(image)
        $(`#TestValue`).val(testId)
        let type = $(this).attr("data-src");
        $(`#TestType`).val(type)
        console.log("Type", type)
        if (type == 'Balls') {
            $('#ballModal').modal('show');
        } else if (type == 'Bags') {
            $('#bagModal').modal('show');
        } else {
            $('#materialModal').modal('show');
        }
        localStorage.setItem('LoginStatus', false)
        // let url = '<?php echo base_url(); ?>ProductDetails/LoginsetCart';
        // let url2 = '<?php echo base_url(); ?>';
        // $.post(url, {
        //         'Name': name,
        //         'Price': price,
        //         'ImageURL': image,
        //         'Quantity': 1,
        //         'TestId': this.id
        //     },
        //     function(data, status) {

        //         window.location = `${url2}Login`
        //     })
    });

    $('#materialCartButton').click(function(e) {
        let name = $(`#NameValue`).val()
        let price = $(`#priceValue`).val()
        let image = $(`#imageValue`).val()
        let testId = $(`#TestValue`).val()
        let brandMaterial = $(`#brandMaterial`).val();
       
        let itemTypeMaterial = $(`#itemTypeMaterial`).val();
        let CottingMaterial = $(`#CottingMaterial`).val();
        let colorMaterial = $(`#colorMaterial`).val();
        let descriptionMaterial = $(`#descriptionMaterial`).val();
        let testType = $(`#TestType`).val()
        console.log("Login Status",typeof localStorage.getItem("LoginStatus"))
        if (localStorage.getItem("LoginStatus") == 'false') {
            let url = '<?php echo base_url(); ?>ProductDetails/LoginsetCartMaterial';
            let url2 = '<?php echo base_url(); ?>';

            $.post(url, {
                    'Name': name,
                    'Price': price,
                    'ImageURL': image,
                    'Quantity': 1,
                    'TestId': testId,
                    'brandMaterial':brandMaterial,
                    'itemTypeMaterial':itemTypeMaterial,
                    'CottingMaterial':CottingMaterial,
                    'colorMaterial':colorMaterial,
                    'descriptionMaterial':descriptionMaterial,
                    'TestType':testType
                },
                function(data, status) {

                    window.location = `${url2}Login`
                })
        } else {
            let url = '<?php echo base_url(); ?>ProductDetails/setCartMaterial';
            $.post(url, {
                    'Name': name,
                    'Price': price,
                    'ImageURL': image,
                    'Quantity': 1,
                    'TestId': testId,
                    'brandMaterial':brandMaterial,
                    'itemTypeMaterial':itemTypeMaterial,
                    'CottingMaterial':CottingMaterial,
                    'colorMaterial':colorMaterial,
                    'descriptionMaterial':descriptionMaterial,
                    'TestType':testType
                },
                function(data, status) {

                    let htmlGet = data[1];
                    let htmlGetModified = htmlGet.replace(/\\/g, '');
                    $('#header-cart').html('');
                    $('#CartCount').html('');
                    $('#header-cart').html(htmlGetModified);
                    $('#CartCount').html(data[2]);
                    toastr.success(`Item has been added to cart. Kindly check it at top-right corner!`, `Cart Count: ${data[2]}`);
                    toastr.options.progressBar = true;
                    toastr.options.timeOut = 3000;
                    $(".close").click()
                    $(`#brandMaterial`).val('');
                    $(`#itemTypeMaterial`).val('');
                    $(`#CottingMaterial`).val('Coating');
                    $(`#colorMaterial`).val('');
                    $(`#descriptionMaterial`).val('');
                })
        }

    });

    $('.AddToCartButtonPackage').click(function(e) {
        let name = $(`#Name${this.id}`).text()
        let price = $(`#Price${this.id}`).text()
        let image = $(`#Image${this.id}`).attr("data-src")
        let testId = this.id;
        $(`#NameValue`).val(name)
        $(`#priceValue`).val(price)
        $(`#imageValue`).val(image)
        $(`#TestValue`).val(testId)
        let type = $(this).attr("data-src");
        $(`#TestType`).val(type)
        console.log("Type", type)
        if (type == 'Balls') {
            $('#ballModal').modal('show');
        } else if (type == 'Bags') {
            $('#bagModal').modal('show');
        } else {
            $('#materialModal').modal('show');
        }
        localStorage.setItem('LoginStatus', true)
        // let url = '<?php echo base_url(); ?>ProductDetails/setCart';
        // $.post(url, {
        //         'Name': name,
        //         'Price': price,
        //         'ImageURL': image,
        //         'Quantity': 1,
        //         'TestId': this.id
        //     },
        //     function(data, status) {
        //         let htmlGet = data[1];
        //         let htmlGetModified = htmlGet.replace(/\\/g, '');
        //         $('#header-cart').html('');
        //         $('#CartCount').html('');
        //         $('#header-cart').html(htmlGetModified);
        //         $('#CartCount').html(data[2]);
        //         toastr.success(`Item has been added to cart. Kindly check it at top-right corner!`, `Cart Count: ${data[2]}`);
        //         toastr.options.progressBar = true;
        //         toastr.options.timeOut = 3000;
        //     })
    });

    $('.LoginAddToCartButtonPackage').click(function(e) {
        let name = $(`#Name${this.id}`).text()
        let price = $(`#Price${this.id}`).text()
        let image = $(`#Image${this.id}`).attr("data-src")
        let testId = this.id;
        $(`#NameValue`).val(name)
        $(`#priceValue`).val(price)
        $(`#imageValue`).val(image)
        $(`#TestValue`).val(testId)
        let type = $(this).attr("data-src");
        $(`#TestType`).val(type)
        console.log("Type", type)
        if (type == 'Balls') {
            $('#ballModal').modal('show');
        } else if (type == 'Bags') {
            $('#bagModal').modal('show');
        } else {
            $('#materialModal').modal('show');
        }
        localStorage.setItem('LoginStatus', false)
        // let url = '<?php echo base_url(); ?>ProductDetails/LoginsetCart';
        // let url2 = '<?php echo base_url(); ?>';
        // $.post(url, {
        //         'Name': name,
        //         'Price': price,
        //         'ImageURL': image,
        //         'Quantity': 1,
        //         'TestId': this.id
        //     },
        //     function(data, status) {

        //         window.location = `${url2}Login`
        //     })
    });
</script>
<!--End Featured Product-->

<!--Latest Blog-->

<!--End Latest Blog-->

<!--Store Feature-->

<!--End Store Feature-->

<!--End Body Content-->

<!--Footer-->

<!--End Footer-->
<!--Scoll Top-->
<!-- End Newsletter Popup -->