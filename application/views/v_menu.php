<?php  

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
	Edit menu <?= $nmtoko?>
	<div class="w3-bar w3-cyan">
    		<button class="w3-bar-item w3-button tablink w3-blue" onclick="openMenu(event,'London')">Makanan</button>
    		<button class="w3-bar-item w3-button tablink" onclick="openMenu(event,'Paris')">Minuman</button>
 		</div>
	<div class="w3-container" style="margin-top: 8px">
		
  
	  <div id="London" class="w3-card-4 w3-container w3-border menudet">
	    <h2>London</h2>
	    <p>London is the capital city of England.</p>
	  </div>

	  <div id="Paris" class="w3-card-4 w3-container w3-border menudet" style="display:none">
	    <h2>Paris</h2>
	    <p>Paris is the capital of France.</p> 
	  </div>

	</div>
</div>
<script>
	
	function openMenu(evt, menuName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("menudet");
  for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" w3-blue", "");
  }
  document.getElementById(menuName).style.display = "block";
  evt.currentTarget.className += " w3-blue";
}
</script>
</body>