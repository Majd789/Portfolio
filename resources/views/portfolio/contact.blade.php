@extends('layouts.master')

@section('title', 'Contact Us')

@section('content')
    <div class="container">

        <div class="row">
            <div class="col-lg-6">
                <h3 class="text-center mb-2">Contact Us</h3>
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <form action="" method="">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Full Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class=" form-label">Email address</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="subject" class=" form-label">Subject</label>
                        <input type="text" class="form-control" id="subject" name="subject" required>
                    </div>
                    <div class="mb-3">
                        <label for="message" class=" form-label">Message</label>
                        <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                    </div>
                    <button type="button" class="btn btn-primary">Send Message</button>
                </form>

            </div>


            <div class="col-lg-6  contact-information" style="padding: 50px">
                    <h2 class="text-center mt-4">Contact Information</h2>
                <p>You can contact me at any time and in any way for any question or inquiry.</p>
                    <p>Email: majdhasanalstef@gmail.com</p>
                    <p>Phone: +352681536239</p>
                    <p>Address: Syria ,Aleppo , Azaz</p>

                <div class="icon-contact text-center"  style="color: white;">
                    <i class="fa-brands fa-facebook fa-lg"></i>
                    <i class="fa-brands fa-whatsapp fa-lg"></i>
                    <i class="fa-brands fa-github fa-lg"></i>
                    <i class="fa-brands fa-linkedin fa-lg"></i>

                </div>
            </div>

        </div>





        <div class="map text-center">
            <h4>Location On Map</h4>
        <div  id="map" style="height: 400px; width: 100%;">

        </div>

        </div>
        <script>
            function initMap() {
                var location = {lat: -34.397, lng: 150.644};
                var map = new google.maps.Map(document.getElementById('map'), {
                    zoom: 8,
                    center: location
                });
                var marker = new google.maps.Marker({
                    position: location,
                    map: map
                });
            }
        </script>
        <script async defer
                src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap">
        </script>
    </div>
@endsection
