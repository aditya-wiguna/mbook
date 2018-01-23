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

		$query = "SELECT * FROM kasir WHERE username = '$username' AND password = '$password' AND akses = '$status'";

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
		$status = $this->escape_string($_POST['akses']);
		$alamat = $this->escape_string($_POST['alamat']);
		$phone = $this->escape_string($_POST['telepon']);

		$id = date('YmdHis');

		$query = "INSERT INTO `kasir`(`nama`, `alamat`, `telepon`, `status`, `username`, `password`, `akses`) VALUES ('$nama','$alamat','$telepon', '1','$username','$password','$status')";

		$this->query($query);

		header('location: ../view/index.php');
	}

	public function logout()
	{
		session_destroy();
		header('location: ../view/login.php');
	}


}