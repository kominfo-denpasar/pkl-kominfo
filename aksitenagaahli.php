<?php 
include 'koneksi.php';
$nama = $_POST['nama_ahli'];
$tugas = $_POST['tugas_ahli'];
//$id_kebutuhan=1;

var_dump($nama,$tugas,$id_kebutuhan);

//Mengeksekusi/menjalankan query diatas	
 $hasil=mysqli_query($koneksi,"INSERT INTO `temp_tenagaahli` ( `nama_ahli`, `tugas_ahli`) VALUES ('$nama', '$tugas')");

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

