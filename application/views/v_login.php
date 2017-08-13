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
<?php //echo $email; ?> 
<div class="w3-display-container" style="height:500px;">
  <div class="w3-display-middle">
  	<div class="w3-card-4" style="width: 500px;">

		<header class="w3-container w3-blue">
		  <h1>Login</h1>
		</header>

		<div class="w3-container">
		  <div class="w3-container">
			<!-- <label>Email</label>
			<input class="w3-input" type="text" id="email">

			<label>Password</label>
			<input class="w3-input" type="text" id="password"> -->
			<?php $attributes = array("name" => "loginform");
				echo form_open("Login/login", $attributes);?>				
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
  				<?php echo form_close(); ?>
  			</div>
  				
		</footer>

	</div>
  </div>
</div>
<br/>
<div id="id01" class="w3-modal">
  <div class="w3-modal-content">
    <div class="w3-container" style="height: 400px;">
      <span onclick="document.getElementById('id01').style.display='none'" 
      class="w3-button w3-display-topright">&times;</span>
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
/*document.getElementById("btn-login").addEventListener("click",toggleSignIn,!1);
function toggleSignIn(){if(firebase.auth().currentUser)firebase.auth().signOut();else{var a=document.getElementById("email").value,b=document.getElementById("password").value;4>a.length?alert("Please enter an email address."):4>b.length?alert("Please enter a password."):(firebase.auth().signInWithEmailAndPassword(a,b)["catch"](function(a){var b=a.message;"auth/wrong-password"===a.code?alert("Wrong password."):alert(b);console.log(a)}),(a=firebase.auth().currentUser)?console.log(a.email):console.log("no user"))}};*/
	/*$(document).ready(function() {
		if (firebase.auth().currentUser) {
        // [START signout]
        firebase.auth().signOut();
        
      } 
	});*/
	//document.getElementById('btn-login').addEventListener('click', toggleSignIn, false);
	function toggleSignIn() {
      if (firebase.auth().currentUser) {
        // [START signout]
        firebase.auth().signOut();
        
      } else {
        var email = document.getElementById('email').value;
        var password = document.getElementById('password').value;
        console.log(email+" "+password);
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
          // [END_EXCLUDE]
        });
        

      }
     /* var user = firebase.auth().currentUser;

		if (user) {
		  
		  console.log(user.email);
		} else {
		  console.log('no user');
		}*/
     
      
    }


</script>
</body>
</html>