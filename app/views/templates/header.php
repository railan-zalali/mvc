<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Halaman <?= $data['judul']; ?></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php echo BASEURL ?>/css/bootstrap.css">
	<script src="plugins/sweetalert22/sweetalert2.all.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow fixed-top">
		<div class="container">
			<a class="navbar-brand" href="<?php echo BASEURL; ?>">PHP MVC</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNavDropdown">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="<?php echo BASEURL; ?>">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" aria-current="page" href="<?php echo BASEURL; ?>/perpustakaan">Perpus</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?= BASEURL; ?>/about">About</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>