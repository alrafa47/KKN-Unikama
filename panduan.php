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
	<link rel="stylesheet" type="text/css" href="assets/css/panduan.css">
	<!-- js -->
	<script src="assets/js/jquery-latest.min.js" type="text/javascript"></script>
	<script src="assets/js/script-option.js"></script>
	<style type="text/css" media="screen">
		#progressbar li {
			list-style-type: none;
			color: rgb(51, 51, 51);
			text-transform: uppercase;
			font-size: 18px;
			width: calc(100%/3);
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
				<li class="active">Persyaratan</li>
				<li>Administrasi</li>
				<li>Timeline</li>
			<!-- <li>Cultivation2</li>
				<li>Retention</li> -->
			</ul>	
		</div>
		<form class="steps" accept-charset="UTF-8" enctype="multipart/form-data">
			<!-- USER INFORMATION FIELD SET --> 
			<fieldset>
				<div class="kotak-informasi">
					<h2>Persyaratan</h2>
					<ol>

						<li>Mahasiswa telah menempuh minimal <strong>110 SKS</strong>. Jika SKS belum mencapai standar minimal, harap melampirkan rekomendasi mengikuti kegiatan KKN dari kaprodi</li>

						<li>Sehat jasmani dan rohani</li>
						<li>Mahasiswa yang mempunyai penyakit khusus dan mahasiswi yang sedang hamil harus disertai surat keterangan dokter dan surat izin dari pihak keluarga (bermaterai)</li>
					</ol>

				</div>
				<input type="button" data-page="1" name="next" class="next action-button" value="Selanjutnya" />
			</fieldset>



			<!-- ACQUISITION FIELD SET -->  
			<fieldset>
				<div class="kotak-informasi">
					<h2>Administrasi</h2>
					<ol>
						<li>Melampirkan 2 lembar fotokopi bukti pembayaran biaya KKN sebesar Rp. 375.000,- ( Tiga ratus tujuh puluh lima ribu rupiah ) dari CIMB Niaga dan menunjukkan bukti pembayaran asli.</li>

						<li>Melampirkan 1 lembar fotokopi KTM</li>
						<li>Melampirkan 1 lembar fotocopi KRS yang sedang berjalan</li>
						<li>Melampirkan 1 lembar fotokopi Transkrip Nilai.</li>
						<li>Melampirkan 1 lembar fotokopi pembayaran Jamkesma</li>
						<li>Menyerahkan photo berwarna terbaru ukuran 3x4 sebanyak 1 lembar</li>
					</ol>

				</div>
				<input type="button" data-page="2" name="previous" class="previous action-button" value="Kembali" />
				<input type="button" data-page="2" name="next" class="next action-button" value="Selanjutnya" />
			</fieldset>



			<!-- Cultivation FIELD SET -->  
			<fieldset>
				<div class="kotak-informasi">
					<h2>Waktu Pelaksanaan</h2>
					<ol>
						<li>Pelaksanaan KKN pada tanggal 16 Juli s.d 27 Agustus 2018.</li>
						<li>Pendaftaran KKN pada tanggal 19 Maret s.d 30 April 2018</li>
						<li>Tempat pendaftaran KKN di kantor LPPM (loket ruang B3) Senin-Jumat Pkl. 08:00 s/d 16:00 WIB</li>
					</ol>
				</div>
				<input type="button" data-page="3" name="previous" class="previous action-button" value="Kembali" />
				<!-- <input type="button" data-page="3" name="next" class="next action-button" value="Next" /> -->

			</fieldset>
		</form>
	</div>
	<!-- footer -->
	<?php require 'footer.php'; ?>
	<script src='assets/js/2.1.3/jquery.min.js'></script>
	<script src='assets/js/2.1.3/jquery.easing.min.js'></script>
	<script src='assets/js/2.1.3/jquery.validate.js'></script>
	<script  src="assets/js/daftar.js"></script>
</body>
</html>