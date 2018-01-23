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
        <td>".$r['id_distributor']."</td>
        <td>".$r['nama_distributor']."</td>
        <td>".$r['telepon']."</td>
        <td><button type='button' name='button' id='".$r['id_distributor']."' class='btn update'>Update</button></td>
        <td><button type='button' name='button' id='".$r['id_distributor']."' class='btn red delete'>Hapus</button></td>
    </tr>
	";
}

echo $output;