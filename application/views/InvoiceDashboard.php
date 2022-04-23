<?php 
 $testNames = explode(",",$Invoice[0]['TestName']);
 $prices = explode(",",$Invoice[0]['TAmount']);
 $quantities = explode(",",$Invoice[0]['TQuantity']);

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Forward Sports Pvt Ltd.</title>
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/LabLogo.png" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
    <style>
      @font-face {
  font-family: SourceSansPro;
  src: url(SourceSansPro-Regular.ttf);
}

.clearfix:after {
  content: "";
  display: table;
  clear: both;
}

a {
  color: #0087C3;
  text-decoration: none;
}

body {
  position: relative;
  width: 21cm;  
  height: 29.7cm; 
  margin: 0 auto; 
  color: #555555;
  background: #FFFFFF; 
  font-family: Arial, sans-serif; 
  font-size: 14px; 
  font-family: SourceSansPro;
}

header {
  padding: 10px 0;
  margin-bottom: 20px;
  border-bottom: 1px solid #AAAAAA;
}

#logo {
  float: left;
  margin-top: 8px;
}

#logo img {
  height: 70px;
}

#company {
  float: right;
  text-align: right;
}


#details {
  margin-bottom: 50px;
}

#client {
  padding-left: 6px;
  border-left: 6px solid #0087C3;
  float: left;
}

#client .to {
  color: #777777;
}

h2.name {
  font-size: 1.4em;
  font-weight: normal;
  margin: 0;
}

#invoice {
  float: right;
  text-align: right;
}

#invoice h1 {
  color: #0087C3;
  font-size: 1.4em;
  line-height: 1em;
  font-weight: normal;
  margin: 0  0 10px 0;
}

#invoice .date {
  font-size: 1.0em;
  color: #777777;
}

table {
  width: 100%;
  border-collapse: collapse;
  border-spacing: 0;
  margin-bottom: 20px;
}

table th,
table td {
  padding: 10px;
  background: #EEEEEE;
  text-align: center;
  border-bottom: 1px solid #FFFFFF;
}

table th {
  white-space: nowrap;        
  font-weight: normal;
}

table td {
  text-align: right;
}

table td h3{
  color: #57B223;
  font-size: 1.0em;
  font-weight: normal;
  margin: 0 0 0.2em 0;
}

table .no {
  color: #FFFFFF;
  font-size: 1.0em;
  background: #57B223;
}

table .desc {
  text-align: left;
}

table .unit {
  background: #DDDDDD;
}

table .qty {
}

table .total {
  background: #57B223;
  color: #FFFFFF;
}

table td.unit,
table td.qty,
table td.total {
  font-size: 1.0em;
}

table tbody tr:last-child td {
  border: none;
}

table tfoot td {
  padding: 10px 20px;
  background: #FFFFFF;
  border-bottom: none;
  font-size: 1.2em;
  white-space: nowrap; 
  border-top: 1px solid #AAAAAA; 
}

table tfoot tr:first-child td {
  border-top: none; 
}

table tfoot tr:last-child td {
  color: #57B223;
  font-size: 1.4em;
  border-top: 1px solid #57B223; 

}

table tfoot tr td:first-child {
  border: none;
}

#thanks{
  font-size: 2em;
  margin-bottom: 50px;
}

#notices{
  padding-left: 6px;
  border-left: 6px solid #0087C3;  
}

#notices .notice {
  font-size: 1.2em;
}

footer {
  color: #777777;
  width: 100%;
  height: 30px;
  position: absolute;
  bottom: 0;
  border-top: 1px solid #AAAAAA;
  padding: 8px 0;
  text-align: center;
}
    </style>
  </head>
  <body >
    <div id="printCard" class="card border-dark mb-3" style="padding: 10px;margin-top:10px">
    <header class="clearfix">
      <div id="logo">
        <img src="<?php echo base_url(); ?>assets/images/LabLogo.JPG" alt="logo">
      </div>
      <div id="company">
        <h2 class="name">Forward Sports</h2>
        <div>FCH8+J5C, Mander Khurd, Mundair Khurd, Sialkot, Punjab</div>
        <div> (052)-3571800</div>
        <div><a href="mailto:fit@example.com">fit@forward.pk</a></div>
      </div>
    </header>
    <main>
      <div id="details" class="clearfix">
        <div id="client">
          <div class="to">INVOICE TO:</div>
          <h2 class="name"><?php echo $this->session->userdata('user_name'); ?></h2>
          <div class="address"><?php echo $this->session->userdata('user_city'); ?></div>
          <div class="email"><a href="mailto:<?php echo $this->session->userdata('user_email'); ?>"><?php echo $this->session->userdata('user_email'); ?></a></div>
        </div>
        <div id="invoice">
          <h1><?php echo $Invoice[0]['Invoice_ID'] ?></h1>
          <div class="date">Date of Invoice: <?php echo $Invoice[0]['RequestDate'] ?></div>
          <!-- <div class="date">Due Date: 30/06/2014</div> -->
        </div>
      </div>
      <table border="0" cellspacing="0" cellpadding="0">
        <thead>
          <tr>
            <th class="no">#</th>
            <th class="desc">Test Name</th>
            <th class="unit">Quantity</th>
            <th class="qty">Price</th>
            <th class="total">TOTAL</th>
          </tr>
        </thead>
        <tbody>
          <?php $i = 0; $j=0; foreach ($testNames as $test) {
          ?>
          <tr>
            <td class="no"><?php echo ++$i; ?></td>
            <td class="desc"><h3><?php echo  $test; ?></h3></td>
            <td class="unit"><?php echo  $quantities[$j] ?></td>
            <td class="qty">$ <?php echo  $prices[$j]; ?></td>
            <td class="total">$ <?php echo  ($quantities[$j]*$prices[$j]); ?></td>
          </tr>
          <?php
          ++$j;
          } ?>          
        </tbody>
        <tfoot>
          <tr>
            <td colspan="2"></td>
            <td colspan="2">SUBTOTAL</td>
            <td>$ <?php echo $Invoice[0]['Amount'] ?></td>
          </tr>
          <!-- <tr>
            <td colspan="2"></td>
            <td colspan="2">TAX 25%</td>
            <td>$1,300.00</td>
          </tr> -->
          <tr>
            <td colspan="2"></td>
            <td colspan="2">GRAND TOTAL</td>
            <td>$ <?php echo $Invoice[0]['Amount'] ?></td>
          </tr>
        </tfoot>
      </table>
      <div id="thanks">Thank you!</div>
    <!-- <div class="container">
  <div class="row">
    <div class="col text-center">
    <button class="btn btn-dark" id="backToHome" style="border-radius: 10px;text-transform:initial;font-size:large">Back</button>
    </div>
  </div>
</div> -->
    </main>
   
    </div>
    <div class="container">
  <div class="row">
    <div class="col text-center">
    <button class="btn btn-dark" id="backToHome" style="border-radius: 10px;text-transform:initial;font-size:large">Back</button>
    <button type="button" class="btn btn-dark" id="showInvoice" data-dismiss="modal" onclick="printDiv('printCard')" style="border-radius: 10px;text-transform:initial;font-size:large">Print Invoice</button>    
</div>
  </div>
</div>
<script src="<?php echo base_url(); ?>assets/js/vendor/jquery-3.3.1.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
    <script>
        $("#backToHome").click(function(){
    
          location.href = `<?php echo base_url(); ?>CoolAdmin/invoice`;
        });
        function printDiv(divName) {
    var printContents = document.getElementById(divName).innerHTML;
    var originalContents = document.body.innerHTML;
    document.body.innerHTML = printContents;
    window.print();
    document.body.innerHTML = originalContents;
    window.location.reload();
}
    </script>
  </body>


</html>