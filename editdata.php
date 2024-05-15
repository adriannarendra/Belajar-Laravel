<?php 
include"CONFIG.PHP";

$id=$_POST['id-edit'];
$name=$_POST['nama'];
$pelanggaran=$_POST['pelanggaran'];
$sanksi=$_POST['sanksi'];

$query = "UPDATE tb_pelanggaran SET nama='$name', kesalahan='$pelanggaran', sanksi='$sanksi' WHERE id='$id'";
$sql = mysqli_query($koneksi, $query);

if($sql){
    header("location:index.php");
}else{
    echo $sql;
}
?>