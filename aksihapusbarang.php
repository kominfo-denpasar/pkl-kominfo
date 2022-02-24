<?php
include('koneksi.php');
if(isset($_GET['deleteId'])){
    $id= $_GET['deleteId'];
    delete_data($connection, $id);
}
// delete data query
function delete_data($connection, $id){
   
    $query="DELETE from barang WHERE id_barang=$id";
    $exec= mysqli_query($connection,$query);
    if($exec){
      echo "Data was deleted successfully";
    }else{
        $msg= "Error: " . $query . "<br>" . mysqli_error($connection);
      echo $msg;
    }
}
?>