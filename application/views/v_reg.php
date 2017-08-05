<?php
?>
<!DOCTYPE html>
<html>
<head>
	<title>DigiStore</title>
	<?php include 'head.php';?>
	<script src="https://www.gstatic.com/firebasejs/4.2.0/firebase-app.js"></script>
	<script src="https://www.gstatic.com/firebasejs/4.2.0/firebase-auth.js"></script>
	<script src="https://www.gstatic.com/firebasejs/4.2.0/firebase-database.js"></script>
</head>
<body>
 <a class='w3-text-khaki' href="<?php echo site_url('Welcome/') ?>">Home</a>
<?php //echo anchor('Login/','Login'); ?> 
<div class="w3-display-container" style="height:500px;">
  <div class="w3-display-middle">
  	<div class="w3-card-4" style="width: 500px;">

		<header class="w3-container w3-blue">
		  <h1>Create Account</h1>
		</header>

		<div class="w3-container">
		  	<!-- <label>First Name</label>
			<input class="w3-input" type="text">

			<label>Last Namel</label>
			<input class="w3-input" type="text">

			<label>Email</label>
			<input class="w3-input" type="text" id="email">

			<label>Password</label>
			<input class="w3-input" type="text" id="password"> -->
			<?php $attributes = array("name" => "registrationform");
				echo form_open("Registrasi/user_regis", $attributes);?>
				<div class="form-group">
					<label for="name"></label>
					<input class="w3-input" name="fname" placeholder="Your First Name | without space" type="text" value="<?php echo set_value('fname'); ?>" />
					<span class="text-danger"><?php echo form_error('fname'); ?></span>
				</div>

				<div class="form-group">
					<label for="name"></label>
					<input class="w3-input" name="lname" placeholder="Last Name" type="text" value="<?php echo set_value('lname'); ?>" />
					<span class="text-danger"><?php echo form_error('lname'); ?></span>
				</div>
				
				<div class="form-group">
					<label for="email"></label>
					<input class="w3-input" name="email" placeholder="Email-ID" type="text" value="<?php echo set_value('email'); ?>" />
					<span class="text-danger"><?php echo form_error('email'); ?></span>
				</div>

				<div class="form-group">
					<label for="subject"></label>
					<input class="w3-input" name="password" placeholder="Password" type="password" />
					<span class="text-danger"><?php echo form_error('password'); ?></span>
				</div>

				<div class="form-group">
					<label for="subject"></label>
					<input class="w3-input" name="cpassword" placeholder="Confirm Password" type="password" />
					<span class="text-danger"><?php echo form_error('cpassword'); ?></span>
				</div>

				<!-- <div class="form-group">
					<button name="submit" type="submit" class="btn btn-default">Signup</button>
					<button name="cancel" type="reset" class="btn btn-default">Cancel</button>
				</div> -->
				
		</div>
		<br><br>
		<footer class="w3-container w3-blue" style="width: 500px;">
			<div class="w3-row">
  				<!-- <h6>Doesn't have account yet? <a href="#">Register</a></h6> -->
  				<div class="w3-half w3-container">
  					<h6>Have account yet? <a href="<?php echo site_url('Login/') ?>">Login</a></h6>
  				</div>
  				<div class="w3-half w3-container w3-padding" align="right">
  					<button class="w3-btn" id="btn-reg">Register</button>
  				</div>
  				<?php echo form_close(); ?>
  				<?php //echo $this->session->flashdata('msg'); ?>
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
		//document.getElementById('quickstart-sign-in').addEventListener('click', toggleSignIn, false);
      	//document.getElementById('btn-reg').addEventListener('click', handleSignUp, false);

      	function handleSignUp() {
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
	      // [START createwithemail]
	      firebase.auth().createUserWithEmailAndPassword(email, password).catch(function(error) {
	        // Handle Errors here.
	        var errorCode = error.code;
	        var errorMessage = error.message;
	        // [START_EXCLUDE]
	        if (errorCode == 'auth/weak-password') {
	          alert('The password is too weak.');
	        } else {
	          alert(errorCode);
	        }
	        console.log(error);
	        // [END_EXCLUDE]
	      });
	      // [END createwithemail]
	      document.getElementById('id01').style.display='block';
	      setTimeout('redirectPage(2)', 5000);
	      //window.location.replace("<?php //echo site_url('Login/') ?>");
	      //window.location.href = "http://localhost/digistore/Login/";
	    }
	</script>
</body>
</html>