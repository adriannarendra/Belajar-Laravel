<?php 
include"CONFIG.PHP";

$id = $_GET["delete"];
$query="DELETE FROM tb_pelanggaran WHERE id='$id'";

$sql = mysqli_query($koneksi,$query);

if($sql){
    header('location:index.php');
}else{
    echo "$query";
}

?>