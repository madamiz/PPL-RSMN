<!DOCTYPE html>
<html lang="en">
	<head>
		<link
			rel="stylesheet"
			href="node_modules/bootstrap/dist/css/bootstrap.min.css" />
		<link rel="stylesheet" type="text/css" href="custom.css" />
		<link
			rel="stylesheet"
			href="node_modules/boxicons/css/boxicons.min.css" />
		<!-- <link rel="stylesheet" href="node_modules/boxicons/dist/boxicons.js"> -->
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="icon" href="assets/favicon/Icon.png" sizes="16x16" style="width: 64px; height: 32px;">
		<title>Official Website RSMN</title>
	</head>
	<body>
		<!-- Home -->
		<section class="home" id="home">
			<header>
				<!-- Navigation Bar -->
				<nav class="custom-navbar">
					<div class="container nav-wrapper">
						<a href="#"
							><img src="assets/img/logo.png" alt="logo" class="logo"
						/></a>
						<div class="menu-wrapper">
							<ul class="menu">
								<li class="menu-item">
									<a href="#" class="menu-link active"
										>Beranda</a
									>
								</li>
								<li class="menu-item">
									<a
										href="#about"
										class="menu-link"
										onclick="scrollToSection(about)"
										>Tentang</a
									>
								</li>
								<li class="menu-item">
									<a href="#schedule" class="menu-link" onclick="scrollToSection(schedule)">Jadwal</a>
								</li>
								<li class="menu-item">
									<a href="#" class="menu-link">Fasilitas</a>
								</li>
								<li class="menu-item">
									<a href="#" class="menu-link">Galeri</a>
								</li>
								<li class="menu-item">
									<a href="#" class="menu-link">Akreditasi</a>
								</li>
								<li class="menu-item">
									<a href="#" class="menu-link">FAQ</a>
								</li>
							</ul>
						</div>
						<!-- <div class="menu-toggle bs"></div> -->
					</div>
				</nav>
			</header>
			<div class="container home-wrapper">
				<h1 class="heading">Selamat Datang</h1>
				<p class="subheading">
					Website Medika Nusantara kini hadir dengan penampilan yang
					baru. Semoga dapat lebih efektif dalam memberikan informasi.
				</p>
				<a class="no-underline" href="#about"
					><button
						class="custom-button"
						type="submit"
						onclick="scrollToSection(about)">
						Jelajahi sekarang
					</button></a
				>
			</div>
		</section>

		<!-- About -->
		<section class="about" id="about">
			<div class="container about-wrapper">
				<div class="row">
					<img src="assets/img/doctor.png" alt="doctor" class="about-img" />
					<div class="about-text">
						<h1 class="about-heading">Tentang</h1>
						<p class="about-subheading">
							Rumah Sakit Medika Nusantara adalah salah satu
							fasilitas medis terkemuka yang terletak di Ibukota
							Baru, Indonesia. Rumah sakit ini diakui sebagai
							pusat perawatan kesehatan yang sangat berkomitmen
							untuk memberikan layanan medis berkualitas tinggi
							kepada masyarakat sekitar. Rumah Sakit Medika
							Nusantara sangat memperhatikan pelayanan pasien dan
							berusaha menciptakan lingkungan yang ramah dan
							nyaman bagi pasien dan keluarganya. Rumah Sakit
							Medika Nusantara juga menyediakan layanan darurat 24
							jam sehingga siap memberikan perawatan segera kepada
							pasien yang membutuhkan perhatian medis
							mendesak.Rumah Sakit Medika Nusantara di Ibukota
							Baru, Indonesia, bukan hanya sekadar lembaga
							kesehatan, tetapi juga menjadi lambang komitmen
							mereka dalam menyediakan perawatan yang terbaik.
						</p>
					</div>
				</div>
			</div>
		</section>

		<!-- Schedule -->
		<section class="schedule" id="schedule">
			<div class="container schedule-wrapper">
				<div class="schedule-text">
					<h1 class="schedule-heading">Jadwal Dokter</h1>
					<p class="schedule-subheading">
						Berikut daftar dokter yang tersedia pada Rumah Sakit
						Medika Nusantara
					</p>
				</div>
				<div class="card-wrapper">
					<div class="card" style="width: 20rem">
						<box-icon
							type="solid"
							name="low-vision"
							class="card-top"
							size="lg"></box-icon>
						<div class="card-body">
							<h5 class="card-title">Poli Mata</h5>
							<p class="card-text">
								Poli Mata menawarkan penanganan dan perawatan mata. 
							</p>
							<div class="detail-wrapper">
								<ul class="detail">
									<li class="detail-items">
										<i class="bx bx-check"></i> Hari Buka :
										Senin - Kamis
									</li>
									<li class="detail-items">
										<i class="bx bx-check"></i> Jam Buka :
										08.00 - 11.00
									</li>
									<li class="detail-items">
										<i class="bx bx-check"></i> Dokter : dr.
										Daniya Auly Yasmin, Sp.M.
									</li>
								</ul>
							</div>
							<a href="#" class="btn btn-primary"
								>Lebih lanjut
								<i class="bx bx-right-arrow-alt bx-xs"></i
							></a>
						</div>
					</div>
					<div class="card" style="width: 20rem">
						<box-icon
							type="solid"
							name="user"
							class="card-top"
							size="lg"></box-icon>
						<div class="card-body">
							<h5 class="card-title">Poli Anak</h5>
							<p class="card-text">
								Poli Anak menawarkan penanganan bagi bayi dan
								anak.
							</p>
							<div class="detail-wrapper">
								<ul class="detail">
									<li class="detail-items">
										<i class="bx bx-check"></i> Hari Buka :
										Senin - Kamis
									</li>
									<li class="detail-items">
										<i class="bx bx-check"></i> Jam Buka :
										08.00 - 11.00
									</li>
									<li class="detail-items">
										<i class="bx bx-check"></i> Dokter : dr.
										Daniya Auly Yasmin, Sp.M.
									</li>
								</ul>
							</div>
							<a href="#" class="btn btn-primary"
								>Lebih lanjut
								<i class="bx bx-right-arrow-alt bx-xs"></i
							></a>
						</div>
					</div>
					<div class="card" style="width: 20rem">
						<box-icon
							type="solid"
							name="low-vision"
							class="card-top"
							size="lg"></box-icon>
						<div class="card-body">
							<h5 class="card-title">Poli Gigi</h5>
							<p class="card-text">
								Poli Gigi menawarkan perawatan dan juga
								penanganan gigi
							</p>
							<div class="detail-wrapper">
								<ul class="detail">
									<li class="detail-items">
										<i class="bx bx-check"></i> Hari Buka :
										Senin - Kamis
									</li>
									<li class="detail-items">
										<i class="bx bx-check"></i> Jam Buka :
										08.00 - 11.00
									</li>
									<li class="detail-items">
										<i class="bx bx-check"></i> Dokter : dr.
										Daniya Auly Yasmin, Sp.M.
									</li>
								</ul>
							</div>
							<a href="#" class="btn btn-primary"
								>Lebih lanjut
								<i class="bx bx-right-arrow-alt bx-xs"></i
							></a>
						</div>
					</div>
					<div class="card" style="width: 20rem">
						<box-icon
							type="solid"
							name="low-vision"
							class="card-top"
							size="lg"></box-icon>
						<div class="card-body">
							<h5 class="card-title">Poli Gigi</h5>
							<p class="card-text">
								Poli Gigi menawarkan perawatan dan juga
								penanganan gigi
							</p>
							<div class="detail-wrapper">
								<ul class="detail">
									<li class="detail-items">
										<i class="bx bx-check"></i> Hari Buka :
										Senin - Kamis
									</li>
									<li class="detail-items">
										<i class="bx bx-check"></i> Jam Buka :
										08.00 - 11.00
									</li>
									<li class="detail-items">
										<i class="bx bx-check"></i> Dokter : dr.
										Daniya Auly Yasmin, Sp.M.
									</li>
								</ul>
							</div>
							<a href="#" class="btn btn-primary"
								>Lebih lanjut
								<i class="bx bx-right-arrow-alt bx-xs"></i
							></a>
						</div>
					</div>
					<div class="card" style="width: 20rem">
						<box-icon
							type="solid"
							name="low-vision"
							class="card-top"
							size="lg"></box-icon>
						<div class="card-body">
							<h5 class="card-title">Poli Gigi</h5>
							<p class="card-text">
								Poli Gigi menawarkan perawatan dan juga
								penanganan gigi
							</p>
							<div class="detail-wrapper">
								<ul class="detail">
									<li class="detail-items">
										<i class="bx bx-check"></i> Hari Buka :
										Senin - Kamis
									</li>
									<li class="detail-items">
										<i class="bx bx-check"></i> Jam Buka :
										08.00 - 11.00
									</li>
									<li class="detail-items">
										<i class="bx bx-check"></i> Dokter : dr.
										Daniya Auly Yasmin, Sp.M.
									</li>
								</ul>
							</div>
							<a href="#" class="btn btn-primary"
								>Lebih lanjut
								<i class="bx bx-right-arrow-alt bx-xs"></i
							></a>
						</div>
					</div>
					<div class="card" style="width: 20rem">
						<box-icon
							type="solid"
							name="low-vision"
							class="card-top"
							size="lg"></box-icon>
						<div class="card-body">
							<h5 class="card-title">Poli Gigi</h5>
							<p class="card-text">
								Poli Gigi menawarkan perawatan dan juga
								penanganan gigi
							</p>
							<div class="detail-wrapper">
								<ul class="detail">
									<li class="detail-items">
										<i class="bx bx-check"></i> Hari Buka :
										Senin - Kamis
									</li>
									<li class="detail-items">
										<i class="bx bx-check"></i> Jam Buka :
										08.00 - 11.00
									</li>
									<li class="detail-items">
										<i class="bx bx-check"></i> Dokter : dr.
										Daniya Auly Yasmin, Sp.M.
									</li>
								</ul>
							</div>
							<a href="#" class="btn btn-primary"
								>Lebih lanjut
								<i class="bx bx-right-arrow-alt bx-xs"></i
							></a>
						</div>
					</div>
					<div class="card" style="width: 20rem">
						<box-icon
							type="solid"
							name="low-vision"
							class="card-top"
							size="lg"></box-icon>
						<div class="card-body">
							<h5 class="card-title">Poli Gigi</h5>
							<p class="card-text">
								Poli Gigi menawarkan perawatan dan juga
								penanganan gigi
							</p>
							<div class="detail-wrapper">
								<ul class="detail">
									<li class="detail-items">
										<i class="bx bx-check"></i> Hari Buka :
										Senin - Kamis
									</li>
									<li class="detail-items">
										<i class="bx bx-check"></i> Jam Buka :
										08.00 - 11.00
									</li>
									<li class="detail-items">
										<i class="bx bx-check"></i> Dokter : dr.
										Daniya Auly Yasmin, Sp.M.
									</li>
								</ul>
							</div>
							<a href="#" class="btn btn-primary"
								>Lebih lanjut
								<i class="bx bx-right-arrow-alt bx-xs"></i
							></a>
						</div>
					</div>
					<div class="card" style="width: 20rem">
						<box-icon
							type="solid"
							name="low-vision"
							class="card-top"
							size="lg"></box-icon>
						<div class="card-body">
							<h5 class="card-title">Poli Gigi</h5>
							<p class="card-text">
								Poli Gigi menawarkan perawatan dan juga
								penanganan gigi
							</p>
							<div class="detail-wrapper">
								<ul class="detail">
									<li class="detail-items">
										<i class="bx bx-check"></i> Hari Buka :
										Senin - Kamis
									</li>
									<li class="detail-items">
										<i class="bx bx-check"></i> Jam Buka :
										08.00 - 11.00
									</li>
									<li class="detail-items">
										<i class="bx bx-check"></i> Dokter : dr.
										Daniya Auly Yasmin, Sp.M.
									</li>
								</ul>
							</div>
							<a href="#" class="btn btn-primary"
								>Lebih lanjut
								<i class="bx bx-right-arrow-alt bx-xs"></i
							></a>
						</div>
					</div>	
				</div>
			</div>
		</section>
		<!-- <div class="overlay"></div> -->
		<div class="container">
			<div class="popup" id="popup">
				<img src="img/doctor.png" alt="doctor" />
				<h2>Maaf!</h2>
				<p>Waduh...Mohon maaf, ya!</p>
				<p>Website sedang dalam masa pemeliharaan</p>
				<button type="button" onclick="closePopup()">Oke</button>
			</div>
		</div>

		<script src="script.js"></script>
		<script src="node_modules/boxicons/dist/boxicons.js"></script>
		<script src="https://kit.fontawesome.com/531dcd88f8.js" crossorigin="anonymous"></script>
	</body>
</html>
