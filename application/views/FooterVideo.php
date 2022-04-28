
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

<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/6130a893d6e7610a49b34437/1fej150ks';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>

</div>
</body>

<!-- belle/index.html   11 Nov 2019 12:20:55 GMT -->

</html>