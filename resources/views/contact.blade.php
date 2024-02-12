@extends('layouts.main')

@section('container')
    @include('partials.navbar')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <main id="main">

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <p>Contact Kami</p>
                </header>

                <div class="row gy-4">

                    <div class="col-lg-6">

                        <div class="row gy-4">
                            <div class="col-md-6">
                                <div class="info-box">
                                    <i class="bi bi-geo-alt"></i>
                                    <h3>Alamat</h3>
                                    <p>JL. Wahid Hasyim No. 10D,<br>Jakarta Pusat, Indonesia 10340</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-box">
                                    <i class="bi bi-telephone"></i>
                                    <h3>Telephone</h3>
                                    <p>+62878-8552-5300</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-box">
                                    <i class="bi bi-envelope"></i>
                                    <h3>Email Kami</h3>
                                    <p>Courtify@gmail.com</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-box">
                                    <i class="bi bi-instagram"></i>
                                    <h3>Instagram Kami</h3>
                                    <p>Courtify.id</p>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-6">
                        <form id="contactForm" action="{{ route('contact.post') }}" method="post" class="php-email-form">
                            <div class="row gy-4">
                                @csrf
                                <div class="col-md-6">
                                    <input type="text" name="name" class="form-control" placeholder="Nama" required>
                                </div>

                                <div class="col-md-6 ">
                                    <input type="email" class="form-control" name="email" placeholder="Email" required>
                                </div>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="phone" placeholder="Nomor Telephone"
                                        required>
                                </div>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="domisili" placeholder="Domisili"
                                        required>
                                </div>

                                <div class="col-md-12">
                                    <textarea class="form-control" name="pertanyaan" rows="6" placeholder="Pertanyaan" required></textarea>
                                </div>

                                {{-- <div class="col-md-12 text-center">
                                    <div class="loading">Loading</div>
                                    <div class="error-message"></div>
                                    <div class="sent-message">Pesanmu sudah terkirim. Terima Kasih!</div> --}}

                                <button type="submit" id="submitButton" class="masukan-keranjang">Kirim Pesan</button>
                            </div>
                            <script>
                                document.getElementById('submitButton').addEventListener('click', function(event) {
                                    event.preventDefault();

                                    var formData = new FormData(document.getElementById('contactForm'));

                                    for (var pair of formData.entries()) {
                                        console.log(pair[0] + ': ' + pair[1]);
                                    }

                                    // Display the success message using SweetAlert
                                    Swal.fire({
                                        position: 'center',
                                        icon: 'success',
                                        title: 'Pesanmu sudah terkirim. Terima Kasih!',
                                        showConfirmButton: false,
                                        timer: 1500
                                    });
                                });
                            </script>

                    </div>
                    </form>

                </div>

            </div>

            </div>

        </section><!-- End Contact Section -->


    </main>

    @include ('partials.footer')
@endsection
