@extends('admin.layouts.main')

@section('container')

@include('admin.layouts.header')

@include('admin.layouts.sidebar')

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Pertanyaan</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Pertanyaan User</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    
  </main><!-- End #main -->

@include('admin.layouts.footer')
@endsection