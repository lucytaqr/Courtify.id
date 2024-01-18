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
                                Autem ipsum nam porro corporis rerum. Quis eos dolorem eos itaque inventore commodi labore
                                quia quia. Exercitationem repudiandae officiis neque suscipit non officia eaque itaque enim.
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
                                            href="blog-single.html"><time datetime="2020-01-01">Jan 1, 2020</time></a></li>
                                    <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a
                                            href="blog-single.html">12 Comments</a></li>
                                    <li class="d-flex align-items-center"><i class="bi bi-wifi"></i>

                                </ul>
                            </div>

                            <div class="entry-content">
                                <p>
                                    Gedung yang berada di jalan Terusan Rajabasa ini sudah sejak lama membuka tempat latihan
                                    bulutangkis, baik bagi anak kecil dan orang dewasa. Difasilitasi parkiran yang cukup
                                    luas dan dibuka dengan 4 lapangan, gedung ini dibuka dari jam 8 pagi hingga 9 malam.
                                    Namun pada hari Senin gedung ini tutup jam 6 petang. Harga yang dipatok pengelola
                                    tidaklah mahal untuk fasilitas dan tempat yang disediakan yakni 30 ribu per jamnya.
                                </p>

                                <p>

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

                                    <head>
                                        <meta charset="UTF-8">
                                        <meta name="viewport" content="width=device-width, initial-scale=1.0">
                                        <title>Your Laravel App</title>

                                        <!-- Gaya tambahan jika diperlukan -->
                                        <style>
                                            /* Sesuaikan gaya Anda di sini */
                                            #reportrange {
                                                display: flex;
                                                flex-direction: column;
                                            }
                                        </style>
                                    </head>

                                    <body>
                                        <!-- Konten halaman web Laravel Anda -->

                                        <!-- Input tanggal -->
                                        <label for="reportdate">Pilih Tanggal:</label>
                                        <input type="date" id="reportdate" name="reportdate">

                                        <!-- Input jam -->
                                        <label for="reporttime">Pilih Jam:</label>
                                        <input type="time" id="reporttime" name="reporttime">

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

                                </div>
                            </div>
                    </div>
                </div>
        </section>
    </main>

@endsection