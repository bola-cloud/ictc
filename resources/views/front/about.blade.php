@extends('layouts.app')

@section('content')

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

<!-- Page Header -->
<section id="inner-headline">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="inner-heading">
          <ul class="breadcrumb">
            <li><a href="{{ route('home') }}">Home</a> <i class="icon-angle-right"></i></li>
            <li class="active"> &nbsp;  About</li>
          </ul>
          <h2>About Us</h2>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- About ICTC Section -->
<section id="about" class="about-section position-relative" style="padding: 60px 0;">
  <div class="container">
    <div class="text-center mb-5">
      <h2 style="font-size: 2.5rem; font-weight: bold; color: #333;">About <strong>ICTC</strong></h2>
      <p class="section-description">
        ICTC is a leading organization specializing in training, research, technology, and institutional development. 
        With extensive expertise in community development and capacity building, ICTC aims to provide innovative 
        solutions to enhance organizational performance and societal impact.
      </p>
    </div>
  </div>
</section>

<!-- Vision and Mission Section -->
<section id="vision-mission" class="vision-mission-section position-relative" style="padding: 60px 0; background-color: #f8f9fa;">
  <div class="container">
    <div class="row align-items-center mb-5">
      <!-- Vision -->
      <div class="col-md-6">
        <img src="https://aha-disc.co.uk/wp-content/uploads/2022/07/bigstock-Business-Technology-Internet-442835366.jpg" alt="Vision" class="img-fluid rounded shadow" style="height:280px;">
      </div>
      <div class="col-md-6">
        <h4 class="section-title"><span style="color: #6a11cb;">Our Vision</span></h4>
        <p class="section-description">
          To drive institutional development and sustainable growth by delivering tailored ICT solutions that empower 
          organizations to enhance their efficiency, build capacity, and achieve long-term success in an ever-evolving 
          digital landscape.
        </p>
      </div>
    </div>
    <div class="row align-items-center">
      <!-- Mission -->
      <div class="col-md-6 order-md-2">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQFnQGIjOPURt9sr00J3hya7KnL0O_U7hjLog&s" alt="Mission" class="img-fluid rounded shadow" style="height:280px;">
      </div>
      <div class="col-md-6 order-md-1">
        <h4 class="section-title"><span style="color: #2575fc;">Our Mission</span></h4>
        <p class="section-description">
          To be a leading provider of innovative and sustainable technology solutions, empowering businesses and 
          communities to thrive in the digital era.
        </p>
      </div>
    </div>
  </div>
</section>


<!-- Core Values Section -->
<section id="core-values" class="core-values-section" style="padding: 60px 0; background-color: #f8f9fa;">
  <div class="container">
    <div class="text-center mb-5">
      <h3 style="font-size: 2.5rem; font-weight: bold; color: #333;">Core Values</h3>
      <p style="font-size: 1.1rem; color: #666;">Our guiding principles for sustainable growth and innovation.</p>
    </div>
    <div class="row g-4">
      @foreach ([
        ['icon' => 'fa-solid fa-shield-alt', 'color' => '#ff6b6b', 'title' => 'Integrity'],
        ['icon' => 'fa-solid fa-users', 'color' => '#6bcf63', 'title' => 'Empowerment'],
        ['icon' => 'fa-solid fa-lightbulb', 'color' => '#ffd93b', 'title' => 'Innovation'],
        ['icon' => 'fa-solid fa-star', 'color' => '#4ea8de', 'title' => 'Quality'],
        ['icon' => 'fa-solid fa-palette', 'color' => '#a77ef0', 'title' => 'Creativity'],
        ['icon' => 'fa-solid fa-seedling', 'color' => '#34c471', 'title' => 'Development'],
        ['icon' => 'fa-solid fa-hands-helping', 'color' => '#ff9e42', 'title' => 'Responsibility'],
        ['icon' => 'fa-solid fa-chalkboard-teacher', 'color' => '#ffaec9', 'title' => 'Capacity Building'],
        ['icon' => 'fa-solid fa-heart', 'color' => '#f06292', 'title' => 'Commitment']
      ] as $value)
      <div class="col-md-4">
        <div class="card text-center shadow-sm p-4 h-100" style="border-radius: 15px; background-color: #fff;">
          <div class="icon mb-3" style="font-size: 3rem; color: {{ $value['color'] }};">
            <i class="{{ $value['icon'] }}"></i>
          </div>
          <h5 class="fw-bold" style="color: #333;">{{ $value['title'] }}</h5>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>
<!-- Scope of Work Section -->
<section id="scope" class="scope-section" style="padding: 60px 0; background-color: #fff;">
  <div class="container">
    <div class="text-center mb-5">
      <h3 style="font-size: 2.5rem; font-weight: bold; color: #333;">Scope of Work</h3>
      <p style="font-size: 1.1rem; color: #666;">Explore the key areas where ICTC delivers impact.</p>
    </div>
    <div class="row g-4">
      @foreach ([
        ['icon' => 'icon-research', 'title' => 'Research', 'description' => 'Providing evidence-based studies and analysis.'],
        ['icon' => 'icon-training', 'title' => 'Training', 'description' => 'Delivering specialized programs to build skills and knowledge.'],
        ['icon' => 'icon-tech', 'title' => 'Technology', 'description' => 'Leveraging innovative tools and solutions.'],
        ['icon' => 'icon-organization', 'title' => 'Institutional Development', 'description' => 'Building robust organizational frameworks and systems.']
      ] as $scope)
      <div class="col-md-6 col-lg-3">
        <div class="card text-center shadow-sm p-4 h-100" style="border-radius: 15px; background-color: #fff;">
          <div class="icon mb-3" style="font-size: 3.5rem; color: #007bff;"><i class="{{ $scope['icon'] }}"></i></div>
          <h5 class="fw-bold" style="color: #333;">{{ $scope['title'] }}</h5>
          <p style="font-size: 1rem; color: #666;">{{ $scope['description'] }}</p>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>

<!-- Experience Section -->
<section id="experience" class="experience-section" style="padding: 60px 0; background-color: #fff;">
  <div class="container">
    <div class="text-center mb-5">
      <h3 style="font-size: 2.5rem; font-weight: bold; color: #333;">Our Experience</h3>
      <p style="font-size: 1.1rem; color: #666;">ICTC's track record in driving growth and innovation.</p>
    </div>
    <div class="row g-4">
      @foreach ([
        ['icon' => 'fa-solid fa-chart-bar', 'color' => '#007bff', 'title' => 'Field Research', 'description' => 'Conducting surveys and analyses to generate actionable insights.'],
        ['icon' => 'fa-solid fa-chalkboard', 'color' => '#4ea8de', 'title' => 'Training & Skills Development', 'description' => 'Equipping individuals and organizations with essential skills.'],
        ['icon' => 'fa-solid fa-cogs', 'color' => '#6bcf63', 'title' => 'Technological Solutions', 'description' => 'Implementing tools to optimize efficiency and digital transformation.'],
        ['icon' => 'fa-solid fa-building', 'color' => '#ff6b6b', 'title' => 'Institutional Development', 'description' => 'Designing and establishing governance frameworks.']
      ] as $experience)
      <div class="col-md-6 col-lg-3">
        <div class="card text-center shadow-sm p-4 h-100 experience-card" style="border-radius: 15px; background-color: #fff; transition: transform 0.3s ease, box-shadow 0.3s ease;">
          <div class="icon mb-3" style="font-size: 3.5rem; color: {{ $experience['color'] }};">
            <i class="{{ $experience['icon'] }}"></i>
          </div>
          <h5 class="fw-bold" style="color: #333;">{{ $experience['title'] }}</h5>
          <p style="font-size: 1rem; color: #666;">{{ $experience['description'] }}</p>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>
@endsection
