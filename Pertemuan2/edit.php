<?php 	
include('koneksi.php');
$db = new database();
$id_hewan = $_GET['id'];
if(! is_null($id_hewan))
{
	$data_hewan = $db->get_by_id($id_hewan);
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
<h3>Update Data Hewan</h3>
<a href="index.php">Home</a>
<hr/>
<form method="post" action="proses_data.php?action=update">
<input type="hidden" name="id_hewan" value="<?php echo $data_hewan['id_hewan']; ?>"/>
<table>
	<tr>
		<td>Nama Hewan</td>
		<td>:</td>
		<td><input type="text" name="nama_hewan" value="<?php echo $data_hewan['nama_hewan']; ?>"/></td>
	</tr>
	<tr>
		<td>Jenis Hewan</td>
		<td>:</td>
		<td><input type="text" name="jenis_hewan" value="<?php echo $data_hewan['jenis_hewan']; ?>"/></td>
	</tr>
	<tr>
		<td>Jenis Kelamin</td>
		<td>:</td>
		<td><input type="text" name="jenis_kelamin" value="<?php echo $data_hewan['jenis_kelamin']; ?>"/></td>
	</tr>
	<tr>
		<td>Warna</td>
		<td>:</td>
		<td><input type="text" name="warna" value="<?php echo $data_hewan['warna']; ?>"/></td>
	</tr>
    <tr>
		<td>Harga</td>
		<td>:</td>
		<td><input type="text" name="harga" value="<?php echo $data_hewan['harga']; ?>"/></td>
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