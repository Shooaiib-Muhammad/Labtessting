<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Lab Testing Portal</title>
  <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/LabLogo.png" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<style>
    @import url(https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,800,700,600,300);
/*basic reset*/
 * {
	 margin: 0;
	 padding: 0;
}
 html {
	 height: 100%;
	/*Image only BG fallback*/
	 background: #fff;
}
 body {
	 font-family: 'Open Sans', sans-serif;
}
/*form styles*/
 #msform {
	 width: 500px;
	 margin: 0px auto;
	 text-align: center;
	 position: absolute;
	 left: 50%;
	 top: 50%;
	 transform: translate(-50%, -50%);
	 background: #fff;
	 min-height: 315px;
	 border-radius: 10px;
	 box-shadow: 0px 10px 15px rgba(0, 0, 0, 0.2);
}
 #msform fieldset {
	 background: #fff;
	 border: 0 none;
	 border-radius: 10px;
	/*box-shadow: 0 0 15px 1px rgba(0, 0, 0, 0.4);
	*/
	 padding: 20px 30px;
	 font-family: 'Open Sans', sans-serif;
	 box-sizing: border-box;
	 width: 100%;
	 position: absolute;
	 top: 50%;
	 left: 50%;
	 transform: translate(-50%, -50%);
}
/*Hide all except first fieldset*/
 #msform fieldset:not(:first-of-type) {
	 display: none;
	 font-family: 'Open Sans', sans-serif;
}
/*inputs*/
 #msform input, #msform textarea {
	 padding: 15px;
	 border: 1px solid #ccc;
	 border-radius: 8px;
	 margin-bottom: 10px;
	 width: 100%;
	 box-sizing: border-box;
	 font-family: 'Open Sans', sans-serif;
	 color: #000;
	 font-size: 13px;
	 background: #fff;
}
/*buttons*/
 #msform .action-button {
	 width: fit-content;
	 background: #2fc877;
	 font-weight: bold;
	 color: white;
	 border: 0 none;
	 border-radius: 40px;
	 cursor: pointer;
	 padding: 10px 20px;
	 margin: 10px 5px;
}
#msform .action-button-back {
	 width: fit-content;
	 background: black;
	 font-weight: bold;
	 color: white;
	 border: 0 none;
	 border-radius: 40px;
	 cursor: pointer;
	 padding: 10px 20px;
	 margin: 10px 5px;
}
 #msform .previous {
	 width: 100px;
	 background: #545153;
	 font-weight: bold;
	 color: white;
	 border: 0 none;
	 border-radius: 40px;
	 cursor: pointer;
	 padding: 10px 20px;
	 margin: 10px 5px;
}
 #msform .action-button:hover, #msform .action-button:focus {
	 background: #52ba7e;
}
 #msform .previous:hover, #msform .previous:focus {
	 background: #353334;
}
/*headings*/
 .h2 {
	 font-family: 'Open Sans', sans-serif;
	 font-weight: 800;
	 font-size: 30px;
	 color: #2c3e50;
	 margin: 25px 0;
}
 .h3 {
	 font-family: 'Open Sans', sans-serif;
	 font-weight: 400;
	 font-style: italic;
	 font-size: 15px;
	 color: #666;
	 margin-bottom: 20px;
}
 .h1 {
	 margin: 40px 0;
	 font-weight: 800;
	 font-size: 48px;
	 font-family: 'Open Sans', sans-serif;
	 color: #2fc877;
}
/*logo*/
 .powered {
	 padding-top: 20px;
	 margin-bottom: 10px;
	 clear: both;
	 font-family: 'Open Sans', sans-serif;
	 font-weight: 700;
	 font-style: italic;
	 font-size: 10px;
	 color: #292929;
}
 .logo {
	 margin: 0 2px;
	 width: 40px;
	 height: auto;
}
 label {
	 transition-property: top, opacity;
	 transition-duration: 0.2s;
	 position: absolute;
	 top: 0.5em;
	 font-size: 0.75em;
	 font-weight: bold;
	 color: #ccc;
	 padding-left: 1.333333em;
	 opacity: 1;
}
 label.valid {
	 opacity: 1;
	 top: #000;
	 color: #ccc !important;
}
 label.hasValue {
	 top: #000;
	 opacity: 1;
}
 label.noFocus {
	 color: #ccc !important;
}
 label.hasFocus {
	 color: #ccc !important;
}
 input, textarea, button {
	 width: 100%;
	 padding: 1.5em 1em 0.5em;
	 border: none;
	 font-size: 1em;
	 border-radius: 2px;
	 background: #f5f5f5;
	 resize: none;
}
 input {
	 margin-bottom: 0.5em;
}
 button {
	 padding: 1em;
	 width: 50%;
	 opacity: 1;
	 color: #fff;
	 text-shadow: 0px 1px 0px #4d4d4d;
}
 body, .bgImage {
	 margin: 0;
	 height: 100%;
	 width: 100%;
	 overflow: hidden;
}
 .bgImage {
	 position: absolute;
	 background-image: url(https://image.freepik.com/free-photo/abstract-blur-hotel-interior_74190-4973.jpg);
	 background-size: cover;
	 background-position: top;
	 -webkit-filter: grayscale(70%);
	/* Safari 6.0 - 9.0 */
	 filter: grayscale(70%);
	 z-index: -1;
}
 .blobCont {
	 position: absolute;
	 width: 100vw;
	 height: 100vh;
}
 .blob:nth-child(1) {
	 animation: move1 20s infinite linear;
}
 @keyframes move1 {
	 from {
		 transform: rotate(90deg) translate(200px, 0.1px) rotate(-90deg);
	}
	 to {
		 transform: rotate(450deg) translate(200px, 0.1px) rotate(-450deg);
	}
}
 .blob:nth-child(2) {
	 animation: move2 20s infinite linear;
}
 @keyframes move2 {
	 from {
		 transform: rotate(180deg) translate(200px, 0.1px) rotate(-180deg);
	}
	 to {
		 transform: rotate(540deg) translate(200px, 0.1px) rotate(-540deg);
	}
}
 .blob:nth-child(3) {
	 animation: move3 20s infinite linear;
}
 @keyframes move3 {
	 from {
		 transform: rotate(270deg) translate(200px, 0.1px) rotate(-270deg);
	}
	 to {
		 transform: rotate(630deg) translate(200px, 0.1px) rotate(-630deg);
	}
}
 .blob:nth-child(4) {
	 animation: move4 20s infinite linear;
}
 @keyframes move4 {
	 from {
		 transform: rotate(360deg) translate(200px, 0.1px) rotate(-360deg);
	}
	 to {
		 transform: rotate(720deg) translate(200px, 0.1px) rotate(-720deg);
	}
}
 .blob:nth-child(5) {
	 animation: move5 20s infinite linear;
}
 @keyframes move5 {
	 from {
		 transform: rotate(450deg) translate(200px, 0.1px) rotate(-450deg);
	}
	 to {
		 transform: rotate(810deg) translate(200px, 0.1px) rotate(-810deg);
	}
}
 .blob:nth-child(6) {
	 animation: move6 20s infinite linear;
}
 @keyframes move6 {
	 from {
		 transform: rotate(540deg) translate(200px, 0.1px) rotate(-540deg);
	}
	 to {
		 transform: rotate(900deg) translate(200px, 0.1px) rotate(-900deg);
	}
}
 .blob:nth-child(7) {
	 animation: move7 20s infinite linear;
}
 @keyframes move7 {
	 from {
		 transform: rotate(630deg) translate(200px, 0.1px) rotate(-630deg);
	}
	 to {
		 transform: rotate(990deg) translate(200px, 0.1px) rotate(-990deg);
	}
}
 .blob:nth-child(8) {
	 animation: move8 20s infinite linear;
}
 @keyframes move8 {
	 from {
		 transform: rotate(720deg) translate(200px, 0.1px) rotate(-720deg);
	}
	 to {
		 transform: rotate(1080deg) translate(200px, 0.1px) rotate(-1080deg);
	}
}
 .blob:nth-child(9) {
	 animation: move9 20s infinite linear;
}
 @keyframes move9 {
	 from {
		 transform: rotate(810deg) translate(200px, 0.1px) rotate(-810deg);
	}
	 to {
		 transform: rotate(1170deg) translate(200px, 0.1px) rotate(-1170deg);
	}
}
 .blob:nth-child(10) {
	 animation: move10 20s infinite linear;
}
 @keyframes move10 {
	 from {
		 transform: rotate(900deg) translate(200px, 0.1px) rotate(-900deg);
	}
	 to {
		 transform: rotate(1260deg) translate(200px, 0.1px) rotate(-1260deg);
	}
}
 .blob:nth-child(11) {
	 animation: move11 20s infinite linear;
}
 @keyframes move11 {
	 from {
		 transform: rotate(990deg) translate(200px, 0.1px) rotate(-990deg);
	}
	 to {
		 transform: rotate(1350deg) translate(200px, 0.1px) rotate(-1350deg);
	}
}
 .blob:nth-child(12) {
	 animation: move12 20s infinite linear;
}
 @keyframes move12 {
	 from {
		 transform: rotate(1080deg) translate(200px, 0.1px) rotate(-1080deg);
	}
	 to {
		 transform: rotate(1440deg) translate(200px, 0.1px) rotate(-1440deg);
	}
}
 .blob:nth-child(13) {
	 animation: move13 20s infinite linear;
}
 @keyframes move13 {
	 from {
		 transform: rotate(1170deg) translate(200px, 0.1px) rotate(-1170deg);
	}
	 to {
		 transform: rotate(1530deg) translate(200px, 0.1px) rotate(-1530deg);
	}
}
 .blob:nth-child(14) {
	 animation: move14 20s infinite linear;
}
 @keyframes move14 {
	 from {
		 transform: rotate(1260deg) translate(200px, 0.1px) rotate(-1260deg);
	}
	 to {
		 transform: rotate(1620deg) translate(200px, 0.1px) rotate(-1620deg);
	}
}
 .blob:nth-child(15) {
	 animation: move15 20s infinite linear;
}
 @keyframes move15 {
	 from {
		 transform: rotate(1350deg) translate(200px, 0.1px) rotate(-1350deg);
	}
	 to {
		 transform: rotate(1710deg) translate(200px, 0.1px) rotate(-1710deg);
	}
}
 .blob:nth-child(16) {
	 animation: move16 20s infinite linear;
}
 @keyframes move16 {
	 from {
		 transform: rotate(1440deg) translate(200px, 0.1px) rotate(-1440deg);
	}
	 to {
		 transform: rotate(1800deg) translate(200px, 0.1px) rotate(-1800deg);
	}
}
 .blob:nth-child(17) {
	 animation: move17 20s infinite linear;
}
 @keyframes move17 {
	 from {
		 transform: rotate(1530deg) translate(200px, 0.1px) rotate(-1530deg);
	}
	 to {
		 transform: rotate(1890deg) translate(200px, 0.1px) rotate(-1890deg);
	}
}
 .blob:nth-child(18) {
	 animation: move18 20s infinite linear;
}
 @keyframes move18 {
	 from {
		 transform: rotate(1620deg) translate(200px, 0.1px) rotate(-1620deg);
	}
	 to {
		 transform: rotate(1980deg) translate(200px, 0.1px) rotate(-1980deg);
	}
}
 
</style>

</head>
<body>
<div class="bgImage"></div>
<svg class="blobCont">
    <image xlink:href="https://images.unsplash.com/photo-1500462918059-b1a0cb512f1d?ixlib=rb-0.3.5&s=e20bc3d490c974d9ea190e05c47962f5&auto=format&fit=crop&w=634&q=80" mask="url(#mask)" width="100%" height="100%" preserveAspectRatio="xMidYMid slice" />
    <defs>
        <filter id="gooey" height="130%">
            <feGaussianBlur in="SourceGraphic" stdDeviation="15" result="blur" />
            <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 18 -7" result="goo" />
        </filter>
    </defs>
    <mask id="mask" x="0" y="0">
        <g style="filter: url(#gooey)">
            <circle class="blob" cx="10%" cy="10%" r="80" fill="white" stroke="white"/>
            <circle class="blob" cx="50%" cy="10%" r="40" fill="white" stroke="white"/>
            <circle class="blob" cx="17%" cy="15%" r="70" fill="white" stroke="white"/>
            <circle class="blob" cx="90%" cy="20%" r="120" fill="white" stroke="white"/>
            <circle class="blob" cx="30%" cy="25%" r="30" fill="white" stroke="white"/>
            <circle class="blob" cx="50%" cy="60%" r="80" fill="white" stroke="white"/>
            <circle class="blob" cx="70%" cy="90%" r="10" fill="white" stroke="white"/>
            <circle class="blob" cx="90%" cy="60%" r="90" fill="white" stroke="white"/>
            <circle class="blob" cx="30%" cy="90%" r="80" fill="white" stroke="white"/>
            <circle class="blob" cx="10%" cy="10%" r="80" fill="white" stroke="white"/>
            <circle class="blob" cx="50%" cy="10%" r="20" fill="white" stroke="white"/>
            <circle class="blob" cx="17%" cy="15%" r="70" fill="white" stroke="white"/>
            <circle class="blob" cx="40%" cy="20%" r="120" fill="white" stroke="white"/>
            <circle class="blob" cx="30%" cy="25%" r="30" fill="white" stroke="white"/>
            <circle class="blob" cx="80%" cy="60%" r="80" fill="white" stroke="white"/>
            <circle class="blob" cx="17%" cy="10%" r="100" fill="white" stroke="white"/>
            <circle class="blob" cx="40%" cy="60%" r="90" fill="white" stroke="white"/>
            <circle class="blob" cx="10%" cy="50%" r="80" fill="white" stroke="white"/>
        </g>
    </mask>
</svg>

<!-- partial:index.partial.html -->
<!-- multistep form -->
<form id="msform">


      <!-- step 1 -->
      <fieldset>
	  <img src="<?php echo base_url(); ?>assets/images/LabLogo.jpg" width="100" alt="Forward Sports Pvt Ltd." title="Forward Sports Pvt Ltd." />

        <h2 class="h2">Account Verification</h2>
        <h3 class="h3">Enter your OTP below </h3>
        <!--<label>Name</label>-->

        <input type="text" name="otp" id="otp" placeholder="Enter OTP" maxlength="4" />

        <button id="ValueSend" class="next action-button" >Send OTP</button>
		<button id="homeSend" class="next action-button-back" >Back to Home</button>
      </fieldset>

      <!-- step 2 -->
      <!-- <fieldset>
        <h2 class="h2">We sent your code</h2>
        <h3 class="h3">Enter the confirmation code below</h3>
        <input type="text" name="twitter" placeholder="Enter confirmation code" />

        <input type="button" name="go back" class="previous  " value="Go back" />
        <input type="button" name="Submit" class="next action-button" value="Submit" />

      </fieldset> -->

    <!-- step 3 -->
    <!-- <fieldset>
        <h1 class="h1">Nice Job!</h1>
        <h3 class="h3">Your finished</h3>

        <input type="button" name="previous" class="next action-button" value="Close" />


      </fieldset> -->
</form>

       

        
        

<!-- jQuery -->
<script src="<?php echo base_url(); ?>assets/js/vendor/jquery-3.3.1.min.js"></script>
<!-- jQuery easing plugin -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js" type="text/javascript"></script>
<!-- partial -->
  <script>
      //jQuery time
var current_fs, next_fs, previous_fs; //fieldsets
var left, opacity, scale; //fieldset properties which we will animate
var animating; //flag to prevent quick multi-click glitches

$("#ValueSend").click(function(e){
	let otp = $("#otp").val()
	let url = '<?php echo base_url(); ?>AccountVerification/Verify';
        $.post(url, {
                'otp': otp,
                'userId':<?php echo $id; ?>
            },
            function(data, status) {
              if(data == true){
				alert("Account Verified! Click on Ok to proceed to Login")
				location.href = `<?php echo base_url(); ?>Login`;
			  }
			  else{
				  alert("OTP does not match!")
			  }
            })
			e.preventDefault();
});

$("#homeSend").click(function(e){

	location.href = `<?php echo base_url(); ?>Test`;
	e.preventDefault();
});

  </script>

</body>
</html>