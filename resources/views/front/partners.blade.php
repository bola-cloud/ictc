@extends('layouts.app') <!-- Use your app layout -->

@section('content')
<style>
    .partners-section {
        padding: 50px 0;
        background-color: #f9f9f9;
    }

    .category-title {
        font-size: 1.5rem;
        font-weight: bold;
        color: #333;
        margin-bottom: 20px;
    }

    .card {
        border: 1px solid #ddd;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0px 2px 8px rgba(0, 0, 0, 0.1);
        text-align: center;
        background-color: #fff;
    }

    .card img {
        max-width: 100%;
        height: auto;
        padding: 10px;
        object-fit: contain;
    }
    .partners-section .card {
        overflow: hidden;
        border: 1px solid #ddd;
        border-radius: 10px;
        transition: transform 0.3s, box-shadow 0.3s; /* Smooth scaling effect */
        box-shadow: 0px 2px 8px rgba(0, 0, 0, 0.1); /* Subtle shadow */
    }

    .partners-section .card:hover {
        transform: scale(1.05); /* Slight zoom on hover */
        box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.2); /* Enhanced shadow */
    }

    .partners-section .card-img-top {
        height: 150px; /* Ensure equal heights */
        object-fit: contain; /* Maintain aspect ratio */
        transition: transform 0.3s ease-in-out; /* Smooth zoom effect */
    }

    .partners-section .card:hover .card-img-top {
        transform: scale(1.1); /* Slight zoom effect on image */
    }



</style>

<!-- Address Section -->
<section class="address">
    <div class="container">
        <div class="col-lg-12 text-center">
            <h3>
              About ICTC
            </h3>
        </div>
    </div>
</section>

<section class="partners-section">
    <div class="container">
        <!-- Title -->
        <div class="text-center mb-4">
            <h3 class="title">Our <strong>Partners</strong></h3>
        </div>

        <!-- Partners Section -->
        <div class="row">
            <!-- Governmental Institutions -->
            <div class="col-12 mb-5">
                <h4 class="category-title text-center mb-3">Governmental Institutions</h4>
                <div class="row">
                    <div class="col-md-3 col-sm-6 mb-4">
                        <div class="card">
                            <img src="{{asset('partners/1ENJUHAtZLSJsbIZogsEVqwkwm2Qny5qgTB9x4u1.jpg')}}" class="card-img-top" alt="Partner 1">
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 mb-4">
                        <div class="card">
                            <img src="{{asset('partners/1nHKfliUpYMookSvjFRCT7WmrxkoF1pY6Oz0y518.jpg')}}" class="card-img-top" alt="Partner 2">
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 mb-4">
                        <div class="card">
                            <img src="{{asset('partners/2HLdwgj41gUb4UPONL1W1AsX4PaS86f7l9aJxaMk.jpg')}}" class="card-img-top" alt="Partner 3">
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 mb-4">
                        <div class="card">
                            <img src="{{asset('partners/3u5oWiAdD5dxvUsSAQRRcBTm7wi1jSKmeVzzfMuq.jpg')}}" class="card-img-top" alt="Partner 4">
                        </div>
                    </div>
                </div>
            </div>

            <!-- NGOs -->
            <div class="col-12 mb-5">
                <h4 class="category-title text-center mb-3">Non-Governmental Organizations</h4>
                <div class="row">
                    <div class="col-md-3 col-sm-6 mb-4">
                        <div class="card">
                            <img src="{{asset('partners/5VAFiYrIWF4vpyUF1bM90SGC2YbHGoG1Q54nBcaQ.png')}}" class="card-img-top" alt="Partner 5">
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 mb-4">
                        <div class="card">
                            <img src="{{asset('partners/7Yi8bQ9ShzlcrX5saYJO0wGDchy4af0DxgUuoVXA.png')}}" class="card-img-top" alt="Partner 6">
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 mb-4">
                        <div class="card">
                            <img src="{{asset('partners/8JVBG4NFzZxHn1eonRHfQSp6ZrPP9jWAVnHt09Gs.jpg')}}" class="card-img-top" alt="Partner 7">
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 mb-4">
                        <div class="card">
                            <img src="{{asset('partners/cNHCHgYfnZBodppu8HPIoTTAWPb6i14zzUjrPRxb.png')}}" class="card-img-top" alt="Partner 8">
                        </div>
                    </div>
                </div>
            </div>

            <!-- International Organizations -->
            <div class="col-12 mb-5">
                <h4 class="category-title text-center mb-3">International Organizations</h4>
                <div class="row">
                    <div class="col-md-3 col-sm-6 mb-4">
                        <div class="card">
                            <img src="{{asset('partners/F4SWsy5Gtw4P8QreAWyYmF8dFrUXSLC2eRM30jN5.png')}}" class="card-img-top" alt="Partner 9">
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 mb-4">
                        <div class="card">
                            <img src="{{asset('partners/fcyUgNYTDlxxEVbeVz1zvnXuuHjA3awEgEeo0Xi9.png')}}" class="card-img-top" alt="Partner 10">
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 mb-4">
                        <div class="card">
                            <img src="{{asset('partners/FlrhG3mGKAv5S8p1BrguXccaflrzBa34hxd0NCIc.jpg')}}" class="card-img-top" alt="Partner 11">
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 mb-4">
                        <div class="card">
                            <img src="{{asset('partners/g7Jk6P8aPJbMoZuPwknqIObAsCRER0y80V758rKm.png')}}" class="card-img-top" alt="Partner 12">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
