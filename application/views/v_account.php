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
			foreach ($this->m_data->select_data("user_store",$where)->result() as $us) {
				
				echo $us->nama_store."<br/>";
			}
		?>
		
	</div>
	


</div>

<?php include 'i_form_add_store.php';?>

	<script>
	  // Initialize Firebase
	 /* initFirebase();
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
	}*/
	function w3_open(){document.getElementById("main").style.marginLeft="25%",document.getElementById("mySidebar").style.width="25%",document.getElementById("mySidebar").style.display="block",document.getElementById("openNav").style.display="none"}function w3_close(){document.getElementById("main").style.marginLeft="0%",document.getElementById("mySidebar").style.display="none",document.getElementById("openNav").style.display="inline-block"}initFirebase();
	</script>

	<script type="text/javascript">
		
	</script>
</body>
</html>
