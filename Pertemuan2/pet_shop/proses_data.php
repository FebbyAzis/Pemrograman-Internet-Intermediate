<?php 
include('koneksi.php');
$koneksi = new database();
 
$action = $_GET['action'];
if($action == "add")
{
	$koneksi->tambah_data($_POST['nama_hewan'],$_POST['jenis_hewan'],$_POST['jenis_kelamin'],$_POST['warna'],$_POST['harga']);
	header('location:tampil_data.php');
}
elseif($action=="update")
{
	$koneksi->update_data($_POST['nama_hewan'],$_POST['jenis_hewan'],$_POST['jenis_kelamin'],$_POST['warna'],$_POST['harga'],$_POST['id_hewan']);
	header('location:tampil_data.php');
}
elseif($action=="delete")
{
	$id_hewan = $_GET['id'];
	$koneksi->delete_data($id_hewan);
	header('location:tampil_data.php');
}
?>