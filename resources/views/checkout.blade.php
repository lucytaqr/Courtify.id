
<div class="bgprofil">
    
    @extends('layouts.main')
  
    @section('container')

    @include('partials.navbar')

    @include('partials.bannerxs')

  <!-- ======= About Section ======= -->
  <section id="about" class="about">
      <div class="container">
        <div class="row">
          <div class="d-flex flex-column justify-content-center">
            <div class="content">
                <h2>Wijaya Putra Futsal</h2>
                <p class="card-text mb-2"><iconify-icon icon="ph:soccer-ball-fill" width="24"></iconify-icon> Futsal | Lowokwaru</p>
                <div>
                    <table class="table mt-4" >
                      <tbody>
                        <tr>
                            <td class="px-4"></td>
                            <td class="py-3">Minggu, 10 Desember 2023 <br> 18.00 - 19.00 </td>
                            <td rowspan="2" class="py-4" align="right"><b style="color: #012970">Rp 100.000</b></td>
                            <td></td>
                        </tr>
                      </tbody>
                    </table>

                    <table class="table" >
                        <tbody>
                          <tr>
                              <td class="px-4"></td>
                              <td class="py-3">Minggu, 11 Desember 2023 <br> 18.00 - 19.00 </td>
                              <td rowspan="2" class="py-4" align="right"><b style="color: #012970">Rp 100.000</b></td>
                              <td></td>
                          </tr>
                        </tbody>
                      </table>
                  </div>

                  <div class="mt-5">
                    <table class="table" rules="none">
                        <tbody>
                            <tr style="background-color: #F6F9FF">
                                <td align="right">
                                  <b>Biaya Sewa</b>
                                </td>
                                <td align="left">
                                  <b>Rp 200.000</b>
                                </td>
                              </tr>
                                <tr style="background-color: #F6F9FF">
                                    <td align="right">
                                      <b>Biaya Layanan</b>
                                    </td>
                                    <td align="left">
                                      <b>Rp 5.000</b>
                                    </td>
                                  </tr>
                              <tr style="background-color: #F6F9FF">
                                <td align="right">
                                  <b>Total Pembayaran</b>
                                </td>
                                <td align="left">
                                  <b>Rp 205.000</b>
                                </td>
                              </tr>
                        </tbody>
                    </table>
                  </div>
                </div>
                
            </div>

            <div class="mt-3">
                <table class="table" rules="none">
                    <tr>
                        <td>
                            <!-- Vertically centered Modal -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#verticalycentered">
                                Metode Pembayaran <i class="bi bi-arrow-right"></i>
                            </button>
                            <div class="modal fade" id="verticalycentered" tabindex="-1">
                                <div class="modal-dialog modal-dialog-centered" style="width: 400">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <img src="{{ asset('images/courtify.png') }}" alt="Image" style="width: 130px;">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <h6><b>Total Pembayaran : Rp 205.000</b></h6>
                                        <h6><small>Order ID #2312100000171</small></h6>
                                        <br>
                                        <h6><b>Payment Method</b></h6>
                                        <button type="button" class="btn btn-outline-secondary" style="width: 365; text-align: left">
                                            <img src="assets/img/shopeepay.png" style="width: 46px"> Shopeepay
                                        </button>
                                        <button type="button" class="btn btn-outline-secondary" style="width: 365; text-align: left">
                                            <img src="assets/img/ovo.png" style="width: 46px"> OVO
                                        </button>
                                        <button type="button" class="btn btn-outline-secondary" style="width: 365; text-align: left">
                                            <img src="assets/img/gopay.png" style="width: 46px"> Gopay
                                        </button>
                                        <button type="button" class="btn btn-outline-secondary" style="width: 365; text-align: left">
                                            Virtual Account <i class="bi bi-arrow-right"></i>
                                        </button>
                                        <button type="button" class="btn btn-outline-secondary" style="width: 365; text-align: left">
                                            Transfer Bank <i class="bi bi-arrow-right"></i>
                                        </button>
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-primary" style="width: 365">Konfirmasi</button>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <!-- End Vertically centered Modal-->
                        </td>
                        <td align="right">
                                <a href="/succeed"><button type="button" class="btn btn-primary px-5">Checkout</button></a>
                        </td>
                    </tr>
                </table>
            </div>

        </div>
    </div>
</div>
    
</section><!-- End About Section -->
    
@endsection
  