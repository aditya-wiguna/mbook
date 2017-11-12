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
		$this->query("DELETE FROM users WHERE username = '$id'");
	}


}