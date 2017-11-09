<?php
include_once '../config/crud.php';
include '../config/validate.php';

$validate = new validate;
class AuthController extends crud
{
	
	public function __construct()
	{
		parent::__construct();
	}

	// complete: 9 membuat fungsi untuk login
	public function login()
	{
		$username = $this->escape_string($_POST['username']);
		$password = $this->escape_string($_POST['password']);
		$status = $this->escape_string($_POST['status']);

		$query = "SELECT * FROM users WHERE username = '$username' AND password = '$password' AND status = '$status'";

		if (is_null($username) || is_null($password) || is_null($status)) {
			
		} else{
			$result = $this->db->query($query);
			$_SESSION['username'] = $username;
			$_SESSION['status'] = $status;

			if (mysqli_num_rows($result)) {
				header('location: ../view/index.php');
			} else{
				header('location: ../view/login.php');
			}

		}
	}

	// complete: 8 membuat fungsi untuk menambahakan user
	public function register()
	{
		$nama = $this->escape_string($_POST['nama']);
		$username = $this->escape_string($_POST['username']);
		$password = $this->escape_string($_POST['password']);
		$status = $this->escape_string($_POST['status']);
		$alamat = $this->escape_string($_POST['alamat']);
		$phone = $this->escape_string($_POST['phone']);

		$id = date('YmdHis');

		$query1 = "INSERT INTO users(username, password, status) VALUES('$username', '$password', $status)";
		$query2 = "INSERT INTO gudang(id, username, nama, alamat, telepon) VALUES('$id', '$username', '$nama', '$alamat', $phone)";
		$query3 = "INSERT INTO kasir(id, username, nama, alamat, telepon) VALUES('$id', '$username', '$nama', '$alamat', $phone)";

		$this->query($query1);

		if ($status == '1') {
			$this->query($query3);
		} else if($status == '2'){
			$this->query($query2);
		}

		header('location: ../view/index.php');
	}

	public function logout()
	{
		session_destroy();
		header('location: ../view/login.php');
	}


}