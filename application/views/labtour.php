<?php
$this->load->view('Header');
?>
<!--End Mobile Menu-->

<!--Body Content-->
<div id="page-content">
 <!--Page Title-->
 <!-- <div class="collection-header">
        <div class="collection-hero">
            <div class=" collection-hero__imageCustom"><img class="blur-up lazyload" data-src="<?php echo base_url(); ?>assets/images/cat-women6.jpg" src="assets/images/cat-women2.jpg" height="150px" width="100%" style="background-size: fixed; background-repeat:no-repeat;" alt="Women" title="Women" /></div>
            <div class="collection-hero__title-wrapper">
            </div>
        </div>
    </div> -->
    
   <!-- <h2 class="text-center">Lab Tour</h2> -->
   <video autoplay loop id="myVideo"  >
  <source src="Assets/video/forward.mp4" type="video/mp4">
  
</video>

 <br>
 <br>
 <br>
 <br>
 <!--End Page Title-->
 <?php

$this->load->view('FooterVideo');
?>

<script>
$(document).ready(function(){
  var video = document.getElementById("myVideo");
  video.play();
});
// function myFunction() {
//     var video = document.getElementById("myVideo");
//   if (video.paused) {
//     video.play();
//   } else {
//     video.pause();
//   }
// }
</script>
<!--End Body Content-->
