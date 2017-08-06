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
<h1>Login berhasil !</h1>
	<h2>Hai, <?php echo $this->session->userdata("unama"); ?></h2>
	<br><?php echo $this->session->userdata("uemail"); ?>
	<br><?php //echo $this->session->userdata("uid"); ?>
	<br><a href="<?php echo base_url('Login/logout'); ?>">Logout</a><br><br>
<?php  
	/*foreach ($data as $u) {
		# code...

		echo $u->nama."<br>".$u->email."<br>";
	}*/
?>
	<script>
	  // Initialize Firebase
	  initFirebase();
	</script>

	<script type="text/javascript">
		var userId = "ret5545454";
		var query = firebase.database().ref("user/"+userId+"/toko").orderByKey();
		query.once("value")
		  .then(function(snapshot) {
		    snapshot.forEach(function(childSnapshot) {
		      // key will be "ada" the first time and "alan" the second time
		      var key = childSnapshot.key;
		      console.log(key);
		      // childData will be the actual contents of the child
		      //var childData = childSnapshot.val();
		  });
		});
	</script>
</body>
</html>
