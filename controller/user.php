<?php

include '../config/crud.php';
$crud = new crud();

$query = "SELECT * FROM users WHERE status = '1' OR status = '2'";

$result = $crud->select($query);

$status = array('Admin', 'Kasir', 'Gudang');

$output = '';
$output .= '
	<tr>
        <th>Username</th>
        <th>Status</th>
        <th>Update</th>
        <th>Hapus</th>
    </tr>
';

foreach ($result as $r) {
	$output .= "
	<tr>
        <td>".$r['username']."</td>
        <td>".$status[$r['status']]."</td>
        <td><button type='button' name='button' id='".$r['username']."' class='btn update'>Update</button></td>
        <td><button type='button' name='button' id='".$r['username']."' class='btn red delete'>Hapus</button></td>
    </tr>
	";
}

echo $output;