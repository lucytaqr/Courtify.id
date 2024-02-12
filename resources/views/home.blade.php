@extends('layouts.main')

@section('container')

@include('partials.navbar')

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up">Olahraga dengan Mudah dan Praktis</h1>
          <h2 data-aos="fade-up" data-aos-delay="600">
            <p>Tingkatkan performa olahragamu dengan Courtify!</p>
            <p>Sewa tempat terbaik untuk latihan dan pertandinganmu</p></h2>
          <div data-aos="fade-up" data-aos-delay="300">
            <div class="text-center text-lg-start">
              <a href="#about" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                <span>Get Started</span>
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">
    <!-- ======= About Section ======= -->
    <section id="about" class="about">

      <div class="container" data-aos="fade-up">
        <div class="row gx-0">

          <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
            <div class="content">
              <h3>Untuk apa Courtify?</h3>
              <h2>Sewa lapangan dengan mudah dan praktis</h2>
              <p>
                Temukan lapangan olahraga impian Anda dengan mudah di sini! Dengan antarmuka yang sederhana dan sistem pemesanan yang cepat, Anda bisa menemukan lapangan yang tepat sesuai kebutuhan Anda.
            </p>
              <div class="text-center text-lg-start">
                <a href="/learnmore" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                  <span>Selengkapnya</span>
                  <i class="bi bi-arrow-right"></i>
                </a>
              </div>
            </div>
          </div>

          <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
            <img src="assets/img/awal.jpg" width="580" height="500" class="img-fluid" alt="">
          </div>

        </div>
      </div>

    </section><!-- End About Section -->

    <!-- ======= Values Section ======= -->
    <section id="values" class="values">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>KENAPA COURTIFY?</h2>
          <p>Bersama Courtify, Anda dapat sewa lapangan dengan mudah!</p>
        </header>

        <div class="row">

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="box">
              <img src="assets/img/values-2.png" class="img-fluid" alt="">
              <h3>Ease of Access</h3>
              <p>Kemudahan akses untuk memesan lapangan atau fasilitas olahraga kapan saja dan dimana saja.</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="400">
            <div class="box">
              <img src="assets/img/values-3.png" class="img-fluid" alt="">
              <h3>Time Efficiency</h3>
              <p>Menghemat waktu dengan melakukan pemesanan secara online tanpa harus datang ke tempat lapangan.</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="600">
            <div class="box">
              <img src="assets/img/values-1.png" class="img-fluid" alt="">
              <h3>Online Payments</h3>
              <p>Memudahkan pengguna untuk membayar secara langsung melalui platform tanpa perlu membawa uang tunai.</p>
            </div>
          </div>

        </div>

      </div>

    </section>
    <!-- End Values Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Pilihan Olahraga</h2>
          <p>Mau olahraga apa hari ini?</p>
        </header>

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-box blue">
              <img src="assets/img/soccer.png"  width="250" height="250" class="img-fluid" alt="">
              <h3>Futsal</h3>
              <p>Nikmati aksi cepat dan teknis di lapangan futsal kami yang nyaman. Sempurna untuk pertandingan antar teman atau latihan intens.</p>
              <a href="/shop?cabor=futsal" class="read-more"><span>Sewa Lapangan</span> <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-box orange">
              <img src="assets/img/basketball.png"  width="250" height="250" class="img-fluid" alt="">
              <h3>Basket</h3>
              <p>Dapatkan kesempatan untuk mempertajam keterampilan bola basket Anda di lapangan kami yang luas. Sempurna untuk pertandingan seru atau latihan bersama tim.</p>
              <a href="/shop?cabor=basket" class="read-more"><span>Sewa Lapangan</span> <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="service-box green">
              <img src="assets/img/volley.png"  width="250" height="250" class="img-fluid" alt="">
              <h3>Voli</h3>
              <p>Rasakan semangat kompetisi dan kerjasama di lapangan voli kami yang lapang. Cocok untuk pertandingan santai atau turnamen yang penuh semangat.</p>
              <a href="/shop?cabor=voli" class="read-more"><span>Sewa Lapangan</span> <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="service-box red">
              <img src="assets/img/badminton.png"  width="250" height="250" class="img-fluid" alt="">
              <h3>Badminton</h3>
              <p>Bermainlah dengan lincah dan fleksibel di lapangan badminton kami yang nyaman. Tersedia untuk pertandingan seru atau latihan individu.</p>
              <a href="/shop?cabor=badminton" class="read-more"><span>Sewa Lapangan</span> <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
            <div class="service-box purple">
              <img src="assets/img/golf.png"  width="250" height="250" class="img-fluid" alt="">
              <h3>Golf</h3>
              <p>Rasakan keindahan alam dan ketegangan permainan golf di lapangan kami yang terawat dengan baik. Sempurna untuk putaran santai atau kompetisi serius.</p>
              <a href="/shop?cabor=golf" class="read-more"><span>Sewa Lapangan</span> <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="700">
            <div class="service-box pink">
              <img src="assets/img/tennis.png"  width="250" height="250" class="img-fluid" alt="">
              <h3>Tennis</h3>
              <p>Hadapi lawan Anda dengan energi penuh di lapangan tenis kami yang terawat. Cocok untuk pertandingan ganda atau latihan pribadi.</p>
              <a href="/shop?cabor=tennis" class="read-more"><span>Sewa Lapangan</span> <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

        </div>

      </div>

    </section><!-- End Services Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Testimonials</h2>
          <p>Apa yang mereka katakan tentang kita?</p>
        </header>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="200">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  Courtify sungguh luar biasa! Antarmuka yang intuitif membuat proses pemesanan lapangan olahraga begitu mudah dan cepat. Layanan pelanggan mereka juga luar biasa, selalu responsif dan membantu.                </p>
                <div class="profile mt-auto">
                  <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                  <h3>Amanda Putri</h3>
                  <h4>Atlet Badminton</h4>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  Pengalaman menyewa lapangan olahraga melalui Courtify luar biasa. Saya sangat terkesan dengan kualitas lapangan yang mereka tawarkan dan fleksibilitas dalam jadwal. Sungguh rekomendasi tinggi!                </p>
                <div class="profile mt-auto">
                  <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                  <h3>Budi Santoso</h3>
                  <h4>Pemilik Klub Futsal</h4>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  Courtify benar-benar mempermudah hidup olahraga saya. Dari futsal hingga tenis, semua lapangan yang saya sewa selalu dalam kondisi prima. Proses pembayaran yang lancar membuatnya jadi pilihan utama saya.                </p>
                <div class="profile mt-auto">
                  <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                  <h3>Rizky Pratama</h3>
                  <h4>Atlet Basket</h4>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  Saya sangat puas dengan pelayanan Courtify. Mereka memiliki pilihan lapangan yang beragam untuk berbagai olahraga, dan sistem reservasi mereka sangat efisien. Saya sering merekomendasikan kepada teman-teman saya!                </p>
                <div class="profile mt-auto">
                  <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                  <h3>Siti Nurhaliza</h3>
                  <h4>Pengguna Umum</h4>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  Courtify memberikan pengalaman yang tiada tara dalam menyewa lapangan olahraga. Dari booking yang mudah hingga fasilitas lapangan yang prima, semuanya sesuai dengan harapan. Saya tidak akan mencari platform lain lagi!                </p>
                <div class="profile mt-auto">
                  <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                  <h3>Putri Lestari</h3>
                  <h4>Pelatih Badminton</h4>
                </div>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section><!-- End Testimonials Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Contact</h2>
          <p>Contact Kami</p>
        </header>

        <div class="row gy-4">

          <div class="col-lg-6">

            <div class="row gy-4">
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-geo-alt"></i>
                  <h3>Alamat</h3>
                  <p>JL. Wahid Hasyim No. 10D,<br>Jakarta Pusat, Indonesia 10340</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-telephone"></i>
                  <h3>Telephone</h3>
                  <p>+62878-8552-5300</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-envelope"></i>
                  <h3>Email Kami</h3>
                  <p>Courtify@gmail.com</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-instagram"></i>
                  <h3>Instagram Kami</h3>
                  <p>Courtify.id</p>
                </div>
              </div>
            </div>

          </div>

          <div class="col-lg-6">
            <form action="forms/contact.php" method="post" class="php-email-form">
              <div class="row gy-4">

                <div class="col-md-6">
                  <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                </div>

                <div class="col-md-6 ">
                  <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                </div>

                <div class="col-md-12">
                  <input type="text" class="form-control" name="subject" placeholder="Subject" required>
                </div>

                <div class="col-md-12">
                  <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Pesanmu sudah terkirim. Terima Kasih!</div>

                  <button type="submit">Kirim Pesan</button>
                </div>

              </div>
            </form>

          </div>

        </div>

      </div>

    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  @include ('partials.footer')
  @endsection
