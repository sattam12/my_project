<?php include("./config/db.php");?>
<?php include("./scripts/insert.php"); 
$error1 = "";
$error2 = "";
$error3 = "";
$error4 = "";
$error5 = "";


?>


<div class="container">
	
		<div class="row" style="text-align: center;">
			<h3>تسجيل في العربات</h3>
		</div>

		<div class="row sub_msg">
			<p>اداراة خدمات التنقل</p>
		</div>

		<div class="row signup">
			
			<div class="row">
				<h3>مرحبا بكم </h3>
			</div>

			<form action="" method="post" class="form-horizontal">

              <?php echo $error1;?>
              <?php echo $error2;?>
              <?php echo $error3;?>
              <?php echo $error4;?>
              <?php echo $error5;?>

				<div class="row form-group input_group">
					<label for="" class="col-sm-2">ايميل:</label>
                    <div class="col-sm-10">
                    	<input type="text" name="email" id="email" class="form-control">
                    	<span id="errorEmail"></span>
                    </div>
				</div>
				
				<div class="row form-group input_group">
					<label for="" class="col-sm-2">الاسم:</label>
                    <div class="col-sm-10">
                    	<input type="text" name="firstname" id="firstname" class="form-control">
                    	<span id="errorFirstname"></span>
                    </div>
				</div>

				<div class="row form-group input_group">
					<label for="" class="col-sm-2">اللقب:</label>
                    <div class="col-sm-10">
                    	<input type="text" name="lastname" id="lastname" class="form-control">
                    	<span id="errorLastname"></span>
                    </div>
				</div>

				<div class="row form-group input_group">
					<label for="" class="col-sm-2">كلمة المرور:</label>
                    <div class="col-sm-10">
                    	<input type="password" name="password" id="password" class="form-control">
                    	<span id="errorPassword"></span>
                    </div>
				</div>

				<div class="row form-group " style="margin: 0px 10px 20px 10px;" >
                    <div class="col-xs-13">
                    	<input type="submit" name="submit" id="submit" class="form-control">
                    </div>
				</div>

			</form>





		</div>




</div>