<?php 

include_once '../config/crud.php';
include_once '../config/validate.php';

$validate = new validate;

class UserController extends crud
{
	
	public function __construct()
	{
		parent::__construct();
	}

	public function hapus_user()
	{
		$id = $this->escape_string($_POST['id']);
		$this->query("DELETE FROM kasir WHERE username = '$id'");
	}

	public function show(){
		$output = '';
		$id = $this->escape_string($_POST['id']);

		$query = "SELECT * FROM kasir WHERE username = '$id'";
		$result = $this->select($query);
		foreach ($result as $s) {
			$output['nama'] = $s['nama'];
			$output['alamat'] = $s['alamat'];
			$output['telepon'] = $s['telepon'];
			$output['username'] = $s['username'];
			$output['password'] = $s['password'];
			$output['akses'] = $s['akses'];
		}

		echo json_encode($output);
	}

	public function update(){
		$id = $this->escape_string($_POST['kasir_username']);
		$nama = $this->escape_string($_POST['nama']);
		$password = $this->escape_string($_POST['password']);
		$status = $this->escape_string($_POST['akses']);
		$alamat = $this->escape_string($_POST['alamat']);
		$phone = $this->escape_string($_POST['telepon']);

		$query = "UPDATE `kasir` SET `nama`='$nama',`alamat`='$alamat',`telepon`='$telepon',`password`='$password',`akses`='$akses' WHERE username = '$id";

		$this->query($query);
	}


}