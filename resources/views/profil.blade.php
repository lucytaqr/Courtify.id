<div class="bgprofil">
    
  @extends('layouts.main')

  @section('container')
  
  @include('partials.navbar')



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
                        <input type="text" name="nama" id="nama" value="{{ auth()->user()->name }}">
                    </div>
                    <div class="input-section">
                        <label for="username">Username</label>
                        <input type="text" name="username" id="username" value="{{ auth()->user()->username }}">
                    </div>
                    <div class="input-section">
                        <label for="ponsel">Nomor Ponsel</label>
                        <input type="text" name="ponsel" id="ponsel" value="{{ auth()->user()->ponsel }}>
                    </div>
                    <div class="input-section">
                        <label for="email">Email</label>
                        <input type="text" name="email" id="email" value="{{ auth()->user()->email }}">
                    </div>
                </form>

                <div class="space">
                    <button type="button" class="button btn btn-primary" id="save-profile-btn">Simpan Perubahan</button>
                </div>
                
            <script>
                document.getElementById('save-profile-btn').addEventListener('click', function() {
                  // Ambil nilai dari input form
                  var nama = document.getElementById('nama').value;
                  var username = document.getElementById('username').value;
                  var ponsel = document.getElementById('ponsel').value;
                  var email = document.getElementById('email').value;
              
                  // Kirim data perubahan ke backend
                  saveProfileChanges(nama, username, ponsel, email);
              });
            </script>

            <script>
                function saveProfileChanges(nama, username, ponsel, email) {
                // Kirim permintaan ke backend
                axios.post('/update-profile', {
                    nama: nama,
                    username: username,
                    ponsel: ponsel,
                    email: email
                })
                .then(function (response) {
                    // Handle respons dari backend
                    console.log(response.data);
                    alert('Perubahan berhasil disimpan!');
                })
                .catch(function (error) {
                    // Handle error jika terjadi
                    console.error(error);
                    alert('Gagal menyimpan perubahan.');
                });
            }
            </script>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section><!-- End About Section -->
</div>

@endsection
