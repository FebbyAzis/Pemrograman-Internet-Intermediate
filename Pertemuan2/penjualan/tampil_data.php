<?php 	
include('koneksi.php');
$db = new database();
$data_hewan_penjualan = $db->tampil_data();
$data_hewan = $db->tampil_data_hewan();
?>
<!DOCTYPE html>
<html>
<head>
<style>
        h1 {
            text-align: center;
        }	

        table, 
        td,
        th {
        border: 1px solid #ddd; 
        text-align: left;
        }

        table {
        border-collapse: collapse; 
        width: 100%;
        background-color: blanchedalmond;
        }


        footer{
            text-align: center;
            font-size: 10pt;
            padding-top: 10px;
            padding-bottom: 10px;
        }

        th,
        td {
        padding: 15px;
        }

        .col-2{
            padding: 20px;
        }

    </style>
</head>
<body>

<div class="col-2">
    <h1>Detail  Pesanan Anda</h1>
    <a href="index.php">Home</a>
    <br> <br>
    <a href="tambah_data.php">Tambah Pesanan</a>
    <br> <br>
    <a href="print.php" target="_blank">Cetak Pesanan</a>
    </div>
<table border="1";>
		<tr>
			<th>No</th>
			<th>Nama Hewan</th>
			<th>Jenis Hewan</th>
			<th>Jenis Kelamin</th>
			<th>Warna</th>
			<th>Harga</th>
            <th>Action</th>
		</tr>
		<?php 
		$no = 1;
		foreach($data_hewan_penjualan as $row){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $row['nama_hewan_penjualan']; ?></td>
				<td><?php echo $row['jenis_hewan_penjualan']; ?></td>
				<td><?php echo $row['jenis_kelamin_penjualan']; ?></td>
				<td><?php echo $row['warna_penjualan']; ?></td>
                <td><?php echo $row['harga_penjualan']; ?></td>
				<td>
					<a href="edit.php?id=<?php echo $row['id_hewan_penjualan']; ?>">Update</a> /
					<a href="proses_data.php?action=delete&id=<?php echo $row['id_hewan_penjualan']; ?>">Delete</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
<br>
<hr>
<br>
<h1>Detail Data Hewan</h1>
<table border="1";>
		<tr>
			<th>No</th>
			<th>Nama Hewan</th>
			<th>Jenis Hewan</th>
			<th>Jenis Kelamin</th>
			<th>Warna</th>
			<th>Harga</th>
		</tr>
		<?php 
		$no = 1;
		foreach($data_hewan as $row){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $row['nama_hewan']; ?></td>
				<td><?php echo $row['jenis_hewan']; ?></td>
				<td><?php echo $row['jenis_kelamin']; ?></td>
				<td><?php echo $row['warna']; ?></td>
                <td><?php echo $row['harga']; ?></td>
			</tr>
			<?php 
		}
		?>
	</table>
<br> <br>

<footer>CIREBON PET SHOP</footer>

</body>
</html>