<?php

session_start();

include '../config/include.php';
$page = 'dashboard';
include 'header.php';

if (is_null($_SESSION['username']) || is_null($_SESSION['status']) ) {
	header('location: login.php');
}

?>
<main>
<!-- Statistik -->
	<div class="row">
		<div class="col-12">
			
			<div class="row">
				<div class="col-3 left">
					<div class="count">
						<div class="row">
							<div class="col-5">
								<h3>Buku</h2>
								<h1>12</h1>
							</div>
							<div class="col-5">
								<i class="fa fa-book fa-5x"></i>
							</div>
						</div>
					</div>
				</div>

				<div class="col-3 left">
					<div class="count">
						<div class="row">
							<div class="col-5">
								<h3>Buku</h2>
								<h1>12</h1>
							</div>
							<div class="col-5">
								<i class="fa fa-book fa-5x"></i>
							</div>
						</div>
					</div>
				</div>

				<div class="col-3 left">
					<div class="count">
						<div class="row">
							<div class="col-5">
								<h3>Buku</h2>
								<h1>12</h1>
							</div>
							<div class="col-5">
								<i class="fa fa-book fa-5x"></i>
							</div>
						</div>
					</div>
				</div>

				<div class="col-3 left">
					<div class="count">
						<div class="row">
							<div class="col-5">
								<h3>Buku</h2>
								<h1>12</h1>
							</div>
							<div class="col-5">
								<i class="fa fa-book fa-5x"></i>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
<!-- End Statistik -->
</main>

<?php
	include 'footer.php';
?>