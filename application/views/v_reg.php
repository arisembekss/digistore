<?php
?>
<!DOCTYPE html>
<html>
<head>
	<title>DigiStore</title>
	<?php include 'head.php';?>
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
		  <p>Lorem ipsum...</p>
		</div>

		<footer class="w3-container w3-blue" style="width: 500px;">
			<div class="w3-row">
  				<!-- <h6>Doesn't have account yet? <a href="#">Register</a></h6> -->
  				<div class="w3-half w3-container">
  					<h6>Have account yet? <a href="<?php echo site_url('Login/') ?>">Login</a></h6>
  				</div>
  				<div class="w3-half w3-container w3-padding" align="right">
  					<button class="w3-btn">Login</button>
  				</div>
  			</div>
  				
		</footer>

	</div>
  </div>
</div>
<br/>

</body>
</html>