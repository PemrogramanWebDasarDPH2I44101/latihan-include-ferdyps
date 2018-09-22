<!DOCTYPE html>
 <html>
 <head>
 	<center>
 	<title></title>
 </head>
<?php
include("header.php");
session_start();
$_SESSION['nama'] 	= isset($_POST['nama']) ? $_POST["nama"]:$_SESSION["nama"];
$_SESSION['password']	= isset($_POST['password']) ? $_POST["password"]:$_SESSION["password"];

$data = array(
			array( 
				"nama" =>"ferdy" ,
				"password" =>"ferdy",
				"akses" => "user"
			),
			array(  
				"nama" =>"admin",
				"password"=>"admin",
				"akses" =>"admin"
				)
		);
if ($_POST['nama'] == $data[1]["nama"] && $_POST['password'] == $data[1]['password']||
	$_POST['nama'] == $data[0]["nama"] && $_POST['password'] == $data[0]['password']) {
	echo "<br>Selamat Datang";
	$_SESSION['akses'] = $data[0]["akses"];
}else{
	header("location: Form.html");
}

 ?>
 <body>
 	<br><br>
 <a href="hal2.php"><button>Halaman 2</button></a>
 <a href="hal3.php"><button>Halaman 3</button></a>
 </body>
 </center>
 </html>