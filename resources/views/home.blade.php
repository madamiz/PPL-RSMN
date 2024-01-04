<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="assets/favicon/Icon.png" sizes="16x16" style="width: 64px; height: 32px;">
    <title>Official Website RSMN</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        integrity="531dcd88f8" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
</head>

<body>
    <!-- Home -->
    <section class="home" id="home">
        <header>
            <!-- Navigation Bar -->
            <nav class="custom-navbar">
                <div class="nav-wrapper">
                    <a href="#"><img src="{{ asset('assets/img/logo.png') }}" alt="logo" class="logo" /></a>
                    <div class="menu-wrapper">
                        <ul class="menu">
                            <li class="menu-item">
                                <a href="#" class="menu-link active">Beranda</a>
                            </li>
                            <li class="menu-item">
                                <a href="#about" class="menu-link" onclick="scrollToSection(about)">Tentang</a>
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
        <div class="home-wrapper">
            <h1 class="heading">Selamat Datang</h1>
            <p class="subheading">
                Website Medika Nusantara kini hadir dengan penampilan yang
                baru. Semoga dapat lebih efektif dalam memberikan informasi.
            </p>
            <a class="no-underline" href="#about"><button class="custom-button" type="submit"
                    onclick="scrollToSection(about)">
                    Jelajahi sekarang
                </button></a>
        </div>
    </section>

    <!-- About -->
    <section class="about" id="about">
        <div class="about-wrapper">
            <div class="about-row">
                <img src="{{ asset('assets/img/doctor.png') }}" alt="doctor" class="about-img" />
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
        <div class="schedule-wrapper">
            <div class="schedule-text">
                <h1 class="schedule-heading">Jadwal Dokter</h1>
                <p class="schedule-subheading">
                    Berikut daftar dokter yang tersedia pada Rumah Sakit
                    Medika Nusantara
                </p>
            </div>
            <div class="owl-carousel owl-theme">
                @foreach ($polyclinics->unique('title') as $polyclinic)
                    <div class="card" style="width: 100%; height: 26rem">
                        <div class="card-body">
                            <div class="card-icon">
                                {!! $polyclinic->icon !!}
                            </div>
                            <h5 class="card-title">{{ $polyclinic->title }}</h5>
                            <p class="card-text">
                                {{ $polyclinic->description }}
                            </p>
                            <div class="detail-wrapper">
                                <ul class="detail">
                                    <li class="detail-items">
                                        <i class="fa-solid fa-circle-check"></i> Hari:
                                        {{ $polyclinic->day }}
                                    </li>
                                    <li class="detail-items">
                                        <i class="fa-solid fa-circle-check"></i> Jam buka:
                                        {{ $polyclinic->time }}
                                    </li>
                                    <li class="detail-items">
                                        <i class="fa-solid fa-circle-check"></i> Dokter:
                                        {{ $polyclinic->name }}
                                    </li>
                                </ul>
                            </div>
                            <a href="#" class="btn btn-primary">Lebih lanjut
                                <i class="bx bx-right-arrow-alt bx-xs"></i></a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="facility" id="facility">
        <div class="facility-wrapper">
            <h1 class="facility-heading">Fasilitas Rawat Inap</h1>
            <div class=" container mt-5 border-primary">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td colspan="2">Larry the Bird</td>
                            <td>@twitter</td>
                        </tr>
                    </tbody>
                </table>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="https://kit.fontawesome.com/531dcd88f8.js" crossorigin="anonymous"></script>

    <script src="{{ asset('js/script.js') }} " defer></script>
</body>

</html>
