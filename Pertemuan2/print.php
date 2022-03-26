<?php 	
include('koneksi.php');
$db = new database();
$data_hewan = $db->tampil_data();
?>
<!doctype html>
<html lang="en">

<head>
    <title>Cetak Data</title>
    <style>
        h1 {
            text-align: center;
            font-size: 18pt;
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
    </style>
</head>

<body>
    <h1>Laporan Data Hewan Peliharaan ┃ CIREBON PET SHOP</h1>
    <table>
        <thead>
            <tr>
            <th>No</th>
			<th>Nama Hewan</th>
			<th>Jenis Hewan</th>
			<th>Jenis Kelamin</th>
			<th>Warna</th>
            <th>Harga</th>
            </tr>
        </thead>
        <tbody>
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
        </tbody>
    </table>
    <script>
         window.print();
    </script>
    </body>
    
    </html>
    