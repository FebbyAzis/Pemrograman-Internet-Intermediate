<!DOCTYPE html>
<html>
<head>
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
</head>
<body>
<div class="col-3">
<h3>Tambah Pesanan</h3>
<a href="index.php">Home</a>

<hr/>
<form method="post" action="proses_data.php?action=add">
<table>
	<tr>
		<td>Nama Hewan</td>
		<td>:</td>
		<td><input type="text" name="nama_hewan_penjualan"/></td>
	</tr>
	<tr>
		<td>Jenis Hewan</td>
		<td>:</td>
		<td><input type="text" name="jenis_hewan_penjualan"/></td>
	</tr>
	<tr>
		<td>Jenis Kelamin</td>
		<td>:</td>
		<td><input type="text" name="jenis_kelamin_penjualan"/></td>
	</tr>
	<tr>
		<td>Warna</td>
		<td>:</td>
		<td><input type="text" name="warna_penjualan"/></td>
	</tr>
    <tr>
		<td>Harga</td>
		<td>:</td>
		<td><input type="text" name="harga_penjualan"/></td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td><input type="submit" name="tombol" value="Simpan"/></td>
</tr>
</table>
</form>
</div>
</body>
</html>