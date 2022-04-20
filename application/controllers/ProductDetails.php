<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ProductDetails extends CI_Controller
{
    public function __construct()
    {
     parent::__construct();
   
     $this->load->model('homeModal');
    }
 
 public function index()
 {
// $testid=$id;
//   $data['getPrddetails'] = $this->homeModal->getPrddetails($testid);

      $data['getData'] = $this->homeModal->getData();
      $data['getTop6'] = $this->homeModal->getTop6();
  $this->load->view('productDetails',$data);

 }
Public function test($id){
      $data['getData'] = $this->homeModal->getData();
      $data['getTop6'] = $this->homeModal->getTop6();
      
      $data['getpackages'] = $this->homeModal->getpackages();
      $data['getPrddetails'] = $this->homeModal->getPrddetails($id);
      if($data['getPrddetails'][0]['TestType'] == 'Package'){
         $data['getpkgtest'] = $this->homeModal->getpckgtestdetails($id);
      }else{
          $data['getpkgtest']=null;
      }
      $this->load->view('productDetails', $data);
}

Public function setCart(){
 
     $valuesArray = [$_POST['Name'],$_POST['Price'],$_POST['ImageURL'],$_POST['Quantity'],$_POST['Price'],$_POST['TestId']];
     array_push($_SESSION['Products'],$valuesArray);
     $totalPrice = 0;
     $index = 0;
     $cartCount = count($_SESSION['Products']);
     $cartHTML = '<ul class="mini-products-list">';
     $resultArray = []; 
     foreach ($_SESSION['Products'] as $products) {
        $Price = intval($products[4]) * intval($products[3]);
        $totalPrice +=  $Price;
        $cartHTML .= '<li class="item"><a class="product-image" href="#"><img src="'.$products[2].'" alt="'.$products[0].'" title="" /></a> <div class="product-details"> <a href="'.base_url().'/ProductDetails/RemoveCartItem?id='.$index.'" class="remove"><i class="anm anm-times-l" aria-hidden="true"></i></a><a class="pName" href="cart.html">'.$products[0].'</a><div class="wrapQtyBtn"><div class="qtyField"><span class="label" style="color:black">Qty:</span><a class="qtyBtn minus" data-src="'.$index.'" href="javascript:void(0);"><i class="fa anm anm-minus-r" aria-hidden="true"></i></a><input type="text" id="Quantity" name="quantity" value="'.$products[3].'" class="product-form__input qty" disabled><a class="qtyBtn plus" data-src="'.$index.'" href="javascript:void(0);"><i class="fa anm anm-plus-r" aria-hidden="true"></i></a></div></div><div class="priceRow"><div class="product-price"><span class="money"> $ '.$Price.'</span></div></div></div></li>';
    $index += 1;
    }
    $cartHTML .= '</ul><div class="total"><div class="total-in"><span class="label">Cart Subtotal:</span> <span class="product-price"><span class="money">$ '.$totalPrice.'</span></span></div><div class="buttonSet text-center"><a href="'.base_url().'Test/Cart" class="btn btn-secondary btn--small" style="border-radius:10px;padding:10px">View Cart</a><a href="'.base_url().'Test/checkout" class="btn btn-secondary btn--small" style="border-radius:10px;padding:10px">Checkout</a></div></div>';
    
    array_push($resultArray,$totalPrice,$cartHTML,$cartCount);
    return $this->output
    ->set_content_type('application/json')
    ->set_status_header(200)
    ->set_output(json_encode($resultArray));
}

Public function updateCart(){
    $index = $_POST['index'];
    $quantity = $_POST['Quantity'];
    $_SESSION['Products'][$index][3] = intval($quantity);
    // $_SESSION['Products'][$index][1] = intval($_SESSION['Products'][$index][4] ) * intval($quantity);
    // print_r($_SESSION['Products']);
    // die;
    $totalPrice = 0;
    $index = 0;
    $cartCount = count($_SESSION['Products']);
    $cartHTML = '<ul class="mini-products-list">';
    $resultArray = []; 
    foreach ($_SESSION['Products'] as $products) {
       $products[1] = intval($products[4]) * intval($products[3]);
       $totalPrice +=  $products[1];
       $cartHTML .= '<li class="item"><a class="product-image" href="#"><img src="'.$products[2].'" alt="'.$products[0].'" title="" /></a> <div class="product-details"> <a href="'.base_url().'/ProductDetails/RemoveCartItem?id='.$index.'" class="remove"><i class="anm anm-times-l" aria-hidden="true"></i></a><a class="pName" href="cart.html">'.$products[0].'</a><div class="wrapQtyBtn"><div class="qtyField"><span class="label" style="color:black">Qty:</span><a class="qtyBtn minus" data-src="'.$index.'" href="javascript:void(0);"><i class="fa anm anm-minus-r" aria-hidden="true"></i></a><input type="text" id="Quantity" name="quantity" value="'.$products[3].'" class="product-form__input qty" disabled><a class="qtyBtn plus" data-src="'.$index.'" href="javascript:void(0);"><i class="fa anm anm-plus-r" aria-hidden="true"></i></a></div></div><div class="priceRow"><div class="product-price"><span class="money"> $ '.$products[1].'</span></div></div></div></li>';
   $index += 1;
   }
   $cartHTML .= '</ul><div class="total"><div class="total-in"><span class="label">Cart Subtotal:</span> <span class="product-price"><span class="money">$ '.$totalPrice.'</span></span></div><div class="buttonSet text-center"><a href="'.base_url().'Test/Cart" class="btn btn-secondary btn--small" style="border-radius:10px;padding:10px">View Cart</a><a href="checkout.html" class="btn btn-secondary btn--small" style="border-radius:10px;padding:10px">Checkout</a></div></div>';
   
   array_push($resultArray,$totalPrice,$cartHTML,$cartCount);
   return $this->output
   ->set_content_type('application/json')
   ->set_status_header(200)
   ->set_output(json_encode($resultArray));
}

Public function LoginsetCart(){
    $_SESSION['Products'] = [];
    $valuesArray = [$_POST['Name'],$_POST['Price'],$_POST['ImageURL'],1,$_POST['Price'],$_POST['TestId']];
    array_push($_SESSION['Products'],$valuesArray);

}

Public function RemoveCartItem(){

    $index = $_GET['id'];
 
    unset($_SESSION['Products'][$index]);
  
    redirect($_SERVER['HTTP_REFERER']);
}

Public function placeOrder(){

    $data = $this->homeModal->orderPlacement($_POST['namer'],$_POST['emailr'],$_POST['telr'],$_POST['faxr'],$_POST['requirements']);
 
    return $this->output
    ->set_content_type('application/json')
    ->set_status_header(200)
    ->set_output(json_encode($data));
}
}
