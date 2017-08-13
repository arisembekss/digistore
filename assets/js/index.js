function initFirebase(){
	var config = {apiKey:"AIzaSyALXd10A7gX3l-I1_0urxEfrwRZ9mAm9NE", authDomain:"digistore-fa05c.firebaseapp.com", databaseURL:"https://digistore-fa05c.firebaseio.com", projectId:"digistore-fa05c", storageBucket:"", messagingSenderId:"964350626633"};
	firebase.initializeApp(config);
}

function redirectPage(page){
	
	switch (page){
		case 1:
			//passData();
			window.location.replace("../Login/login");
			break;
		case 2:
			window.location.replace("../Login/");
			break;
		case 3:
			window.location.replace("../Registrasi/");
	}    	
}

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
}

function passData(email){
	$.ajax({
        type: "POST",
		url: "<?php echo base_url() ?>Login/login?>",
		dataType: 'json',
		data: {name: email},
		success: function(res){
			alert('sukses');
		}
       }).done(function(response) {
    alert(response);
	});

}

