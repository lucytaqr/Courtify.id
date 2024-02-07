<!-- ======= Header ======= -->
<header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="/" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span>Courtify</span>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto {{ Request::is('/') ? 'active' : '' }}" href="/">Home</a></li>
          <li><a class="nav-link scrollto {{ Request::is('shop') ? 'active' : '' }}" href="/shop">Sewa Lapangan</a></li>
          <li><a class="nav-link scrollto {{ Request::is('contact') ? 'active' : '' }}" href="/contact">Contact</a></li>
          <li style="position: relative;">
            <a class="nav-link scrollto bi bi-cart3 {{ Request::is('keranjang') ? 'active' : '' }}" href="/keranjang">
                <span id="count" style="position: absolute; bottom: -1px; right: -7px; color: #796c6c;">0</span>
            </a>
        </li>        
          <li><a class="nav-link scrollto"> | </a></li>
          @auth
          <li><iconify-icon icon="solar:user-outline" class="usericon"></iconify-icon></li>
          <li class="dropdown"><a href="#"><span>{{ auth()->user()->name }}</span><i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="/profile">Profil</a></li>
              @if (Auth::user()->role == 'user')
              <li><a href="/dashboard">Dashboard</a></li>
              @else
              <li><a href="/admin">Dashboard</a></li>
              @endif
              <li><a href="/logout">Logout</a></li>
            </ul>
          </li>
          @else
          <li><a class="nav-link scrollto" href="/login">Sign In</a></li>
          <li><a class="getstarted scrollto" href="/register">Sign Up</a></li>
          @endauth
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->