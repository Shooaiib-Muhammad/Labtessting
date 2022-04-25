<?php
defined('BASEPATH') or exit('No direct script access allowed');
include("./application/views/includes/Exception.php");
include("./application/views/includes/PHPMailer.php");
include("./application/views/includes/SMTP.php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

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
        $this->load->view('productDetails', $data);
    }
    public function test($id)
    {
        $data['getData'] = $this->homeModal->getData();
        $data['getTop6'] = $this->homeModal->getTop6();

        $data['getpackages'] = $this->homeModal->getpackages();
        $data['getPrddetails'] = $this->homeModal->getPrddetails($id);
        if ($data['getPrddetails'][0]['TestType'] == 'Package') {
            $data['getpkgtest'] = $this->homeModal->getpckgtestdetails($id);
        } else {
            $data['getpkgtest'] = null;
        }
        $this->load->view('productDetails', $data);
    }

    public function setCart()
    {

        $valuesArray = [$_POST['Name'], $_POST['Price'], $_POST['ImageURL'], $_POST['Quantity'], $_POST['Price'], $_POST['TestId']];
        array_push($_SESSION['Products'], $valuesArray);
        $totalPrice = 0;
        $index = 0;
        $cartCount = count($_SESSION['Products']);
        $cartHTML = '<ul class="mini-products-list">';
        $resultArray = [];
        foreach ($_SESSION['Products'] as $products) {
            $Price = intval($products[4]) * intval($products[3]);
            $totalPrice +=  $Price;
            $cartHTML .= '<li class="item"><a class="product-image" href="#"><img src="' . $products[2] . '" alt="' . $products[0] . '" title="" /></a> <div class="product-details"> <a href="' . base_url() . '/ProductDetails/RemoveCartItem?id=' . $index . '" class="remove"><i class="anm anm-times-l" aria-hidden="true"></i></a><a class="pName" href="cart.html">' . $products[0] . '</a><div class="wrapQtyBtn"><div class="qtyField"><span class="label" style="color:black">Qty:</span><a class="qtyBtn minus" data-src="' . $index . '" href="javascript:void(0);"><i class="fa anm anm-minus-r" aria-hidden="true"></i></a><input type="text" id="Quantity" name="quantity" value="' . $products[3] . '" class="product-form__input qty" disabled><a class="qtyBtn plus" data-src="' . $index . '" href="javascript:void(0);"><i class="fa anm anm-plus-r" aria-hidden="true"></i></a></div></div><div class="priceRow"><div class="product-price"><span class="money"> $ ' . $Price . '</span></div></div></div></li>';
            $index += 1;
        }
        $cartHTML .= '</ul><div class="total"><div class="total-in"><span class="label">Cart Subtotal:</span> <span class="product-price"><span class="money">$ ' . $totalPrice . '</span></span></div><div class="buttonSet text-center"><a href="' . base_url() . 'Test/Cart" class="btn btn-secondary btn--small" style="border-radius:10px;padding:10px">View Cart</a><a href="' . base_url() . 'Test/checkout" class="btn btn-secondary btn--small" style="border-radius:10px;padding:10px">Checkout</a></div></div>';

        array_push($resultArray, $totalPrice, $cartHTML, $cartCount);
        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode($resultArray));
    }

    public function updateCart()
    {
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
            $cartHTML .= '<li class="item"><a class="product-image" href="#"><img src="' . $products[2] . '" alt="' . $products[0] . '" title="" /></a> <div class="product-details"> <a href="' . base_url() . '/ProductDetails/RemoveCartItem?id=' . $index . '" class="remove"><i class="anm anm-times-l" aria-hidden="true"></i></a><a class="pName" href="cart.html">' . $products[0] . '</a><div class="wrapQtyBtn"><div class="qtyField"><span class="label" style="color:black">Qty:</span><a class="qtyBtn minus" data-src="' . $index . '" href="javascript:void(0);"><i class="fa anm anm-minus-r" aria-hidden="true"></i></a><input type="text" id="Quantity" name="quantity" value="' . $products[3] . '" class="product-form__input qty" disabled><a class="qtyBtn plus" data-src="' . $index . '" href="javascript:void(0);"><i class="fa anm anm-plus-r" aria-hidden="true"></i></a></div></div><div class="priceRow"><div class="product-price"><span class="money"> $ ' . $products[1] . '</span></div></div></div></li>';
            $index += 1;
        }
        $cartHTML .= '</ul><div class="total"><div class="total-in"><span class="label">Cart Subtotal:</span> <span class="product-price"><span class="money">$ ' . $totalPrice . '</span></span></div><div class="buttonSet text-center"><a href="' . base_url() . 'Test/Cart" class="btn btn-secondary btn--small" style="border-radius:10px;padding:10px">View Cart</a><a href="checkout.html" class="btn btn-secondary btn--small" style="border-radius:10px;padding:10px">Checkout</a></div></div>';

        array_push($resultArray, $totalPrice, $cartHTML, $cartCount);
        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode($resultArray));
    }

    public function LoginsetCart()
    {
        $_SESSION['Products'] = [];
        $valuesArray = [$_POST['Name'], $_POST['Price'], $_POST['ImageURL'], 1, $_POST['Price'], $_POST['TestId']];
        array_push($_SESSION['Products'], $valuesArray);
    }

    public function RemoveCartItem()
    {

        $index = $_GET['id'];

        unset($_SESSION['Products'][$index]);

        redirect($_SERVER['HTTP_REFERER']);
    }

    public function placeOrder()
    {

        $Email = $_POST['emailr'];
        $fullname = $_POST['namer'];
        $id = $this->homeModal->orderPlacement($_POST['namer'], $_POST['emailr'], $_POST['telr'], $_POST['faxr'], $_POST['requirements']);


        if ($id == false) {
            redirect($_SERVER['HTTP_REFERER']);
        } else {
            $mail = new PHPMailer(true);
            try {


                //Server settings
                $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
                $mail->isSMTP();                                            //Send using SMTP
                $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
                $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                $mail->Username   = 'edlaysol@gmail.com';                     //SMTP username
                $mail->Password   = 'Global123';                               //SMTP password
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
                $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set 

                $mail->IsHTML(true);
                $mail->setFrom('itdev@forward.pk', "Order Placed");
                // $mail->addAddress("itdev@forward.pk"); 

                $mail->addAddress("$Email");


                $mail->Subject = "Your Order has been Placed Successfully!";
                $mail->Body = "
        <html>
        <head>
          <title>Order Placed</title>
        </head>
        <body>
        <h5>Thank You Mr/Mrs $fullname for Placing an Order!</h5>
          <p style='color:white;background color:black'>Your Order has been Placed Successfully! Please visit  given link  to See Your Order Detail Print your Invoice Thanku!<br><a href='" . base_url() . "CSR/index/$id'>See Your Order Detail</a></p>
                       
        </body>
        </html>
        ";

                $mail->send();

                echo 'Message has been sent';
            } catch (Exception $e) {
                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }

            redirect(base_url() . "CSR/index/" . $id);
        }

        // return $this->output
        // ->set_content_type('application/json')
        // ->set_status_header(200)
        // ->set_output(json_encode($data));
    }
}
