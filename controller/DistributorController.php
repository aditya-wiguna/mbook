<?php 

include_once '../config/crud.php';
include_once '../config/validate.php';

$validate = new validate;

class DistributorController extends crud
{
	
	public function __construct()
	{
		parent::__construct();
	}

	// TODO: 10 membuat fungsi untuk membuat buku baru
	public function create()
	{
		$id = date('YmdHis');
		$nama = $this->escape_string($_POST['nama']);
		$alamat = $this->escape_string($_POST['alamat']);
		$telephone = $this->escape_string($_POST['telephone']);

		$query = "INSERT INTO `distributor`(`id`, `nama`, `alamat`, `telepon`) VALUES('$id', '$nama', '$alamat', '$telephone')";
		$result = $this->query($query);
	}

	// TODO: 11 membuat fungsi untuk menampilkan semua buku
	public function show()
	{
		$output = '';
		$id = $this->escape_string($_POST['id']);
		// $nama = $this->escape_string($_POST['nama']);
		// $alamat = $this->escape_string($_POST['alamat']);
		// $telephone = $this->escape_string($_POST['telephone']);

		$query = "SELECT * FROM distributor WHERE id = '$id'";
		$result = $this->select($query);
		foreach ($result as $s) {
			$output['nama'] = $s['nama'];
			$output['alamat'] = $s['alamat'];
			$output['telephone'] = $s['telepon'];
		}

		echo json_encode($output);

	}

	// TODO: 12 membuat fungsi untuk mengupdate buku
	public function update()
	{
		$id = $this->escape_string($_POST['distributor_id']);
		$nama = $this->escape_string($_POST['nama']);
		$alamat = $this->escape_string($_POST['alamat']);
		$telephone = $this->escape_string($_POST['telephone']);

		$query = "UPDATE distributor SET nama = '$nama', alamat = '$alamat', telepon = '$telephone' WHERE id = '$id'";

		$this->query($query);
	}
	// TODO: 13 membuat fungsi untuk menghapus buku
	public function hapus()
	{
		$id = $this->escape_string($_POST['id']);

		$this->delete($id, 'distributor');
	}
	// TODO: 14 membuat fungsi untuk menampilkan 1 buku

	// TODO: 15 membuat fungsi untuk menambakan pasokan
	// TODO: 16 membuat fungsi untuk melihat semua daftar pasokan
	// TODO: 17 membuat fungsi untuk mengupdate pasokan
	// TODO: 18 membuat fungsi untuk menghapus pasokan


}