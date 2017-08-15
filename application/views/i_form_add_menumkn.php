<div id="modaladdmenumkn" class="w3-modal">
  <div class="w3-modal-content">
    <!-- <div class="w3-container" style="height: 400px;"> -->
      <header class="w3-container w3-blue">
      	<span onclick="document.getElementById('modaladdmenumkn').style.display='none'" class="w3-button w3-display-topright">&times;</span>
      	<h2>Tambah Menu Makanan</h2>
      </header>
      <div class="w3-container">
      	
      	<!-- <div class="loader"></div> -->
      	<?php 
$attributes = array("name" => "formaddmenumkn");
echo form_open("Account/add_menu", $attributes);?>
	<div class="form-group">
		<label for="nmmenu"></label>
		<input type="hidden" name="jenis" value="makanan">
		<input type="hidden" name="id_store" value="<?= $_SESSION['idtoko'] ?>">
		<input class="w3-input" name="nmmenu" placeholder="Input Nama menu" type="text" />
	</div>
	<div class="form-group">
		<label for="keterangan"></label>
		<input class="w3-input" name="keterangan" placeholder="Keterangan Menu" type="text" />
	</div>
	<div class="form-group">
		<label for="harga"></label>
		<input class="w3-input" name="harga" placeholder="harga" type="text" />
	</div>
	<br><br>
	
	<button class="w3-btn w3-blue" id="btn-addstore">Register</button>
<?php echo form_close();?>
      </div>
      
    <!-- </div> -->
  </div>
</div>
