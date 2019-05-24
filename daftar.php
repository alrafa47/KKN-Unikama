<!DOCTYPE html>
<html>
<head>
	<title>KKN Universitas Kanjuruhan malang</title>
	<!-- font -->
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,400italic,700,900' rel='stylesheet' type='text/css'>
	<link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
	<!-- css  -->
	<link rel="stylesheet" href="assets/css/normalize.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/index.css">
	<link rel="stylesheet" type="text/css" href="assets/css/daftar.css">
	<!-- js -->
	<script src="assets/js/jquery-latest.min.js" type="text/javascript"></script>
	<script src="assets/js/script-option.js"></script>
	<style type="text/css" media="screen">
		#progressbar li {
			list-style-type: none;
			color: rgb(51, 51, 51);
			text-transform: uppercase;
			font-size: 18px;
			width: calc(100%/4);
			float: left;
			position: relative;
		}
	</style>
</head>
<body>
	<?php require 'header.php'; ?>
	<!-- Main -->
	<div class="main">    
		<!-- Modal -info -->
		<div class="progress">
			<ul id="progressbar" style="padding-left: 0px;">
				<li class="active">BIODATA</li>
				<li>Lain-lain</li>
				<li>Kelengkapan</li>
				<li>Selesai</li>
			</ul>
		</div>
		<form class="steps" accept-charset="UTF-8" enctype="multipart/form-data">
			<!-- USER INFORMATION FIELD SET --> 
			<fieldset>
				<div class="kotak-informasi">
					<h2>BIODATA</h2>
					<!-- Begin What's Your First Name Field -->
					<label>NPM Anda</label>
					<input  name="" type="text" value="" placeholder="Masukan NPM Anda">
					<label>Nama Anda</label>
					<input  name="" required type="text" value="" placeholder="Masukan nama Anda">
					<label>Kelas</label>
					<div class="uye">
						<input class="re" type="radio" name="we" value="" placeholder="" style="display: inline;width: 0px;"><p class="radio" style="display: inline;">R1</p>
						<input class="re" type="radio" name="we" value="" style="display: inline;width: 0px;"><p class="radio" style="display: inline;">R2</p>
					</div>
					<label>Jenis Kelamin</label>
					<div class="uye">
						<input class="re" type="radio" name="jk" value="" style="display: inline;width: 0px;"><p class="radio" style="display: inline;">Laki-laki</p>
						<input class="re" type="radio" name="jk" value="" placeholder="" style="display: inline;width: 0px;"><p class="radio" style="display: inline;">Perempuan</p>
					</div>
				</div>

				<!-- End Total Number of Constituents in Your Database Field -->
				<input type="button" data-page="1" name="next" class="next action-button" value="Selanjutnya" />
			</fieldset>
			<!-- ACQUISITION FIELD SET -->  
			<fieldset>
				<div class="kotak-informasi">
					<h2>Lain-lain</h2>
					<label>Pengalaman Organisasi</label>
					<textarea name="" placeholder="Pengalaman Organisasi anda"></textarea>
					<label>Sakit yang pernah diderita</label>
					<input type="text" name="" value="" placeholder="Sakit yang pernah diderita">
					<label>Kondisi Hamil</label>
					<div class="uye">
						<input class="re" type="radio" name="jk" value="" style="display: inline;width: 0px;"><p class="radio" style="display: inline;">Ya</p>
						<input class="re" type="radio" name="jk" value="" placeholder="" style="display: inline;width: 0px;"><p class="radio" style="display: inline;">Tidak</p>
					</div>
					<label>SKS yang Telah Dicapai</label>
					<input type="number" name="" value="" placeholder="Jumlah SKS">
					<label>Ukuran Kaos</label><br>
					<select name="" style="font-size: 20px;">
						<option value="">XXL</option>
						<option value="">XL</option>
						<option value="">L</option>
						<option value="">M</option>
						<option value="">S</option>
						<option value="">XS</option>
						option
					</select>
				</div>
				<!-- End Calc of Total Number of Donors Fields -->
				<input type="button" data-page="2" name="previous" class="previous action-button" value="Kembali" />
				<input type="button" data-page="2" name="next" class="next action-button" value="Selanjutnya" />
			</fieldset>
			<!-- Cultivation FIELD SET -->  
			<fieldset>
				<div class="kotak-informasi">
					<label>Input Foto 3x4</label>
					<input type="file" name="" value="" placeholder="Maskukan Foto 3x4">
					<label>Input bukti Pembayaran KKN</label>
					<input type="file" name="" value="" placeholder="Maskukan Foto 3x4">
					<label>Input bukti Pembayaran Jamkesma</label>
					<input type="file" name="" value="" placeholder="Maskukan Foto 3x4">
				</div>
				<input type="button" data-page="3" name="previous" class="previous action-button" value="Kembali" />
				<input type="button" data-page="3" name="next" class="next action-button" value="Selanjutnya" />
			</fieldset>
			<fieldset>
				<div class="kotak-informasi">
					<center>
						<h2>Terimakasih</h2>
						<h3>Administrasi KKN ANDA TELAH TEREKAP</h3>
					</center>
				</div>
				<center>
					<a style="text-decoration: none;" href="daftar.php">
						<button type="button" class="action-button">OK</button></button>
					</a> 
				</center>
			</fieldset>
		</form>
	</div>
	<!-- footer -->
	<?php require 'footer.php'; ?>
	<!-- js  for slider-->
	<script src='assets/js/2.1.3/jquery.min.js'></script>
	<script src='assets/js/2.1.3/jquery.easing.min.js'></script>
	<script src='assets/js/2.1.3/jquery.validate.js'></script>
	<script  src="assets/js/daftar.js"></script>	
</body>
</html>