@extends('admin.layouts.main')

@section('container')

@include('admin.layouts.header')

@include('admin.layouts.sidebar')

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Edit Data Lapangan</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Data Lapangan</li>
          <li class="breadcrumb-item ">Lapangan</li>
          <li class="breadcrumb-item active">Edit Data Lapangan</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <div class="col-lg-8">
        <form method="POST" action="/admin/lapangans/{{ $lapangan->slug }}" class="mb-5" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="mb-3">
              <label for="nama" class="form-label">Nama Lapangan</label>
              <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{  old('nama', $lapangan->nama) }}">
              @error('nama')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
            <div class="mb-3">
                <label for="slug" class="form-label">Slug</label>
                <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" value="{{  old('slug', $lapangan->slug) }}" readonly>
                @error('slug')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="cabor" class="form-label">Cabor</label>
              <select class="form-select" name="cabor_id">
                @foreach ($cabors as $cabor)
                  @if(old('cabor_id', $lapangan->cabor_id) == $cabor->id)
                    <option value="{{ $cabor->id }}" selected>{{ $cabor->name }}</option>
                  @else
                    <option value="{{ $cabor->id }}">{{ $cabor->name }}</option>
                  @endif
                @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="tarif" class="form-label">Tarif</label>
                <input type="text" class="form-control @error('tarif') is-invalid @enderror" id="tarif" name="tarif" value="{{  old('tarif', $lapangan->tarif) }}">
                @error('tarif')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat" value="{{  old('alamat', $lapangan->alamat) }}">
                @error('alamat')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="thumbnail" class="form-label">Thumbnail</label>
                <input type="hidden" name="oldImage" value="{{ $lapangan->thumbnail }}">
                @if ($lapangan->thumbnail)
                  <img src="{{ asset('storage/' . $lapangan->thumbnail) }}" class="img-preview img-fluid">
                @else
                  <img class="img-preview img-fluid">
                @endif
                <input class="form-control @error('thumbnail') is-invalid @enderror" type="file" id="thumbnail" name="thumbnail" onchange="previewImage()">
                @error('thumbnail')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="gambar1" class="form-label">Gambar 1</label>
                <input type="hidden" name="oldImage" value="{{ $lapangan->thumbnail }}">
                @if ($lapangan->thumbnail)
                  <img src="{{ asset('storage/' . $lapangan->thumbnail) }}" class="img-preview-2 img-fluid">
                @else
                  <img class="img-preview img-fluid">
                @endif
                <input class="form-control @error('gambar1') is-invalid @enderror" type="file" id="gambar1" name="gambar1" onchange="previewImage()">
                @error('gambar1')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="gambar2" class="form-label">Gambar 2</label>
                <input type="hidden" name="oldImage" value="{{ $lapangan->thumbnail }}">
                @if ($lapangan->thumbnail)
                  <img src="{{ asset('storage/' . $lapangan->thumbnail) }}" class="img-preview-3 img-fluid">
                @else
                  <img class="img-preview img-fluid">
                @endif
                <input class="form-control @error('gambar2') is-invalid @enderror" type="file" id="gambar2" name="gambar2" onchange="previewImage()">
                @error('gambar2')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
            <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi</label>
                @error('deskripsi')
                    <p class="text-danger" style="font-size: 14px">{{ $message }}</p>
                @enderror
                <input id="deskripsi" type="hidden" name="deskripsi" value="{{ old('deskripsi', $lapangan->deskripsi) }}">
                <trix-editor input="deskripsi"></trix-editor>
            </div>
            <div class="mb-3">
                <label for="fasilitas" class="form-label">Fasilitas</label>
                <div class="boxshadow">
                    <div class="row p-3">
                        <div class="col-md-6">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                                <label class="form-check-label" for="flexSwitchCheckDefault">
                                    <iconify-icon icon="material-symbols:wifi"></iconify-icon>&nbsp;&nbsp;Wifi
                                </label>
                            </div>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                                <label class="form-check-label" for="flexSwitchCheckDefault">
                                    <iconify-icon icon="mdi:toilet"></iconify-icon>&nbsp;&nbsp;Toilet
                                </label>
                            </div>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                                <label class="form-check-label" for="flexSwitchCheckDefault">
                                    <iconify-icon icon="material-symbols:mosque"></iconify-icon>&nbsp;&nbsp;Mushola
                                </label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                                <label class="form-check-label" for="flexSwitchCheckDefault">
                                    <iconify-icon icon="mdi:car"></iconify-icon>&nbsp;&nbsp;Parkir Mobil
                                </label>
                            </div>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                                <label class="form-check-label" for="flexSwitchCheckDefault">
                                    <iconify-icon icon="mdi:food"></iconify-icon>&nbsp;&nbsp;Food Court
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <label for="jam" class="form-label">Jam Operasional</label>
                <div class="boxshadow">
                    <div class="row p-3">
                        <div class="col-lg-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                  06:00 - 07:00
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                  06:00 - 07:00
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                  06:00 - 07:00
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                  06:00 - 07:00
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                  06:00 - 07:00
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                  06:00 - 07:00
                                </label>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                  06:00 - 07:00
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                  06:00 - 07:00
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                  06:00 - 07:00
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                  06:00 - 07:00
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                  06:00 - 07:00
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                  06:00 - 07:00
                                </label>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                  06:00 - 07:00
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                  06:00 - 07:00
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                  06:00 - 07:00
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                  06:00 - 07:00
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                  06:00 - 07:00
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                  06:00 - 07:00
                                </label>
                            </div>
                        </div>
    
                    </div>
                </div>
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>

  </main>

  <script>
    const nama = document.querySelector('#nama');
    const slug = document.querySelector('#slug');

    nama.addEventListener('change', function() {
        fetch('/admin/lapangans/checkSlug?nama='+ nama.value)
        .then(response => response.json())
        .then(data => slug.value = data.slug)
    });

    document.addEventListener('trix-file-accept', function(e) {
        e.preventDefault();
    })

    function previewImage() {
    const thumbnail = document.querySelector('#thumbnail');
    const gambar1 = document.querySelector('#gambar1');
    const gambar2 = document.querySelector('#gambar2');
    const imgPreview = document.querySelector('.img-preview');
    const imgPreview2 = document.querySelector('.img-preview-2');
    const imgPreview3 = document.querySelector('.img-preview-3');

    imgPreview.style.display = 'none'; // Sembunyikan preview yang pertama jika ada
    imgPreview2.style.display = 'none'; // Sembunyikan preview yang kedua jika ada
    imgPreview3.style.display = 'none'; // Sembunyikan preview yang ketiga jika ada

    const oFReader1 = new FileReader();
    const oFReader2 = new FileReader();
    const oFReader3 = new FileReader();

    oFReader1.onload = function(oFREvent) {
      imgPreview.src = oFREvent.target.result; // Setel sumber gambar pertama dengan hasil pembacaan file
      imgPreview.style.display = 'block'; // Tampilkan preview yang pertama
    }

    oFReader2.onload = function(oFREvent) {
      imgPreview2.src = oFREvent.target.result; // Setel sumber gambar kedua dengan hasil pembacaan file
      imgPreview2.style.display = 'block'; // Tampilkan preview yang kedua
    }

    oFReader3.onload = function(oFREvent) {
      imgPreview3.src = oFREvent.target.result; // Setel sumber gambar ketiga dengan hasil pembacaan file
      imgPreview3.style.display = 'block'; // Tampilkan preview yang ketiga
    }

    if (thumbnail.files[0]) {
      oFReader1.readAsDataURL(thumbnail.files[0]); // Baca file thumbnail jika ada
    }
    if (gambar1.files[0]) {
      oFReader2.readAsDataURL(gambar1.files[0]); // Baca file gambar 1 jika ada
    }
    if (gambar2.files[0]) {
      oFReader3.readAsDataURL(gambar2.files[0]); // Baca file gambar 2 jika ada
    }
  }
  </script>

@endsection