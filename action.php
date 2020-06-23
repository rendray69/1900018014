<html>
<head>
<title>Tugas #3 Form</title>
<style>
.tengah{
	color:#fff;
	padding:20px;
	margin:10% 20% 0 20%;
	background-color:#09C;
	font-family:"Lucida Sans Unicode", "Lucida Grande", sans-serif;
}
textarea{
	resize:none;
}
</style>
</head>

<body>
<?php
// define variables and set to empty values
$nameErr = $placeErr = $yearErr = $addressErr = "";
$name = $place = $year = $address = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Nama tidak boleh kosong";
  } else {
    $name = test_input($_POST["name"]);
  }
  
  if (empty($_POST["place"])) {
    $placeErr = "Tempat lahir tidak boleh kosong";
  } else {
    $place = test_input($_POST["place"]);
  }
    
  if (empty($_POST["year"])) {
    $yearErr = "Tahun lahir tidak boleh kosong";
  } else {
    $year = test_input($_POST["year"]);
  }

  if (empty($_POST["address"])) {
    $addressErr = "Alamat tidak boleh kosong";
  } else {
    $address = test_input($_POST["address"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

function hobi(){
		if(!empty($_POST['hoby'])){
			foreach($_POST['hoby']as $hob){
				echo "Hobi : ".$hob."<br>";
			}
		}
	}
?>
<div class="tengah">
  <p>
    Nama : <?php echo $_POST["name"];?><?php echo $nameErr;?>
  </p>
  <p>Lahir &nbsp;: 
  <p>&nbsp;&nbsp; Tempat &nbsp;&nbsp;: <?php echo $_POST["place"];?><?php echo $placeErr;?>
  </p>
  <p>&nbsp;&nbsp; Tanggal &nbsp;: <?php echo$_POST["day"]?>

  Bulan : <?php echo$_POST["day2"]?>
 
  Tahun : <?php echo$_POST["year"]?><?php echo $yearErr;?>

  </p>
  <p>Gender: <?php echo $_POST["radio"]?>

  </p>
  <p>Alamat: <?php echo$_POST["address"]?><?php echo $addressErr;?>

  </p>
  <p><?php hobi(); ?>

  </p>
</div>
</body>
</html>