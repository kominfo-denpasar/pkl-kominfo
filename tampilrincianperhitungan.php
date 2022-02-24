


  <?php
include("koneksi.php");
$get_data = mysqli_query($koneksi, "SELECT * FROM barang order by id_barang asc");
while($data = mysqli_fetch_array($get_data)){
    $data_siswa[] = $data;
}
echo json_encode($data_siswa);


?>
   
