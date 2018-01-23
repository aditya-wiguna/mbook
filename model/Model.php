<?php 
session_start();
include '../config/include.php';

if (isset($_POST['login'])) {
	echo $auth->login();
}

if (isset($_POST['register'])) {
	echo $auth->register();
}

if (isset($_POST['logout'])) {
	echo $auth->logout();
}

if (isset($_POST['action'])) {
	
	if ($_POST['action'] == 'insert buku') {
		echo $buku->create();
	}

	if ($_POST['action'] == 'load buku') {
		echo $buku->index();
	}

	if ($_POST['action'] == 'single buku') {
		echo $buku->show();
	}

	if ($_POST['action'] == 'update buku') {
		echo $buku->update();
	}

	if ($_POST['action'] == 'delete buku') {
		echo $buku->delete_buku();
	}

	if ($_POST['action'] == 'insert distributor') {
		echo $distributor->create();
	}

	if ($_POST['action'] == 'single distributor' ) {
		echo $distributor->show();
	}

	if ($_POST['action'] == 'update distributor') {
		echo $distributor->update();
	}

	if ($_POST['action'] == 'delete distributor') {
		echo $distributor->hapus();
	}

	if ($_POST['action'] == 'delete user') {
		echo $user->hapus_user();
	}

	if($_POST['action'] == 'insert user'){
		echo $auth->register();
	}

	if($_POST['action'] == 'single user'){
		echo $user->show();
	}

	if($_POST['action'] == 'update user'){
		echo $user->update();
	}

}

 ?>