<?php

class database{
	//complete:1 koneksi ke datasabe
	private $host = 'localhost';
	private $user = 'root';
	private $pass = '';
	private $database = 'tokobuku';

	protected $db;

	public function __construct()
	{
		if (!isset($this->db)) {
			$this->db = new mysqli($this->host, $this->user, $this->pass, $this->database);

			if (!$this->db) {
				echo "connection fail";
				exit;
			}

			return $this->db;
		}
	}
}