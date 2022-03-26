<?php 	
include('koneksi.php');
$db = new database();
$id_hewan_penjualan = $_GET['id'];
if(! is_null($id_hewan_penjualan))
{
	$data_hewan_penjualan = $db->get_by_id($id_hewan_penjualan);
}
else
{
	header('location:tampil_data.php');
}
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
<br>
<style>
    .col-3{
        border: 1px solid blue; 
        width: 22%;
        text-align:center;
        border-radius: 15px;
        position: absolute;
        margin-left:15px;
    }
</style>
<div class="col-3">
<h3>Update Pesanan Anda</h3>
<a href="index.php">Home</a>
<hr/>
<form method="post" action="proses_data.php?action=update">
<input type="hidden" name="id_hewan_penjualan" value="<?php echo $data_hewan_penjualan['id_hewan_penjualan']; ?>"/>
<table>
	<tr>
		<td>Nama Hewan</td>
		<td>:</td>
		<td><input type="text" name="nama_hewan_penjualan" value="<?php echo $data_hewan_penjualan['nama_hewan_penjualan']; ?>"/></td>
	</tr>
	<tr>
		<td>Jenis Hewan</td>
		<td>:</td>
		<td><input type="text" name="jenis_hewan_penjualan" value="<?php echo $data_hewan_penjualan['jenis_hewan_penjualan']; ?>"/></td>
	</tr>
	<tr>
		<td>Jenis Kelamin</td>
		<td>:</td>
		<td><input type="text" name="jenis_kelamin_penjualan" value="<?php echo $data_hewan_penjualan['jenis_kelamin_penjualan']; ?>"/></td>
	</tr>
	<tr>
		<td>Warna</td>
		<td>:</td>
		<td><input type="text" name="warna_penjualan" value="<?php echo $data_hewan_penjualan['warna_penjualan']; ?>"/></td>
	</tr>
    <tr>
		<td>Harga</td>
		<td>:</td>
		<td><input type="text" name="harga_penjualan" value="<?php echo $data_hewan_penjualan['harga_penjualan']; ?>"/></td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td><input type="submit" name="tombol" value="Update"/></td>
	</tr>
</table>
</form>
</div>
</body>
</html>