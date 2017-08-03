function initFirebase(){
	var config = {apiKey:"AIzaSyALXd10A7gX3l-I1_0urxEfrwRZ9mAm9NE", authDomain:"digistore-fa05c.firebaseapp.com", databaseURL:"https://digistore-fa05c.firebaseio.com", projectId:"digistore-fa05c", storageBucket:"", messagingSenderId:"964350626633"};
	firebase.initializeApp(config);
}

function redirectPage(page){
	/*page list number
	1 = Welcome
	2 = login 
	3 = registrasi*/
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

