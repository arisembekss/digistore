<?php  
$querymnm = $this->db->query("select * from menu where id_store = ".$idtoko."&&jenis = 'minuman'");
$querymkn = $this->db->query("select * from menu where id_store = ".$idtoko."&&jenis = 'makanan'");
$countmkn = $this->db->query("select * from menu where id_store = ".$idtoko."&&jenis = 'makanan'")->num_rows();
$countmnm = $this->db->query("select * from menu where id_store = ".$idtoko."&&jenis = 'minuman'")->num_rows();
$_SESSION['idtoko'] = $idtoko;
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
    		<button class="w3-bar-item w3-button tablink w3-blue" onclick="openMenu(event,'makanan')">Makanan</button>
    		<button class="w3-bar-item w3-button tablink" onclick="openMenu(event,'minuman')">Minuman</button>
 		</div>
	<div class="w3-container" style="margin-top: 8px">
		
  
	  <div id="makanan" class="w3-card-4 w3-container w3-border menudet">
	    <h2>Menu Makanan <?= $nmtoko?></h2>
	    <p><button class="w3-btn" onclick="document.getElementById('modaladdmenumkn').style.display='block'">Tambah Menu Makanan</button></p>
	    <?php
	    	if ($countmkn == 0){
	    		echo "<p>Masih belum ada menu yang disimpan</p>";
	    	} else{
	    		?>
	    		<table class="w3-table">
				<tr>
				  <th>No</th>	
				  <th>Nama Menu</th>
				  <th>Keterangan</th>
				  <th>Harga</th>
				  <th>Foto</th>
				  <th></th>
				  <th></th>
				</tr>
				
				<?php
				$no = 1;
	    		foreach ($querymkn->result() as $valmenu ) {
					# code...
	    			echo "<tr>";
	    			echo "<td>".$no++."</td>";
	    			echo "<td>".$valmenu->nama_menu."</td>";
	    			echo "<td>".$valmenu->keterangan."</td>";
	    			echo "<td>".$valmenu->harga."</td>";
	    			echo "<td>".$valmenu->foto."</td>";
	    			echo "<td><button class='w3-btn' id='btn-mkn-edit'>Edit</button></td>";
	    			echo "<td><button class='w3-btn' id='btn-mkn-hapus'>Hapus</button></td>";
	    			echo "</tr>";

				}
				?>
				</table>
	    		<?php
	    	}
	    ?>
	  </div>

	  <div id="minuman" class="w3-card-4 w3-container w3-border menudet" style="display:none">
	    <h2>Menu minuman <?= $nmtoko?></h2>
	    <p><button class="w3-btn" onclick="document.getElementById('modaladdmenumnm').style.display='block'">Tambah Menu Makanan</button></p>
	    <?php
	    	if ($countmnm == 0){
	    		echo "<p>Masih belum ada menu yang disimpan</p>";
	    	} else{
	    		?>
	    		<table class="w3-table">
				<tr>
				  <th>No</th>	
				  <th>Nama Menu</th>
				  <th>Keterangan</th>
				  <th>Harga</th>
				  <th>Foto</th>
				  <th></th>
				  <th></th>
				</tr>
				
				<?php
				$no = 1;
	    		foreach ($querymnm->result() as $valmenumnm ) {
					# code...
	    			echo "<tr>";
	    			echo "<td>".$no++."</td>";
	    			echo "<td>".$valmenumnm->nama_menu."</td>";
	    			echo "<td>".$valmenumnm->keterangan."</td>";
	    			echo "<td>".$valmenumnm->harga."</td>";
	    			echo "<td>".$valmenumnm->foto."</td>";
	    			echo "<td><button class='w3-btn' id='btn-mkn-edit'>Edit</button></td>";
	    			echo "<td><button class='w3-btn' id='btn-mkn-hapus'>Hapus</button></td>";
	    			echo "</tr>";

				}
				?>
				</table>
	    		<?php
	    	}
	    ?> 
	  </div>

	</div>
</div>
<?php include 'i_form_add_menumkn.php';?>
<?php include 'i_form_add_menumnm.php';?>
<?php include 'i_form_add_store.php';?>
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