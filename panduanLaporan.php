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
	<!-- font -->
	<!-- js -->
	<script src="assets/js/jquery-latest.min.js" type="text/javascript"></script>
	<script src="assets/js/script-option.js"></script>
	<style type="text/css" media="screen">
		#progressbar li {
			list-style-type: none;
			color: rgb(51, 51, 51);
			text-transform: uppercase;
			font-size: 18px;
			width: calc(100%/6);
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
				<li class="active">Keadaan Umum</li>
				<li>IDENTIFIKASI</li>
				<li>PROGRAM KERJA</li>
				<li>REALISASI</li>
				<li>PENUTUP</li>
				<li>KETENTUAN</li>
			</ul>	
		</div>
		<form class="steps" accept-charset="UTF-8" enctype="multipart/form-data">
			<!-- USER INFORMATION FIELD SET --> 
			<fieldset>
				<div class="kotak-informasi">
					<h2>KEADAAN UMUM LOKASI KKN</h2>
					<ol>
						<li>Potensi Dasar Desa/kelurahan/Lokasi
						</li>
						<li>Tipe Desa/kelurahan/Lokasi</li>
						<li>Faktor Pengembangan Desa/kelurahan/Lokasi
							<ul>
								<li>							Faktor Tata Pemerintahan Desa dan Faktor Tata Masyarakat Penduduk
								</li>
								<li>							Lembaga Masyarakat
								</li>
								<li>							Teknologi Tepat Guna
								</li>
								<li>							Faktor Tata Ruang
								</li>
								<li>							Tata Pemukiman
								</li>
							</ul>
						</li>
					</ol>
				</div>
				<input type="button" data-page="1" name="next" class="next action-button" value="Selanjutnya" />
			</fieldset>



			<!-- ACQUISITION FIELD SET -->  
			<fieldset>
				<div class="kotak-informasi">
					<h2>
						IDENTIFIKASI DAN RUMUSAN MASALAH
					</h2>
					<ol>
						<li>Bidang Sarana & Prasarana Fisik</li>
						<li>Bidang Perekonomian & Produksi</li>
						<li>Bidang Pendidikan, Sosial, Budaya, dan</li>
						<li>Spiritual</li>
						<li>Bidang Kesehatan & Kebersihan Lingkungan</li>
						<li>Bidang Kelestarian Lingkungan</li>
						<li>Bidang Peningkatan Peranan Wanita</li>
						<li>Bidang Administrasi Pemerintahan Desa</li>
					</ol>
				</div>
				<input type="button" data-page="2" name="previous" class="previous action-button" value="Kembali" />
				<input type="button" data-page="2" name="next" class="next action-button" value="Selanjutnya" />
			</fieldset>



			<!-- Cultivation FIELD SET -->  
			<fieldset>
				<div class="kotak-informasi">
					<h2>
						PROGRAM KERJA UNTUK MENGATASI MASALAH
					</h2>
					<ol>
						<li>
							Bidang Sarana & Prasarana Fisik
							<ul>
								<li>
									Jenis (macam) kegiatan
								</li>
								<li>
									Sasaran Kegiatan
								</li>
								<li>
									Alokasi waktn (Time Scheduling)
								</li>
								<li>
									Susiman Tim Personalia Rencana Biaya & Smnber Biaya Target Kegiatan
								</li>
							</ul>
						</li>
						<li>
							Bidang Perekonomian & Produksi
							<ul>
								<li>							Jenis (macam) kegiatan
								</li>
								<li>							Sasaran Kegiatan
								</li>
								<li>							Alokasi waktn (Time Scheduling)
								</li>
								<li>							Susiman Tim Personalia Rencana Biaya & Sumber Biaya Target Kegiatan
								</li>
							</ul>
						</li>
						<li>
							Bidang Pendidikan, Sosial, Budaya dan Spiritual
							<ul>
								<li>							Jenis (macam) kegiatan
								</li>
								<li>							Sasaran Kegiatan
								</li>
								<li>							Alokasi waktu (Time Scheduling)
								</li>
								<li>							* Susunan Tim Personalia Rencana Biaya & Sumber Biaya Target Kegiatan
								</li>
							</ul>
						</li>
						<li>
							Bidang Kesehatan & Kebersihan 
							<ul>
								<li>Lingkungan</li>
								<li>							Jenis (macam) kegiatan
								</li>
								<li>							Sasaran Kegiatan
								</li>
								<li>							Alokasi waktu (Time Scheduling)
								</li>
								<li>							Susunan Tim Personalia Rencana Biaya & Sumber Biaya Target Kegiatan
								</li>
							</ul>
							
						</li>
						<li>
							Bidang Pelestarian Lingkungan
							<ul>
								<li>							Jenis (macam) kegiatan
								</li>
								<li>							Sasaran Kegiatan
								</li>
								<li>							Alokasi waktu (Time Scheduling)
								</li>
								<li>
									Susunan Tim Personalia Rencana Biaya & Sumber Biaya Target Kegiatan
								</li>
							</ul>
						</li>
						<li>
							Bidang Peningkatan Peranan Wanita
							<ul>
								<li>
									Jenis (macam) kegiatan

								</li>
								<li>
									Sasaran Kegiatan
									
								</li>
								<li>
									Alokasi waktn (Time Scheduling)
									
								</li>
								<li>
									Susunan Tim Personalia Rencana Biaya & Sumber Biaya Target Kegiatan
									
								</li>
							</ul>
						</li>
						<li>
							Bidang Administrasi Pemerintah Desa
							<ul>
								<li>
									Jenis (macam) kegiatan
									
								</li>
								<li>
									Sasaran Kegiatan
									
								</li>
								<li>
									Alokasi waktn (Time Scheduling)
									
								</li>
								<li>
									
									Susunan Tim Personalia Rencana Biaya Sc Sumber Biaya Target Kegiatan	
								</li>
							</ul>
							
						</li>
						
					</ol>
				</div>
				<input type="button" data-page="3" name="previous" class="previous action-button" value="Kembali" />
				<input type="button" data-page="3" name="next" class="next action-button" value="Selanjutnya" />
			</fieldset>

			<fieldset>
				<div class="kotak-informasi">
					<h2>
						PELAKSANAAN (REALISASI) PROGRAM KERJA
					</h2>
					<ol>
						<li>
							Perbandingan antara target dan realisasi kegiatan
						</li>
						<li>
							Faktor-faktor pendukung
						</li>
						<li>
							Kendal a-ken dal a yang dihadapi
						</li>
						<li>
							Total biaya yang dikeluarkan
						</li>
						<li>
							Sumber biaya yang diperoleh
						</li>
						<li>
							Aktivitas & peran serta anggota kelompok							
						</li>
						<li>
							Peran serta warga dalam kegiatan
						</li>
						<li>
							Lain-lain
						</li>
						
					</ol>
				</div>
				<input type="button" data-page="3" name="previous" class="previous action-button" value="Kembali" />
				<input type="button" data-page="3" name="next" class="next action-button" value="Selanjutnya" />
			</fieldset>
			<fieldset>
				<div class="kotak-informasi">
					<h2>
						PELAKSANAAN (REALISASI) PROGRAM KERJA
					</h2>
					<ol>
						<li>
							Rekomendasi untuk Pemerintah Desa/kelurahan/Lokasi
						</li>
						<li>
							Rekomendasi untuk Pemerintah Kecamatan
						</li>
						<li>
							Rekomendasi untuk Penyelenggara KKN
						</li>
					</ol>
					<p>
						<strong>
							Lampiran:
						</strong>
						Foto-foto Kegiatan yang dilakukan (pada program kerja).
						*)
						Program keija dilakukan hanya satu bidang atau pilih salah satu bidang (tidak
						semua bidang dilakukan) yang dirasa sangat penting atau mendesak di lokasi
						KKN, mengingat alokasi waktu yang disediakan untuk KKN sangat singkat.
					</p>
				</div>
				<input type="button" data-page="3" name="previous" class="previous action-button" value="Kembali" />
				<input type="button" data-page="3" name="next" class="next action-button" value="Selanjutnya" />
			</fieldset>
			<fieldset>
				<div class="kotak-informasi">
					<h2>
						KETENTUAN
					</h2>
					<ul>
						<li>
							Laporan diketik komputer dengan program MS WORD dengan huruf jenis Times New Roman, ukuran font 12.

						</li>
						<li>
							Dicetak pada kertas HVS dengan ukuran A4 (210 mm x 297 mm) dan berat 80 g/m2, baris-baris kalimat laporan beijarak satu setengah spasi.

						</li>
						Baris pertama paragraf bam berjarak tiga spasi dari baris terakhir paragraf yang mendahuluinya.
						<li>Masing-masing kelompok, wajib mengumpulkan dalam bentuk buku (cover wama biru tua) sebanyak 3 buku dan 2 CD laporan KKN dengan format PDF. Paling lambat 7 hari setelah pelaksanaan KKN. Dan bila diluar dari ketentuan ini (lebih dari 7 hari) maka nilai KKN dari mahasiswa pada seksi tersebut akan diproses pada semester berikutnya.
						</li>
					</ul>
				</div>
				<input type="button" data-page="3" name="previous" class="previous action-button" value="Kembali" />
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