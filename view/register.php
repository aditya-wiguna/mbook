<!DOCTYPE html>
<html>
<head>
	<title>Admin | Login</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../assets/css/style.css">
</head>
<body class="register">

<div class="container">
	<div class="row">
		<div class="col-5">
			<div class="card">
				<center><h3>Toko Buku</h3></center><br>
				<form action="../model/Model.php" method="post">
					<label for="username">Nama:</label><br>
					<input type="text" name="nama" placeholder="Nama"><br><br>
					<label for="username">Username:</label><br>
					<input type="text" name="username" placeholder="Username"><br><br>
					<label for="password">Password:</label><br>
					<input type="password" name="password" placeholder="Password"><br><br>
					<label for="status">Status</label><br>
					<select name="status">
						<option value="1">Kasir</option>
						<option value="2">Distributor</option>
					</select><br><br>
					<label for="username">Alamat:</label><br>
					<input type="text" name="alamat" placeholder="Alamat"><br><br>
					<label for="username">Telephone:</label><br>
					<input type="text" name="phone" placeholder="Telephone"><br><br>

					<center><input type="submit" name="register" value="Register" class="btn"></center>
				</form>
			</div>
		</div>
	</div>
</div>

</body>
</html>