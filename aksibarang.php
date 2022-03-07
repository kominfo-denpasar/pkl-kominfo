<?php 
include 'koneksi.php';

$nama = $_POST['nama_barang'];
$volume = $_POST['volume'];
$satuan = $_POST['satuan'];
$harga = $_POST['harga'];
//$id_kebutuhan=1;
//var_dump($nama,$volume,$satuan,$harga,$id_kebutuhan);

//Mengeksekusi/menjalankan query diatas	
 $hasil=mysqli_query($koneksi, "INSERT INTO `temp_barang` ( `nama_barang`, `volume`, `satuan`, `harga`) VALUES ('$nama', '$volume', '$satuan', '$harga') ");

//Kondisi apakah berhasil atau tidak
	if ($hasil) {
		echo "Berhasil insert data";
		exit;
	}
 	else {
	echo "Gagal insert data";
 	exit;
 }  
?>