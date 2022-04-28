<?php
// print_r($getPrddetails);
// die;
$this->load->view('Header');
?>
<!--End Header-->
<!--Mobile Menu-->
<!--End Header-->
<!--Mobile Menu-->

<!--End Mobile Menu-->

<!--Body Content-->
<?php
$name = $getPrddetails[0]['Name'];
$sPrice = $getPrddetails[0]['StandardPrice'];
$StandardDesc = $getPrddetails[0]['StandardDesc'];
$StandardDays = $getPrddetails[0]['SDays'];

$premiumPrice = $getPrddetails[0]['PremimumPrice'];
$premiumDesc = $getPrddetails[0]['PermimumDesc'];
$premiumDays = $getPrddetails[0]['PDays'];
$Image = $getPrddetails[0]['Image'];
$Method = $getPrddetails[0]['Method'];
$Sample_Quantity = $getPrddetails[0]['Sample_Quantity'];
$TestID = $getPrddetails[0]['TestID'];
$Purpose = $getPrddetails[0]['Purpose'];

// echo $Image;

?>
<input class="cart__qty-input" type="text" style="display: none;" id="TestId" name="updates[]" value="<?php echo $TestID ?>" pattern="[0-9]*">
<input class="cart__qty-input" type="text" style="display: none;" id="OriginalPrice" name="updates[]" value="<?php echo $sPrice; ?>" pattern="[0-9]*">

<div id="page-content">
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
    <!--MainContent-->
    <div id="MainContent" class="main-content" role="main">
        <!--Breadcrumb-->
        <!-- <div class="bredcrumbWrap">
            <div class="container breadcrumbs">
                <a href="#" title="Back to the home page">Home</a><span aria-hidden="true">›</span><span><?php echo $name; ?></span>
            </div>
        </div> -->
        <!--End Breadcrumb-->

        <div id="ProductSection-product-template" class="product-template__container prstyle2 container">
            <!--#ProductSection-product-template-->
            <div class="product-single product-single-1">
                <?php

                // print_r($getPrddetails);
                ?>
                <div class="row">

                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">

                        <div class="product-details-img product-single__photos bottom">
                            <div class="zoompro-wrap product-zoom-right pl-20">
                                <div class="zoompro-span">
                                    <img class="blur-up lazyload zoompro" data-zoom-image="/sports/assets/img/img/<?php echo  $Image; ?>" alt="" src="/sports/assets/img/img/<?php echo  $Image; ?>" />
                                </div>

                                <!-- <div class="product-buttons">
                                        <a href="https://www.youtube.com/watch?v=93A2jOW5Mog" class="btn popup-video" title="View Video"><i class="icon anm anm-play-r" aria-hidden="true"></i></a>
                                        <a href="#" class="btn prlightbox" title="Zoom"><i class="icon anm anm-expand-l-arrows" aria-hidden="true"></i></a>
                                    </div> -->
                            </div>
                            <div class="product-thumb product-thumb-1">
                                <div id="gallery" class="product-dec-slider-1 product-tab-left">
                                    <a data-image="/sports/assets/img/img/<?php echo  $Image; ?>" data-zoom-image="/sports/assets/img/img/<?php echo  $Image; ?>" class="slick-slide slick-cloned" data-slick-index="-4" aria-hidden="true" tabindex="-1">
                                        <img class="blur-up lazyload" id='Image<?php echo $TestID; ?>' src="/sports/assets/img/img/<?php echo  $Image; ?>" alt="" />
                                    </a>
                                    <a data-image="/sports/assets/img/img/<?php echo  $Image; ?>" data-zoom-image="/sports/assets/img/img/<?php echo  $Image; ?>" class="slick-slide slick-cloned" data-slick-index="-3" aria-hidden="true" tabindex="-1">
                                        <img class="blur-up lazyload" src="/sports/assets/img/img/<?php echo  $Image; ?>" alt="" />
                                    </a>
                                    <a data-image="/sports/assets/img/img/<?php echo  $Image; ?>" data-zoom-image="/sports/assets/img/img/<?php echo  $Image; ?>" class="slick-slide slick-cloned" data-slick-index="-2" aria-hidden="true" tabindex="-1">
                                        <img class="blur-up lazyload" src="/sports/assets/img/img/<?php echo  $Image; ?>" alt="" />
                                    </a>

                                </div>
                            </div>
                            <div class="lightboximages">
                                <a href="sports/assets/img/img/<?php echo  $Image; ?>" data-size="1462x2048"></a>
                                <a href="sports/assets/img/img/<?php echo  $Image; ?>" data-size="1462x2048"></a>
                                <a href="sports/assets/img/img/<?php echo  $Image; ?>" data-size="1462x2048"></a>

                            </div>

                        </div>
                        <!--Product Feature-->
                        <div class="prFeatures">

                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-6 feature">
                                    <img src="<?php echo base_url(); ?>assets/images/credit-card.png" alt="Safe Payment" title="Safe Payment" />
                                    <div class="details">
                                        <h3>Safe Payment</h3>Pay with the world's most payment methods.
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-12 col-lg-6 feature">
                                    <img src="<?php echo base_url(); ?>assets/images/shield.png" alt="Confidence" title="Confidence" />
                                    <div class="details">
                                        <h3>Confidence</h3>Protection covers your purchase and personal data.
                                    </div>
                                </div>

                                <div class="col-12 col-sm-12 col-md-12 col-lg-6 feature">
                                    <img src="<?php echo base_url(); ?>assets/images/phone-call.png" alt="Hotline" title="Hotline" />
                                    <div class="details">
                                        <h3>Hotline</h3>Talk to help line for your question on +052-3571801
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Product Feature-->
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="row">
                            <div class="col-md-3">
                                <input type="radio" id="html" class="form-check-input" name="fav_language" value="Standard" checked onclick="standardSet('<?php echo $TestID; ?>')">
                                <label for="html" class="form-check-label">Standard</label><br>
                            </div>
                            <div class="col-md-3">
                                <input type="radio" id="css" name="fav_language" class="form-check-input" value="Urgent" class="ml-4" onclick="premiumSet('<?php echo $TestID; ?>')">
                                <label for="css" class="form-check-label">Premium</label><br>
                            </div>
                        </div>
                        <br>
                        <div class="product-single__meta">
                            <h1 class="product-single__title" id='Name<?php echo $TestID; ?>'><?php echo $name; ?></h1>
                            <!-- <div class="product-nav clearfix">
                                <a href="#" class="next" title="Next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
                            </div> -->

                            <p class="product-single__price product-single__price-product-template">

                                <span class="product-price__price product-price__price-product-template product-price__sale product-price__sale--single">
                                    <span id="ProductPrice-product-template">Duration : <span class="money" id='Days<?php echo $TestID; ?>'> <?php echo $StandardDays ?></span></span> | <span style="color:black;font-weight:normal; font-size:15px;">Sample Quantity</span>
                                    <span id="ProductPrice-product-template"> <span class="money" id='sample<?php echo $TestID; ?>' style="color:black;font-weight:normal;font-size:15px;"> <?php echo $Sample_Quantity; ?></span></span><br>
                                    <span id="ProductPrice-product-template">$<span class="money" id='Price<?php echo $TestID; ?>'> <?php echo $sPrice ?></span></span>
                                </span>
                            </p>
                            <div class="product-single__description rte">
                                <p> Method: <?php echo $Method ?></p>
                                <span>Purpose:</span>
                                <p id='desc<?php echo $TestID; ?>'> <?php echo $Purpose ?></p>

                                <?php

                                if ($getpkgtest) {

                                ?>
                                    <table class="product-single">
                                        <tr>
                                            <th style="background-color:black; color:azure; text-align:center; padding:5px" colspan="3">

                                                NO Of Test Included
                                            </th>
                                        </tr>
                                        <tr>
                                            <th>Test Name</th>
                                            <th>Method</th>

                                        </tr>
                                        <?php foreach ($getpkgtest as $values) {

                                        ?>


                                            <tr>
                                                <td><?php echo $values['Name'] ?></td>
                                                <td><?php echo $values['Method'] ?></td>

                                            </tr>
                                        <?php
                                        }

                                        ?>
                                    </table>
                                <?php
                                } else {
                                    //echo "Downloading";
                                }
                                ?>
                            </div>
                            <form method="post" action="http://annimexweb.com/cart/add" id="product_form_10508262282" accept-charset="UTF-8" class="product-form product-form-product-template hidedropdown" enctype="multipart/form-data">




                                <!-- Product Action -->
                                <div class="product-action clearfix">
                                    <div class="product-form__item--quantity">
                                        <div class="wrapQtyBtn2 detailsCustom">
                                            <div class="qtyField2">
                                                <a class="qtyBtn2 minus2" href="javascript:void(0);"><i class="fa anm anm-minus-r" aria-hidden="true"></i></a>
                                                <input type="text" id="Quantity2" name="quantity" value="1" class="product-form__input qty2" disabled>
                                                <a class="qtyBtn2 plus2" href="javascript:void(0);"><i class="fa anm anm-plus-r" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                    if ($this->session->has_userdata('user_id')) {
                                    ?>
                                        <div class="product-form__item--submit">
                                            <button type="button" name="add" class="btn product-form__cart-submit AddToCartButton" id='<?php echo $TestID; ?>'>
                                                <span>Add to cart</span>
                                            </button>
                                        </div>
                                    <?php } else { ?>
                                        <div class="product-form__item--submit">
                                            <button type="button" name="add" class="btn product-form__cart-submit LoginAddToCartButton" id='<?php echo $TestID; ?>'>
                                                <span>Add to cart</span>
                                            </button>
                                        </div>
                                    <?php } ?>

                                </div>
                                <!-- End Product Action -->
                            </form>
                            <!-- <div class="display-table shareRow">
                                <div class="display-table-cell medium-up--one-third">
                                        <div class="wishlist-btn">
                                            <a class="wishlist add-to-wishlist" href="#" title="Add to Wishlist"><i class="icon anm anm-heart-l" aria-hidden="true"></i> <span>Add to Wishlist</span></a>
                                        </div>
                                    </div> 
                                <div class="display-table-cell text-right">
                                    <div class="social-sharing">
                                        <a target="_blank" href="#" class="btn btn--small btn--secondary btn--share share-facebook" title="Share on Facebook">
                                            <i class="fa fa-facebook-square" aria-hidden="true"></i> <span class="share-title" aria-hidden="true">Share</span>
                                        </a>
                                        <a target="_blank" href="#" class="btn btn--small btn--secondary btn--share share-twitter" title="Tweet on Twitter">
                                            <i class="fa fa-twitter" aria-hidden="true"></i> <span class="share-title" aria-hidden="true">Tweet</span>
                                        </a>
                                        <a href="#" title="Share on google+" class="btn btn--small btn--secondary btn--share">
                                            <i class="fa fa-google-plus" aria-hidden="true"></i> <span class="share-title" aria-hidden="true">Google+</span>
                                        </a>
                                        <a target="_blank" href="#" class="btn btn--small btn--secondary btn--share share-pinterest" title="Pin on Pinterest">
                                            <i class="fa fa-pinterest" aria-hidden="true"></i> <span class="share-title" aria-hidden="true">Pin it</span>
                                        </a>
                                        <a href="#" class="btn btn--small btn--secondary btn--share share-pinterest" title="Share by Email" target="_blank">
                                            <i class="fa fa-envelope" aria-hidden="true"></i> <span class="share-title" aria-hidden="true">Email</span>
                                        </a>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                        <!--Product Tabs-->

                        <!--End Product Tabs-->
                    </div>
                </div>
                <!--End-product-single-->

                <!--Related Product Slider-->
                <div class="related-product grid-products">
                    <header class="section-header">
                        <h2 class="section-header__title text-center h2"><span>Related Products</span></h2>
                        <p class="sub-heading">You can stop autoplay, increase/decrease aniamtion speed and number of grid to show and products from store admin.</p>
                    </header>
                    <div class="productPageSlider">
                        <?php
                        foreach ($getData as $keys) {
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
                                        <img class="primary blur-up lazyload" data-src="/sports/assets/img/img/<?php echo  $image; ?>" src="/sports/assets/img/img/<?php echo  $image; ?>" alt="image" title="product">
                                        <!-- End image -->
                                        <!-- Hover image -->
                                        <img class="hover blur-up lazyload" id='ImageCustom<?php echo $TestID; ?>' data-src="/sports/assets/img/img/<?php echo  $image; ?>" src="/sports/assets/img/img/<?php echo  $image; ?>" alt="image" title="product">
                                        <!-- End hover image -->
                                        <!-- product label -->

                                        <!-- End product label -->
                                    </a>
                                    <!-- end product image -->

                                    <!-- Start product button -->
                                    <?php
                                                        if ($this->session->has_userdata('user_id')) {
                                                        ?>
                                                            <form class="variants add" action="#" method="post">
                                                                <button class="btn btn-addto-cart AddToCartButtonCustom" type="button" tabindex="0" id='<?php echo $TestID; ?>'>Add To Cart</button>
                                                            </form>
                                                        <?php } else { ?>
                                                            <form class="variants add" action="#" method="post">
                                                                <button class="btn btn-addto-cart LoginAddToCartButtonCustom" type="button" tabindex="0" id='<?php echo $TestID; ?>'>Add To Cart</button>
                                                            </form>
                                                        <?php } ?>
                                    <div class="button-set">
                                        <a href="#" title="Quick View" class="quick-view" tabindex="0">
                                            <i class="icon anm anm-search-plus-r"></i>
                                        </a>
                                        <div class="wishlist-btn">
                                            <a class="wishlist add-to-wishlist" href="wishlist.html">
                                                <i class="icon anm anm-heart-l"></i>
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
                                        <a href="#" id='NameCustom<?php echo $TestID; ?>'><?php echo $Name ?></a>
                                    </div>
                                    <!-- End product name -->
                                    <!-- product price -->
                                    <div class="product-price">

<span>$</span> <span class="price" id='PriceCustom<?php echo $TestID; ?>'> <?php echo $StandardPrice ?></span>
</div>
                                    <!-- End product price -->

                                    <!-- <div class="product-review">
                                            <i class="font-13 fa fa-star"></i>
                                            <i class="font-13 fa fa-star"></i>
                                            <i class="font-13 fa fa-star"></i>
                                            <i class="font-13 fa fa-star-o"></i>
                                            <i class="font-13 fa fa-star-o"></i>
                                        </div> -->
                                    <!-- Variant -->
                                    <ul class="swatches">

                                    </ul>
                                    <!-- End Variant -->
                                </div>
                                <!-- End product details -->
                            </div>
                        <?php

                        }

                        ?>






                    </div>
                </div>

                <!--End Related Product Slider-->

                <!--Recently Product Slider-->
                <div class="related-product grid-products">
                    <header class="section-header">
                        <h2 class="section-header__title text-center h2"><span>Recently Viewed Packages</span></h2>
                        <p class="sub-heading">You can manage this section from store admin as describe in above section</p>
                    </header>
                    <div class="productPageSlider">
                        <?php
                        foreach ($getpackages as $keys) {
                            $Name = $keys['Name'];
                            $StandardPrice = $keys['StandardPrice'];
                            $image = $keys['Image'];
                            $TestID = $keys['TestID'];
                        ?>
                            < <div class="col-12 item">
                                <!-- start product image -->
                                <div class="product-image">
                                    <!-- start product image -->
                                    <a href="<?php echo base_url(); ?>ProductDetails/test/<?php echo $TestID; ?>">
                                        <!-- image -->
                                        <img class="primary blur-up lazyload" data-src="/sports/assets/img/img/<?php echo  $image; ?>" src="/sports/assets/img/img/<?php echo  $image; ?>" alt="image" title="product">
                                        <!-- End image -->
                                        <!-- Hover image -->
                                        <img class="hover blur-up lazyload" data-src="/sports/assets/img/img/<?php echo  $image; ?>" src="/sports/assets/img/img/<?php echo  $image; ?>" alt="image" title="product">
                                        <!-- End hover image -->
                                    </a>
                                    <!-- end product image -->
                                </div>
                                <!-- end product image -->

                                <!--start product details -->
                                <div class="product-details text-center">
                                    <!-- product name -->
                                    <div class="product-name">
                                        <a href="<?php echo base_url(); ?>ProductDetails/test/<?php echo $TestID; ?>"><?php echo $Name ?></a>
                                    </div>
                                    <!-- End product name -->
                                </div>
                                <!-- End product details -->
                    </div>
                <?php

                        }

                ?>






                </div>








            </div>
        </div>
        <!--End Recently Product Slider-->

    </div>
    <!--#ProductSection-product-template-->
</div>
<!--MainContent-->
</div>
<!--End Body Content-->
</div>
<?php

$this->load->view('Footer');
?>
<script>
    $('.AddToCartButton').click(function(e) {
        let name = $(`#Name${this.id}`).text()
        let price = parseInt($(`#OriginalPrice`).val())
        let Quantity = $(`#Quantity2`).val()
        // console.log("Data",Quantity)
        let image = $(`#Image${this.id}`).attr("src")

        let url = '<?php echo base_url(); ?>ProductDetails/setCart';
        $.post(url, {
                'Name': name,
                'Price': price,
                'ImageURL': image,
                'Quantity': Quantity,
                'TestId': this.id
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
            })
    });

    $('.LoginAddToCartButton').click(function(e) {
        let name = $(`#Name${this.id}`).text()
        let price = $(`#Price${this.id}`).text()
        let image = $(`#Image${this.id}`).attr("src")
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

    $('.AddToCartButtonCustom').click(function(e) {
        let name = $(`#NameCustom${this.id}`).text()
        let price = $(`#PriceCustom${this.id}`).text()
        let image = $(`#ImageCustom${this.id}`).attr("data-src")
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
                toastr.success(`Item has been added to cart. Kindly check it at top-right corner!`,`Cart Count: ${data[2]}`);
        toastr.options.progressBar = true;
        toastr.options.timeOut = 3000;
            })
    });

    $('.LoginAddToCartButtonCustom').click(function(e) {
        let name = $(`#NameCustom${this.id}`).text()
        let price = $(`#PriceCustom${this.id}`).text()
        let image = $(`#ImageCustom${this.id}`).attr("src")
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

    function standardSet(id) {
        let quantity2 = $(`#Quantity2`).val()
        $(`#Days${id}`).text('<?php echo $StandardDays; ?>')
        $(`#desc${id}`).text('<?php echo $StandardDesc; ?>')
        $(`#OriginalPrice`).val(<?php echo $sPrice; ?>)
        $(`#Price${id}`).text(<?php echo $sPrice ?> * quantity2)
    }

    function premiumSet(id) {
        let quantity2 = $(`#Quantity2`).val()
        $(`#Days${id}`).text('<?php echo $premiumDays; ?>')
        $(`#desc${id}`).text(<?php echo $premiumDesc; ?>)
        $(`#OriginalPrice`).val(<?php echo $premiumPrice; ?>)
        $(`#Price${id}`).text(<?php echo $premiumPrice ?> * quantity2)
    }
</script>
<!--Footer-->