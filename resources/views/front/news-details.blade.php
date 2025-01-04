@extends('layouts.app')

@section('content')
    <!-- Page Header -->
    <section class="page-header address">
        <div class="container text-center">
        <h2 style="font-size: 2.5rem; font-weight: bold;">News Details</h2>
        <p style="font-size: 1.2rem; margin-top: 10px;">Stay updated with the latest news</p>
        </div>
    </section>

    <section class="news-section py-5" style="background-color: #f8f9fa;">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-4">
                    <h1 class="fw-bold" style="color: #0d6efd;">Dr. Mostafa Madbouly - Prime Minister</h1>
                    <p class="text-muted">Inauguration of the Social Services Center in Sidi Abdel Rahman Village</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 mb-4">
                    <div class="card border-0 shadow-sm">
                        <div class="card-header bg-primary text-white text-center fs-4 fw-bold">
                            Inauguration of the Social Services Center
                        </div>
                        <div class="card-body">
                            <p class="fs-5">Dr. Mostafa Madbouly, the Prime Minister, inaugurated the Social Services Center in Sidi Abdel Rahman Village, Matrouh Governorate, with the presence of Dr. Nevine El-Kabbaj, Minister of Social Solidarity, and Major General Mohamed Amin Nasr, Advisor to the President of the Republic.</p>
                            <p class="fs-5">Qudra Company for Development and Technological Solutions for Education equipped 9 vocational workshops for economic empowerment, including (leather products - knitting - computer - copper - satellite dish - handmade carpets - tailoring - electricity - solar energy) at the center in collaboration with Al-Masry Foundation for Development and Education.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="row g-2">
                        <div class="col-6">
                            <img src="https://picsum.photos/800/400" alt="News Image 1" class="img-fluid rounded shadow-sm">
                        </div>
                        <div class="col-6">
                            <img src="https://picsum.photos/800/400" alt="News Image 2" class="img-fluid rounded shadow-sm">
                        </div>
                        <div class="col-6">
                            <img src="https://picsum.photos/800/400" alt="News Image 3" class="img-fluid rounded shadow-sm">
                        </div>
                        <div class="col-6">
                            <img src="https://picsum.photos/800/400" alt="News Image 4" class="img-fluid rounded shadow-sm">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
