<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Pertemuan 11 - tugas 5</title>
<style>
.tengah{
	padding:25px;
	color:#000;
	background-color:#3CF;
	margin:20% 25% 0 25%;
	font-family:"Courier New", Courier, monospace;
	font-size:18px;
}
</style>
</head>

<body>
<div class="tengah">
<?php
	function hobi(){
		if(!empty($_POST['hoby'])){
			foreach($_POST['hoby']as $hob){
				echo "Hobby : ".$hob."<br>";
			}
		}
	}
	$nama=$_POST["name"];
	echo "Name : ".$nama."<br>";
	echo "Birth : ".strtoupper($_POST["place"]).", ".$_POST["day"]."-".$_POST["day2"]."-".$_POST["year"]."<br>";
	echo "Gender : ".$_POST["radio"]."<br>";
	echo "Address : ".$_POST["address"]."<br>";
	hobi();
?>
</div>
</body>
</html>