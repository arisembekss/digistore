<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php include 'head.php';?>
	<script src="https://www.gstatic.com/firebasejs/4.2.0/firebase-app.js"></script>
	<script src="https://www.gstatic.com/firebasejs/4.2.0/firebase-auth.js"></script>
	<script src="https://www.gstatic.com/firebasejs/4.2.0/firebase-database.js"></script>
	<script src="https://www.gstatic.com/firebasejs/4.2.0/firebase.js"></script>
</head>
<body>
<?php include 'i_sidenav.php';?>

<div zclass="w3-main" id="main">
	<div class="w3-teal">
		<div class="w3-row">
			<div class="w3-third w3-container">
			  
			  <div class="w3-container">
			  	<button class="w3-button w3-teal w3-xlarge" onclick="w3_open()">&#9776;</button>
			    <h1>My Page</h1>
			    
			  </div>
			</div>
			<div class="w3-third w3-container">
				
			</div>
			<div class="w3-third w3-container">
				<h2>Hai, <?php echo $this->session->userdata("unama"); ?></h2>
				<br><a href="<?php echo base_url('Login/logout'); ?>">Logout</a><br><br>
			</div>
		</div>
	  
	</div>

	

	<div class="w3-container">
		<h1>Login berhasil !</h1>
		
		<br><?php echo $this->session->userdata("uemail"); ?>
		<br><?php //echo $this->session->userdata("uid"); ?>
		
	</div>
	


</div>

<?php  
	/*foreach ($data as $u) {
		# code...

		echo $u->nama."<br>".$u->email."<br>";
	}*/
?>
	<script>
	  // Initialize Firebase
	  initFirebase();
	  function w3_open() {
	  document.getElementById("main").style.marginLeft = "25%";
	  document.getElementById("mySidebar").style.width = "25%";
	  document.getElementById("mySidebar").style.display = "block";
	  document.getElementById("openNav").style.display = 'none';
	}
	function w3_close() {
	  document.getElementById("main").style.marginLeft = "0%";
	  document.getElementById("mySidebar").style.display = "none";
	  document.getElementById("openNav").style.display = "inline-block";
	}
	</script>

	<script type="text/javascript">
		/*var userId = "ret5545454";
		var query = firebase.database().ref("user/"+userId+"/toko").orderByKey();
		query.once("value")
		  .then(function(snapshot) {
		    snapshot.forEach(function(childSnapshot) {
		      
		      var key = childSnapshot.key;
		      console.log(key);
		      
		  });
		});*/
	</script>
</body>
</html>
