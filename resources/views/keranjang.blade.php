{{-- <div class="bgabu"> --}}
<div class="bgprofil">
    
    @extends('layouts.main')
  
    @section('container')

    @include('partials.navbar')

    @include('partials.bannerxs')

    <div class="container">
      <div class="table-wrap">
          <table class="table table-responsive table-borderless">
              <thead>
                  <th>&nbsp;</th>
                  <th>&nbsp;</th>
                  <th>Lapangan</th>
                  <th>Tarif/jam</th>
                  <th>Lama Sewa</th>
                  <th>Total</th>
                  <th>&nbsp;</th>
              </thead>
              <tbody>
                  <tr class="align-middle alert border-bottom" role="alert">
                      <td>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                          <label class="form-check-label" for="flexCheckDefault"></label>
                        </div>
                      </td>
                      <td class="text-center">
                          <img class="pic"
                              src="https://www.freepnglogos.com/uploads/shoes-png/dance-shoes-png-transparent-dance-shoes-images-5.png"
                              alt="">
                      </td>
                      <td>
                          <div>
                              <p class="m-0 fw-bold">Wijaya Putra Futsal</p> <br>
                              <p class="m-0 text-muted">Futsal | Lowokwaru</p>
                              <p class="m-0 text-muted">Minggu, 10 Desember 2024</p> <br>
                              <p class="m-0 text-muted">18.00 - 19.00</p>
                          </div>
                      </td>
                      <td>
                          <div class="fw-600">$44.99</div>
                      </td>
                      <td class="d-">
                          <input class="input" type="text" placeholder="2">
                      </td>
                      <td>
                          $89.98
                      </td>
                      <td>
                          <div class="btn" data-bs-dismiss="alert">
                              <span class="fas fa-times"></span>
                          </div>
                      </td>
                  </tr>
                  <tr class="align-middle alert border-bottom" role="alert">
                      <td>
                          <input type="checkbox" id="check">
                      </td>
                      <td class="text-center">
                          <img class="pic"
                              src="https://www.freepnglogos.com/uploads/shoes-png/download-vector-shoes-image-png-image-pngimg-2.png"
                              alt="">
                      </td>
                      <td>
                          <div>
                              <p class="m-0 fw-bold">Sneakers Shoes 2020 For Men</p>
                              <p class="m-0 text-muted">Fugiat Voluptates quasi nemo,ipsa perferencis</p>
                          </div>
                      </td>
                      <td>
                          <div class="fw-600">$54.99</div>
                      </td>
                      <td class="d-">
                          <input class="input" type="text" placeholder="2">
                      </td>
                      <td>
                          $108.98
                      </td>
                      <td>
                          <div class="btn" data-bs-dismiss="alert">
                              <span class="fas fa-times"></span>
                          </div>
                      </td>
                  </tr>
                  <tr class="align-middle alert border-bottom" role="alert">
                      <td>
                          <input type="checkbox" id="check">
                      </td>
                      <td class="text-center">
                          <img class="pic"
                              src="https://www.freepnglogos.com/uploads/shoes-png/running-shoes-png-transparent-running-shoes-images-6.png"
                              alt="">
                      </td>
                      <td>
                          <div>
                              <p class="m-0 fw-bold">Sneakers Shoes 2020 For Men</p>
                              <p class="m-0 text-muted">Fugiat Voluptates quasi nemo,ipsa perferencis</p>
                          </div>
                      </td>
                      <td>
                          <div class="fw-600">$50.99</div>
                      </td>
                      <td class="d-">
                          <input class="input" type="text" placeholder="2">
                      </td>
                      <td>
                          $100.98
                      </td>
                      <td>
                          <div class="btn" data-bs-dismiss="alert">
                              <span class="fas fa-times"></span>
                          </div>
                      </td>
                  </tr>
                  <tr class="align-middle alert border-bottom" role="alert">
                      <td>
                          <input type="checkbox" id="check">
                      </td>
                      <td class="text-center">
                          <img class="pic"
                              src="https://www.freepnglogos.com/uploads/shoes-png/find-your-perfect-running-shoes-26.png"
                              alt="">
                      </td>
                      <td>
                          <div>
                              <p class="m-0 fw-bold">Sneakers Shoes 2020 For Men</p>
                              <p class="m-0 text-muted">Fugiat Voluptates quasi nemo,ipsa perferencis</p>
                          </div>
                      </td>
                      <td>
                          <div class="fw-600">$74.99</div>
                      </td>
                      <td>
                          <input class="input" type="text" placeholder="2">
                      </td>
                      <td>
                          $148.98
                      </td>
                      <td>
                          <div class="btn" data-bs-dismiss="alert">
                              <span class="fas fa-times"></span>
                          </div>
                      </td>
                  </tr>
              </tbody>
          </table>
      </div>
  </div>

    

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
  