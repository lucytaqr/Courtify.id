<div class="bgprofil">
    
  @extends('layouts.main')

  @section('container')
  
  @include('partials.navbar')

<!-- Template Main CSS File -->
<link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

<!-- ======= Breadcrumbs ======= -->
<section class= "banner">
    <div class="container">
        
      <h2 style="margin-left: 30px"><b>PROFILE</b></h2>

    </div>
  </section>
<!-- End Breadcrumbs -->

<!-- ======= About Section ======= -->
<section id="about" class="about">

    <div class="container">
      <div class="row gx-0">

        <div class="d-flex flex-column justify-content-center">
          <div class="content">
            <h2>Data Diri</h2>
            <div class="bgform">
                <form action="" method="post">
                    <div class="input-section">
                        <label for="nama">Nama Lengkap</label>
                        <input type="text" name="nama" id="nama">
                    </div>
                    <div class="input-section">
                        <label for="username">Username</label>
                        <input type="text" name="username" id="username">
                    </div>
                    <div class="input-section">
                        <label for="ponsel">Nomor Ponsel</label>
                        <input type="text" name="ponsel" id="ponsel">
                    </div>
                    <div class="input-section">
                        <label for="email">Email</label>
                        <input type="text" name="email" id="email">
                    </div>
                </form>

                <div class="space">
                    <button type="button" class="button btn btn-primary">Ubah Kata Sandi</button>
                    <button type="button" class="button btn btn-primary">Simpan Perubahan</button>
                </div>
                
            </div>
          </div>
        </div>
      </div>
    </div>
  </section><!-- End About Section -->
</div>

@endsection
