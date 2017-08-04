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
	<?php //echo $nama;?>
	<input type="hidden" name="email" id="email" value="<?php echo $email;?>">
	<input type="hidden" name="pass" id="pass" value="<?php echo $pass;?>">

	<script src="https://www.gstatic.com/firebasejs/4.2.0/firebase.js"></script>
	<script>
	  // Initialize Firebase
	  initFirebase();
	</script>

	<script type="text/javascript">
		$(document).ready(function() {
			var email = $("input#email").val();
			var password = $("input#pass").val();
			//alert(email);
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
		});
	</script>
</body>