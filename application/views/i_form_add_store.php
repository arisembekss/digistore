<div id="modaladd" class="w3-modal">
  <div class="w3-modal-content">
    <!-- <div class="w3-container" style="height: 400px;"> -->
      <header class="w3-container w3-blue">
      	<span onclick="document.getElementById('modaladd').style.display='none'" class="w3-button w3-display-topright">&times;</span>
      	<h2>Tambah Bussines Place</h2>
      </header>
      <div class="w3-container">
      	
      	<!-- <div class="loader"></div> -->
      	<?php 
$attributes = array("name" => "formaddstore");
echo form_open("Account/add_store_data", $attributes);?>
	<div class="form-group">
		<label for="nmtoko"></label>
		<input class="w3-input" name="nmtoko" placeholder="Input Nama Tempat Usaha anda" type="text" />
	</div>
	<div class="form-group">
		<label for="almttoko"></label>
		<input class="w3-input" name="almttoko" placeholder="Alamat" type="text" />
	</div>
	<div class="form-group">
		<label for="jmlmeja"></label>
		<input class="w3-input" name="jmlmeja" placeholder="Jumlah Meja yang ada" type="text" />
	</div>
	<br><br>
	<button class="w3-btn w3-blue" id="btn-addstore">Register</button>
<?php echo form_close();?>
      </div>
      
    <!-- </div> -->
  </div>
</div>
