@extends('admin.layouts.main')

@section('container')

@include('admin.layouts.header')

@include('admin.layouts.sidebar')

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Lapangan</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Data Lapangan</li>
          <li class="breadcrumb-item active">Lapangan</li>
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
                      <b>N</b>o
                    </th>
                    <th>Nama Lapangan</th>
                    <th>Cabor</th>
                    <th>Wilayah</th>
                    <th>Harga</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>Unity Pugh</td>
                    <td>9958</td>
                    <td>Curicó</td>
                    <td>2005/02/11</td>
                    <td>37%</td>
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