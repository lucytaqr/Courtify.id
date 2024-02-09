@extends('layouts.main')

@include('partials.navbar')

@include('partials.bannerxs')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@section('container')

    <main id="main">
        

        <div class="containerket">
            <h1 class="h1ket">Badminton Rajabasa</h1>
            <form action="/ketersediaan" method="POST">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                    <label for="">Nama Penyewa</label>
                    <input type="text"placeholder="Nama" name="nama" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Rental Start Date:</label>
                    <input type="date" placeholder="Date" name="date" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Rental Start Time:</label>
                    <select placeholder="Time" name="time" class="form-control" required>
                        <option value="">Pilih Waktu</option>
                        <option value="06:00">06:00 - 07:00</option>
                        <option value="07:00">07:00 - 08:00</option>
                        <option value="08:00">08:00 - 09:00</option>
                        <option value="09:00">09:00 - 10:00</option>
                    </select>
                </div>
                
                
                <div class="form-group">
                    <label for="">Rental Start Time:</label>
                    <div class="time-slots" type="time" id="time" name="time" class="form-control">
                        <div class="time-slot" data-time="06:00-07:00">
                            <div class="time-range">06:00-07:00</div>
                            <div class="status available"></div>
                        </div>
                        <div class="time-slot" data-time="08:00-09:00">
                            <div class="time-range">08:00-09:00</div>
                            <div class="status available"></div>
                        </div>
                        <div class="time-slot" data-time="07:00-08:00">
                            <div class="time-range">07:00-08:00</div>
                            <div class="status available"></div>
                        </div>
                        <div class="time-slot" data-time="09:00-10:00">
                            <div class="time-range">09:00-10:00</div>
                            <div class="status booked"></div>
                        </div>
                    </div>
                </div>

                <script>
                    const timeSlots = document.querySelectorAll('.time-slot');
                    const button = document.querySelector('button[type="submit"]');

                    timeSlots.forEach(timeSlot => {
                        timeSlot.addEventListener('click', () => {
                            const selectedTime = timeSlot.dataset.time;
                            console.log(Selected time: ${selectedTime});

                            // Remove the selected-time-slot class from all buttons
                            timeSlots.forEach(timeSlot => {
                                timeSlot.classList.remove('selected-time-slot');
                            });

                            // Add the selected-time-slot class to the clicked time slot
                            timeSlot.classList.add('selected-time-slot');

                            // Update the button text with the selected time
                            button.innerText = Check Availability for ${selectedTime};

                        });
                    });
                </script>


                {{-- <div class="form-group">
                    <label for="pickup-method">Pilihan Lapangan</label>
                    <select id="pickup-method" name="pickup-method" required>
                        <option value="driver">Badminton Courts Rajabasa 1</option>
                        <option value="self">Badminton Courts Rajabasa 2</option>
                    </select>
                </div> --}}
                {{-- <div class="form-group">
                    <label for="driver-option">Driver Option:</label>
                    <label for="driver-yes">
                        <input type="radio" class="inputket" id="driver-yes" name="driver-option" value="yes" required>
                        Yes
                    </label>
                    <label for="driver-no">
                        <input type="radio" class="inputket" id="driver-no" name="driver-option" value="no" required>
                        No
                    </label>
                </div> --}}
                <div class="form-group">
                    <form action="" method="POST">
                        {{-- {{ route('addbooking.to.cart', ['id' => $bookings->id]) }} --}}
                        {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> --}}
                        <button type="submit" class="masukan-keranjang">Masukan Keranjang</button>
                    </form>
                    <a class="buttonket" href="keranjang" role="button">Booking Sekarang</a>

                </div>
                
                
            </form>
        </div>


        <script>
            const timeSlots = document.querySelectorAll('.time-slot');

            timeSlots.forEach(timeSlot => {
                timeSlot.addEventListener('click', () => {
                    const selectedTime = timeSlot.dataset.time;
                    console.log(Selected time: ${selectedTime});
                });
            });
        </script>
        <script>
            const masukanKeranjangButton = document.querySelector('.masukan-keranjang');

            masukanKeranjangButton.addEventListener('click', () => {
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'Produk telah dimasukkan ke keranjang!',
                    showConfirmButton: false,
                    timer: 1500
                });
            });
        </script>

      


    @endsection


