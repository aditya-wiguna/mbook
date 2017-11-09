<?php 

include_once '../config/crud.php';
include_once '../config/validate.php';

$validate = new validate;

class BukuController extends crud
{
	
	public function __construct()
	{
		parent::__construct();
	}

	// TODO: 10 membuat fungsi untuk membuat buku baru
	public function create()
	{
		$id = date('YmdHis');
		$judul = $this->escape_string($_POST['judul']);
		$isbn = $this->escape_string($_POST['isbn']);
		$penulis = $this->escape_string($_POST['penulis']);
		$penerbit = $this->escape_string($_POST['penerbit']);
		$tahun = $this->escape_string($_POST['tahun']);
		$stok = $this->escape_string($_POST['stok']);
		$harga_pokok = $this->escape_string($_POST['harga_pokok']);
		$harga_jual = $this->escape_string($_POST['harga_jual']);
		$ppn = $this->escape_string($_POST['ppn']);

		$query = "INSERT INTO `buku`(`id`, `judul`, `isbn`, `penulis`, `penerbit`, `tahun`, `stok`, `harga_pokok`, `harga_jual`, `ppn`, `item`) VALUES ('$id','$judul','$isbn','$penulis','$penerbit','$tahun','$stok','$harga_pokok','$harga_jual','$ppn',1)";

		$this->query($query);

	}
	// TODO: 11 membuat fungsi untuk menampilkan semua buku
	public function index()
	{
		$query = "SELECT * FROM buku";
		$result = $this->select($query);

		$output = '';
		$output .= '
			<tr>
                <th>No</th>
                <th>Nama</th>
                <th>Tahun</th>
                <th>Update</th>
                <th>Hapus</th>
            </tr>
            ';

		foreach ($result as $a) {
			$output .= "
			<tr>
                <td>".$a['id']."</td>
                <td>".$a['judul']."</td>
                <td>".$a['tahun']."</td>
                <td><button type='button' name='button' id='".$a['id']."' class='btn update'>Update</button></td>
                <td><button type='button' name='button' id='".$a['id']."' class='btn red delete'>Hapus</button></td>
            </tr>

			";
		}

		return $output;
	}

	public function show()
	{
		$output = '';
		$id = $this->escape_string($_POST['buku_id']);
		$query = "SELECT * FROM buku WHERE id = '$id'";
		$result = $this->select($query);
		foreach ($result as $key) {
			$output['judul'] = $key['judul'];
			$output['isbn'] = $key['isbn'];
			$output['penulis'] = $key['penulis'];
			$output['penerbit'] = $key['penerbit'];
			$output['tahun'] = $key['tahun'];
			$output['stok'] = $key['stok'];
			$output['harga_pokok'] = $key['harga_pokok'];
			$output['harga_jual'] = $key['harga_jual'];
			$output['ppn'] = $key['ppn'];
		}
		echo json_encode($output);
	}

	// TODO: 12 membuat fungsi untuk mengupdate buku
	public function update()
	{
		$id = $this->escape_string($_POST['buku_id']);
		$judul = $this->escape_string($_POST['judul']);
		$isbn = $this->escape_string($_POST['isbn']);
		$penulis = $this->escape_string($_POST['penulis']);
		$penerbit = $this->escape_string($_POST['penerbit']);
		$tahun = $this->escape_string($_POST['tahun']);
		$stok = $this->escape_string($_POST['stok']);
		$harga_pokok = $this->escape_string($_POST['harga_pokok']);
		$harga_jual = $this->escape_string($_POST['harga_jual']);
		$ppn = $this->escape_string($_POST['ppn']);

		$query = "UPDATE `buku` SET `judul`='$judul',`isbn`='$isbn',`penulis`='$penulis',`penerbit`='$penerbit',`tahun`='$tahun',`stok`='$stok',`harga_pokok`='$harga_pokok',`harga_jual`='$harga_jual',`ppn`='$ppn' WHERE `id` = '$id'";
		$this->query($query);
	}

	// TODO: 13 membuat fungsi untuk menghapus buku
	public function delete_buku()
	{
		$id = $this->escape_string($_POST['buku_id']);
		$this->delete($id, 'buku');
	}
	// TODO: 14 membuat fungsi untuk menampilkan 1 buku

	// TODO: 15 membuat fungsi untuk menambakan pasokan
	// TODO: 16 membuat fungsi untuk melihat semua daftar pasokan
	// TODO: 17 membuat fungsi untuk mengupdate pasokan
	// TODO: 18 membuat fungsi untuk menghapus pasokan


}