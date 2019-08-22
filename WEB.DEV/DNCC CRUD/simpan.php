<?php 
include ("koneksi.php"); //untuk menghubungkan file koneksi
$id=$_POST ['id_mhs'];
$nama=$_POST ['nama'];
$nim=$_POST ['nim'];
$jurusan=$_POST ['jurusan'];

$d_save="INSERT INTO mahasissswa(id_mhs,nama,nim,jurusan)
		VALUES ('$id', '$nama', '$nim', '$jurusan' ) ";
		mysqli_query($conn,$d_save);

?>