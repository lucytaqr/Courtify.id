{{-- <div class="bgabu"> --}}
<div class="bgprofil">
    
    @extends('layouts.main')
  
    @section('container')

    @include('partials.navbar')

    @include('partials.bannerxs')

  <!-- ======= Search ======= -->
    <div class="input-group mt-3">
      <input type="text" class="form-control" placeholder="Masukkan Booking" aria-label="Masukkan Booking" aria-describedby="basic-addon2">
      <div class="input-group-append">
        <button class="btn btn-primary" type="button"><i class="bi bi-search fs-4"></i></button>
      </div>
    </div>
  <!-- End Search -->

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
                    </div>
                  </div>
                </div>
              </div>

              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                  Default checkbox
                </label>
              </div>

            </div>
          </div>
        </div>
      </div>

      <nav class="navbar navbar-expand-lg bg-body-tertiary mt-3 fixed-bottom border">
        <div class="container-fluid py-3">
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item px-5">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label " for="flexCheckDefault">
                      Pilih Semua
                    </label>
                  </div>
              </li>
              <li class="nav-item px-5">
                <h6>Total Pembayaran : Rp 0</h6>
              </li>
            </ul>
            <div class="position-absolute bottom-3 end-0">
                <a href="/checkout"><button type="button" class="btn btn-primary px-5">Checkout</button></a>
            </div>
          </div>
        </div>
      </nav>

    </section><!-- End About Section -->
{{-- </div> --}}
    
@endsection
  