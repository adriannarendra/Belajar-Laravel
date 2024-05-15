<?php 
include"CONFIG.PHP";

$nama=$_POST["nama"];
$pelanggaran=$_POST["pelanggaran"];
$sanksi=$_POST["sanksi"];

$query = "INSERT INTO tb_pelanggaran VALUES(NULL,'$nama','$pelanggaran','$sanksi')";
$sql = mysqli_query($koneksi,$query);

if($sql){
    header("location:index.php");
}else{
    echo $sql;
}

?>