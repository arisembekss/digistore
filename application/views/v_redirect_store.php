<?php  
//echo $id_user;
$meja_qr=array();
$query = $this->db->query("select qr_code from meja_store where id_user = ".$id_user."&& id_store=".$id_store);
foreach ($query->result() as $q) {
	# code...
	$meja_qr[]=$q->qr_code;
}

echo implode($meja_qr);
?>
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
		
	</div>
</div>
</body>