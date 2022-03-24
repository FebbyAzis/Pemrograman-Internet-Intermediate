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
 
	function tampil_data()
	{
		$data = mysqli_query($this->koneksi,"select * from tb_hewan");
		while($row = mysqli_fetch_array($data)){
			$hasil[] = $row;
		}
		return $hasil;
	}
 
	function tambah_data($nama_hewan,$jenis_hewan,$jenis_kelamin,$warna,$harga)
	{
		mysqli_query($this->koneksi,"insert into tb_hewan values ('','$nama_hewan','$jenis_hewan','$jenis_kelamin','$warna','$harga')");
	}
 
	function get_by_id($id_hewan)
	{
		$query = mysqli_query($this->koneksi,"select * from tb_hewan where id_hewan='$id_hewan'");
		return $query->fetch_array();
	}
 
	function update_data($nama_hewan,$jenis_hewan,$jenis_kelamin,$warna,$harga,$id_hewan)
	{
		$query = mysqli_query($this->koneksi,"update tb_hewan set nama_hewan='$nama_hewan',jenis_hewan='$jenis_hewan',jenis_kelamin='$jenis_kelamin',warna='$warna',harga='$harga' where id_hewan='$id_hewan'");
	}
 
	function delete_data($id_hewan)
	{
		$query = mysqli_query($this->koneksi,"delete from tb_hewan where id_hewan='$id_hewan'");
	}
}
?>