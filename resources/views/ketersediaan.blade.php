@extends('layouts.main')

@include('partials.navbar')

@include('partials.bannerxs')

@section('container')

    <main id="main">

        <div class="container">
            <h1 class="h1ket">Badminton Rajabasa</h1>
            <form action="/ketersediaan" method="POST">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
    
            <form>
                <div class="form-group">
                    <label for="renter-name">Nama Penyewa</label>
                    <input type="text" placeholder="Nama" name="nama" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="start-date">Rental Start Date:</label>
                    <input type="date" placeholder="Date" name="date" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="start-date">Rental Start Time:</label>
                    <div class="time-slots">
                    <input placeholder="Time" name="time" class="form-control" required>
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


                <div class="form-group">
                    <label for="pickup-method">Pilihan Lapangan</label>
                    <select id="pickup-method" name="pickup-method" required>
                        <option value="driver">Badminton Courts Rajabasa 1</option>
                        <option value="self">Badminton Courts Rajabasa 2</option>
                    </select>
                </div>
                {{-- <div class="form-group">
                    <label for="driver-option">Driver Option:</label>
                    <label for="driver-yes">
                        <input type="radio" id="driver-yes" name="driver-option" value="yes" required>
                        Yes
                    </label>
                    <label for="driver-no">
                        <input type="radio" id="driver-no" name="driver-option" value="no" required>
                        No
                    </label>
                </div> --}}
                <div class="form-group">
                    {{-- <button class="buttonket" type="submit">Check Availability</button> --}}
                    <button type="submit" class="masukan-keranjang">Masukan Keranjang</button>
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
    @endsection
