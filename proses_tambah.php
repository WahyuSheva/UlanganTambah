<?php
include("koneksi.php");
if(isset($_POST['KirimData'])){
    $nama = $_POST['nama'];
    $jenis_bantuan = $_POST['jenis_bantuan'];

$sql = "INSERT INTO tb_blt(nama,jenis_bantuan) VALUES ('$nama','$jenis_bantuan')";
$query = mysqli_query ($koneksi,$sql);


}
?>