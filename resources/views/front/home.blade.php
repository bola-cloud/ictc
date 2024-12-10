@extends('layouts.app')

@section('content')

  <!-- section featured -->
  <section id="featured">

      <!-- Main Swiper Gallery -->
      <div class="swiper-container main-gallery">
          <div class="swiper-wrapper">
              <div class="swiper-slide">
                  <img src="img/slides/camera/slide1/img1.jpg" alt="Main Slide 1">
              </div>
              <div class="swiper-slide">
                  <img src="img/slides/camera/slide2/img1.jpg" alt="Main Slide 2">
              </div>
              <div class="swiper-slide">
                  <img src="img/slides/camera/slide1/screen.png" alt="Main Slide 3">
              </div>
          </div>
      </div>

      <!-- Thumbnail Swiper Gallery -->
      <div class="swiper-container thumbs-gallery">
          <div class="swiper-wrapper">
              <div class="swiper-slide">
                  <img src="img/slides/camera/slide1/img1.jpg" alt="Thumb 1">
              </div>
              <div class="swiper-slide">
                  <img src="img/slides/camera/slide2/img1.jpg" alt="Thumb 2">
              </div>
              <div class="swiper-slide">
                  <img src="img/slides/camera/slide1/screen.png" alt="Thumb 3">
              </div>
          </div>
      </div>

  </section>

  <!-- About Us Section -->
  <section id="about-section" class="content">
    <div class="container">
      <div class="row">
        <!-- Image Section -->
        <div class="span5 animate-fade-in-left">
          <div class="about-image">
            <img src="img/dummies/blog/img1.jpg" alt="About ICTC" class="img-fluid" />
          </div>
        </div>
  
        <!-- Text Content Section -->
        <div class="span7 animate-fade-in-right">
          <div class="about-text">
            <h3>Who Are We?</h3>
            <p>
              ICTC is a leading organization specializing in training, research, technology, and institutional development. 
              With extensive expertise in community development and capacity building, ICTC provides innovative solutions 
              to enhance organizational performance and societal impact.
            </p>
            <div class="about-features">
              <div class="feature-item">
                <i class="icon-bullhorn"></i>
                <span><strong>Innovative Solutions</strong><br>Tailored strategies to drive growth and sustainability.</span>
              </div>
              <div class="feature-item">
                <i class="icon-sitemap"></i>
                <span><strong>Community Focused</strong><br>Empowering communities with impactful initiatives.</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>  

  <section id="content">
      <div class="container">
        <div class="row">
          <div class="span12">
            <div class="title-container">
              <h3 class="title">Our <strong>Services</strong></h3>
            </div>
            <div class="row">
              <!-- Service 1: Website -->
              <div class="span4">
                <div class="box">
                  <div class="icon">
                    <i class="ico icon-circled icon-bgdark icon-desktop icon-3x"></i>
                  </div>
                  <div class="text">
                    <h4><strong>Website</strong></h4>
                    <p>
                      We provide high-quality web development services tailored to your needs.
                    </p>
                    <a href="#">Learn More</a>
                  </div>
                </div>
              </div>
    
              <!-- Service 2: Education -->
              <div class="span4">
                  <div class="box">
                  <div class="icon">
                      <i class="icon-circled icon-bgsuccess icon-briefcase icon-3x"></i> <!-- Correct icon class -->
                  </div>
                  <div class="text">
                      <h4><strong>Education</strong></h4>
                      <p>
                      Offering education services with a focus on capacity building and skill development.
                      </p>
                      <a href="#">Learn More</a>
                  </div>
                  </div>
              </div>

              <!-- Service 3: Community Research and Project Evaluation -->
              <div class="span4">
                <div class="box">
                  <div class="icon">
                    <i class="ico icon-circled icon-bgdanger icon-search icon-3x"></i>
                  </div>
                  <div class="text">
                    <h4><strong>Community Research & Project Evaluation</strong></h4>
                    <p>
                      We conduct in-depth research and evaluations to help your projects thrive.
                    </p>
                    <a href="#">Learn More</a>
                  </div>
                </div>
              </div>
            </div>
    
            <div class="row">
              <!-- Service 4: Technological Solutions -->
              <div class="span4">
                <div class="box">
                  <div class="icon">
                    <i class="ico icon-circled icon-bglight icon-cogs icon-3x"></i>
                  </div>
                  <div class="text">
                    <h4><strong>Technological Solutions</strong></h4>
                    <p>
                      Providing cutting-edge tech solutions to optimize your business operations.
                    </p>
                    <a href="#">Learn More</a>
                  </div>
                </div>
              </div>
    
              <!-- Service 5: Training and Capacity Building -->
              <div class="span4">
                <div class="box">
                  <div class="icon">
                    <i class="ico icon-circled icon-bgsuccess icon-briefcase icon-3x"></i>
                  </div>
                  <div class="text">
                    <h4><strong>Training & Capacity Building</strong></h4>
                    <p>
                      Our training programs help enhance skills and build strong professional capacities.
                    </p>
                    <a href="#">Learn More</a>
                  </div>
                </div>
              </div>
    
              <!-- Service 6: Institutional Development -->
              <div class="span4">
                <div class="box">
                  <div class="icon">
                    <i class="ico icon-circled icon-bgdark icon-building icon-3x"></i>
                  </div>
                  <div class="text">
                    <h4><strong>Institutional Development</strong></h4>
                    <p>
                      Strengthening organizational structures to improve performance and sustainability.
                    </p>
                    <a href="#">Learn More</a>
                  </div>
                </div>
              </div>
            </div>
    
            <div class="row">
              <!-- Service 7: Implementation of Development Projects -->
              <div class="span4">
                <div class="box">
                  <div class="icon">
                    <i class="ico icon-circled icon-bgdanger icon-cogs icon-3x"></i>
                  </div>
                  <div class="text">
                    <h4><strong>Implementation of Development Projects</strong></h4>
                    <p>
                      We specialize in executing development projects from concept to completion.
                    </p>
                    <a href="#">Learn More</a>
                  </div>
                </div>
              </div>
    
              <!-- Service 8: Economic Development -->
              <div class="span4">
                <div class="box">
                  <div class="icon">
                    <i class="ico icon-circled icon-bgprimary icon-money icon-3x"></i>
                  </div>
                  <div class="text">
                    <h4><strong>Economic Development</strong></h4>
                    <p>
                      We offer strategies to foster sustainable economic growth and community prosperity.
                    </p>
                    <a href="#">Learn More</a>
                  </div>
                </div>
              </div>
    
            </div>
          </div>
        </div>
      </div>
  </section>

  <section id="works">
    <div class="container">
      <div class="row">
        <div class="span12">
          <div class="title-container">
            <h3 class="title">Recent <strong>Works</strong></h3>
          </div>
          <div class="row">
            <div class="grid cs-style-4">
              <div class="span3">
                <div class="item">
                  <figure>
                    <div><img src="img/dummies/works/1.jpg" alt="" /></div>
                    <figcaption>
                      <div>
                        <span>
              <a href="img/dummies/works/big.png" data-pretty="prettyPhoto[gallery1]" title="Portfolio caption here"><i class="icon-plus icon-circled icon-bglight icon-2x"></i></a>
              </span>
                        <span>
              <a href="#"><i class="icon-file icon-circled icon-bglight icon-2x"></i></a>
              </span>
                      </div>
                    </figcaption>
                  </figure>
                </div>
              </div>
              <div class="span3">
                <div class="item">
                  <figure>
                    <div><img src="img/dummies/works/2.jpg" alt="" /></div>
                    <figcaption>
                      <div>
                        <span>
              <a href="img/dummies/works/big.png" data-pretty="prettyPhoto[gallery1]" title="Portfolio caption here"><i class="icon-plus icon-circled icon-bglight icon-2x"></i></a>
              </span>
                        <span>
              <a href="#"><i class="icon-file icon-circled icon-bglight icon-2x"></i></a>
              </span>
                      </div>
                    </figcaption>
                  </figure>
                </div>
              </div>
              <div class="span3">
                <div class="item">
                  <figure>
                    <div><img src="img/dummies/works/3.jpg" alt="" /></div>
                    <figcaption>
                      <div>
                        <span>
              <a href="img/dummies/works/big.png" data-pretty="prettyPhoto[gallery1]" title="Portfolio caption here"><i class="icon-plus icon-circled icon-bglight icon-2x"></i></a>
              </span>
                        <span>
              <a href="#"><i class="icon-file icon-circled icon-bglight icon-2x"></i></a>
              </span>
                      </div>
                    </figcaption>
                  </figure>
                </div>
              </div>
              <div class="span3">
                <div class="item">
                  <figure>
                    <div><img src="img/dummies/works/4.jpg" alt="" /></div>
                    <figcaption>
                      <div>
                        <span>
              <a href="img/dummies/works/big.png" data-pretty="prettyPhoto[gallery1]" title="Portfolio caption here"><i class="icon-plus icon-circled icon-bglight icon-2x"></i></a>
              </span>
                        <span>
              <a href="#"><i class="icon-file icon-circled icon-bglight icon-2x"></i></a>
              </span>
                      </div>
                    </figcaption>
                  </figure>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="partners" class="partners-section">
    <div class="container">
      <div class="title-container">
        <h3 class="title">Our <strong>Partners</strong></h3>
      </div>
      <div class="swiper partners-slider-unique">
        <div class="swiper-wrapper">
          <div class="swiper-slide"><img src="img/dummies/works/1.jpg" alt="Partner 1"></div>
          <div class="swiper-slide"><img src="img/dummies/works/2.jpg" alt="Partner 2"></div>
          <div class="swiper-slide"><img src="img/dummies/works/3.jpg" alt="Partner 3"></div>
          <div class="swiper-slide"><img src="img/dummies/works/4.jpg" alt="Partner 4"></div>
          <div class="swiper-slide"><img src="img/dummies/works/2.jpg" alt="Partner 5"></div>
          <div class="swiper-slide"><img src="img/dummies/works/1.jpg" alt="Partner 6"></div>
          <div class="swiper-slide"><img src="img/dummies/works/3.jpg" alt="Partner 7"></div>
        </div>
      </div>
    </div>
  </section>
   

@endsection