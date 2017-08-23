<?php  
$bsidtoko = base64_encode($this->session->userdata('idtoko'));
$bsnmtoko = base64_encode($this->session->userdata('nmtoko'));

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
		<?php echo "detail dari ".$this->session->userdata('idtoko'); ?>
		<div><a href="<?php echo base_url()?>Account/edit_menu?sesstoko=<?= $bsidtoko?>&&sessnmtoko=<?= $bsnmtoko?>">edit menu <?= $this->session->userdata('nmtoko')?></a></div>
	</div>
</div>
<?php include 'i_form_add_store.php';?>
</body>