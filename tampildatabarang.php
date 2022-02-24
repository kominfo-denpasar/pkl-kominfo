
<?php
include("koneksi.php");
// $get_data = mysqli_query($koneksi, "SELECT * FROM barang");
// while($data = mysqli_fetch_array($get_data)){
//     $data_siswa[] = $data;
// }
// echo json_encode($data_siswa);


?>
<table class="data">
     
      <tr>
        <th>Select</th>
        <th>No</th>
        <th>Id Barang</th>
        <th>Nama Barang</th>
        <th>Volume</th>
        <th>Satuan</th>
        <th>Harga</th>
        </tr>

    <?php 
    include("koneksi.php");
    $data = mysqli_query($koneksi,"select * from barang");
    $no=1;
    while($d=mysqli_fetch_array($data)){
    ?>
    <tbody class="tabel1">
                                                           
                                                    
    <tr>
 <td><input type="checkbox" name="record"> </td>
        <td><?php echo $no++ ?></td>
        <td><?php echo $d['id_barang'] ?></td>
        <td><?php echo $d['nama_barang'] ?></td>
        <td><?php echo $d['volume'] ?></td>
        <td><?php echo $d['satuan'] ?></td>
        <td><?php echo $d['harga'] ?></td>
    </tr>
    <?php } ?>
        </tbody>
</table>