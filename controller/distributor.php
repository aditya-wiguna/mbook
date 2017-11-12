<?php

include '../config/crud.php';
$crud = new crud();

$query = "SELECT * FROM distributor";

$result = $crud->select($query);

$output = '';
$output .= '
	<tr>
        <th>ID Distributor</th>
        <th>Nama</th>
        <th>Telephone</th>
        <th>Update</th>
        <th>Hapus</th>
    </tr>
';

foreach ($result as $r) {
	$output .= "
	<tr>
        <td>".$r['id']."</td>
        <td>".$r['nama']."</td>
        <td>".$r['telepon']."</td>
        <td><button type='button' name='button' id='".$r['id']."' class='btn update'>Update</button></td>
        <td><button type='button' name='button' id='".$r['id']."' class='btn red delete'>Hapus</button></td>
    </tr>
	";
}

echo $output;