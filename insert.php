
<?php  include("./lib/swift_required.php"); ?>  
<?php
   
    global $connection;
    global $error1, $error2, $error3, $error4, $error5;

    $f_name = $l_name = $email = $password = "";

    if (isset($_POST['submit'])) {

       $firstname = $_POST['firstname'];
       $lasttname = $_POST['lastname'];
       $firstname = $_POST['email'];
       $firstname = $_POST['password'];

       $sql_query = mysqli_query($connection, "SELECT * FROM 'signup' WHERE email = '{$email}'");
       $count = mysqli_num_rows($sql_query);

       if(!empty($firstname) && !empty($lastname) && !empty($email) && !empty($pass_word)){

       	if($count > 0){
       		$error1 = "<div class='alert alert-danger'>
			  <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
			  حسابك موجود مسبقا
			</div>";


       	}else{
       		$f_name = ucwords(mysqli_real_escape_string($connection, $firstname));
       		$l_name = uswords(mysqli_real_escape_string($connection, $lastname));
       		$email = mysqli_real_escape_string($connection, $email);
       		$password = mysqli_real_escape_string($connection, $password);

       		if(!filter_var($email, FILATER_VALIDATE_EMAIL)){
       			$error2 = "<div class='alert alert-danger email-alet'>
			  <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
			   الايميل غير صحيح
			</div>";

       		}

       		if(!preg_match("/^[a-zA-Z]*$/", $f_name)){
       			$error3 = "<div class='alert alert-danger'>
			  <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
			   only letters Allowed for firstname
			</div>";

       		}

       		if(!preg_match("/^[a-zA-Z]*$/", $l_name)){
       			$error4 = "<div class='alert alert-danger'>
			  <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
			   only letters Allowed for lastname
			</div>";

       	}

       	   if (!preg_match('/^\S*(?=\S{7,15}) (?=\S*[a-z]) (?=\S*[A-Z]) (?=\S*[\d])\S*$/', $pass_word)) {
                   
                 $error5 =  "<div class='alert alert-danger'>
			  <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
			   password must be between from 7 to 15 charactar 
			</div>"; 
       	   	  
       	   }

       	   if ((preg_match("/^[a-zA-Z]*$/", $f_name)) && (preg_match("/^[a-zA-Z]*$/", $l_name)) &&
       	    (filter_var($email, FILATER_VALIDATE_EMAIL)) && (preg_match('/^\S*(?=\S{7,15}) (?=\S*[a-z]) (?=\S*[A-Z]) (?=\S*[\d])\S*$/', $pass_word))){

       	   	$user_activation_key = md5(rand().time());
       	    $sql = "INSERT TNTO signup (email, firstname, lastname, password, activation_key, is_active, date_time) VALUE('{$email}', '{$f_name}', '{$l_name}', '{$password}', '{$user_activation_key}', '0', now())";
       	    $query = mysqli_query($connection, $sql);

       	    if (!$query) {
       	    	die("QUERY FAILED" . mysqli_error($connection));
       	    }
       	   	
       	   }
       }


       }else{

       	   if (empty($firstname)) {

       	   	    $error3 = "<div class='alert alert-danger email-alet'>
			  <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
			   firstname field cannot be empty
			</div>";


       	   }

       	   if (empty($lasttname)) {

       	   	    $error4 = "<div class='alert alert-danger email-alet'>
			  <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
			   lastname field cannot be empty
			</div>";


       	   }
           
           if (empty($email)) {

       	   	    $error2 = "<div class='alert alert-danger email-alet'>
			  <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
			   email field cannot be empty
			</div>";


       	   }
           if (empty($password)) {

       	   	    $error5 = "<div class='alert alert-danger email-alet'>
			  <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
			   password field cannot be empty
			</div>";


       	   }



       }
    }


?>