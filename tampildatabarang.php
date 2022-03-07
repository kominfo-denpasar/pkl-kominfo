

<table class="data">
     
      <tr>
        <th>Select</th>
        <th>No</th>
        <!-- <th>Id Barang</th> -->
        <th>Nama Barang</th>
        <th>Volume</th>
        <th>Satuan</th>
        <th>Harga</th>
      </tr>

    <?php 
    include ('koneksi.php');
    $data = mysqli_query($koneksi,"select * from temp_barang");
    $no=1;
    while($d=mysqli_fetch_array($data)){
    ?>

    <tbody class="tabel2">                                              
        <tr>
        <td><input type="checkbox" name="record"> </td>
            <td><?php echo $no++ ?></td>
            
            <td><?php echo $d['nama_barang'] ?></td>
            <td><?php echo $d['volume'] ?></td>
            <td><?php echo $d['satuan'] ?></td>
            <td><?php echo $d['harga'] ?></td>
        </tr>
       
     <?php } ?>
    </tbody>
</table>