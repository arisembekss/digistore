<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php include 'head.php';?>
</head>
<body>
<?php  
	foreach ($data as $u) {
		# code...

		echo $u->nama."<br>".$u->email."<br>";
	}
?>
	
</body>
</html>
