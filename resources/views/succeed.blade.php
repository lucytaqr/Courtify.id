
<div class="bgprofil">
    
    @extends('layouts.main')
  
    @section('container')

    @include('partials.navbar')

    @include('partials.bannerxs')

  <!-- ======= About Section ======= -->
  <section id="about" class="about">

    <div class="container">
      <div >
        <div class=" d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
          <div class="content text-center text-lg-start">
            <header class="section-header">
              <p>Lapangan Berhasil Dipesan!</p> <br>
              <a href="/" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                <span>LIHAT DASHBOARD</span>
                <i class="bi bi-arrow-right"></i>
              </a>
            </header>
          </div>
        </div>
      </div>
    </div>

  </section><!-- End About Section -->
    
@endsection
  