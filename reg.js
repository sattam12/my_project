$(document).ready(function() {
	$("#submit").click(function(e) {
		e.preventDefault();
      
      var email = $("#email").val();
      var firstname = $("#firstname").val();
      var lastname = $("#lastname").val();
      var password = $("#password").val();


      var valid = true;

      if(firstname == "" || !isNameValid(firstname)) {
      	valid = false;
      	$("#errorFirstname").html("firstname is impty");
      } else{
      	$("#errorFirstname").html("");
      }  

      if(lastname == "" || !isNameValid(lastname)) {
      	valid = false;
      	$("#errorLastname").html("lastname is impty");
      } else{
      	$("#errorLastname").html("");
      }  

      if (email == "" || !isEmailValid(Eamil)) {
      	$("#errorEmail").html("Eamil cannot empty");
      } else{
      	$("#errorEmail").html("");
      } 

      if (password == "" || !isPasswordValid(password)) {
      	$("#errorPassword").html("password cannot empty");
      } else{
      	$("#errorPassword").html("");
      }


      if (valid == true) {
      	var from_data = {
      		firstname: firstname,
      		lastname: lastname,
      		email: email,
      		password: password,
      	};

         $.ajax({

         	url:"../scrpit/insert.php",
         	type: "POST",
         	data:from_data,
         	success: function(data){
         		
         	}

         });

      }


	});
});

  function isNameValid(name){
  	return /[A-Z]+/i.test(name) && /[a-z]+/.test(name) && /\S{7,15}/.test(name);
  }

  function isEmailValid(emailAddress){
  	var pattern = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
  	return pattern.test(emailAddress);
  }

  function isPasswordValid(string){
  	return /[A-Z]+/.test(string) && /[a-z]+/.test(string) && /[\d\w]/.test(string) && /\S{7,15}/.test(string);
  }