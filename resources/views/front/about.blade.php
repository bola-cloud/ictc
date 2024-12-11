@extends('layouts.app')

@section('content')

<!-- Page Header -->
<section id="inner-headline">
  <div class="container">
    <div class="row">
      <div class="span12">
        <div class="inner-heading">
          <ul class="breadcrumb">
            <li><a href="{{ route('home') }}">Home</a> <i class="icon-angle-right"></i></li>
            <li class="active">About</li>
          </ul>
          <h2>About Us</h2>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- About Section -->
<section id="content">
  <div class="container">
    <div class="row">
      <div class="span12">
        <h4>About ICTC</h4>
        <p>
          ICTC is a leading organization specializing in training, research, technology, and institutional development. 
          With extensive expertise in community development and capacity building, ICTC aims to provide innovative solutions 
          to enhance organizational performance and societal impact.
        </p>
      </div>
    </div>

    <!-- Divider -->
    <div class="row">
      <div class="span12">
        <div class="solidline"></div>
      </div>
    </div>

    <!-- Vision and Mission Section -->
    <div class="row">
      <!-- Vision -->
      <div class="span6">
        <img src="img/lp/screen-1.png" alt="Vision" class="flyLeft" />
      </div>
      <div class="span6">
        <div class="flyRight">
          <h4><strong><span class="colored">Our Vision</span></strong></h4>
          <p>
            To be a leading provider of innovative and sustainable technology solutions, empowering businesses and communities 
            to thrive in the digital era.
          </p>
        </div>
      </div>
    </div>
    <div class="row">
      <!-- Mission -->
      <div class="span6">
        <img src="img/lp/screen-1.png" alt="Mission" class="flyLeft" />
      </div>
      <div class="span6">
        <div class="flyRight">
          <h4><strong><span class="colored">Our Mission</span></strong></h4>
          <p>
            To drive institutional development and sustainable growth by delivering tailored ICT solutions that empower 
            organizations to enhance their efficiency, build capacity, and achieve long-term success in an ever-evolving 
            digital landscape.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection
