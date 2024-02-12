@extends('layouts.main')

@section('container')
    @include('partials.navbar')

    <main id="main">

        @include('partials.banner')

        <!-- ======= Recent Blog Posts Section ======= -->

    <!-- ========================= CSS here ========================= -->
    <link rel="stylesheet" href="assetsshop/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assetsshop/css/LineIcons.3.0.css" />
    <link rel="stylesheet" href="assetsshop/css/tiny-slider.css" />
    <link rel="stylesheet" href="assetsshop/css/glightbox.min.css" />
    <link rel="stylesheet" href="assetsshop/css/main.css" />
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet" />
    
    <!-- Start Trending Product Area -->
<body>
    <section>
        <div class="s131">
            <form action="/shop">
              @if (request('cabor'))
                <input type="hidden" name="cabor" value="{{ request ('cabor') }}">
              @endif
              <div class="inner-form">
                <div class="input-field first-wrap">
                  <input id="search" type="text" placeholder="What are you looking for?" name="search" value="{{ request('search') }}">
                </div>
                {{-- <div class="input-field second-wrap">
                  <div class="input-select">
                    <select class="form-select p-2" aria-label="Default select example">
                        <option value="0">All Category</option>
                        @foreach($cabors as $cabor)
                          <option value="1">{{ $cabor->name }}</option>
                        @endforeach
                    </select>
                  </div>
                </div> --}}
                <div class="input-field third-wrap">
                  <button class="btn-search" type="submit">SEARCH</button>
                </div>
              </div>
            </form>
          </div>
    </section>
    <!-- Start Trending Product Area -->
    <section class="trending-product section" style="margin-top: -50px;">
        <div class="container">
            <div class="row">
              @foreach ($lapangans as $lapangan)
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Product -->
                    <div class="single-product">
                        <div class="product-image">
                          @if ($lapangan->thumbnail)
                          <img src="{{ asset('storage/' . $lapangan->thumbnail)}}" alt="{{ $lapangan->cabor->nama }}">
                          @else
                              <img src="{{asset('assets/img/sport.png')}}" alt="{{ $lapangan->cabor->nama }}">
                          @endif
                          <div class="button">
                            <a href="/shop/{{ $lapangan->slug }}" class="btn"><i class="bi bi-info-circle"></i></i> Detail</a>
                          </div>
                        </div>
                        <div class="product-info">
                            <span class="category">{{ $lapangan->cabor->name }}</span>
                            <h4 class="title">
                                <a href="product-grids.html">{{ $lapangan->nama}}</a>
                            </h4>
                            <ul class="review">
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star"></i></li>
                                <li><span>4.0 Review(s)</span></li>
                            </ul>
                            <div class="price">
                                <span>Rp. {{ $lapangan->tarif}} / jam</span>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Product -->
                </div>
              @endforeach
              </div>
              <div class="d-flex justify-content-center">
                {{ $lapangans->links()}}
              </div>
        </div>
    </section>
    <!-- End Trending Product Area -->

    <script src="assetsshop/js/extention/choices.js"></script>
      <script>
        const choices = new Choices('[data-trigger]',
        {
          searchEnabled: false
        });
  
      </script>
    
</body>
</main>        

    @include ('partials.footer')
@endsection
