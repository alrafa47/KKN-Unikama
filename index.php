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
	<style>
		/* Caption text */
		.text {
			color: #f2f2f2;
			font-size: 15px;
			padding: 8px 12px;
			position: absolute;
			bottom: 8px;
			width: 100%;
			text-align: center;
		}
		/* The dots/bullets/indicators */
		.dot {
			height: 15px;
			width: 15px;
			margin: 0 2px;
			background-color: #bbb;
			border-radius: 50%;
			display: inline-block;
			transition: background-color 0.6s ease;
			pos
		}

		.active {
			background-color: #717171;
		}

		/* Fading animation */
		.fade {
			-webkit-animation-name: fade;
			-webkit-animation-duration: 1.5s;
			animation-name: fade;
			animation-duration: 1.5s;
		}

		@-webkit-keyframes fade {
			from {opacity: .4} 
			to {opacity: 1}
		}

		@keyframes fade {
			from {opacity: .4} 
			to {opacity: 1}
		}

		/* On smaller screens, decrease text size */
		@media only screen and (max-width: 300px) {
			.text {font-size: 11px}
		}
	</style>
</head>
<body>
	<?php require 'header.php'; ?>
	<!-- /header -->
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
	<div class="slider  clearfix">
		<div id="slider-utama">
			<div class="slider-wrapper">
				<!-- <img src="img/1.png" class="slide fade" /> -->
				<img src="img/2.JPG" class="slide fade" />
				<img src="img/3.jpg" class="slide fade" />
				<!-- <img src="img/4.png" class="slide fade" /> -->
				<img src="img/5.jpeg" class="slide fade" />
			</div>
		</div>
		<div style="text-align:center;position: absolute;top: 675px;left: 714px;">
			<span class="dot"></span> 
			<span class="dot"></span> 
			<!-- <span class="dot"></span>  -->
			<!-- <span class="dot"></span>  -->
			<span class="dot"></span> 
		</div>
	</div>
	<div class="main-berita">
		<div class="pengumuman">
			<h1 class="label">Pengumuman Terbaru</h1>
			<div class="content">
				<div class="kotak-pengumuman clearfix">
					<h2 class="title-pengumuman">PENDAFTARAN KKN TAHUN 2018</h2>
					<p class="konten-pengumuman">Pada Timeline kegiatan KKN di informasikan bahwa jangka waktu Pendaftaran KKN dimulai pada tanggal 19 Maret 2018 s.d 30 April 2018, sedangkan pelaksanaan KKN di lapangan dilaksanakan selama 40 hari yaitu pada tanggal 16 Juli 2018  s.d. 27 Agustus 2018.</p>
					<a style="float: right;" href="" class="link">Selengkapnya-></a>
				</div>
				<div class="kotak-pengumuman clearfix">
					<h2 class="title-pengumuman">PENDAFTARAN KKN TAHUN 2018</h2>
					<p class="konten-pengumuman">Pada Timeline kegiatan KKN di informasikan bahwa jangka waktu Pendaftaran KKN dimulai pada tanggal 19 Maret 2018 s.d 30 April 2018, sedangkan pelaksanaan KKN di lapangan dilaksanakan selama 40 hari yaitu pada tanggal 16 Juli 2018  s.d. 27 Agustus 2018.</p>
					<a style="float: right;" href="" class="link">Selengkapnya-></a>
				</div>
				<div class="kotak-pengumuman clearfix">
					<h2 class="title-pengumuman">PENDAFTARAN KKN TAHUN 2018</h2>
					<p class="konten-pengumuman">Pada Timeline kegiatan KKN di informasikan bahwa jangka waktu Pendaftaran KKN dimulai pada tanggal 19 Maret 2018 s.d 30 April 2018, sedangkan pelaksanaan KKN di lapangan dilaksanakan selama 40 hari yaitu pada tanggal 16 Juli 2018  s.d. 27 Agustus 2018.</p>
					<a style="float: right;" href="" class="link">Selengkapnya-></a>
				</div>
				<div class="kotak-pengumuman clearfix">
					<h2 class="title-pengumuman">PENDAFTARAN KKN TAHUN 2018</h2>
					<p class="konten-pengumuman">Pada Timeline kegiatan KKN di informasikan bahwa jangka waktu Pendaftaran KKN dimulai pada tanggal 19 Maret 2018 s.d 30 April 2018, sedangkan pelaksanaan KKN di lapangan dilaksanakan selama 40 hari yaitu pada tanggal 16 Juli 2018  s.d. 27 Agustus 2018.</p>
					<a style="float: right;" href="" class="link">Selengkapnya-></a>
				</div>
			</div>
		</div>
		<!-- AGENDA -->
		<div class="agenda clearfix">
			<h1 class="label">Agenda KKN</h1>

			<section id="conference-timeline">
				<!-- <div class="timeline-start">Start</div> -->
				<div class="conference-center-line"></div>
				<div class="conference-timeline-content">
					<!-- Article -->
					<div class="timeline-article">
						<div class="content-left-container">
							<div class="content-left">
								<p>PenyusunanProker KKN danLaporan KKN</p>
							</div>
							<!-- <span class="timeline-author">John Doe</span> -->
						</div>
						<div class="meta-date">
							<span class="date">3</span>
							<span class="month">Mei</span>
						</div>
					</div>
					<!-- // Article -->

					<!-- Article -->
					<div class="timeline-article">
						<div class="content-right-container">
							<div class="content-right">
								<p>Wawasandan Sistem Penyelenggaraan KKN</p>
							</div>
							<!-- <span class="timeline-author">John Doe</span> -->
						</div>
						<div class="meta-date">
							<span class="date">2</span>
							<span class="month">Mar</span>
						</div>
					</div>
					<!-- // Article -->

					<!-- Article -->
					<div class="timeline-article">
						<div class="content-left-container">
							<div class="content-left">
								<p class="agenda-konten">Penyerahan laporan KKN</p>
							</div>
							<!-- <span class="timeline-author">John Doe</span> -->
						</div>
						<div class="meta-date">
							<span class="date">1</span>
							<span class="month">Jan</span>
						</div>
					</div>
					<!-- // Article -->
				</div>
				<!-- <div class="timeline-end">End</div> -->
			</section>
		</div>
		<!-- BERITA -->
		<div class="berita">
			<div class="content">
				<h1 class="label">Berita Terbaru</h1>
				<div class="kotak-berita">
					<div class="kolase-img">
						<img src="img/berita/1.jpg" alt="">
					</div>
					<div class="kotak-berita-isi">
						<h3>PENDAFTARAN KKN TAHUN 2018</h3>
						<p>Kuliah Kerja Nyata (KKN) tahun 2018 akan kembali dilaksanakan oleh penyelenggara yaitu Lembaga Penelitian dan Pengabdian kepada Masyarakat (LPPM). Info</p>
						<a style="float: right;" href="" class="link">Selengkapnya-></a>
					</div>
				</div>
				<div class="kotak-berita">
					<div class="kolase-img">
						<img src="img/berita/2.jpg" alt="">
					</div>
					<div class="kotak-berita-isi">
						<h3>Sosialisasi Kebijakan dan Mekanisme Penelitian</h3>
						<p>Selasa, 18 Juli 2017 LPPM Unikama mengadakan Sosialisasi Kebijakan dan Mekanisme Penelitian dan Pengabdian Kemenristekdikti. Sosialisasi ini diikuti oleh Dosen</p>
						<a style="float: right;" href="" class="link">Selengkapnya-></a>
					</div>
				</div>
				<div class="kotak-berita">
					<div class="kolase-img">
						<img src="img/berita/3.jpg" alt="">
					</div>
					<div class="kotak-berita-isi">
						<h3>Sosialisai Buku Panduan Penelitian dan Pengabdian</h3>
						<p>Kementerian Riset, Teknologi dan Pendidikan Tinggi resmi melakukan Launching Buku Pedoman Penelitian dan Pengabdian kepada Masyarakat Edisi XII pada pertengahan</p>
						<a style="float: right;" href="" class="link">Selengkapnya-></a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php require 'footer.php'; ?>

	<script type="text/javascript">
		// (function() {
		// 	function Slideshow( element ) {
		// 		this.el = document.querySelector( element );
		// 		this.init();
		// 	}
		// 	Slideshow.prototype = {
		// 		init: function() {
		// 			this.wrapper = this.el.querySelector( ".slider-wrapper" );
		// 			this.slides = this.el.querySelectorAll( ".slide" );
		// 			this.index = 0;
		// 			this.total = this.slides.length;
		// 			this.timer = null;

		// 			this.action();
		// 			this.stopStart();	
		// 		},
		// 		_slideTo: function( slide ) {
		// 			var currentSlide = this.slides[slide];
		// 			currentSlide.style.opacity = 1;
		// 			for( var i = 0; i < this.slides.length; i++ ) {
		// 				var slide = this.slides[i];
		// 				if( slide !== currentSlide ) {
		// 					slide.style.opacity = 0;
		// 				}
		// 			}
		// 		},
		// 		action: function() {
		// 			var self = this;
		// 			self.timer = setInterval(function() {
		// 				self.index++;
		// 				if( self.index == self.slides.length ) {
		// 					self.index = 0;
		// 				}
		// 				self._slideTo( self.index );

		// 			}, 2900);
		// 		},
		// 		stopStart: function() {
		// 			var self = this;
		// 			self.el.addEventListener( "mouseover", function() {
		// 				clearInterval( self.timer );
		// 				self.timer = null;

		// 			}, false);
		// 			self.el.addEventListener( "mouseout", function() {
		// 				self.action();

		// 			}, false);
		// 		}
		// 	};
		// 	document.addEventListener( "DOMContentLoaded", function() {
		// 		var slider = new Slideshow( "#slider-utama" );
		// 	});
		// })();		
	</script>
	<script>
		var slideIndex = 0;
		showSlides();
		function showSlides() {
			var i;
			var slides = document.getElementsByClassName("slide");
			var dots = document.getElementsByClassName("dot");
			for (i = 0; i < slides.length; i++) {
				slides[i].style.display = "none";  
			}
			slideIndex++;
			if (slideIndex > slides.length) {slideIndex = 1}    
				for (i = 0; i < dots.length; i++) {
					dots[i].className = dots[i].className.replace(" active", "");
				}
				slides[slideIndex-1].style.display = "block";  
				dots[slideIndex-1].className += " active";
				setTimeout(showSlides, 2000); 
			}

		</script>

	</body>
	</html>