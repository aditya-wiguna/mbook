<!DOCTYPE html>
<html>
<head>
	<title>Dashboard | Toko Buku</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../assets/css/style.css">
</head>
<body>

<header>
	<div class="nav">
		<div class="container">
			<div class="menu right">
				<ul>
					<li>
						<a href=""><?php echo $_SESSION['username'] ?></a>
					</li>
				</ul>
			</div>
		</div>
	</div>

	<div class="side-nav col-2">
		<ul>
			<li><i id="logo"><--Toko Buku--></i></li>
			<li class="<?php if($page == 'dashboard'){echo 'active';}else{echo '';} ?>"><a href="index.php" id="dashboard"><i class="fa fa-desktop"></i>&nbsp;&nbsp;Dashboard</a></li>
			<?php if ($_SESSION['status'] == '0') { ?>
				<li class="<?php if($page == 'book'){echo 'active';}else{echo '';} ?>"><a href="book.php" id="book"><i class="fa fa-book"></i>&nbsp;&nbsp;Buku</a></li>
				<li class="<?php if($page == 'distributor'){echo 'active';}else{echo '';} ?>"><a href="distributor.php"><i class="fa fa-sign-in"></i>&nbsp;&nbsp;Distributor</a></li>
				<li><a href=""><i class="fa fa-print"></i>&nbsp;&nbsp;Penjualan</a></li>
				<li><a href=""><i class="fa fa-user"></i>&nbsp;&nbsp;Users</a></li>
			<?php } elseif ($_SESSION['status'] == '1') { ?>
				<li><a href=""><i class="fa fa-print"></i>&nbsp;&nbsp;Penjualan</a></li>
			<?php } elseif ($_SESSION['status'] == '2') { ?>
				<li><a href=""><i class="fa fa-book"></i>&nbsp;&nbsp;Buku</a></li>
			<?php } ?>
			<li><form action="../model/Model.php" method="post">
				<button type="submit" id="logout" name="logout"><i class="fa fa-sign-out"></i>&nbsp;&nbsp;Logout</button>
			</form></li>
		</ul>
	</div>
</header>
