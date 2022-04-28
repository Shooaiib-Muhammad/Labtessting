<?php

$this->load->view('Header');
if (isset($_SESSION['Products'])) {
    $ArraySize = count($_SESSION['Products']);
}
?>

<!--Body Content-->
<div id="page-content">
    <!--Page Title-->

    <div class="collection-header">
        <div class="collection-hero">
            <div class=" collection-hero__imageCustom"><img class="blur-up lazyload" data-src="<?php echo base_url(); ?>assets/images/cat-women6.jpg" src="assets/images/cat-women2.jpg" height="150px" width="100%" style="background-size: fixed; background-repeat:no-repeat;" alt="Women" title="Women" /></div>
            <div class="collection-hero__title-wrapper">
                <!-- <h1 class="collection-hero__title page-width"></h1> -->
            </div>
        </div>
    </div>
    <div class="page section-header text-center">
        <div class="page-title">
            <div class="wrapper">
                <h1 class="page-width">Checkout</h1>
            </div>
        </div>
    </div>
    <!--End Page Title-->

    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mb-3">

                <!-- <div class="customer-box returning-customer">
                        <h3><i class="icon anm anm-user-al"></i> Returning customer? <a href="#customer-login" id="customer" class="text-white text-decoration-underline" data-toggle="collapse">Click here to login</a></h3>
                        <div id="customer-login" class="collapse customer-content">
                            <div class="customer-info">
                                <p class="coupon-text">If you have shopped with us before, please enter your details in the boxes below. If you are a new customer, please proceed to the Billing &amp; Shipping section.</p>
                                <form>
                                    <div class="row">
                                        <div class="form-group col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                            <label for="exampleInputEmail1">Email address <span class="required-f">*</span></label>
                                            <input type="email" class="no-margin" id="exampleInputEmail1">
                                        </div>
                                        <div class="form-group col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                            <label for="exampleInputPassword1">Password <span class="required-f">*</span></label>
                                            <input type="password" id="exampleInputPassword1">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-check width-100 margin-20px-bottom">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input" value=""> Remember me!
                                                </label>
                                                <a href="#" class="float-right">Forgot your password?</a>
                                            </div>
                                            <button type="submit" class="btn btn-primary mt-3">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div> -->
            </div>

            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mb-3">
                <!-- <div class="customer-box customer-coupon">
                        <h3 class="font-15 xs-font-13"><i class="icon anm anm-gift-l"></i> Have a coupon? <a href="#have-coupon" class="text-white text-decoration-underline" data-toggle="collapse">Click here to enter your code</a></h3>
                        <div id="have-coupon" class="collapse coupon-checkout-content">
                            <div class="discount-coupon">
                                <div id="coupon" class="coupon-dec tab-pane active">
                                    <p class="margin-10px-bottom">Enter your coupon code if you have one.</p>
                                    <label class="required get" for="coupon-code"><span class="required-f">*</span> Coupon</label>
                                    <input id="coupon-code" required="" type="text" class="mb-3">
                                    <button class="coupon-btn btn" type="submit">Apply Coupon</button>
                                </div>
                            </div>
                        </div>
                    </div> -->
            </div>
        </div>

        <div class="row billing-fields">
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 sm-margin-30px-bottom">

            </div>

            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="your-order-payment">
                    <div class="your-order">
                        <h2 class="order-title mb-4">Your Order</h2>

                        <div class="table-responsive-sm order-table">
                            <table class="bg-white table table-bordered table-hover text-center">
                                <thead>
                                    <tr>
                                        <th class="text-left">Product Name</th>
                                        <th>Price</th>
                                        <th>Qty</th>
                                        <th>Subtotal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $totalPrice = 0;
                                    $index = 0;
                                    $individualPrice = 0;
                                    if (isset($_SESSION['Products'])) {
                                        if (count($_SESSION['Products']) > 0) {
                                            foreach ($_SESSION['Products'] as $products) {
                                                $Price = intval($products[4]) * intval($products[3]);
                                                $totalPrice +=  $Price;
                                                $individualPrice = intval($products[4]) * intval($products[3]);

                                    ?>
                                                <tr>
                                                    <td class="text-left"><?php echo $products[0]; ?></td>
                                                    <td>$ <?php echo Round($products[1], 0); ?></td>
                                                    <td><?php echo $products[3]; ?></td>
                                                    <td style="font-weight: bolder;">$ <?php echo $individualPrice; ?></td>
                                                </tr>
                                            <?php
                                                $index += 1;
                                            }
                                        } else {
                                            ?>

                                            <tr>
                                                <td colspan="5">
                                                    <h1 style="font-family:cursive;padding: 50px;">No items found in Cart</h1>
                                                </td>
                                            </tr>
                                    <?php
                                        }
                                    }
                                    ?>
                                </tbody>
                                <tfoot class="font-weight-600">
                                    <!-- <tr>
                                            <td colspan="4" class="text-right">Shipping </td>
                                            <td>$50.00</td>
                                        </tr> -->
                                    <tr>
                                        <td colspan="4" class="text-right" style="font-weight: bolder;">Total</td>
                                        <td style="font-weight: bolder;">$ <?php echo $totalPrice; ?></td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>

                    <hr />
                    <h2 class="login-title mb-3"> Payment Detail * <i class="fa fa-exclamation" style="color:red;"></i></h2>
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">Account No</th>
                                <th scope="col">IBAN</th>
                                <th scope="col">SWIFT CODE</th>
                                <th scope="col">Name of Bank</th>
                                <th scope="col">Bank Address</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">06010100788382</th>
                                <td>PK28MEZN0006010100788382</td>
                                <td>MEZNPKKA</td>
                                <td>MEEZAN BANK LTD.</td>
                                <td>338-Kashmir Road Branch, SIALKOT. PAKISTAN</td>
                            </tr>

                        </tbody>
                    </table>

                    <form action="<?php echo base_url(); ?>ProductDetails/placeOrder" method="post">
                        <fieldset>
                            <h2 class="login-title mb-3">Customer Detail</h2>
                            <div class="row">
                                <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                    <label for="fullname">Full Name</label>
                                    <input value="<?php echo $customerInfo[0]['fullname'] ?>" type="text" id="fullname" name="fullname" readonly>
                                </div>
                                <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                    <label for="city">City</label>
                                    <input value="<?php echo $customerInfo[0]['City'] ?>" type="text" id="city" name="city" readonly>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                    <label for="state">State</label>
                                    <input value="<?php echo $customerInfo[0]['state'] ?>" type="text" id="state" name="state" readonly>
                                </div>
                                <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                    <label for="postal">Postal/Zip Code</label>
                                    <input value="<?php echo $customerInfo[0]['postalcode'] ?>" type="text" id="postal" name="postal" readonly>
                                </div>
                            </div>
                        </fieldset>

                        <fieldset>
                            <div class="row">
                                <div class="form-group col-md-6 col-lg-6 col-xl-6">
                                    <label for="country">Country</label>
                                    <input value="<?php echo $customerInfo[0]['Country'] ?>" type="text" id="country" name="country" readonly>
                                </div>
                                <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                    <label for="contact">Contact Person</label>
                                    <input value="<?php echo $customerInfo[0]['Contactno'] ?>" type="text" id="contact" name="contact" readonly>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6 col-lg-6 col-xl-6">
                                    <label for="email">Email</label>
                                    <input value="<?php echo $customerInfo[0]['Email'] ?>" type="text" id="email" name="email" readonly>
                                </div>
                                <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                    <label for="faxr">FAX of Recipient</label>
                                    <input type="text" id="faxr" name="faxr">
                                </div>
                            </div>
                            <fieldset>
                                <div class="row">
                                    <div class="form-group col-md-12 col-lg-12 col-xl-12" hidden>
                                        <label for="input-company">Additional Requirements <span class="required-f"></span></label>
                                        <textarea value="<?php echo $customerInfo[0]['requirements'] ?>" name="requirements" class="form-control resize-both" rows="3"><?php echo $customerInfo[0]['requirements'] ?></textarea>
                                    </div>
                                </div>
                            </fieldset>
                            <div class="row">
                                <div class="col-sm-1"><input type="radio" id="Self" name="Self" value="Self" checked onclick="enableradio1()">
                                      <label for="css">Self</label><br></div>
                                <div class="col-sm-2"> <input type="radio" id="Other" name="Other" value="Other" onclick="enableradio()">
                                      <label for="javascript">Other</label></div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                    <label for="namer">Name of Recipient</label>
                                    <input value="<?php echo $customerInfo[0]['fullname'] ?>" type="text" id="namer" name="namer">
                                </div>
                                <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                    <label for="emailr">Email ID of Recipient</label>
                                    <input value="<?php echo $customerInfo[0]['Email'] ?>" type="text" id="emailr" name="emailr">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                    <label for="namer">TEL of Recipient</label>
                                    <input value="<?php echo $customerInfo[0]['Contactno'] ?>" type="text" id="telr" name="telr">
                                </div>
                            </div>




                        </fieldset>





                        <div class="actionRow">
                            <div><input type="submit" class="btn btn-secondary btn--small" value="Place Order" style="border-radius: 10px;"></div>
                        </div>
                    </form>


                </div>

            </div>

            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 sm-margin-30px-bottom">

            </div>
        </div>
    </div>

</div>
<!--End Body Content-->

<?php

$this->load->view('Footer');
?>
<script>
    $('#placeOrder').click(function() {

        let url = '<?php echo base_url(); ?>ProductDetails/placeOrder';
        $.post(url,
            function(data, status) {
                let url2 = '<?php echo base_url(); ?>';

                if (data == true) {
                    alert("Order Placed Successfully!");
                    window.location.reload();
                } else {
                    alert("There is an error while placing order!");
                }
            })
    });
</script>
<script>
    function enableradio() {
        var radio = document.querySelector('input[type=radio][name=Self]:checked');
        radio.checked = false;
        document.getElementById("namer").value = " ";
        document.getElementById("emailr").value = " ";
        document.getElementById("telr").value = " ";
        document.getElementById("faxr").value = " ";
    }

    function enableradio1() {
        var radio = document.querySelector('input[type=radio][name=Other]:checked');
        radio.checked = false;
        url = "<?php echo base_url('Test/self') ?>"

        $.ajax({
            url: url,
            type: "POST",
            success: function(data) {
                document.getElementById("namer").value = data[0]['fullname'];
                document.getElementById("emailr").value = data[0]['Email'];
                document.getElementById("telr").value = data[0]['Contactno'];
                document.getElementById("faxr").value = '';
            }

        });
    }
</script>