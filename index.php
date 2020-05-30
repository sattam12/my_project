<?php include("./config/db.php");?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title> موقع خدمات التنقل</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<link 
  rel="stylesheet"
  href="https://cdn.rtlcss.com/bootstrap/3.3.7/css/bootstrap.min.css"
  integrity="sha384-cSfiDrYfMj9eYCidq//oGXEkMc0vuTxHXizrMOFAaPsLt1zoCUVnSsURN+nef1lj"
  crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="./css/costom.css">

	<script
	  src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
	  crossorigin="anonymous"></script>

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<!-- 	 <script src="./js/reg.js" type="text/javascript"></script>
 -->
	<script>
		$(document).ready(function(){
			$('#myTab a'),click(function(e){
				e.preventDefault();
				$(this).tab('show');

				if(("#myTab a") !== $(this)){
					$("#errorFirstname").html("");
					$("#errorLastname").html("");
					$("#errorEmail").html("");
					$("#errorPass").html("");
					$("#error_Email").html("");
					$("#error_Pass").html("");
					$(".alert-danger").remove();
					$("alert").remove();
					$(".email_alert").remove();
				}
			});

			$("ul.nav-tabs > li a").on("shown.bs.tab", function(e){
				var id = $(e.target).attr("href").substr(1);
				window.location.hash = id;

			});

			var hash = window.location.hash;
			$('#myTab a[href="' + hash +'"]').tab('show');


		});
	</script>
<!-- 	<script src="./js/reg.js"></script>
 -->

</head>
<body>

	<nav class="navbar" style="background-color: #8DB255">
		  <div class="container">
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand crud" href="#"> خدمات التنقل </a>
		    </div>
		  </div>

   </nav>

   <div class="container">
   	<ul class="nav nav-tabs">
   		<li><a data-toggle='tab' href="#index">الصفحة الرئيسئة</a></li>
   		<li><a data-toggle='tab' href="#login">الدخول</a></li>
   		<li><a data-toggle='tab' href="#signup">تسجيل </a></li>
   		<li><a data-toggle='tab' href="#admin"> صفحة الموظفين</a></li>
   		
   	</ul>

	   	<div class="tab-content">
	     
			     <div id="index" class="tab-pane fade in">
			     	<p>الرئايسية</p>
			     </div>

			      <div id="login" class="tab-pane fade in">
			     	<p>دخول</p>
			     </div>

			      <div id="signup" class="tab-pane fade in">
			     	<?php include("./user/signup.php");?>
			     </div>

			      <div id="admin" class="tab-pane fade in">
			     	<p>مظفين</p>
			     </div>

	     </div>


   </div>

</body>
</html>