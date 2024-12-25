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
                <span>
                  <h5>Innovative Solutions</h5>
                  <p>Tailored strategies to drive growth and sustainability.</p>
                </span>
              </div>
              <div class="feature-item">
                <i class="icon-sitemap"></i>
                <span>
                  <h5>Community Focused</h5>
                  <p>Empowering communities with impactful initiatives.</p>
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>  

  <!-- Photo and Video Gallery Section -->
  <section id="gallery" style="padding: 50px 0; background-color: #f9f9f9;">
    <div class="container">
        <div class="section-title text-center" style="margin-bottom: 30px;">
            <h2 style="font-size: 2.5rem; font-weight: bold; color: #333;">Our Gallery</h2>
            <p style="font-size: 1rem; color: #666;">Explore our collection of photos and videos showcasing our work and events</p>
        </div>
        <div class="row">
            <!-- Photo Gallery Link -->
            <div class="col-md-6">
                <a href="{{ route('image-gallery') }}" class="d-block">
                    <div class="gallery-item position-relative mt-3">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQkdPFA6r_IbzQJcyXrKT5TSritv0S_iWwFmw&s" class="img-fluid" alt="Photo Gallery">
                        <div class="overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.6); color: #fff; display: flex; align-items: center; justify-content: center; font-size: 1.5rem;">
                            <h2>Photo Gallery</h2>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Video Gallery Link -->
            <div class="col-md-6">
                <a href="{{ route('video-gallery') }}" class="d-block">
                    <div class="gallery-item position-relative mt-3">
                        <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/
                    2wCEAAkGBxMSEhUSExMVFRUXFxcVFxgWFRUVFRYVFxUXFxUWFRUYHSggGRolGxUVITEhJSkrLi4uFx8zODMtNygtLisBCgoKDg0OGhAQGy
                    8lICUtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS8tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLf/AABEIAKMBNgMBIgACEQEDEQH/
                    xAAcAAABBQEBAQAAAAAAAAAAAAAFAAIDBAYBBwj/xABEEAACAAQEAggDBQYEBQUBAAABAgADBBEFEiExQVEGEyJhcYGRoTKx8AdSgsHRFCNCc
                    uHxM2KSwiRjc6KyNENEk7MV/8QAGgEAAgMBAQAAAAAAAAAAAAAAAgMAAQQFBv/EADERAAICAQMDAgIKAgMAAAAAAAABAhEDEiExBBNBIlFh
                    cQUUMjOBkaHR8PEjsUJSwf/aAAwDAQACEQMRAD8A9fEPEMWHiIWSqYcWiMGHRCEqmOxDeHI0UUdZIbaJC0Ru0WQeoh9oiBhwMQhIBCJhl45aIQ
                    60MivW4gkodo68uMZHGeku4BsOQ/OHYsEsnAjN1MMXLNJiOMJL0Gp9ow2K4/nckm6qCe7SAGI46TfXgYzU/EiZba6sSPIR0MeGGL5nLy5smfjZ
                    HcaxAmU7X7U2Zr4DW3uIC1M2wlj7qk/iYnX0jmIT9JS+LHxJ/QCKNTNLOSeVv0gMk9x+LHS/P9iWfOMwqo0UDQe5J7zuYmUXIX+Fd/zMRyEsCe
                    PGHHQBRudT4cB9d0CvdhuuEPz3JY7Dh8hHAeJhpN9OA9zxjt/Tj+kRkRMh/pFmU0VEPGLMswLGIMYfNsRHt3Rau66mRuKjIfFdva0eD0rx6h9m
                    OIdppJPxDMPFd/Yn0heWOqHyDxy0zN/DTEhENjIa7OBYasPvDRFMiOwoUdiixpgJilPreDltYpYgoiqstOmBWFoG1bawQqmgLUTNYWxyQ2cLiA
                    lckaALcQFxMWimWgCfihRwv2oUUEe5ARMghiiJFjSYxMI6DHDCiEOkw1oRMcY3iiEitDHOsdyRWqa+VK1dwPc+kWot7IpyUVbLIJhEmM5WdMZQ
                    BMsA23Zmso9IGzekM1tWmhV37IA8hfX1jRHpMj+Bml1uKPG5sJ1YqbnXlxgDi3Sewsmnfx/tGPxTpFuqaDiSdT4njGarcWJ43vGvH0kY7yMeXr
                    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" class="img-fluid" alt="Video Gallery">
                        <div class="overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.6); color: #fff; display: flex; align-items: center; justify-content: center; font-size: 1.5rem;">
                            <h2>Video Gallery</h2>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
  </section>


  <section id="content">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="title-container">
              <h3 class="title">Our <strong>Services</strong></h3>
            </div>
            <div class="row">
              <!-- Service 1: Website -->
              <div class="col-md-4 mt-4">
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
              <div class="col-md-4 mt-4">
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
              <div class="col-md-4 mt-4">
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
              <div class="col-md-4 mt-4">
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
              <div class="col-md-4 mt-4">
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
              <div class="col-md-4 mt-4">
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
              <div class="col-md-4 mt-4">
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
              <div class="col-md-4 mt-4">
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
        <div class="col-md-12">
          <div class="title-container">
            <h3 class="title">Recent <strong>Works</strong></h3>
          </div>
          <div class="row">
            <div class="grid cs-style-4 d-flex">
              <div class="col-md-3 m-3">
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
              <div class="col-md-3 m-3">
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
              <div class="col-md-3 m-3">
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
              <div class="col-md-3 m-3">
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