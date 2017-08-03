<?php
?>
<!DOCTYPE html>
<html>
<head>
	<title>DigiStoreee</title>
	<?php include 'head.php';?>
	<script src="https://www.gstatic.com/firebasejs/4.2.0/firebase-app.js"></script>
	<script src="https://www.gstatic.com/firebasejs/4.2.0/firebase-auth.js"></script>
	<script src="https://www.gstatic.com/firebasejs/4.2.0/firebase-database.js"></script>
	<!-- <script src="https://www.gstatic.com/firebasejs/4.2.0/firebase.js"></script> -->
	
</head>
<body>
 <a class='w3-text-khaki' href="<?php echo site_url('Welcome/') ?>">Home</a>
<?php //echo anchor('Login/','Login'); ?> 
<div class="w3-display-container" style="height:500px;">
  <div class="w3-display-middle">
  	<div class="w3-card-4" style="width: 500px;">

		<header class="w3-container w3-blue">
		  <h1>Login</h1>
		</header>

		<div class="w3-container">
		  <div class="w3-container">
			<label>Email</label>
			<input class="w3-input" type="text" id="email">

			<label>Password</label>
			<input class="w3-input" type="text" id="password">
		  </div>
		</div>
		<br><br>
		<footer class="w3-container w3-blue" style="width: 500px;">
			<div class="w3-row">
  				<!-- <h6>Doesn't have account yet? <a href="#">Register</a></h6> -->
  				<div class="w3-half w3-container">
  					<h6>Doesn't have account yet? <a href="<?php echo site_url('Registrasi/') ?>">Register</a></h6>
  				</div>
  				<div class="w3-half w3-container w3-padding" align="right">
  					<button class="w3-btn" id="btn-login">Login</button>
  				</div>
  			</div>
  				
		</footer>

	</div>
  </div>
</div>
<br/>
<div id="id01" class="w3-modal">
  <div class="w3-modal-content">
    <div class="w3-container" style="height: 400px;">
      <!-- <span onclick="document.getElementById('id01').style.display='none'" 
      class="w3-button w3-display-topright">&times;</span> -->
      <div class="w3-display-middle">
      	<p>Proccessing Data</p>
      	<div class="loader"></div>
      </div>
      
    </div>
  </div>
</div>

<script src="https://www.gstatic.com/firebasejs/4.2.0/firebase.js"></script>
<script>
  // Initialize Firebase
  initFirebase();
</script>
<script type="text/javascript">
	document.getElementById('btn-login').addEventListener('click', toggleSignIn, false);
	function toggleSignIn() {
      if (firebase.auth().currentUser) {
        // [START signout]
        firebase.auth().signOut();
        // [END signout]
      } else {
        var email = document.getElementById('email').value;
        var password = document.getElementById('password').value;
        if (email.length < 4) {
          alert('Please enter an email address.');
          return;
        }
        if (password.length < 4) {
          alert('Please enter a password.');
          return;
        }
        // Sign in with email and pass.
        // [START authwithemail]
        firebase.auth().signInWithEmailAndPassword(email, password).catch(function(error) {
          // Handle Errors here.
          var errorCode = error.code;
          var errorMessage = error.message;
          // [START_EXCLUDE]
          if (errorCode === 'auth/wrong-password') {
            alert('Wrong password.');
          } else {
            alert(errorMessage);
          }
          console.log(error);
          //document.getElementById('quickstart-sign-in').disabled = false;
          // [END_EXCLUDE]
        });

        /*var user = firebase.auth().currentUser;
		var name, emaill, photoUrl, uid, emailVerified;

		if (user != null) {
			emaill = user.email;
			//console.log(emaill);
		}else{
			alert("no user");
		}*/
		//alert(emaill);
		//console.log(emaill);
        // [END authwithemail]
        //passVal(email);

        /*$.ajax({
		type: "POST",
		url: "<?php //echo base_url() ?>Login/login",
		dataType: 'json',
		data: {name: email},
		success: function(res){
			alert('sukses');
		}
		});*/
        //setTimeout('redirectPage(1)', 5000);
        /*$.ajax({
        type: "POST",
        url: "<?php// echo base_url()?>Login/login",
        data: {"myOrderString": email},  
        success: function (data) {
        	//alert('sukses');
        	console.log('sukses');
        }
       });*/
       passData(email);

      }
      /*firebase.auth().onAuthStateChanged(function(user) {
  if (user) {
    
    var emaill = user.email;
    console.log(emaill);
  } else {
  	alert("no user");
    
  }
});*/
      	/*<?php //redirect('Account/');?>*/
       /*$.ajax({
        type: "POST",
        url: "Login/login",
        data: {"myOrderString": "email"},  
        success: function (data) {
        	alert('sukses');
        }
       });*/
      //alert("Logged in");
      //window.location.replace("../Welcome/");
      //document.getElementById('id01').style.display='block';
       
      
      //setTimeout('passVal()', 5000);
      /*var data = {
        email: email,
    	str: "this_is_a_dummy_test_string"
    };

	$.post("<?php //echo base_url() ?>Account/", data);*/
      
    }

    function passVal(email){
    /*var data = {
        email: "email",
    	str: "this_is_a_dummy_test_string"
    };

	$.post("<?php //echo base_url() ?>Login/");*/
	
	//setTimeout('redirectPage(1)', 5000);
	/*var data = {
        email: email,
    	str: "this_is_a_dummy_test_string"
    };

	$.post("<?php// echo base_url() ?>Login/login", data);*/
	/*jQuery.ajax({
		type: "POST",
		url: "<?php echo base_url() ?>login/login",
		dataType: 'json',
		data: {name: email},
		success: function(res){
			alert('sukses');
		}
	});*/
}



</script>
</body>
</html>