<?php 
include 'koneksi.php';
$nama = $_POST['nama_penyedia'];
$rantaipasok = $_POST['rantai_pasok'];

//$id_kebutuhan=1;


//Mengeksekusi/menjalankan query diatas	
 $hasil=mysqli_query($koneksi,"INSERT INTO `temp_penyedia` ( `nama_penyedia`, `rantai_pasok`) VALUES ('$nama', '$rantaipasok')");

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
