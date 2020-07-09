<html>
<head>
<style>
.tengah{
	width:50%;
	margin:1% 0 0 23%;
	background-color:#FFF;
	border-style:solid;
	color:#000;
	padding:2px 8px 4px 8px;
}
.kiri{
	background:#46de4b;
	color: white;
	font-size:11pt;
	width: 25%;
	border: none;
	border-radius:4px;
	padding:10px 20px;
}
.kanan{
	background:red;
	color: white;
	margin:0 0 0 23.5%;
	font-size:11pt;
	width: 25%;
	border: none;
	border-radius:4px;
	padding:10px 20px;
}

</style>
	<title>Preview Surat Pengantar</title>
</head>

<body bgcolor="#CC9999">
<?php
function cek(){
	if($_POST){
		$nama = $_POST['name'];
		$alamat = $_POST['address'];
		$jenkel = $_POST['cowo'];
		$tempat = $_POST['place'];
		$day = $_POST['day'];
		$day2 = $_POST['day2'];
		$year = $_POST['year'];
		$ktp = $_POST['ktp'];
		$work = $_POST['work'];
		$religi = $_POST['religi'];
		$nation = $_POST['nation'];
		$gol = $_POST['blot'];
		$kwn = $_POST['kwn'];
		$perlu = $_POST['perlu'];
		echo "<p align=justify><Table>
		<tr><td>Nama Lengkap</td><td>:</td><td>$nama</td></tr>
		<tr><td>Jenis Kelamin</td><td>:</td><td>$jenkel</td></tr>
		<tr><td>Tempat/ Tanggal Lahir</td><td>:</td><td>$tempat/ $day-$day2-$year</td></tr>
		<tr><td>Status Perkawinan</td><td>:</td><td>$kwn</td></tr>
		<tr><td>Kewarganegaraan</td><td>:</td><td>$nation</td></tr>
		<tr><td>Agama</td><td>:</td><td>$religi</td></tr>
		<tr><td>Pekerjaan</td><td>:</td><td>$work</td></tr>
		<tr><td>Gol Darah</td><td>:</td><td>$gol</td></tr>
		<tr><td>NIK</td><td>:</td><td>$ktp</td></tr>
		<tr><td>Alamat</td><td>:</td><td>".strtoupper($alamat)."</td></tr></table><br>";
		if($perlu == "Pembuatan SKCK"){
			
		echo "Orang tersebut diatas adalah benar penduduk di kelurahan Kami yang berdomisili di alamat diatas serta kami menerangkan bahwa orang tersebut benar berkelakuan baik dan belum pernah tersangkut perkara Polisi. Surat keterangan ini kami berikan untuk memenuhi salah satu persyaratan Surat Keterangan Catatan Kepolisian (SKCK).

Demikian surat keterangan ini dibuat, kepada yang bersangkutan harap maklum serta menjadikan bahan seperlunya.</p>";
		}elseif($perlu == "Pembuatan KTP" || $perlu == "Pembuatan KK" || $perlu == "Surat Pengantar Ke Catatan Sipil"){
			echo "Memang benar yang namanya tersebut diatas Penduduk dan Berdomisili di Kelurahan Giripurwo Kecamatan Wonogiri Kota Wonogiri.

Surat Pengantar ini diberikan untuk keperluan mengurus/mengambil :
“ Kartu Keluarga (KK) / KTP / Akte Kelahiran ”

Demikianlah Surat Pengantar ini dibuat dengan sebenarnya, untuk dapat dipergunakan sebagaimana mestinya.";
		}elseif($perlu == "Pembuatan SKU"){
			echo "Adalah benar penduduk yang berdomisili di Kelurahan Giripurwo, Kecamatan Wonogiri, Kabupaten Wonogiri.

Berdasarkan pengamatan kami bahwa nama tersebut adalah benar memiliki usaha berupa toko krikil dengan nama Krikil Mantab di wilayah Kelurahan Giripurwo.

Adapun Surat Keterangan ini dibuat untuk kelengkapan persyaratan Pengajuan Kredit Bank.

Demikian Surat Keterangan Usaha ini dibuat untuk dapat dipergunakan sebagaimana mestinya dan bagi instansi yang berkepentingan menjadi bahan periksa adanya.";
		}
	}
}

function getClickCount(){
	return(int)file_get_contents("nomor.txt");
}

function increment(){
	$count = getClickCount()+1;
	file_put_contents("nomor.txt", $count);
} 
increment(); 
echo
"<h1>Preview</h1>
<div class=tengah>
<h3 align=center style=font-family:'Arial Black', Gadget, sans-serif>PEMERINTAH KOTA WONOGIRI<br>KECAMATAN WONOGIRI<br>KELURAHAN GIRIPURWO</h3><h4
align=center id=sp style=font-family:'Arial Black', Gadget, sans-serif>SURAT PENGANTAR<br>
Nomor ".getClickCount()."/SP/2020<br><hr></hr></h4>
<p align=justify style=font-size:17px>Yang bertanda tangan di bawah ini lurah Giripurwo Kecamatan Wonogiri Kota Wonogiri, menerangkan bahwa:</p>"?><?php echo "<p>".cek();"</p>"; ?>

</div>
<br>
<input class="kanan" type="submit" onClick="location.href='form.html'" value="Kembali Memasukkan Data">
<input class="kiri" type="submit" onClick="location.href='table.php'" value="Lihat History Pemasukkan Data">
</body>
</html>
<?php
	echo "<head><title>My Guest Book</title></head>";
	$nama = $_POST['name'];
	$alamat = $_POST['address'];
	$jenkel = $_POST['cowo'];
	$gol = $_POST['blot'];
	$tempat = $_POST['place'];
	$day = $_POST['day'];
	$day2 = $_POST['day2'];
	$year = $_POST['year'];
	$ktp = $_POST['ktp'];
	$work = $_POST['work'];
	$religi = $_POST['religi'];
	$nation = $_POST['nation'];
	$kwn = $_POST['kwn'];
	$perlu = $_POST['perlu'];
	
	$fp = fopen("data_kelurahan.txt","a+"); 
	fputs ($fp, "$nama | $alamat | $gol | $jenkel | $tempat| $day | $day2 | $year | $ktp | $work | $religi | $nation | $kwn | $perlu\n"); 
	fclose($fp);
?>
