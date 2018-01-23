<?php 

include 'database.php';

class crud extends database
{
	
	public function __construct()
	{
		parent::__construct();
	}
	// complete:2 membuat fungsi untuk memilih data dari table
	public function select($query)
	{
		$result = $this->db->query($query);

		if ($result == false) {
			return false;
		}

		$rows = array();

		while ($row = $result->fetch_assoc()) {
			$rows[] = $row;
		}

		return $rows;
	}
	// complete:3 membuat fungsi untuk eksekusi query
	public function query($query)
	{
		$result = $this->db->query($query);

		if ($result == false) {
			return false;
		} else{
			return true;
		}
	}
	// complete:4 membuat fungsi untuk menghapus datu data
	public function delete($id, $param, $table)
	{
		$query = "DELETE FROM $table WHERE $param = $id";

		$result = $this->db->query($query);

		if ($result == false) {
			return false;
		} else{
			return true;
		}
	}
	// complete:5 membuat fungsi untuk real espace string
	public function escape_string($value)
	{
		return $this->db->real_escape_string($value);
	}

	public function uploadFile($file)
	{
		if (isset($file)) {
			$image = explode('.', $file['name']);
			$newName = rand().'.'.$image[1];
			$location = '../assets/img/'.$newName;
			move_uploaded_file($file['tmp_name'], $location);
			return $newName;
		}
	}

}

 ?>