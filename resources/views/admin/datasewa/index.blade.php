@extends('admin.layouts.main')

@section('container')

@include('admin.layouts.header')

@include('admin.layouts.sidebar')

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Data Penyewaan</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Data Penyewaan</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <!-- ======= Search ======= -->
    <div class="input-group mt-3 mb-3" style="width: 25%">
      <input type="text" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="basic-addon2">
    </div>
    <!-- End Search -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">

              <!-- Table with stripped rows -->
              <table class="table datatable" style="text-align: center">
                <thead>
                  <tr>
                    <th>
                      <b>I</b>d
                    </th>
                    <th>Nama Penyewa</th>
                    <th>Tanggal Transaksi</th>
                    <th>Total</th>
                    <th>Status</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>Fanny</td>
                    <td>2024-01-29 05:20:42</td>
                    <td>Rp 300.000</td>
                    <td>Lunas</td>
                    <td>
                        <!-- Vertically centered Modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#verticalycentered">
                        <i class="bi bi-eye"></i>
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

                      <!-- Vertically centered Modal -->
                      <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#verticalycentered">
                          <i class="bi bi-pencil-square"></i>
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
                      
                      <!-- Vertically centered Modal -->
                      <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#verticalycentered">
                        <i class="bi bi-trash"></i>
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
                  </tr>
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>

        <!-- Pagination -->
        <nav aria-label="Page navigation example">
          <ul class="pagination">
            <li class="page-item">
              <a class="page-link" href="#" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
              </a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
              <a class="page-link" href="#" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
              </a>
            </li>
          </ul>
        </nav>
        <!-- End Pagination -->
        
      </div>
    </section>

  </main><!-- End #main -->

@include('admin.layouts.footer')
@endsection