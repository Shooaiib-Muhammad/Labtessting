<?php
$this->load->view('Header');
?>


<div class="container mt-5 p-5">
   <h1 class=" mt-5 mb-5">Contact Us</h1>
            <div class="row">
            	<div class="col-12 col-sm-12 col-md-8 col-lg-8 mb-4">
                	
                	<div class="formFeilds contact-form form-vertical">
                      <form action="<?php  echo base_url()."ContactUs/contactus"?>" method="post"  id="contact_form" class="contact-form">	
                      <div class="row ">
                      
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        	<div class="form-group">
                              <label for="Email">Email:</label>
							  <input type="email" id="ContactFormEmail" name="Email" placeholder="Email" value="" required>                        	
                            </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        	<div class="form-group">
                              <label for="msg">Comments:</label>
                            <textarea required rows="10" id="ContactFormMessage" name="Comments" placeholder="Your Comments"></textarea>
                            </div>
                        </div>  
                      </div>
                      <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                            <input type="submit" class="btn" value="Send ">
                        </div>
                     </div>
                     </form>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                	<div class="open-hours">
                    	<strong>Opening Hours</strong><br>
						Mon - Sat : 8am -4pm<br>
						
                    </div>
                	<hr />
                    <ul class="addressFooter">
                        <li><i class="icon anm anm-map-marker-al"></i> <p>Wazirabad Road <br>,Adha Sahowala, Sialkot</p></p></li>
                        <li class="phone"><i class="icon anm anm-phone-s"></i> <p>+92-052-3571801</p></li>
                        <li class="phone"><i class="icon anm anm-phone-s"></i> <p>Whatsapp :+92-052-3571801</p></li>
                        <li class="email"><i class="icon anm anm-envelope-l"></i><p>info@forward.pk</p></li>
                    </ul>
                    <hr />
                   
                </div>
            </div>
        </div>
<?php

$this->load->view('Footer');
?>