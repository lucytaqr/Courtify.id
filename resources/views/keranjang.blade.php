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
                  <th>Tarif / jam</th>
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
                              <p class="fw-bold">Wijaya Putra Futsal</p>
                              <p class="m-0 text-muted">Futsal | Lowokwaru</p>
                              <p class="m-0 text-muted">Minggu, 10 Desember 2024</p>
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
                            <p class="fw-bold">Wijaya Putra Futsal</p>
                            <p class="m-0 text-muted">Futsal | Lowokwaru</p>
                            <p class="m-0 text-muted">Minggu, 10 Desember 2024</p> 
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
                          <p class="fw-bold">Wijaya Putra Futsal</p>
                          <p class="m-0 text-muted">Futsal | Lowokwaru</p>
                          <p class="m-0 text-muted">Minggu, 10 Desember 2024</p> 
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
                        <p class="fw-bold">Wijaya Putra Futsal</p>
                        <p class="m-0 text-muted">Futsal | Lowokwaru</p>
                        <p class="m-0 text-muted">Minggu, 10 Desember 2024</p> 
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
                  
              </tbody>
          </table>
          
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

@endsection
  