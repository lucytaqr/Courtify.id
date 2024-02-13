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
    <div class="col-md-6 d-">
      <form action="/admin/lapangans">
          <div class="input-group mt-3 mb-3">
              <input type="text" class="form-control" placeholder="Search" name="search" value="{{ request('search') }}">
              <button class="btn btn-primary" type="submit">Search</button>
          </div>
      </form>

      @if(session()->has('success'))
        <div class="alert alert-success" role="alert">
          {{ session('success')}}
        </div>
      @endif

      <a href="/admin/lapangans/create" class="btn btn-primary mb-3 flex justify-content-end">Tambah Data</a>
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
                    <th>Thumbnail</th>
                    <th>Nama Lapangan</th>
                    <th>Cabor</th>
                    <th>Tarif / Jam</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($lapangans as $lapangan)
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>
                      @if ($lapangan->thumbnail)
                            <img src="{{ asset('storage/' . $lapangan->thumbnail)}}" alt="{{ $lapangan->cabor->nama }}" style="width: 100px">
                            @else
                            <img src="{{asset('assets/img/sport.png')}}" alt="{{ $lapangan->cabor->nama }}" style="width: 100px" >
                            @endif
                    </td>
                    <td>{{ $lapangan->nama}}</td>
                    <td>{{ $lapangan->cabor->name}}</td>
                    <td>{{ $lapangan->tarif}}</td>
                    <td>
                      <a href="/admin/lapangans/{{ $lapangan->slug }}" class="btn btn-primary"><i class="bi bi-eye"></i></a>
                      <a href="/admin/lapangans/{{ $lapangan->slug }}/edit" class="btn btn-warning"><i class="bi bi-pencil-square"></i></a>
                      <form action="/admin/lapangans/{{ $lapangan->slug }}" method="POST" class="d-inline">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus data?')"><i class="bi bi-trash"></i></button>
                      </form>
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
          {{ $lapangans->links() }}
      </div>
        
      </div>
    </section>

  </main><!-- End #main -->

@include('admin.layouts.footer')
@endsection