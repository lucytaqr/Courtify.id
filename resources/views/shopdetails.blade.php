@extends('layouts.main')

@section('container')
    @include('partials.navbar')

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    </head>

    <body>

        <main id="main">

            <!-- ======= Breadcrumbs ======= -->
            <section class="breadcrumbs">
                <div class="container">

                    <ol>
                        <li><a href="index.html">Home</a></li>
                        <li>Detail Lapangan</li>
                    </ol>
                    <h2>Cari tahu lapangan lebih lengkap</h2>

                </div>
            </section><!-- End Breadcrumbs -->

            <section id="portfolio-details" class="portfolio-details">
                <div class="container">

                    <div class="row gy-4">

                        <div class="col-lg-8">
                            <div class="portfolio-details-slider swiper">
                                <div class="swiper-wrapper align-items-center">

                                    <div class="swiper-slide">
                                        <img src="images/bad1.jpg" alt="">
                                    </div>

                                    <div class="swiper-slide">
                                        <img src="images/bad2.jpg" alt="">
                                    </div>

                                    <div class="swiper-slide">
                                        <img src="images/bad3.jpg" alt="">
                                    </div>

                                </div>
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="portfolio-info">
                                <blockquote>
                                    <h3>Harga Mulai</h3>
                                    <ul>
                                        <li><strong>Rp 30.000</strong> Per Sesi</li>
                                        <br>
                                        <a class="btn btn-primary" href="#" role="button">Cek Ketersediaan</a>
                                    </ul>
                            </div>
                            </blockquote>
                            <div class="portfolio-description">
                                <h2>This is an example of portfolio detail</h2>
                                <p>
                                    Autem ipsum nam porro corporis rerum. Quis eos dolorem eos itaque inventore commodi
                                    labore
                                    quia quia. Exercitationem repudiandae officiis neque suscipit non officia eaque itaque
                                    enim.
                                    Voluptatem officia accusantium nesciunt est omnis tempora consectetur dignissimos. Sequi
                                    nulla at esse enim cum deserunt eius.
                                </p>
                            </div>
                        </div>

                    </div>

                </div>
            </section>

            <section id="blog" class="blog">
                <div class="container" data-aos="fade-up">

                    <div class="row">

                        <div class="col-lg-8 entries">

                            <article class="entry entry-single">

                                <h2 class="entry-title">
                                    <a href="blog-single.html">Badminton Courts Rajabasa</a>
                                </h2>

                                <div class="entry-meta">
                                    <ul>
                                        <li class="d-flex align-items-center"><i class="bi bi-geo-alt"></i><a
                                                href="blog-single.html">Kota Malang</a></li>
                                        <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a
                                                href="blog-single.html">Badminton</a></li>
                                        <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a
                                                href="blog-single.html"><time datetime="2020-01-01">Jan 25, 2024</time></a>
                                        </li>
                                        {{-- <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a
                                                href="blog-single.html">12 Comments</a></li>
                                        <li class="d-flex align-items-center"><i class="bi bi-wifi"></i> --}}

                                    </ul>
                                </div>

                                <div class="entry-content">
                                    <p>
                                        Gedung yang berada di jalan Terusan Rajabasa ini sudah sejak lama membuka tempat
                                        latihan
                                        bulutangkis, baik bagi anak kecil dan orang dewasa. Difasilitasi parkiran yang cukup
                                        luas dan dibuka dengan 4 lapangan, gedung ini dibuka dari jam 8 pagi hingga 9 malam.
                                        Namun pada hari Senin gedung ini tutup jam 6 petang. Harga yang dipatok pengelola
                                        tidaklah mahal untuk fasilitas dan tempat yang disediakan yakni 30 ribu per jamnya.
                                    </p>
                                    <blockquote>
                                        <p>
                                            <span class="h1 fw-bold mb-0" style="font-size: 20px;">Lokasi Venue</span>
                                            <br>
                                            <span class="h1 mb-0" style="font-size: 12px;">Jl. Terusan Rajabasa No. 5 Pisang
                                                Candi, Kec.Sukun, Kota Malang,Jawa Timur</span>
                                        </p>
                                    </blockquote>
                                    <div class="entry-meta">
                                        <h3>Fasilitas</h3>
                                        <ul>
                                            <li class="d-flex align-items-center"><i class="bi bi-wifi"></i>
                                                <a href="blog-single.html">Wifi</a>
                                            </li>
                                            <li class="d-flex align-items-center"><i class="bi bi-cup-hot"></i><a
                                                    href="blog-single.html">Food Court</a></li>
                                            <li class="d-flex align-items-center"> <iconify-icon
                                                    icon="material-symbols:mosque-outline">Pray
                                                    Room</iconify-icon><a href="blog-single.html">Pray Room</a></li>
                                        </ul>
                                        <br>
                                        <a class="btn btn-primary" href="#" role="button">Lihat Semua</a>
                                    </div>
                                    <br>
                                    <div class="entry-meta">
                                        <ul>
                                            <li class="d-flex align-items-center"><i class="bi bi-play-circle"></i>
                                                <a href="blog-bold.html">
                                                    <h2>Pilih Lapangan</h2>
                                                </a>
                                            </li>
                                        </ul>

                                        <body>
                                            <div class="container my-5 py-5 text-dark">
                                                <div class="row">
                                                    <div class="col-md-11 col-lg-9 col-xl-7">
                                                        <div class="d-flex flex-row mb-4">
                                                            <!-- Date and Time Input Side by Side -->
                                                            <div class="datetime-container">

                                                                <!-- Input tanggal -->
                                                                <label for="reportdate">Pilih Tanggal:</label>
                                                                <input type="date" id="reportdate" name="reportdate">

                                                                <!-- Input jam -->
                                                                <label for="reporttime">Pilih Jam:</label>
                                                                <input type="time" id="reporttime" name="reporttime">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Placeholder untuk menampilkan tanggal dan jam yang dipilih -->
                                            <div id="selectedDateTime"></div>

                                            <!-- Script untuk menangani perubahan pada input tanggal dan jam -->
                                            <script>
                                                document.addEventListener('DOMContentLoaded', function() {
                                                    var reportDateInput = document.getElementById('reportdate');
                                                    var reportTimeInput = document.getElementById('reporttime');
                                                    var selectedDateTimePlaceholder = document.getElementById('selectedDateTime');

                                                    reportDateInput.addEventListener('change', updateSelectedDateTime);
                                                    reportTimeInput.addEventListener('change', updateSelectedDateTime);

                                                    function updateSelectedDateTime() {
                                                        var selectedDate = new Date(reportDateInput.value);
                                                        var selectedTime = reportTimeInput.value;

                                                        // Format tanggal dan jam yang dipilih
                                                        var formattedDateTime = selectedDate.toLocaleDateString('en-US', {
                                                            year: 'numeric',
                                                            month: 'long',
                                                            day: 'numeric',
                                                        });

                                                        if (selectedTime) {
                                                            formattedDateTime += ' - ' + selectedTime;
                                                        }

                                                        // Tampilkan tanggal dan jam yang dipilih
                                                        selectedDateTimePlaceholder.innerHTML = formattedDateTime;
                                                    }

                                                });
                                            </script>
                                        </body>

                                        <hr class="garis-horizontal">
                                        <div class="image-text-container">

                                            <img src="{{ asset('images/bad1.jpg') }}" alt="Badminton Rajabasa 1"
                                                class="image">
                                            <div class="text">
                                                <h1>Badminton Rajabasa 1</h1>
                                                <p>Gedung yang berada di jalan Terusan Rajabasa ini sudah sejak lama
                                                    membuka tempat latihan bulutangkis, baik bagi anak kecil dan orang
                                                    dewasa.</p>
                                                <li class="d-flex align-items-center"><iconify-icon
                                                        icon="mdi:badminton"></iconify-icon>
                                                    <a href="blog-single.html">Badminton</a>
                                                </li>
                                                <li class="d-flex align-items-center"><iconify-icon
                                                        icon="material-symbols-light:nest-cam-indoor"></iconify-icon><a
                                                        href="blog-single.html">Indoor</a>
                                                </li>
                                                <button id="myButton">Buka Jadwal</button>

                                                <div id="schedule">
                                                    <div class="time-slot">
                                                        <p class="time">20:00 - 21:00</p>
                                                        <p class="status">Booked</p>
                                                    </div>
                                                    <div class="time-slot">
                                                        <p class="time">21:00 - 22:00</p>
                                                        <p class="price">Rp45.000</p>
                                                    </div>
                                                    <script>
                                                        document.getElementById('myButton').addEventListener('click', function() {
                                                            document.getElementById('schedule').style.display = 'block';
                                                        });
                                                    </script>
                                                </div>
                                            </div>

                                            <div id="schedule">
                                                <div class="time-slot">
                                                    <p class="time">20:00 - 21:00</p>
                                                    <p class="status">Booked</p>
                                                </div>
                                                <div class="time-slot">
                                                    <p class="time">21:00 - 22:00</p>
                                                    <p class="price">Rp45.000</p>
                                                </div>
                                                <script>
                                                    document.getElementById('myButton').addEventListener('click', function() {
                                                        document.getElementById('schedule').style.display = 'block';
                                                    });
                                                </script>
                                            </div>
                                        </div>
                                        <hr class="garis-horizontal">
                                        <div class="image-text-container">

                                            <img src="{{ asset('images/bad1.jpg') }}" alt="Badminton Rajabasa 1"
                                                class="image">
                                            <div class="text">
                                                <h1>Badminton Rajabasa 1</h1>
                                                <p>Gedung yang berada di jalan Terusan Rajabasa ini sudah sejak lama
                                                    membuka tempat latihan bulutangkis, baik bagi anak kecil dan orang
                                                    dewasa.</p>
                                                <li class="d-flex align-items-center"><iconify-icon
                                                        icon="mdi:badminton"></iconify-icon>
                                                    <a href="blog-single.html">Badminton</a>
                                                </li>
                                                <li class="d-flex align-items-center"><iconify-icon
                                                        icon="material-symbols-light:nest-cam-indoor"></iconify-icon><a
                                                        href="blog-single.html">Indoor</a>
                                                </li>
                                                <button id="myButton">Buka Jadwal</button>

                                                <div id="schedule">
                                                    <div class="time-slot">
                                                        <p class="time">20:00 - 21:00</p>
                                                        <p class="status">Booked</p>
                                                    </div>
                                                    <div class="time-slot">
                                                        <p class="time">21:00 - 22:00</p>
                                                        <p class="price">Rp45.000</p>
                                                    </div>
                                                    <script>
                                                        document.getElementById('myButton').addEventListener('click', function() {
                                                            document.getElementById('schedule').style.display = 'block';
                                                        });
                                                    </script>
                                                </div>
                                            </div>

                                            <div id="schedule">
                                                <div class="time-slot">
                                                    <p class="time">20:00 - 21:00</p>
                                                    <p class="status">Booked</p>
                                                </div>
                                                <div class="time-slot">
                                                    <p class="time">21:00 - 22:00</p>
                                                    <p class="price">Rp45.000</p>
                                                </div>
                                                <script>
                                                    document.getElementById('myButton').addEventListener('click', function() {
                                                        document.getElementById('schedule').style.display = 'block';
                                                    });
                                                </script>
                                            </div>
                                        </div>
                                        <hr class="garis-horizontal">
                                        <ul>
                                            <li class="d-flex align-items-center"><i class="bi bi-play-circle"></i>
                                                <a href="blog-bold.html">
                                                    <h2>Ulasan</h2>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="container my-5 py-5 text-dark">
                                            <div class="row">
                                                <div class="col-md-11 col-lg-9 col-xl-7">
                                                    <div class="comment-container">
                                                        <!-- First Comment -->
                                                        <div class="comment-card">
                                                            <div class="d-flex flex-start">
                                                                <img class="rounded-circle shadow-1-strong me-3"
                                                                    src="images/swim1.jpg" alt="avatar" width="50"
                                                                    height="50" />
                                                                <div class="card w-100">
                                                                    <div class="card-body p-4">
                                                                        <div class="">
                                                                            <h5>Fatma Yuniardini</h5>
                                                                            <p class="small">3 hours ago</p>
                                                                            <p>Bagus dan nyaman</p>
                                                                            <div
                                                                                class="d-flex justify-content-between align-items-center">
                                                                                <!-- Star Rating -->
                                                                                <div class="star-rating">
                                                                                    <span class="star">&#9733;</span>
                                                                                    <span class="star">&#9733;</span>
                                                                                    <span class="star">&#9733;</span>
                                                                                    <span class="star">&#9733;</span>
                                                                                    <span class="star">&#9734;</span>
                                                                                </div>
                                                                                <!-- Likes and Reply -->
                                                                                <div class="d-flex align-items-center">
                                                                                    <a href="#!"
                                                                                        class="link-muted me-2"><i
                                                                                            class="fas fa-thumbs-up me-1"></i>132</a>
                                                                                    <a href="#!"
                                                                                        class="link-muted"><i
                                                                                            class="fas fa-thumbs-down me-1"></i>15</a>
                                                                                </div>
                                                                                <a href="#!" class="link-muted"><i
                                                                                        class="fas fa-reply me-1"></i>Reply</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Second Comment -->
                                                        <div class="comment-card">
                                                            <div class="d-flex flex-start">
                                                                <img class="rounded-circle shadow-1-strong me-3"
                                                                    src="images/swim2.jpg" alt="avatar" width="50"
                                                                    height="50" />
                                                                <div class="card w-100">
                                                                    <div class="card-body p-4">
                                                                        <div class="">
                                                                            <h5>Chalista Yulia</h5>
                                                                            <p class="small">5 hours ago</p>
                                                                            <p>Lapangannya luas</p>
                                                                            <div
                                                                                class="d-flex justify-content-between align-items-center">
                                                                                <!-- Star Rating -->
                                                                                <div class="star-rating">
                                                                                    <span class="star">&#9733;</span>
                                                                                    <span class="star">&#9733;</span>
                                                                                    <span class="star">&#9733;</span>
                                                                                    <span class="star">&#9733;</span>
                                                                                    <span class="star">&#9734;</span>
                                                                                </div>
                                                                                <!-- Likes and Reply -->
                                                                                <div class="d-flex align-items-center">
                                                                                    <a href="#!"
                                                                                        class="link-muted me-2"><i
                                                                                            class="fas fa-thumbs-up me-1"></i>158</a>
                                                                                    <a href="#!"
                                                                                        class="link-muted"><i
                                                                                            class="fas fa-thumbs-down me-1"></i>13</a>
                                                                                </div>
                                                                                <a href="#!" class="link-muted"><i
                                                                                        class="fas fa-reply me-1"></i>Reply</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Thirt Comment -->
                                                        <div class="comment-card">
                                                            <div class="d-flex flex-start">
                                                                <img class="rounded-circle shadow-1-strong me-3"
                                                                    src="images/swim3.jpg" alt="avatar" width="50"
                                                                    height="50" />
                                                                <div class="card w-100">
                                                                    <div class="card-body p-4">
                                                                        <div class="">
                                                                            <h5>Lucyta Qutsyaning</h5>
                                                                            <p class="small">5 hours ago</p>
                                                                            <p>Uhuyyy seruu sama temen-temen</p>
                                                                            <div
                                                                                class="d-flex justify-content-between align-items-center">
                                                                                <!-- Star Rating -->
                                                                                <div class="star-rating">
                                                                                    <span class="star">&#9733;</span>
                                                                                    <span class="star">&#9733;</span>
                                                                                    <span class="star">&#9733;</span>
                                                                                    <span class="star">&#9733;</span>
                                                                                    <span class="star">&#9734;</span>
                                                                                </div>
                                                                                <!-- Likes and Reply -->
                                                                                <div class="d-flex align-items-center">
                                                                                    <a href="#!"
                                                                                        class="link-muted me-2"><i
                                                                                            class="fas fa-thumbs-up me-1"></i>158</a>
                                                                                    <a href="#!"
                                                                                        class="link-muted"><i
                                                                                            class="fas fa-thumbs-down me-1"></i>13</a>
                                                                                </div>
                                                                                <a href="#!" class="link-muted"><i
                                                                                        class="fas fa-reply me-1"></i>Reply</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr class="garis-horizontal">
                                <div class="entry-meta">
                                    <ul>
                                        <li class="d-flex align-items-center"><i class="bi bi-play-circle"></i>
                                            <a href="blog-bold.html">
                                                <h2>Reschedule & Pembatalan</h2>
                                            </a>
                                        </li>
                                    </ul>
                                    <p>
                                        Tidak bisa menerima rechedule dan pembatalan
                                    </p>
                                    <hr class="garis-horizontal">
                                    <div class="entry-meta">
                                        <ul>
                                            <li class="d-flex align-items-center"><i class="bi bi-play-circle"></i>
                                                <a href="blog-bold.html">
                                                    <h2>Rekomendasi Venue Terdekat</h2>
                                                </a>
                                            </li>
                                        </ul>
                                        <section id="recent-blog-posts" class="recent-blog-posts">
                                            <div class="container" data-aos="fade-up">
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <div class="post-box">
                                                            <div class="post-img"><img src="images/bola1.jpg"
                                                                    class="img-fluid" alt="">
                                                            </div>
                                                            <h3 class="post-title">SM Futsal
                                                            </h3>
                                                            <span class="post-date">Lowokwaru</span>
                                                            <li class="d-flex align-items-center"><iconify-icon
                                                                    icon="ph:soccer-ball-fill"></iconify-icon><a
                                                                    href="blog-single.html">Futsal</a>
                                                            </li>
                                                            <span class="post-date">Rp 100.000</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="post-box">
                                                            <div class="post-img"><img src="images/bola2.jpg"
                                                                    class="img-fluid" alt="">
                                                            </div>
                                                            <h3 class="post-title">Viva Futsal
                                                            </h3>
                                                            <span class="post-date">Lowokwaru</span>
                                                            <li class="d-flex align-items-center"><iconify-icon
                                                                    icon="ph:soccer-ball-fill"></iconify-icon><a
                                                                    href="blog-single.html">Futsal</a>
                                                            </li>
                                                            <span class="post-date">Rp 100.000</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="post-box">
                                                            <div class="post-img"><img src="images/bola3.jpg"
                                                                    class="img-fluid" alt="">
                                                            </div>
                                                            <h3 class="post-title">EI - QUDS Futsal
                                                            </h3>
                                                            <span class="post-date">Kedungkandang</span>
                                                            <li class="d-flex align-items-center"><iconify-icon
                                                                    icon="ph:soccer-ball-fill"></iconify-icon><a
                                                                    href="blog-single.html">Futsal</a>
                                                            </li>
                                                            <span class="post-date">Rp 100.000</span>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                    @endsection
