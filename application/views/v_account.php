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
	<?php include 'i_headpage.php' ?>

	<div class="w3-container">
		<h1>Login berhasil !</h1>
		
		<br><?php echo $this->session->userdata("uemail"); ?>
		<br><?php //echo $this->session->userdata("uid"); ?>
		<?php 
			$idu = $this->session->userdata("iduser");
			$where = array(
				'id_user' => $idu
			);
			foreach ($this->m_login->cek_login("user_store",$where)->result() as $us) {
				
				echo $us->nama_store;
			}
		?>
		
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
