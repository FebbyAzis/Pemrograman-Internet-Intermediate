<?php 
include('koneksi.php');
$koneksi = new database();
 
$action = $_GET['action'];
if($action == "add")
{
	$koneksi->tambah_data($_POST['nama_hewan_penjualan'],$_POST['jenis_hewan_penjualan'],$_POST['jenis_kelamin_penjualan'],
	$_POST['warna_penjualan'],$_POST['harga_penjualan']);
	header('location:tampil_data.php');
}
elseif($action=="update")
{
	$koneksi->update_data($_POST['nama_hewan_penjualan'],$_POST['jenis_hewan_penjualan'],$_POST['jenis_kelamin_penjualan'],
	$_POST['warna_penjualan'],$_POST['harga_penjualan'],$_POST['id_hewan_penjualan']);
	header('location:tampil_data.php');
}
elseif($action=="delete")
{
	$id_hewan_penjualan = $_GET['id'];
	$koneksi->delete_data($id_hewan_penjualan);
	header('location:tampil_data.php');
}
?>