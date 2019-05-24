<!DOCTYPE html>
<html>
<head>
	<title>KKN Universitas Kanjuruhan malang</title>
	<!-- font -->
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,400italic,700,900' rel='stylesheet' type='text/css'>
	<link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
	<!-- css -->
	<link rel="stylesheet" href="assets/css/normalize.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/index.css">
	<link rel="stylesheet" type="text/css" href="assets/css/detailPengumuman.css">
	<!-- js -->
	<script src="assets/js/jquery-latest.min.js" type="text/javascript"></script>
	<script src="assets/js/script-option.js"></script>

</head>
<body>
	<?php require 'header.php'; ?>
	<!-- Main -->
	<button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-chevron-up"></i>
	</button>
	<script>
		window.onscroll = function() {scrollFunction()};
		function scrollFunction() {
			if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
				document.getElementById("myBtn").style.display = "block";
			} else {
				document.getElementById("myBtn").style.display = "none";
			}
		}
		function topFunction() {
			document.body.scrollTop = 0;
			document.documentElement.scrollTop = 0;
		}
	</script>
	<div class="body-konten clearfix">
		<div class="head-detailBerita">
			<h1 style="margin-bottom: 0px">Judul Pengumuman</h1>
			<h5 style="margin-top: 5px">Home > Pengumuman > Judul Pengumuman</h5>
		</div>

		<div class=" main-detailBerita">
			<img class="img-detailBerita" src="img/1.png" alt="img-berita">
			<h3 style="margin-top: 10px" class="link">Penulis - Tanggal Upload</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			<div class="bottom-detailBerita">
				<a class="link" style="float: left;" href=""> << Pengumuman Sebelumnya</a>
				<a class="link" style="float: right;" href="">Pengumuman Selanjutnya >></a>	
			</div>
		</div>
		<form class="find">
			<input class="input-find" type="text" name="" value="" placeholder="Pencarian Pengumuman"><button type="button" style="background-image: url(img/find.png);
			background-size: cover;" class="btn-find"></button>
		</form>
		<div class="side-detailBerita">

			<div class="arsip">
				<h2>Arsip Pengumuman</h2>
				<div id="cssmenu" >
					<ul class="data-link">
						<li class="active has-sub"><a href="#1">Januari</a>
							<ul>
								<li><a href="#11">Pengumuman 1</a></li>
								<li class="last"><a href="#22">Pengumuman 2</a></li>
							</ul>
						</li>
						<li class="has-sub"><a href="#2">Februari</a>
							<ul>
								<li><a href="#21">Pengumuman 1</a></li>
								<li><a href="#22">Pengumuman 2</a></li>
								<li><a href="#23">Pengumuman 3</a></li>
								<li class="last"><a href="#24">Pengumuman 4</a></li>
							</ul>
						</li>
						<li class="has-sub"><a href="#3">Maret</a>
							<ul>
								<li><a href="#31">Pengumuman 1</a></li>
								<li><a href="#32">Pengumuman 2</a></li>
								<li><a href="#33">Pengumuman 3</a></li>
								<li class="last"><a href="#34">Pengumuman 4</a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!-- footer -->
	<?php require 'footer.php'; ?>
</body>
</html>