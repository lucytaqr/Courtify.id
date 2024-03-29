@extends('admin.layouts.main')

@section('container')

@include('admin.layouts.header')

@include('admin.layouts.sidebar')

<!-- Template Main CSS File -->
<link href="{{ asset('assets/css/shopdetails.css') }}" rel="stylesheet">

</head>

<body>

    <main id="main">

        <div class="pagetitle pb-0">
            <h2 class="title">{{ $lapangan->nama }}</h2>
            <nav>
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item">Data Lapangan</li>
                <li class="breadcrumb-item">Lapangan</li>
                <li class="breadcrumb-item active">Detail Lapangan</li>
              </ol>
            </nav>
          </div><!-- End Page Title -->
    
        <!-- ======= Portfolio Details Section ======= -->
        <section id="portfolio-details" class="portfolio-details pt-0 pb-0">
          <div class="container pt-0 pb-0">
    
            <div class="row gy-4">
    
              <div class="col-lg-6">
                <div class="portfolio-details-slider swiper">
                  <div class="swiper-wrapper align-items-center">
    
                    <div class="swiper-slide">
                        <h2 class="title">Thumbnail</h2>
                        @if ($lapangan->thumbnail)
                        <img src="{{ asset('storage/' . $lapangan->thumbnail)}}" alt="{{ $lapangan->cabor->nama }}">
                        @else
                            <img src="{{asset('assets/img/sport.png')}}" alt="{{ $lapangan->cabor->nama }}" >
                        @endif
                    </div>
    
                    <div class="swiper-slide">
                        <h2 class="title pt-4">Gambar 1</h2>
                        @if ($lapangan->gambar1)
                        <img src="{{ asset('storage/' . $lapangan->gambar1)}}" alt="{{ $lapangan->cabor->nama }}">
                        @else
                        <img src="{{asset('assets/img/sport.png')}}" alt="{{ $lapangan->cabor->nama }}">
                        @endif
                    </div>
    
                    <div class="swiper-slide">
                        <h2 class="title pt-4">Gambar 2</h2>
                        @if ($lapangan->gambar2)
                        <img src="{{ asset('storage/' . $lapangan->gambar2)}}" alt="{{ $lapangan->cabor->nama }}">
                        @else
                        <img src="{{asset('assets/img/sport.png')}}" alt="{{ $lapangan->cabor->nama }}">
                        @endif
                    </div>
    
                  </div>
                  <div class="swiper-pagination"></div>
                </div>
              </div>
    
              <div class="col-lg-6">
                <div class="portfolio-info">    
                    <h2 class="title">Harga</h2>
                    <ul align="center">
                        <li><b style="font-size: 30px">Rp {{ $lapangan->tarif }}</b> / jam</li>
                    </ul>
                </div>
                <div class="portfolio-info">    
                    <h2 class="title">Fasilitas</h2>
                    <tr>
                        <div class="row">
                            <div class="col">
                              <iconify-icon icon="material-symbols:wifi"></iconify-icon>&nbsp;&nbsp;Wifi
                            </div>
                            <div class="col">
                              <iconify-icon icon="mdi:toilet"></iconify-icon>&nbsp;&nbsp;Toilet
                            </div>
                            <div class="col">
                              <iconify-icon icon="material-symbols:mosque"></iconify-icon>&nbsp;&nbsp;Mushola
                            </div>
                        </div> 
                    </tr>
                    <tr>
                        <div class="container">
                            <div class="row">
                              <div class="col">
                                <iconify-icon icon="mdi:car"></iconify-icon>&nbsp;&nbsp;Parkir Mobil
                              </div>
                              <div class="col">
                                <iconify-icon icon="mdi:food"></iconify-icon>&nbsp;&nbsp;Food Court
                              </div>
                            </div>
                        </div>
                    </tr>
                </div>
              </div>
    
            </div>
    
          </div>
        </section><!-- End Portfolio Details Section -->

        <section id="blog" class="blog pt-0">
            <div class="container" data-aos="fade-up">
                <div class="row">
                    <div class="col-lg-9 entries">
                        <article class="entry entry-single">
                            <h2 class="title">Deskripsi</h2>
                            <div class="entry-meta">
                                <ul>
                                    <li class="d-flex align-items-center"><iconify-icon icon="mdi:location"></iconify-icon>&nbsp;&nbsp;Kota Malang</li>
                                    <li class="d-flex align-items-center"><iconify-icon icon="fluent:sport-16-filled"></iconify-icon>
                                        <a style="color: #4084FD; font-size: 17" href="/shop?cabor={{ $lapangan->cabor->slug }}">&nbsp;&nbsp;{{ $lapangan->cabor->name }}</a>
                                    </li>
                                    <li class="d-flex align-items-center"><iconify-icon icon="mdi:clock"></iconify-icon> &nbsp;&nbsp;{{ $lapangan->created_at->diffForHumans() }} </li>
                                </ul>
                            </div>

                            <div class="entry-content">
                                <p>
                                    {{ $lapangan->deskripsi }}
                                </p>
                                <blockquote class="pt-0 pb-0">
                                    <p>
                                        <span class="h1 fw-bold mb-0" style="font-size: 20px;">Lokasi Venue</span>
                                        <br>
                                        <span class="h1 mb-0" style="font-size: 15px;">{{ $lapangan->alamat }}</span>
                                    </p>
                                </blockquote>
                                <br>
                                <hr>
                                <div class="entry-meta">
                                    <h2 class="title">Ulasan</h2>
                                    <div class="container text-dark">
                                        <div class="row">
                                                <div class="comment-container">
                                                    <!-- First Comment -->
                                                    <div class="comment-card">
                                                        <div class="d-flex flex-start">
                                                            <img class="rounded-circle shadow-1-strong me-3" src="{{ asset('images/swim1.jpg') }}" alt="avatar" width="50"height="50">
                                                            <div class="card w-100">
                                                                <div class="card-body p-4">
                                                                    <h5>Fatma Yuniardini</h5>
                                                                        <p class="small">3 hours ago</p>
                                                                        <p>Bagus dan nyaman</p>
                                                                        <div
                                                                            class="d-flex justify-content-between align-items-center">
                                                                            <!-- Star Rating -->
                                                                            <div class="star-rating">
                                                                                <span class="star">&#9733;</span>
                                                                                <span class="star">&#9733;</span>
                                                                                <span class="star">&#9733;</span>
                                                                                <span class="star">&#9733;</span>
                                                                                <span class="star">&#9734;</span>
                                                                            </div>
                                                                            <!-- Likes and Reply -->
                                                                            <div class="d-flex align-items-center">
                                                                                <a href="#!"
                                                                                    class="link-muted me-2"><i
                                                                                        class="fas fa-thumbs-up me-1"></i>132</a>
                                                                                <a href="#!"
                                                                                    class="link-muted"><i
                                                                                        class="fas fa-thumbs-down me-1"></i>15</a>
                                                                            </div>
                                                                            <a href="#!" class="link-muted"><i class="fas fa-reply me-1"></i>Reply</a>
                                                                        </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Second Comment -->
                                                    <div class="comment-card">
                                                        <div class="d-flex flex-start">
                                                            <img class="rounded-circle shadow-1-strong me-3" src="{{ asset('images/swim2.jpg') }}" alt="avatar" width="50" height="50">
                                                            <div class="card w-100">
                                                                <div class="card-body p-4">
                                                                    <h5>Chalista Yulia</h5>
                                                                        <p class="small">5 hours ago</p>
                                                                        <p>Lapangannya luas</p>
                                                                        <div class="d-flex justify-content-between align-items-center">
                                                                            <!-- Star Rating -->
                                                                            <div class="star-rating">
                                                                                <span class="star">&#9733;</span>
                                                                                <span class="star">&#9733;</span>
                                                                                <span class="star">&#9733;</span>
                                                                                <span class="star">&#9733;</span>
                                                                                <span class="star">&#9734;</span>
                                                                            </div>
                                                                            <!-- Likes and Reply -->
                                                                            <div class="d-flex align-items-center">
                                                                                <a href="#!" class="link-muted me-2"><i class="fas fa-thumbs-up me-1"></i>158</a>
                                                                                <a href="#!" class="link-muted"><i class="fas fa-thumbs-down me-1"></i>13</a>
                                                                            </div>
                                                                            <a href="#!" class="link-muted"><i class="fas fa-reply me-1"></i>Reply</a>
                                                                        </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Third Comment -->
                                                    <div class="comment-card">
                                                        <div class="d-flex flex-start">
                                                            <img class="rounded-circle shadow-1-strong me-3"src="{{ asset('images/swim3.jpg') }}" alt="avatar" width="50" height="50">
                                                            <div class="card w-100">
                                                                <div class="card-body p-4">
                                                                        <h5>Lucyta Qutsyaning</h5>
                                                                        <p class="small">5 hours ago</p>
                                                                        <p>Uhuyyy seruu sama temen-temen</p>
                                                                        <div class="d-flex justify-content-between align-items-center">
                                                                            <!-- Star Rating -->
                                                                            <div class="star-rating">
                                                                                <span class="star">&#9733;</span>
                                                                                <span class="star">&#9733;</span>
                                                                                <span class="star">&#9733;</span>
                                                                                <span class="star">&#9733;</span>
                                                                                <span class="star">&#9734;</span>
                                                                            </div>
                                                                            <!-- Likes and Reply -->
                                                                            <div class="d-flex align-items-center">
                                                                                <a href="#!" class="link-muted me-2"><i class="fas fa-thumbs-up me-1"></i>158</a>
                                                                                <a href="#!" class="link-muted"><i class="fas fa-thumbs-down me-1"></i>13</a>
                                                                            </div>
                                                                            <a href="#!" class="link-muted"><i class="fas fa-reply me-1"></i>Reply</a>
                                                                        </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                        </article>
                    </div>
                </div>
            </div>
        </section>
    </main><!-- End #main -->
</body>

@include('admin.layouts.footer')

@endsection