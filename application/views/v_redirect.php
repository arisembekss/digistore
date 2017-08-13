<!DOCTYPE html>
<html>
<head>
	<title>DigiStoreee</title>
	<?php include 'head.php';?>
	<script src="https://www.gstatic.com/firebasejs/4.2.0/firebase-app.js"></script>
	<script src="https://www.gstatic.com/firebasejs/4.2.0/firebase-auth.js"></script>
	<script src="https://www.gstatic.com/firebasejs/4.2.0/firebase-database.js"></script>
	<meta http-equiv="refresh" content="5; url=<?php echo base_url('Login/');?>" />
	<!-- <script src="https://www.gstatic.com/firebasejs/4.2.0/firebase.js"></script> -->
	
</head>
<body>
	<?php //echo $nama;?>
	<input type="hidden" name="email" id="email" value="<?php echo $email;?>">
	<input type="hidden" name="pass" id="pass" value="<?php echo $pass;?>">
	<input type="hidden" name="user_id" id="user_id" value="<?php echo $user_id;?>">
	<input type="hidden" name="username" id="username" value="<?php echo $namad."_".$namab;?>">

	<script src="https://www.gstatic.com/firebasejs/4.2.0/firebase.js"></script>
	<script>
	  // Initialize Firebase
	  initFirebase();
	</script>

	<script type="text/javascript">
		/*$(document).ready(function() {
			var email = $("input#email").val();
			var password = $("input#pass").val();
			var uname = $("input#username").val();
			var user_id = $("input#user_id").val();
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

			firebase.database().ref('users/' + user_id).set({
			    username: uname,
			    email: email,
			    jml_resto : "0"
			});
		});*/
		$(document).ready(function(){var a=$("input#email").val(),e=$("input#pass").val(),s=$("input#username").val(),r=$("input#user_id").val();firebase.auth().createUserWithEmailAndPassword(a,e)["catch"](function(a){var e=a.code;a.message;"auth/weak-password"==e?alert("The password is too weak."):alert(e),console.log(a)}),firebase.database().ref("users/"+r).set({username:s,email:a,jml_resto:"0"})});
	</script>
</body>