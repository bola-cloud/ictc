@extends('layouts.app')

@section('content')

<!-- Page Header -->
<section class="page-header address">
  <div class="container text-center">
    <h2 style="font-size: 2.5rem; font-weight: bold;">Contact Us</h2>
    <p style="font-size: 1.2rem; margin-top: 10px;">Get in touch with us for any inquiries or support</p>
  </div>
</section>

<!-- Contact Information Section -->
<section id="contact-info" class="contact-info-section" style="padding: 60px 0; background-color: #f8f9fa;">
  <div class="container">
    <div class="text-center mb-5">
      <h3 style="font-size: 2.5rem; font-weight: bold; color: #333;">Our Contact Information</h3>
      <p style="font-size: 1.1rem; color: #666;">Reach out to us through any of the following methods.</p>
    </div>
    <div class="row g-4">
      <!-- Address Card -->
      <div class="col-md-6 col-lg-3">
        <div class="card text-center shadow-sm p-4 h-100" style="border-radius: 15px; background-color: #fff;">
          <div class="icon mb-3" style="font-size: 3rem; color: #007bff;">
            <i class="fa fa-map-marker-alt"></i>
          </div>
          <h5 class="fw-bold" style="color: #333;">Address</h5>
          <p style="font-size: 1rem; color: #666;">ICTC OFFICE, CAIRO, EGYPT</p>
        </div>
      </div>
      <!-- Phone Card -->
      <div class="col-md-6 col-lg-3">
        <div class="card text-center shadow-sm p-4 h-100" style="border-radius: 15px; background-color: #fff;">
          <div class="icon mb-3" style="font-size: 3rem; color: #28a745;">
            <i class="fa fa-phone"></i>
          </div>
          <h5 class="fw-bold" style="color: #333;">Phone</h5>
          <p style="font-size: 1rem; color: #666;">+123-456-7890</p>
        </div>
      </div>
      <!-- Email Card -->
      <div class="col-md-6 col-lg-3">
        <div class="card text-center shadow-sm p-4 h-100" style="border-radius: 15px; background-color: #fff;">
          <div class="icon mb-3" style="font-size: 3rem; color: #ffc107;">
            <i class="fa fa-envelope"></i>
          </div>
          <h5 class="fw-bold" style="color: #333;">Email</h5>
          <p style="font-size: 1rem; color: #666;">contact@ictc-egy.com</p>
        </div>
      </div>
      <!-- Website Card -->
      <div class="col-md-6 col-lg-3">
        <div class="card text-center shadow-sm p-4 h-100" style="border-radius: 15px; background-color: #fff;">
          <div class="icon mb-3" style="font-size: 3rem; color: #17a2b8;">
            <i class="fa fa-globe"></i>
          </div>
          <h5 class="fw-bold" style="color: #333;">Website</h5>
          <p style="font-size: 1rem; color: #666;">www.ictc-egy.com</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Contact Form Section -->
<section id="contact-form" class="contact-form-section" style="padding: 60px 0; background-color: #fff;">
  <div class="container">
    <div class="row">
      <!-- Contact Form -->
      <div class="col-md-6">
        <div class="contact-form bg-white shadow p-4 rounded" style="border-radius: 15px;">
          <h3 style="font-size: 1.8rem; font-weight: bold; color: #333; margin-bottom: 20px;">Send Us a Message</h3>
          <form action="#" method="POST">
            <div class="mb-3">
              <label for="name" class="form-label" style="font-weight: bold; color: #666;">Your Name</label>
              <input type="text" id="name" class="form-control" placeholder="Enter your name">
            </div>
            <div class="mb-3">
              <label for="email" class="form-label" style="font-weight: bold; color: #666;">Your Email</label>
              <input type="email" id="email" class="form-control" placeholder="Enter your email">
            </div>
            <div class="mb-3">
              <label for="message" class="form-label" style="font-weight: bold; color: #666;">Your Message</label>
              <textarea id="message" class="form-control" rows="5" placeholder="Write your message"></textarea>
            </div>
            <button type="submit" class="btn btn-primary w-100" style="background: linear-gradient(135deg, #007bff, #6a11cb); border: none; padding: 10px 20px; font-weight: bold;">Send Message</button>
          </form>
        </div>
      </div>
      <!-- Google Map -->
      <div class="col-md-6">
        <div class="map-container" style="height: 400px; border-radius: 15px; overflow: hidden;">
          <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.8354345093687!2d144.96315791537373!3d-37.814107979751555!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642af0f11fd81%3A0xf577b6b4ef72c5d0!2sFederation+Square!5e0!3m2!1sen!2sau!4v1511369417757" 
            width="100%" 
            height="100%" 
            frameborder="0" 
            style="border:0;" 
            allowfullscreen>
          </iframe>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection
