@extends('admin.layouts.main')

@section('container')

@include('admin.layouts.header')

@include('admin.layouts.sidebar')

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Pertanyaan User</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Lapangan</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

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
                  <tr>
                    <td>1</td>
                    <td>Fanny</td>
                    <td>fanny123</td>
                    <td>Fanny2@gmail.com</td>
                    <td>08299955899</td>
                    <td>Aktif</td>
                    <td>30 Januari 2024</td>
                    <td></td>
                  </tr>
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->

@include('admin.layouts.footer')
@endsection