<div class="w3-teal">
		<div class="w3-row">
			<div class="w3-third w3-container">
			  
			  <div class="w3-container">
			  	<button class="w3-button w3-teal w3-xlarge" onclick="w3_open()">&#9776;</button>
			    <h1>My Page</h1>
			    
			  </div>
			</div>
			<div class="w3-third w3-container">
				
			</div>
			<div class="w3-third w3-container">
				<h2>Hai, <?php echo $this->session->userdata("unama"); ?></h2>
				<br/>uid, <?php echo $this->session->userdata("iduser"); ?>
				<br><a href="<?php echo base_url('Login/logout'); ?>">Logout</a><br><br>
			</div>
		</div>
	  
</div>