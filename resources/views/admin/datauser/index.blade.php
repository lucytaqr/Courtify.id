@extends('admin.layouts.main')

@section('container')

@include('admin.layouts.header')

@include('admin.layouts.sidebar')

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Data User</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Data User</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <!-- ======= Search ======= -->
        <div class="col-md-6">
          <form action="/admin/datauser">
              <div class="input-group mt-3 mb-3">
                  <input type="text" class="form-control" placeholder="Search" name="search" value="{{ request('search') }}">
                  <button class="btn btn-primary" type="submit">Search</button>
              </div>
          </form>
      </div>
      <!-- End Search -->
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">

              <!-- Table with stripped rows -->
              <table class="table datatable" style="text-align: center">
                <thead>
                  <tr>
                    <th>
                      <b>N</b>o
                    </th>
                    <th>Nama</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Nomor Hp</th>
                    <th>Status</th>
                    <th>Tanggal Dibuat</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($datausers->skip(1) as $datauser)
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $datauser->name }}</td>
                    <td>{{ $datauser->username }}</td>
                    <td>{{ $datauser->email }}</td>
                    <td>08299955899</td>
                    <td>Aktif</td>
                    <td>{{ $datauser->created_at }}</td>
                    <td>
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
                  @endforeach
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>

        <div class="d-flex justify-content-center">
          {{ $datausers->links() }}
        </div>
        
      </div>
    </section>

  </main><!-- End #main -->

@include('admin.layouts.footer')
@endsection