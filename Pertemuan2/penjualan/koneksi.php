<?php 
class database{
 
	var $host = "localhost";
	var $username = "root";
	var $password = "";
	var $database = "pet_shop";
	var $koneksi = "";
	function __construct(){
		$this->koneksi = mysqli_connect($this->host, $this->username, $this->password,$this->database);
		if (mysqli_connect_errno()){
			echo "Koneksi database gagal : " . mysqli_connect_error();
		}
	}
	function tampil_data_hewan()
	{
		$data = mysqli_query($this->koneksi,"select * from tb_hewan");
		while($row = mysqli_fetch_array($data)){
			$hasil[] = $row;
		}
		return $hasil;
	}
	function tampil_data()
	{
		$data = mysqli_query($this->koneksi,"select * from tb_penjualan");
		while($row = mysqli_fetch_array($data)){
			$hasil[] = $row;
		}
		return $hasil;
	}
 
	function tambah_data($nama_hewan_penjualan,$jenis_hewan_penjualan,$jenis_kelamin_penjualan,$warna_penjualan,$harga_penjualan)
	{
		mysqli_query($this->koneksi,"insert into tb_penjualan values ('','$nama_hewan_penjualan','$jenis_hewan_penjualan',
		'$jenis_kelamin_penjualan','$warna_penjualan','$harga_penjualan')");
	}
 
	function get_by_id($id_hewan_penjualan)
	{
		$query = mysqli_query($this->koneksi,"select * from tb_penjualan where id_hewan_penjualan='$id_hewan_penjualan'");
		return $query->fetch_array();
	}
 
	function update_data($nama_hewan_penjualan,$jenis_hewan_penjualan,$jenis_kelamin_penjualan,$warna_penjualan,$harga_penjualan,$id_hewan_penjualan)
	{
		$query = mysqli_query($this->koneksi,"update tb_penjualan set nama_hewan_penjualan='$nama_hewan_penjualan',jenis_hewan_penjualan='$jenis_hewan_penjualan',
		jenis_kelamin_penjualan='$jenis_kelamin_penjualan',warna_penjualan='$warna_penjualan',harga_penjualan='$harga_penjualan' 
		where id_hewan_penjualan='$id_hewan_penjualan'");
	}
 
	function delete_data($id_hewan_penjualan)
	{
		$query = mysqli_query($this->koneksi,"delete from tb_penjualan where id_hewan_penjualan='$id_hewan_penjualan'");
	}
}
?>