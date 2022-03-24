<?php 	
include('koneksi.php');
$db = new database();
$data_hewan = $db->tampil_data();
?>
<!DOCTYPE html>
<html>
<head>

    <div class="col-2">
    <h1>Detail Data Hewan</h1>
    <a href="index.php">Home</a>
    <br> <br>
    <a href="tambah_data.php">Tambah Data Hewan</a>
    <br> <br>
    <a href="print.php" target="_blank">Cetak Data</a>
    </div>
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
		foreach($data_hewan as $row){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $row['nama_hewan']; ?></td>
				<td><?php echo $row['jenis_hewan']; ?></td>
				<td><?php echo $row['jenis_kelamin']; ?></td>
				<td><?php echo $row['warna']; ?></td>
                <td><?php echo $row['harga']; ?></td>
				<td>
					<a href="edit.php?id=<?php echo $row['id_hewan']; ?>">Update</a> /
					<a href="proses_data.php?action=delete&id=<?php echo $row['id_hewan']; ?>">Delete</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
</body>
</html>