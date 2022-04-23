<?php
$this->load->view('Header');
if(isset($_SESSION['Products'])){
    $ArraySize = count($_SESSION['Products']);
}
?>

<div id="page-content">
<div class="collection-header">
        <div class="collection-hero">
            <div class=" collection-hero__imageCustom"><img class="blur-up lazyload" data-src="<?php Echo base_url();?>assets/images/cat-women6.jpg" src="assets/images/cat-women2.jpg" height="150px" width="100%" style="background-size: fixed; background-repeat:no-repeat;" alt="Women" title="Women" /></div>
            <div class="collection-hero__title-wrapper">
                <!-- <h1 class="collection-hero__title page-width"></h1> -->
            </div>
        </div>
    </div>
    <br>
    <br>
    	<!--Page Title-->
    	<div class="page section-header text-center">
			<div class="page-title">
        		<div class="wrapper"><h1 class="page-width">Shopping Cart</h1></div>
      		</div>
		</div>
        <!--End Page Title-->
        <input class="cart__qty-input qty" type="text" style="display: none;" id="ArraySize" name="updates[]" value="<?php echo $ArraySize; ?>" pattern="[0-9]*">
        <div class="container">
        	<div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 main-col">
                	<div class="alert alert-success text-uppercase" role="alert">
						<i class="icon anm anm-truck-l icon-large"></i> &nbsp;<strong>Welcome</strong> to your Cart!
					</div>
                	<form action="#" method="post" class="cart style2">
                		<table>
                            <thead class="cart__row cart__header">
                                <tr>
                                    <th colspan="2" class="text-center">Product</th>
                                    <th class="text-center">Price</th>
                                    <th class="text-center">Quantity</th>
                                    <th class="text-right">Total</th>
                                    <th class="action">&nbsp;</th>
                                </tr>
                            </thead>
                    		<tbody>
                                <?php  $totalPrice = 0;
                                        $index = 0;
                                        $individualPrice = 0;
                                    if(isset($_SESSION['Products'])){
                                        if(count($_SESSION['Products'])>0){
                                     foreach ($_SESSION['Products'] as $products) {
                                        $Price = intval($products[4]) * intval($products[3]);
                                        $totalPrice +=  $Price;
                                        $individualPrice = intval($products[4]) * intval($products[3]);

                                 ?>
                                <tr class="cart__row border-bottom line1 cart-flex border-top">
                                    <td class="cart__image-wrapper cart-flex-item">
                                        <a href="#"><img class="cart__image" src="<?php echo  $products[2]; ?>" alt="<?php echo $products[0]; ?>"></a>
                                    </td>
                                    <td class="cart__meta small--text-left cart-flex-item">
                                        <div class="list-view-item__title">
                                            <a href="#"><?php echo $products[0]; ?> </a>
                                        </div>
                                    
                                    </td>
                                    <td class="cart__price-wrapper cart-flex-item">
                                        <span class="money" id="Price<?php echo $index; ?>">$<?php echo $products[1]; ?></span>
                                    </td>
                                    <td class="cart__update-wrapper cart-flex-item text-right">
                                        <div class="cart__qty text-center">
                                            <div class="qtyField">
                                                <!-- <a class="qtyBtn minus" href="javascript:void(0);" ><i class="icon icon-minus"></i></a> -->
                                                <input class="cart__qty-input qty" type="text" id="Quantity<?php echo $index; ?>" onchange="updateValuePrice(<?php echo $index; ?>)" name="updates[]" data-src="<?php $index ?>" id="qty" value="<?php echo $products[3]; ?>" pattern="[0-9]*">
                                                <input class="cart__qty-input qty" type="text" style="display: none;" id="Original<?php echo $index; ?>" name="updates[]" value="<?php echo $products[4]; ?>" pattern="[0-9]*">
     
                                              
                                                <!-- <a class="qtyBtn plus" href="javascript:void(0);" data-src="<?php $index ?>"><i class="icon icon-plus"></i></a> -->
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-right small--hide cart-price">
                                        <div><span class="money" id="Total<?php echo $index; ?>"><?php echo $individualPrice; ?></span></div>
                                    </td>
                                    <td class="text-center small--hide"><a href="<?php echo base_url(); ?>ProductDetails/RemoveCartItem?id=<?php echo $index; ?>" class="btn btn--secondary cart__remove" title="Remove tem"><i class="icon icon anm anm-times-l"></i></a></td>
                                </tr>
                         <?php 
                         $index += 1; 
                        }
                    }
                    else{
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
                    		<tfoot>
                                <tr>
                                    <td colspan="3" class="text-left" style="visibility: hidden;"><a href="<?php echo base_url() ?>Test" class="btn btn-secondary btn--small cart-continue">Continue shopping</a></td>
                                    <td colspan="3" class="text-right">
                                    <a href="<?php echo base_url() ?>Test" class="btn btn-secondary btn--small cart-continue" style='border-radius:10px;padding:10px'>Continue shopping</a>
                                    <!-- <a href="#" class="btn btn-secondary btn--small cart-continue" style='border-radius:10px;padding:10px'>Update Cart</a> -->
                                    </td>
                                </tr>
                            </tfoot>
                    </table> 
                    </form>                   
               	</div>
                
                
                <div class="container mt-4">
                    <div class="row">
                    	
                        <div class="col-12 col-sm-12 col-md-4 col-lg-4 cart__footer">
                 
        
                        </div>
                        <div class="col-12 col-sm-12 col-md-4 col-lg-4 cart__footer">
              
        
                        </div>
                        <div class="col-12 col-sm-12 col-md-4 col-lg-4 cart__footer">
                            <div class="solid-border">	
                              <div class="row border-bottom pb-2">
                                <span class="col-12 col-sm-6 cart__subtotal-title" >Subtotal</span>
                                <span class="col-12 col-sm-6 text-right"><span class="money" id="subTotal">$ <?php echo $totalPrice; ?></span></span>
                              </div>
                              <!-- <div class="row border-bottom pb-2 pt-2">
                                <span class="col-12 col-sm-6 cart__subtotal-title">Tax</span>
                                <span class="col-12 col-sm-6 text-right">$10.00</span>
                              </div> -->
                        
                              <div class="row border-bottom pb-2 pt-2">
                                <span class="col-12 col-sm-6 cart__subtotal-title"><strong>Grand Total</strong></span>
                                <span class="col-12 col-sm-6 cart__subtotal-title cart__subtotal text-right"><span class="money"  id="grandTotal">$ <?php echo $totalPrice; ?></span></span>
                              </div>
                             <br>
                              <a class="btn btn--small-wide checkout" href="<?php echo base_url(); ?>Test/checkout" style="margin-left: 25%;border-radius:10px;" >Proceed To Checkout</a>
                              <div class="paymnet-img"></div>
                            
                            </div>
        
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        
    </div>

    <?php

$this->load->view('Footer');
?>    
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
                let htmlGet = data[1];
                let htmlGetModified = htmlGet.replace(/\\/g, '');
                $('#header-cart').html('');
                $('#CartCount').html('');
                $('#header-cart').html(htmlGetModified);
                $('#CartCount').html(data[2]);
            })
    });

    function updateValuePrice(index){
        let QuantityValue = $(`#Quantity${index}`).val()
        let OriginalPrice = $(`#Original${index}`).val()
        let ArraySize = $(`#ArraySize`).val()
        let total = parseInt(QuantityValue) * parseInt(OriginalPrice);
        let url = '<?php echo base_url(); ?>ProductDetails/updateCart';
		  $.post(url, {
				  'index': index,
				  'Quantity': QuantityValue
			  },
			  function(data, status) {
				
			  });
        $(`#Price${index}`).text(total)
        $(`#Total${index}`).text(total)
        let grandTotal = 0;
        for(let i=0;i<ArraySize;i++){
            grandTotal += parseInt($(`#Total${i}`).text())
        }
        $(`#grandTotal`).text("$ "+grandTotal)
        $(`#subTotal`).text("$ "+grandTotal)
   
    }

</script>

