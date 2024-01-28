<div class="bgprofil">
    
    @extends('layouts.main')
  
    @section('container')
    
    @include('partials.navbar')
  
  <!-- ======= Breadcrumbs ======= -->
  <section class= "banner mb-4">
      <div class="container">
          
        <h2 style="margin-left: 30px"><b>Pesanan Saya</b></h2>
  
      </div>
    </section>
  <!-- End Breadcrumbs -->

  <!-- ======= Search ======= -->
    <div class="input-group mb-0">
      <input type="text" class="form-control" placeholder="Masukkan Booking" aria-label="Masukkan Booking" aria-describedby="basic-addon2">
      <div class="input-group-append">
        <button class="btn btn-primary" type="button"><i class="bi bi-search"></i></button>
      </div>
    </div>
  <!-- End Search -->

  <nav class="navbar navbar-expand-lg bg-body-tertiary mt-3">
    <div class="container-fluid py-3">
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item px-5">
            <a class="nav-link active" aria-current="page" href="#">Semua Status</a>
          </li>
          <li class="nav-item px-5">
            <a class="nav-link active" aria-current="page" href="#">Menunggu Pembayaran</a>
          </li>
          <li class="nav-item px-5">
            <a class="nav-link active" aria-current="page" href="#">Berhasil</a>
          </li>
          <li class="nav-item px-5">
            <a class="nav-link active" aria-current="page" href="#">Dibatalkan</a>
          </li>
          <li class="nav-item px-5">
            <a class="nav-link active" aria-current="page" href="#">Selesai</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- ======= About Section ======= -->
  <section id="about" class="about">
      <div class="container">
        <div class="row">
          <div class="d-flex flex-column justify-content-center">
            <div class="content">

              <div class="card mb-3" style="width: 940px; height: 180px;">
                <div class="row g-0">
                  <div class="col-md-4">
                    <img src="assets/img/blog/blog-1.jpg" class="img-fluid rounded-start p-3" style="height: 180px;"alt="">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body"> 
                      <h5 class="card-title"><b>Wijaya Putra Futsal</b></h5>
                      <small class="text-body-secondary">
                      <p class="card-text mb-2"><iconify-icon icon="ph:soccer-ball-fill" width="24"></iconify-icon> Futsal | Lowokwaru</p>
                      <p class="card-text mb-2">Minggu, 10 Desember 2024</p>
                      <p class="card-text mb-2">18.00 - 19.00</p>
                      </small>
                      {{-- <table>
                        <thead>
                          <tr>
                            <th><h5 class="card-title"><b>Wijaya Putra Futsal</b></h5></th>
                            <th></th>
                            <th><h6 class="card-title"><b>Menunggu Pembayaran</b></h6></th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td><p class="card-text mb-2"><small class="text-body-secondary"><iconify-icon icon="ph:soccer-ball-fill" width="24"></iconify-icon> Futsal | Lowokwaru</small></p></td>
                            <td></td>
                            <td></td>
                          </tr>
                          <tr>
                            <td><p class="card-text mb-2"><small class="text-body-secondary">Minggu, 10 Desember 2024</small></p></td>
                            <td></td>
                            <td></td>
                          </tr>
                          <tr>
                            <td><p class="card-text mb-2"><small class="text-body-secondary">18.00 - 19.00</small></p></td>
                            <td></td>
                            <td><h6 class="card-title"><b>Total Pembayaran : Rp 100.000</b></h6></td>
                          </tr>
                        </tbody>
                      </table> --}}
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </section><!-- End About Section -->
  
  @endsection
  