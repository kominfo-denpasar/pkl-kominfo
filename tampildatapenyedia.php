
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
        <th>Id Penyedia</th>
        <th>Nama Penyedia</th>
        <th>Rantai Pasok</th>

        </tr>

    <?php 
    include("koneksi.php");
    $data = mysqli_query($koneksi,"select * from temp_penyedia");
    $no=1;
    while($d=mysqli_fetch_array($data)){
    ?>
    <tbody class="tabel4">
                                                           
                                                    
    <tr>
 <td><input type="checkbox" name="record"> </td>
         <td><?php echo $no++ ?></td>
        <td><?php echo $d['id_penyedia'] ?></td>
        <td><?php echo $d['nama_penyedia'] ?></td>
        <td><?php echo $d['rantai_pasok'] ?></td>
    
    </tr>
    <?php } ?>
        </tbody>
</table>