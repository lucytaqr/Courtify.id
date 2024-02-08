@extends('admin.layouts.main')

@section('container')
    @include('admin.layouts.header')

    @include('admin.layouts.sidebar')

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Jam Operasional</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">Data Lapangan</li>
                    <li class="breadcrumb-item active">Jam Operasional</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        <div class="jadwal-container">
            <h3>Daftar Jam</h3>
            <ul class="jam-list">
                @foreach ($jam as $j)
                    <li>
                        <label class="jam-checkbox {{ in_array($j, $aktif) ? 'checked' : '' }}" for="{{ $j }}">
                            <input type="checkbox" id="{{ $j }}" name="{{ $j }}"
                                value="{{ $j }}" {{ in_array($j, $aktif) ? 'checked' : '' }}>
                            {{ $j }}
                        </label>
                    </li>
                @endforeach
            </ul>
        </div>

        @include('admin.layouts.footer')
    @endsection
