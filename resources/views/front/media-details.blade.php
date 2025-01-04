@extends('layouts.app')

@section('content')

<section class="address">
  <div class="container">
      <div class="col-lg-12 text-center">
          <h3>
            ICTC Gallery
          </h3>
      </div>
  </div>
</section>

<svg class="d-none" xmlns="http://www.w3.org/2000/svg">
  <symbol id="enlarge" viewBox="0 0 16 16">
    <path d="M1.5 1a.5.5 0 0 0-.5.5v4a.5.5 0 0 1-1 0v-4A1.5 1.5 0 0 1 1.5 0h4a.5.5 0 0 1 0 1h-4zM10 .5a.5.5 0 0 1 .5-.5h4A1.5 1.5 0 0 1 16 1.5v4a.5.5 0 0 1-1 0v-4a.5.5 0 0 0-.5-.5h-4a.5.5 0 0 1-.5-.5zM.5 10a.5.5 0 0 1 .5.5v4a.5.5 0 0 0 .5.5h4a.5.5 0 0 1 0 1h-4A1.5 1.5 0 0 1 0 14.5v-4a.5.5 0 0 1 .5-.5zm15 0a.5.5 0 0 1 .5.5v4a1.5 1.5 0 0 1-1.5 1.5h-4a.5.5 0 0 1 0-1h4a.5.5 0 0 0 .5-.5v-4a.5.5 0 0 1 .5-.5z"/>
  </symbol>
</svg>

<!-- Page Header -->
<section id="inner-headline">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="inner-heading">
            <ul class="breadcrumb">
              <li><a href="{{ route('home') }}">Home</a> <i class="icon-angle-right"></i></li>
              <li class="active"> &nbsp; Photos Gallery <i class="icon-angle-right"></i></li>
              <li class="active"> &nbsp; Sample Title 1</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
</section>

<div class="text-center mb-5 mt-3">
    <h2 style="font-size: 2.5rem; font-weight: bold; color: #333;">Photos <strong> Gallery</strong></h2>
</div>
<section class="photo-gallery">
    <div class="container">
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 gallery-grid">
            <div class="col">
                <div class="card gallery-card position-relative">
                    <a href="#" data-index="0" class="gallery-item">
                        <img src="https://picsum.photos/id/251/480/320.webp" class="img-fluid" alt="Sample Image 1">
                    </a>
                    <div class="card-body text-center">
                        <h5 class="card-title">Sample Title 1</h5>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card gallery-card position-relative">
                    <a href="#" data-index="1" class="gallery-item">
                        <img src="https://picsum.photos/id/678/480/320.webp" class="img-fluid" alt="Sample Image 2">
                    </a>
                    <div class="card-body text-center">
                        <h5 class="card-title">Sample Title 1</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Lightbox Modal -->
<div class="modal fade" id="lightbox-modal" tabindex="-1" aria-labelledby="lightboxLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          <div class="modal-body p-0">
              <!-- Swiper -->
              <div class="swiper-container">
                  <div class="swiper-wrapper">
                      <div class="swiper-slide">
                          <img src="https://picsum.photos/id/251/1200/800.webp" class="img-fluid" alt="Sample Image 1">
                      </div>
                      <div class="swiper-slide">
                          <img src="https://picsum.photos/id/678/1200/800.webp" class="img-fluid" alt="Sample Image 2">
                      </div>
                  </div>
                  <!-- Swiper navigation -->
                  <div class="swiper-button-next"></div>
                  <div class="swiper-button-prev"></div>
              </div>
          </div>
      </div>
  </div>
</div>

@endsection
