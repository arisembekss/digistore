<?php  
//echo $id_user;
$meja_qr=array();
//$query = $this->db->query("select qr_code from meja_store where id_user = ".$id_user."&& id_store=".$id_store);
//$num_rows = $this->db->query("select qr_code from meja_store where id_user = ".$id_user."&& id_store=".$id_store)->num_rows();
/*foreach ($query->result() as $q) {
	
	$meja_qr[]=$q->qr_code;
}*/

//echo implode($meja_qr);
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
<script>
	initFirebase();
</script>
<script type="text/javascript">
	$(document).ready(function() {
		<?php
			//for ($i=0; $i < $num_rows ; $i++) { 
				# code...
				?>
				firebase.database().ref('warung/<?= $this->session->userdata('nmtoko')?>/<?= $jenis?>/<?= $this->session->userdata('lastidmenu')?>').update({
			    nama:"<?= $nama_menu?>",
			    foto:"<?= $foto?>",
			    harga:"<?= $harga?>",
			    keterangan:"<?= $keterangan?>"
				}, function(error){
					if (error) {
						alert("data couldn't be save, please try again", error)
					} else{
						setTimeout(function () {
       window.location.href = "<?php echo base_url()?>/Account/overview";
    }, 5000);
					}
				});
				<?php
			//}
		?>
	});
</script>
</body>