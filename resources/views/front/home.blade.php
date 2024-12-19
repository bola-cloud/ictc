@extends('layouts.app')

@section('content')

  <!-- Hero Section -->
  <section class="head-video">
    <!-- Video Background -->
    <video autoplay muted loop style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover;">
        <source src="https://www.qodra-egy.net/img/midea/My%20Video.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>

    <!-- Carousel Content Overlay -->
    <div class="overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; z-index: 10;">
        <div id="carouselExampleIndicators" class="carousel slide h-100" data-bs-ride="carousel">
           

            <!-- Carousel Items -->
            <div class="carousel-inner h-100">
                <!-- Slide 1 -->
                <div class="carousel-item active h-100">
                    <div class="container h-100">
                        <div class="row align-items-center h-100">
                            <div class="col-8">
                                <h1 class="text-light display-3 fw-bold text-center">تطوير حلول تكنولوجية للتعليم</h1>
                            </div>
                            <div class="col-4 text-center">
                                <i class="fa-solid fa-laptop-file fa-7x text-warning"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slide 2 -->
                <div class="carousel-item h-100">
                    <div class="container h-100">
                        <div class="row align-items-center h-100">
                            <div class="col-8">
                                <h1 class="text-light display-3 fw-bold text-center">تقديم خدمات تنمية المجتمع</h1>
                            </div>
                            <div class="col-4 text-center">
                                <i class="fa-solid fa-people-roof fa-7x text-primary"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slide 3 -->
                <div class="carousel-item h-100">
                    <div class="container h-100">
                        <div class="row align-items-center h-100">
                            <div class="col-8">
                                <h1 class="text-light display-3 fw-bold text-center">مشاريع دعم الطفولة المبكرة</h1>
                            </div>
                            <div class="col-4 text-center">
                                <i class="fa-solid fa-hands-holding-child fa-7x text-danger"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slide 4 -->
                <div class="carousel-item h-100">
                    <div class="container h-100">
                        <div class="row align-items-center h-100">
                            <div class="col-8">
                                <h1 class="text-light display-3 fw-bold text-center">التعليم الفني والتدريب المهني</h1>
                            </div>
                            <div class="col-4 text-center">
                                <i class="fa-solid fa-helmet-safety fa-7x text-success"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
              <!-- Pagination Indicators -->
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
              </div>
            <!-- Navigation Controls -->
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
  </section>

  <!-- About Us Section -->
  <section id="about-section" class="content">
    <div class="container">
      <div class="row">
        <!-- Image Section -->
        <div class="col-md-5 animate-fade-in-left">
          <div class="about-image">
            <img src="img/dummies/blog/img1.jpg" alt="About ICTC" class="img-fluid" />
          </div>
        </div>
  
        <!-- Text Content Section -->
        <div class="col-md-7 animate-fade-in-right">
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
                <span><p>Innovative Solutions</p><br>Tailored strategies to drive growth and sustainability.</span>
              </div>
              <div class="feature-item">
                <i class="icon-sitemap"></i>
                <span><p>Community Focused</p><br>Empowering communities with impactful initiatives.</span>
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
              <div class="col-md-4">
                <div class="box">
                  <div class="icon">
                    <i class="ico icon-circled icon-bgdark icon-desktop icon-3x"></i>
                  </div>
                  <div class="text">
                    <h4><p>Website</p></h4>
                    <p>
                      We provide high-quality web development services tailored to your needs.
                    </p>
                    <a href="#">Learn More</a>
                  </div>
                </div>
              </div>
    
              <!-- Service 2: Education -->
              <div class="col-md-4">
                  <div class="box">
                  <div class="icon">
                      <i class="icon-circled icon-bgsuccess icon-briefcase icon-3x"></i> <!-- Correct icon class -->
                  </div>
                  <div class="text">
                      <h4><p>Education</p></h4>
                      <p>
                      Offering education services with a focus on capacity building and skill development.
                      </p>
                      <a href="#">Learn More</a>
                  </div>
                  </div>
              </div>

              <!-- Service 3: Community Research and Project Evaluation -->
              <div class="col-md-4">
                <div class="box">
                  <div class="icon">
                    <i class="ico icon-circled icon-bgdanger icon-search icon-3x"></i>
                  </div>
                  <div class="text">
                    <h4><p>Community Research & Project Evaluation</p></h4>
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
              <div class="col-md-4">
                <div class="box">
                  <div class="icon">
                    <i class="ico icon-circled icon-bglight icon-cogs icon-3x"></i>
                  </div>
                  <div class="text">
                    <h4><p>Technological Solutions</p></h4>
                    <p>
                      Providing cutting-edge tech solutions to optimize your business operations.
                    </p>
                    <a href="#">Learn More</a>
                  </div>
                </div>
              </div>
    
              <!-- Service 5: Training and Capacity Building -->
              <div class="col-md-4">
                <div class="box">
                  <div class="icon">
                    <i class="ico icon-circled icon-bgsuccess icon-briefcase icon-3x"></i>
                  </div>
                  <div class="text">
                    <h4><p>Training & Capacity Building</p></h4>
                    <p>
                      Our training programs help enhance skills and build p professional capacities.
                    </p>
                    <a href="#">Learn More</a>
                  </div>
                </div>
              </div>
    
              <!-- Service 6: Institutional Development -->
              <div class="col-md-4">
                <div class="box">
                  <div class="icon">
                    <i class="ico icon-circled icon-bgdark icon-building icon-3x"></i>
                  </div>
                  <div class="text">
                    <h4><p>Institutional Development</p></h4>
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
              <div class="col-md-4">
                <div class="box">
                  <div class="icon">
                    <i class="ico icon-circled icon-bgdanger icon-cogs icon-3x"></i>
                  </div>
                  <div class="text">
                    <h4><p>Implementation of Development Projects</p></h4>
                    <p>
                      We specialize in executing development projects from concept to completion.
                    </p>
                    <a href="#">Learn More</a>
                  </div>
                </div>
              </div>
    
              <!-- Service 8: Economic Development -->
              <div class="col-md-4">
                <div class="box">
                  <div class="icon">
                    <i class="ico icon-circled icon-bgprimary icon-money icon-3x"></i>
                  </div>
                  <div class="text">
                    <h4><p>Economic Development</p></h4>
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