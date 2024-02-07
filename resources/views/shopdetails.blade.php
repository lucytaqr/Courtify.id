@extends('layouts.main')

@include('partials.navbar')

@section('container')
    <!-- Template Main CSS File -->
    <link href="assets/css/shopdetails.css" rel="stylesheet">

    </head>

    <body>

        <main id="main">

            @include('partials.banner')
        
            <!-- ======= Portfolio Details Section ======= -->
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
                        <h2 class="title">Harga</h2>
                        <ul align="center">
                            <li><b style="font-size: 30">Rp 20.000</b> / jam</li>
                            <br>
                            <a class="btn btn-primary" href="#" role="button">Cek Ketersediaan</a>
                        </ul>
                    </div>
                    <div class="portfolio-info">    
                        <h2 class="title">Fasilitas</h2>
                        <tr>
                            <div class="row">
                                <div class="col">
                                  <iconify-icon icon="material-symbols:wifi"></iconify-icon>&nbsp;&nbsp;Wifi
                                </div>
                                <div class="col">
                                  <iconify-icon icon="mdi:toilet"></iconify-icon>&nbsp;&nbsp;Toilet
                                </div>
                                <div class="col">
                                  <iconify-icon icon="material-symbols:mosque"></iconify-icon>&nbsp;&nbsp;Mushola
                                </div>
                            </div> 
                        </tr>
                        <tr>
                            <div class="container">
                                <div class="row">
                                  <div class="col">
                                    <iconify-icon icon="mdi:car"></iconify-icon>&nbsp;&nbsp;Parkir Mobil
                                  </div>
                                  <div class="col">
                                    <iconify-icon icon="mdi:food"></iconify-icon>&nbsp;&nbsp;Food Court
                                  </div>
                                </div>
                            </div>
                        </tr>
                    </div>
                  </div>
        
                </div>
        
              </div>
            </section><!-- End Portfolio Details Section -->

            <section id="blog" class="blog">
                <div class="container" data-aos="fade-up">
                    <div class="row">
                        <div class="col-lg-9 entries">
                            <article class="entry entry-single">
                                <h2 class="title">Badminton Courts Rajabasa</h2>
                                <div class="entry-meta">
                                    <ul>
                                        <li class="d-flex align-items-center"><i class="bi bi-geo-alt"></i><a
                                                href="blog-single.html">Kota Malang</a></li>
                                        <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a
                                                href="blog-single.html">Badminton</a></li>
                                        <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a
                                                href="blog-single.html"><time datetime="2020-01-01">Jan 25, 2024</time></a>
                                        </li>
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
                                            <br><br>
                                            <span class="h1 mb-0" style="font-size: 12px;">Jl. Terusan Rajabasa No. 5 Pisang Candi, Kec.Sukun, Kota Malang, Jawa Timur</span>
                                        </p>
                                    </blockquote>
                                    <br>
                                    <hr>
                                    <div class="entry-meta">
                                        <h2 class="title">Ulasan</h2>
                                        <div class="container text-dark">
                                            <div class="row">
                                                    <div class="comment-container">
                                                        <!-- First Comment -->
                                                        <div class="comment-card">
                                                            <div class="d-flex flex-start">
                                                                <img class="rounded-circle shadow-1-strong me-3" src="images/swim1.jpg" alt="avatar" width="50"height="50">
                                                                <div class="card w-100">
                                                                    <div class="card-body p-4">
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
                                                                                <a href="#!" class="link-muted"><i class="fas fa-reply me-1"></i>Reply</a>
                                                                            </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Second Comment -->
                                                        <div class="comment-card">
                                                            <div class="d-flex flex-start">
                                                                <img class="rounded-circle shadow-1-strong me-3" src="images/swim2.jpg" alt="avatar" width="50" height="50">
                                                                <div class="card w-100">
                                                                    <div class="card-body p-4">
                                                                        <h5>Chalista Yulia</h5>
                                                                            <p class="small">5 hours ago</p>
                                                                            <p>Lapangannya luas</p>
                                                                            <div class="d-flex justify-content-between align-items-center">
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
                                                                                    <a href="#!" class="link-muted me-2"><i class="fas fa-thumbs-up me-1"></i>158</a>
                                                                                    <a href="#!" class="link-muted"><i class="fas fa-thumbs-down me-1"></i>13</a>
                                                                                </div>
                                                                                <a href="#!" class="link-muted"><i class="fas fa-reply me-1"></i>Reply</a>
                                                                            </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Third Comment -->
                                                        <div class="comment-card">
                                                            <div class="d-flex flex-start">
                                                                <img class="rounded-circle shadow-1-strong me-3"src="images/swim3.jpg" alt="avatar" width="50" height="50">
                                                                <div class="card w-100">
                                                                    <div class="card-body p-4">
                                                                            <h5>Lucyta Qutsyaning</h5>
                                                                            <p class="small">5 hours ago</p>
                                                                            <p>Uhuyyy seruu sama temen-temen</p>
                                                                            <div class="d-flex justify-content-between align-items-center">
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
                                                                                    <a href="#!" class="link-muted me-2"><i class="fas fa-thumbs-up me-1"></i>158</a>
                                                                                    <a href="#!" class="link-muted"><i class="fas fa-thumbs-down me-1"></i>13</a>
                                                                                </div>
                                                                                <a href="#!" class="link-muted"><i class="fas fa-reply me-1"></i>Reply</a>
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
                                <hr>
                                <div class="entry-meta">
                                    <h2 class="title">Rekomendasi Venue</h2>
                                    <section id="recent-blog-posts" class="recent-blog-posts">
                                        <div data-aos="fade-up">
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="post-box">
                                                      <div class="post-img"><img src="images/bola1.jpg" class="img-fluid" alt=""></div>
                                                      <span class="post-date">Futsal</span>
                                                      <h3 class="post-title">SM Futsal</h3>
                                                      <a href="blog-single.html" class="readmore stretched-link mt-auto"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
                                                    </div>
                                                  </div>
                                        
                                                  <div class="col-lg-4">
                                                    <div class="post-box">
                                                      <div class="post-img"><img src="images/bola2.jpg" class="img-fluid" alt=""></div>
                                                      <span class="post-date">Futsal</span>
                                                      <h3 class="post-title">Viva Futsal</h3>
                                                      <a href="blog-single.html" class="readmore stretched-link mt-auto"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
                                                    </div>
                                                  </div>
                                        
                                                  <div class="col-lg-4">
                                                    <div class="post-box">
                                                      <div class="post-img"><img src="images/bola3.jpg" class="img-fluid" alt=""></div>
                                                      <span class="post-date">Futsal</span>
                                                      <h3 class="post-title">EI-QUDS Futsal</h3>
                                                      <a href="blog-single.html" class="readmore stretched-link mt-auto"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
                                                    </div>
                                                  </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </section>
        </main><!-- End #main -->
    </body>

@include('partials.footer')
@endsection
