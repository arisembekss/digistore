<?php
$id = $this->session->userdata("iduser");
$query = $this->db->query("select * from user_store where id_user = ".$id);
$numr = $this->db->query("select * from user_store where id_user = ".$id)->num_rows();
//echo $numr;
		
?>
<div class="w3-sidebar w3-bar-block w3-card-2 w3-animate-left" style="display:none" id="mySidebar">
  <button class="w3-bar-item w3-button w3-large"
  onclick="w3_close()">Close &times;</button>
  
  <a href="#" class="w3-bar-item w3-button" onclick="opentoko('toko')">Toko</a>
  	<div class="w3-ul" id="toko" style="display: none; margin-left: 20px;">
  	<?php
  		if ($numr > 0) {
  			# code...
  			foreach ($query ->result() as $value) {
			# code...
				echo "<a href='#' class='w3-bar-item w3-button'>".$value->nama_store."</a>";
			}
  		} else {

  		}
  		
  	?>
		<a href="<?php echo base_url() ?>Account/add_store" class="w3-bar-item w3-button">Tambah Toko</a>	
	</div>
  <a href="#" class="w3-bar-item w3-button" onclick="opentoko('makanan')">Menu Makanan</a>
  	<div class="w3-ul" id="makanan" style="display: none; margin-left: 20px;">
		<a href="#" class="w3-bar-item w3-button">Tambah Menu Makanan</a>	
	</div>
  <a href="#" class="w3-bar-item w3-button" onclick="opentoko('minuman')">Menu Minuman</a>
  	<div class="w3-ul" id="minuman" style="display: none; margin-left: 20px;">
		<a href="#" class="w3-bar-item w3-button">Tambah Menu Minuman</a>	
	</div>
</div>

<script>
	function opentoko(divv){
		var ket = document.getElementById(divv).style.display;
		if (ket == "none") {
			document.getElementById(divv).style.display = "block";
		} else{
			document.getElementById(divv).style.display = "none";
		}
	}
</script>