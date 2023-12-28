<!DOCTYPE html>
<html lang="en">

<head>
    {{-- <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css" /> --}}
    {{-- <link rel="stylesheet" href="node_modules/boxicons/css/boxicons.min.css" /> --}}
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    integrity="s531dcd88f8" crossorigin="anonymous" /> --}}
    
    <!-- <link rel="stylesheet" href="node_modules/boxicons/dist/boxicons.js"> -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="assets/favicon/Icon.png" sizes="16x16" style="width: 64px; height: 32px;">
    <title>Official Website RSMN</title>
    
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <script src="{{ mix('js/app.js') }}" defer></script>
    @vite(['resources/js/app.js'])
    
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
            <div id="card-slider" class="carousel carousel-dark slide">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#card-slider" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#card-slider" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#card-slider" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>

                <div class="carousel-inner">
                    @foreach ($polyclinics->chunk(3) as $chunk)
                        <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                            <div class="row">
                                @foreach ($chunk as $polyclinic)
                                    <div class="col-md-4">
                                        <div class="card" style="width: 20rem">
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
                                    </div>
                                @endforeach
                            </div>
                    @endforeach
                </div>


                {{-- <div class="carousel-item active">
                        <img src="..." class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>First slide label</h5>
                            <p>Some representative placeholder content for the first slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="..." class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Second slide label</h5>
                            <p>Some representative placeholder content for the second slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="..." class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Third slide label</h5>
                            <p>Some representative placeholder content for the third slide.</p>
                        </div>
                    </div> --}}
                <button class="carousel-control-prev" type="button" data-bs-target="#card-slider"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#card-slider"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
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
    {{-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script> --}}
    {{-- <script>
        $(document).ready(function() {
            $('#card-slider').carousel();
        });
    </script> --}}
</body>

</html>
