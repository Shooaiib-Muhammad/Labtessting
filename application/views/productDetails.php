<?php
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
$StandardPrice = $getPrddetails[0]['StandardPrice'];
$Image = $getPrddetails[0]['Image'];
$method = $getPrddetails[0]['Method'];
$StandardDesc = $getPrddetails[0]['StandardDesc'];
// echo $Image;

?>
<div id="page-content">
    <!--MainContent-->
    <div id="MainContent" class="main-content" role="main">
        <!--Breadcrumb-->
        <div class="bredcrumbWrap">
            <div class="container breadcrumbs">
                <a href="#" title="Back to the home page">Home</a><span aria-hidden="true">›</span><span><?php echo $name; ?></span>
            </div>
        </div>
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
                                        <img class="blur-up lazyload" src="/sports/assets/img/img/<?php echo  $Image; ?>" alt="" />
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
                                        <h3>Hotline</h3>Talk to help line for your question on 4141 456 789, 4125 666 888
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Product Feature-->
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="product-single__meta">
                            <h1 class="product-single__title"><?php echo $name; ?></h1>
                            <div class="product-nav clearfix">
                                <a href="#" class="next" title="Next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
                            </div>

                            <p class="product-single__price product-single__price-product-template">

                                <span class="product-price__price product-price__price-product-template product-price__sale product-price__sale--single">
                                    <span id="ProductPrice-product-template"><span class="money">$ <?php echo $StandardPrice ?></span></span>
                                </span>
                            </p>
                            <div class="product-single__description rte">
                                <p> <?php echo $StandardDesc ?></p>

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
                                <!-- <div class="display-table-cell medium-up--one-third">
                                        <div class="wishlist-btn">
                                            <a class="wishlist add-to-wishlist" href="#" title="Add to Wishlist"><i class="icon anm anm-heart-l" aria-hidden="true"></i> <span>Add to Wishlist</span></a>
                                        </div>
                                    </div> -->
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
                            </div>
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
                                    <a href="#">
                                        <!-- image -->
                                        <img class="primary blur-up lazyload" data-src="/sports/assets/img/img/<?php echo  $image; ?>" src="/sports/assets/img/img/<?php echo  $image; ?>" alt="image" title="product">
                                        <!-- End image -->
                                        <!-- Hover image -->
                                        <img class="hover blur-up lazyload" data-src="/sports/assets/img/img/<?php echo  $image; ?>" src="/sports/assets/img/img/<?php echo  $image; ?>" alt="image" title="product">
                                        <!-- End hover image -->
                                        <!-- product label -->

                                        <!-- End product label -->
                                    </a>
                                    <!-- end product image -->

                                    <!-- Start product button -->
                                    <form class="variants add" action="<?php echo base_url(); ?>/ProductDetails/test/<?php echo $TestID; ?>">
                                        <button class="btn btn-addto-cart" type="button" tabindex="0">Select Options</button>
                                    </form>
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
                                        <a href="#"><?php echo $Name ?></a>
                                    </div>
                                    <!-- End product name -->
                                    <!-- product price -->
                                    <div class="product-price">
                                        <!-- <span class="old-price">$500.00</span> -->
                                        <span class="price">$ <?php echo $StandardPrice ?></span>
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
                                    <a href="<?php echo base_url(); ?>/ProductDetails/test/<?php echo $TestID; ?>">
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
                                        <a href="<?php echo base_url(); ?>/ProductDetails/test/<?php echo $TestID; ?>"><?php echo $Name ?></a>
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
<!--Footer-->
<?php

$this->load->view('Footer');
?>