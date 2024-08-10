@extends('layouts.Master')
@section('title')
    portfolio-home
@endsection
@section('content')

    <div class="home text-center">
        <h1 class="display-4">I'm <span> Majd Al-steif</span> </h1>
        <p class="lead">Informatics Engineer</p>

        <div class="text-container">
            <div class="text"></div>
        </div>
        <div class="icon-home-contact">
            <a href="#" class="text-white me-3"><i class="fa-brands fa-2x  fa-facebook" style="color: #381e85;"></i></a>
            <a href="#" class="text-white me-3"><i class="fa-brands fa-2x fa-twitter" style="color: #381e85;"></i></a>
            <a href="#" class="text-white me-3"><i class="fa-brands fa-2x fa-instagram" style="color: #381e85;"></i></a>
            <a href="#" class="text-white me-3"><i class="fa-brands fa-2x fa-linkedin" style="color: #381e85;"></i></a>
        </div>
        <hr style="margin: 400px 40px 50px 40px">
        <h1 class="mb-4">
            Business Gallery
        </h1>

    </div>



{{--    slider--}}

    <div class="container-fluid">
        <div id="carouselExampleDark" class="carousel carousel-dark slide custom-carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                    <img src="{{asset('photo/2.jpeg')}}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <!-- تعليق الشريحة الأولى -->
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img src="{{asset('photo/1.jpg')}}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <!-- تعليق الشريحة الثانية -->
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{asset('photo/3.jpeg')}}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <!-- تعليق الشريحة الثالثة -->
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>


@endsection

@push('script')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const texts = ["Web Developer", "Mobile App Developer", "Network Engineer"]; // النصوص التي تريد عرضها
            let index = 0;
            const textElement = document.querySelector('.text-container .text');

            function changeText() {
                textElement.textContent = texts[index];
                index = (index + 1) % texts.length;
            }

            setInterval(changeText, 5000); // تغيير النص كل 5 ثواني
            changeText(); // تعيين النص الأول عند التحميل
        });
    </script>

@endpush
