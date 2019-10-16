<?php 
include '../database.php';
$siswa = new Siswa();
$aksi = $_GET['aksi'];
if(isset($_POST['save']))
{
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $jenis_kelamin = $_POST['jk'];
    $agama = $_POST['agama'];
    $umur = date ('Y') - $tanggal_lahir;
}
if($aksi == "tambah")
{
    $siswa->create($nama,$alamat,$tanggal_lahir,$jenis_kelamin,$agama);
    header("location:index.php");
}elseif($aksi == "update")
{
    $siswa->update($nama,$alamat,$tanggal_lahir,$jenis_kelamin,$agama);
    header("location:index.php");
}elseif($aksi == "delete")
{
    $siswa->delete($_GET['id']);
    header("location:index.php");
}
?>