@extends('layouts.main')

@include('partials.navbar')

@include('partials.bannerxs')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@section('container')
    <main id="main">

        <div class="containerket">
            <h1 class="h1ket">Badminton Rajabasa</h1>
            <form>
                <div class="form-group">
                    <label for="renter-name">Nama Penyewa</label>
                    <input type="text" id="renter-name" name="renter-name" required>
                </div>
                <div class="form-group">
                    <label for="start-date">Rental Start Date:</label>
                    <input type="date" id="start-date" name="start-date" required>
                </div>
                <div class="form-group">
                    <label for="start-date">Rental Start Date:</label>
                    <div class="time-slots">
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
                            console.log(`Selected time: ${selectedTime}`);

                            // Remove the selected-time-slot class from all buttons
                            timeSlots.forEach(timeSlot => {
                                timeSlot.classList.remove('selected-time-slot');
                            });

                            // Add the selected-time-slot class to the clicked time slot
                            timeSlot.classList.add('selected-time-slot');

                            // Update the button text with the selected time
                            button.innerText = `Check Availability for ${selectedTime}`;
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
                    <button class="masukan-keranjang">Masukan Keranjang</button>

                    <a class="buttonket" href="keranjang" role="button">Booking Sekarang</a>

                </div>
            </form>
        </div>


        <script>
            const timeSlots = document.querySelectorAll('.time-slot');

            timeSlots.forEach(timeSlot => {
                timeSlot.addEventListener('click', () => {
                    const selectedTime = timeSlot.dataset.time;
                    console.log(`Selected time: ${selectedTime}`);
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
