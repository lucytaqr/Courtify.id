@extends('layouts.main')

@section('container')

@include('partials.navbar')

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up">Website Sewa Lapangan Nomor1 <iconify-icon icon="ph:medal-bold" style="color: #ffc700;" width="60"></iconify-icon> <br> di Kota Malang </h1>
          <h2 data-aos="fade-up" data-aos-delay="600">
            <p>Mengelola penyewaan lapangan olahraga <br> dengan praktis yang dapat terhubung dengan <br> banyak pengguna</p>
            </h2>
          <div data-aos="fade-up" data-aos-delay="300">
            <div class="text-center text-lg-start">
              <a href="/contact" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                <span>Hubungi Kami</span>
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
          <img src="assets/img/learnmore.png"  width="500" class="img-fluid" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">
    <!-- ======= About Section ======= -->
    <section id="about" class="about">

      <div class="container" data-aos="fade-up">
        <div class="row gx-0">

          <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
            <img src="assets/img/accept.png" width="500" height="500" class="img-fluid" alt="">
          </div>

          <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
            <div class="content">
              <h2>Apa itu Courtify?</h2>
              <p>
                Sebuah platform digital yang memudahkan pengguna untuk memesan lapangan olahraga secara online. Website ini menyediakan berbagai jenis lapangan olahraga, seperti lapangan futsal, lapangan badminton, lapangan basket, lapangan tenis, dan lain-lain. Dengan menggunakan Courtify, pengguna dapat dengan mudah dan cepat memesan lapangan olahraga yang diinginkan.
            </p>
            </div>
          </div>
        </div>
      </div>

    </section><!-- End About Section -->
  
    <!-- ======= Values Section ======= -->
    <section id="values" class="values">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>INGIN MENYEWA LAPANGAN?</h2>
          <p>Booking beberapa lapangan dalam satu waktu!</p>
        </header>

        <div class="row">

          <div class="col-lg-3" data-aos="fade-up" data-aos-delay="200">
            <div class="box">
              <img src="assets/img/signup.png" class="img-fluid" alt="">
              <h3>Sign Up</h3>
              <p>Buat akun di Courtify dengan mengisi informasi identitas Anda.</p>
            </div>
          </div>

          <div class="col-lg-3 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="400">
            <div class="box">
              <img src="assets/img/select.png" class="img-fluid" alt="">
              <h3>Sewa Lapangan</h3>
              <p>Pilih cabang olahraga sesuai kebutuhan dan pilih lapangan versi terbaik Anda beserta jam yang sesuai.</p>
            </div>
          </div>

          <div class="col-lg-3 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="600">
            <div class="box">
              <img src="assets/img/checkout.png" class="img-fluid" alt="">
              <h3>Checkout</h3>
              <p>Periksa kembali apakah lapangan dan jam booking yang dipilih sudah sesuai.</p>
            </div>
          </div>

          <div class="col-lg-3 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="600">
            <div class="box">
              <img src="assets/img/payment.png" class="img-fluid" alt="">
              <h3>Payment</h3>
              <p>Lakukan pembayaran.</p>
            </div>
          </div>

        </div>

      </div>

    </section>
    <!-- End Values Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">

      <div class="container">
        <div >
          <div class=" d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
            <div class="content text-center text-lg-start">
              <header class="section-header">
                <p>Tingkatkan stamina tubuh bersama Courtify!</p> <br>
                <a href="/shop" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                  <span>BOOKING SEKARANG</span>
                  <i class="bi bi-arrow-right"></i>
                </a>
              </header>
            </div>
          </div>
        </div>
      </div>

    </section><!-- End About Section -->

    <!-- ======= Recent Blog Posts Section ======= -->
    <section id="recent-blog-posts" class="recent-blog-posts">

      <div class="container" data-aos="fade-up">
        
        <header class="section-header">
          <p>Venue yang telah bergabung</p>
        </header>

        <div class="row">

          <div class="col-lg-4">
            <div class="post-box">
              <div class="post-img"><img src="assets/img/blog/blog-1.jpg" class="img-fluid" alt=""></div>
              <span class="post-date">Tue, September 15</span>
              <h3 class="post-title">Eum ad dolor et. Autem aut fugiat debitis voluptatem consequuntur sit</h3>
              <a href="blog-single.html" class="readmore stretched-link mt-auto"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="post-box">
              <div class="post-img"><img src="assets/img/blog/blog-2.jpg" class="img-fluid" alt=""></div>
              <span class="post-date">Fri, August 28</span>
              <h3 class="post-title">Et repellendus molestiae qui est sed omnis voluptates magnam</h3>
              <a href="blog-single.html" class="readmore stretched-link mt-auto"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="post-box">
              <div class="post-img"><img src="assets/img/blog/blog-3.jpg" class="img-fluid" alt=""></div>
              <span class="post-date">Mon, July 11</span>
              <h3 class="post-title">Quia assumenda est et veritatis aut quae</h3>
              <a href="blog-single.html" class="readmore stretched-link mt-auto"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

        </div>
      </div>
    </section><!-- End Recent Blog Posts Section -->

  </main><!-- End #main -->

  @include ('partials.mainfooter')
  @endsection
