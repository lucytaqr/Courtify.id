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
                    <li class="breadcrumb-item active">Pertanyaan User</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <!-- ======= Search ======= -->
                <div class="col-md-6">
                    <form action="/admin/pertanyaan">
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
                                        <th>Email</th>
                                        <th>Nomor Hp</th>
                                        <th>Domisili</th>
                                        <th>Pertanyaan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pertanyaans as $pertanyaan)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $pertanyaan->name }}</td>
                                        <td>{{ $pertanyaan->email }}</td>
                                        <td>{{ $pertanyaan->phone }}</td>
                                        <td>{{ $pertanyaan->domisili }}</td>
                                        <td>{{ $pertanyaan->pertanyaan }}</td>
                                        <td></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <!-- End Table with stripped rows -->

                        </div>
                    </div>
                </div>


            </div>

            <div class="d-flex justify-content-center">
                {{ $pertanyaans->links() }}
            </div>
            
            </div>
        </section>

    </main><!-- End #main -->

    @include('admin.layouts.footer')
@endsection
