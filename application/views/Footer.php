<footer id="footer">
 <div class="newsletter-section">
  <div class="container">
   
  </div>
 </div>
 <div class="site-footer">
  <div class="container">
   <!--Footer Links-->
   <div class="footer-top">
    <div class="row">
     <div class="col-12 col-sm-12 col-md-3 col-lg-3 footer-links">
      <h4 class="h4">Quick Shop / Test</h4>
      <ul>
       <li><a href="#">Bags</a></li>
       <li><a href="#">Balls</a></li>
       <li><a href="#">Raw Material</a></li>

      </ul>
     </div>
     <div class="col-12 col-sm-12 col-md-3 col-lg-3 footer-links">
      <h4 class="h4">Quick Shop / Packages</h4>
      <ul>
       <li><a href="#">Bags</a></li>
       <li><a href="#">Balls</a></li>
       <li><a href="#">Raw Material</a></li>

      </ul>
     </div>
     <div class="col-12 col-sm-12 col-md-3 col-lg-3 footer-links">
      <h4 class="h4">information</h4>
      <ul>
       <li><a href="#">About us</a></li>
       <li><a href="#">Terms &amp; condition</a></li>
       <li><a href="#">My Account</a></li>
      </ul>
     </div>

     <div class="col-12 col-sm-12 col-md-3 col-lg-3 contact-box">
      <h4 class="h4">Contact Us</h4>
      <ul class="addressFooter">
       <li><i class="icon anm anm-map-marker-al"></i>
        <p>Wazirabad Road <br>,Adha Sahowala, Sialkot</p>
       </li>
       <li class="phone"><i class="icon anm anm-phone-s"></i>
        <p>0523571801</p>
       </li>
       <li class="email"><i class="icon anm anm-envelope-l"></i>
        <p>info@forward.pk</p>
       </li>
      </ul>
     </div>
    </div>
   </div>
   <!--End Footer Links-->
   <hr>
   <div class="footer-bottom">
    <div class="row">
     <!--Footer Copyright-->
     <div class="col-12 col-sm-12 col-md-6 col-lg-6 order-1 order-md-0 order-lg-0 order-sm-1 copyright text-sm-center text-md-left text-lg-left"><span></span> <a href="#">Forward Sports Pvt Ltd.</a></div>
     <!--End Footer Copyright-->
     <!--Footer Payment Icon-->

     <!--End Footer Payment Icon-->
    </div>
   </div>
  </div>
 </div>
</footer>
<!-- Including Jquery -->

<script src="<?php echo base_url(); ?>assets/js/vendor/jquery-3.3.1.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/vendor/modernizr-3.6.0.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/vendor/jquery.cookie.js"></script>
<script src="<?php echo base_url(); ?>assets/js/vendor/wow.min.js"></script>
<!-- Including Javascript -->
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/plugins.js"></script>
<script src="<?php echo base_url(); ?>assets/js/popper.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/lazysizes.js"></script>
<script src="<?php echo base_url(); ?>assets/js/main.js"></script>
<!--For Newsletter Popup-->
<script>
 jQuery(document).ready(function() {
  jQuery('.closepopup').on('click', function() {
   jQuery('#popup-container').fadeOut();
   jQuery('#modalOverly').fadeOut();
  });

  var visits = jQuery.cookie('visits') || 0;
  visits++;
  jQuery.cookie('visits', visits, {
   expires: 1,
   path: '/'
  });
  console.debug(jQuery.cookie('visits'));
  if (jQuery.cookie('visits') > 1) {
   jQuery('#modalOverly').hide();
   jQuery('#popup-container').hide();
  } else {
   var pageHeight = jQuery(document).height();
   jQuery('<div id="modalOverly"></div>').insertBefore('body');
   jQuery('#modalOverly').css("height", pageHeight);
   jQuery('#popup-container').show();
  }
  if (jQuery.cookie('noShowWelcome')) {
   jQuery('#popup-container').hide();
   jQuery('#active-popup').hide();
  }
 });

 jQuery(document).mouseup(function(e) {
  var container = jQuery('#popup-container');
  if (!container.is(e.target) && container.has(e.target).length === 0) {
   container.fadeOut();
   jQuery('#modalOverly').fadeIn(200);
   jQuery('#modalOverly').hide();
  }
 });

 function qnt_incre(){
		$("#header-cart").on("click",".qtyBtn", function() {
		  var qtyField = $(this).parent(".qtyField"),
			 oldValue = $(qtyField).find(".qty").val(),
			  newVal = 1;
	
		  if ($(this).is(".plus")) {
			newVal = parseInt(oldValue) + 1;
		  } else if (oldValue > 1) {
			newVal = parseInt(oldValue) - 1;
		  }
		  $(qtyField).find(".qty").val(newVal);
		  var index = $(this).attr("data-src");
		  let url = '<?php echo base_url(); ?>ProductDetails/updateCart';
		  $.post(url, {
				  'index': index,
				  'Quantity': newVal
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
	
    $(".detailsCustom").on("click",".qtyBtn2", function() {
		  var qtyField = $(this).parent(".qtyField2"),
			 oldValue = $(qtyField).find(".qty2").val(),
			  newVal = 1;
	
		  if ($(this).is(".plus2")) {
			newVal = parseInt(oldValue) + 1;
		  } else if (oldValue > 1) {
			newVal = parseInt(oldValue) - 1;
		  }
		  $(qtyField).find(".qty2").val(newVal);
      $("#Quantity2").val(newVal);
		  var idTest = $("#TestId").val();
      let price = $(`#OriginalPrice`).val();
      let finalPrice = parseInt(price) * newVal;
      $(`#Price${idTest}`).text(finalPrice);
		  // let url = '<?php echo base_url(); ?>ProductDetails/updateCart';
		  // $.post(url, {
			// 	  'index': index,
			// 	  'Quantity': newVal
			//   },
			//   function(data, status) {
			// 	  let htmlGet = data[1];
			// 	  let htmlGetModified = htmlGet.replace(/\\/g, '');
			// 	  $('#header-cart').html('');
			// 	  $('#CartCount').html('');
			// 	  $('#header-cart').html(htmlGetModified);
			// 	  $('#CartCount').html(data[2]);
			//   })
		});
	}
	qnt_incre();
</script>
<!--End For Newsletter Popup-->
</div>
</body>

<!-- belle/index.html   11 Nov 2019 12:20:55 GMT -->

</html>