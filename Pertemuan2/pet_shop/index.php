<?php 	
include('koneksi.php');
$db = new database();
$data_hewan = $db->tampil_data();
?>

<!doctype html>
<html lang="en">


<body>

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

        .col-1{
        border: 1px solid blue; 
        width: 50%;
        text-align:center;
        border-radius: 15px;
        position: absolute;
        top: 40%;
        left: 0;
        transform: translate(+50%, -50%);
        }

    </style>
    <br> <br>
    <div class="col-1">
        <h1>Data Hewan Peliharaan ┃ CIREBON PET SHOP</h1>
        <hr>
        <br>
        <a href="tampil_data.php">Detail Data Hewan</a>
        <br> <br>
        <a href="tambah_data.php">Tambah Data</a>
        <br> <br>
        <a href="print.php" target="_blank">Cetak Data</a>
        <br> <br>
        
           
        
    </div>

</body>

</html>