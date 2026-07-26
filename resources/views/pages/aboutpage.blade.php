@extends('app')

@section('title', 'Jolly Kitchen')

@section('content')




    <!-- Page Title -->
    <div class="page-title light-background">
      <div class="container d-lg-flex justify-content-between align-items-center">
        <h1 class="mb-2 mb-lg-0">About</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="index.html">Home</a></li>
            <li class="current">About</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- About 2 Section -->
    <section id="about-2" class="about-2 section">

      <div class="container" data-aos="fade-up">

        <div class="row g-4 g-lg-5" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-5">
            <div class="about-img">
              <img src="assets/img/hero-carousel/Screenshot team.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-7">
            <h3 class="pt-0 pt-lg-5">
              Jolly Kitchen is a premium event catering company  that has been there for 5  years and has provided quality  services to its clients.
            </h3>

            <!-- Tabs -->
            <ul class="nav nav-pills mb-3">
              <li><a class="nav-link active" data-bs-toggle="pill" href="#about-2-tab1">Who are we</a></li>
              <li><a class="nav-link" data-bs-toggle="pill" href="#about-2-tab2">Our Values</a></li>
              <li><a class="nav-link" data-bs-toggle="pill" href="#about-2-tab3">Our mission</a></li>
            </ul><!-- End Tabs -->

            <!-- Tab Content -->
            <div class="tab-content">

              <div class="tab-pane fade show active" id="about-2-tab1">

                <p class="fst-italic">
                  Jolly Kitchen is a premier catering and event Solutions Company based in Kitengela, Kenya. With over 5 years of experience, we specialize in delivering exceptional food, elegant event décor, and professional event support services for both private and corporate clients.
                </p>  
                
                <p class="fst-italic">
                 What sets us apart is our ability to provide all key event services under one roof — from catering and décor to catering equipment and utensils — saving our clients time, stress, and the cost of coordinating multiple vendors.
                </p>  

                <p class="fst-italic">
                  We are passionate about creating memorable experiences through quality food, beautiful event setups, and outstanding customer service. 
                </p>  
               
              </div><!-- End Tab 1 Content -->

              <div class="tab-pane fade" id="about-2-tab2">

                <p class="fst-italic">Our core values guide everything we do:</p>

                <div class="d-flex align-items-center mt-4">
                  <i class="bi bi-check2"></i>
                  <h4>Excellence in Every Detail</h4>
                </div>
                <p>From menu development to table setting, we hold ourselves to the highest standards of quality, presentation, and craftsmanship..</p>

                <div class="d-flex align-items-center mt-4">
                  <i class="bi bi-check2"></i>
                  <h4>Hygiene & Food Safety </h4>
                </div>
                <p>We follow strict food handling, preparation, and sanitation practices to protect the health and wellbeing of every guest we serve.</p>

                <div class="d-flex align-items-center mt-4">
                  <i class="bi bi-check2"></i>
                  <h4>Reliability</h4>
                </div>
                <p> We show up on time, fully equipped, and ready to deliver — for every event, of every size, without exception.</p>

                <div class="d-flex align-items-center mt-4">
                  <i class="bi bi-check2"></i>
                  <h4>Creativity</h4>
                </div>
                <p> We bring fresh ideas and thoughtful styling to every theme, transforming ordinary spaces into memorable settings</p>

                <div class="d-flex align-items-center mt-4">
                  <i class="bi bi-check2"></i>
                  <h4>Customer centered service</h4>
                </div>
                <p> We listen first, tailoring every menu, package, and setup to our clients’ vision, occasion, and budget.</p>

                <div class="d-flex align-items-center mt-4">
                  <i class="bi bi-check2"></i>
                  <h4>Integrity</h4>
                </div>
                <p> We do business honestly and transparently, building lasting relationships with every client and partner we work with.</p>



              </div><!-- End Tab 2 Content -->

              <div class="tab-pane fade" id="about-2-tab3">

                <p class="fst-italic">To be the leading all-in-one event solutions provider in Kenya — recognized for transforming weddings, celebrations, and corporate gatherings into seamless, beautifully executed experiences through exceptional food, inspired décor, and dependable, professional service. </p>

                
              </div><!-- End Tab 3 Content -->

            </div>

          </div>

        </div>

      </div>

    </section><!-- /About 2 Section -->

    
    

    <!-- Team Section -->
    <section id="team" class="team section">

      <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
          <h2>Our team</h2>        
        </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="team-member d-flex align-items-start">
              <div class="pic"><img src="assets/img/team/elizabeth.jpeg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Elizabeth Kamau</h4>
                <span>Founder</span>
                <p>Elizabeth is the visionary behind Jolly Kitchen, bringing her passion for culinary excellence and event planning to every project she undertakes.</p>
                <div class="social">                  
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""> <i class="bi bi-linkedin"></i> </a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="team-member d-flex align-items-start">
              <div class="pic"><img src="assets/img/team/Nimmo.png" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Wairimu</h4>
                <span>Chief Chef</span>
                <p>'Nimmo' is our lead chef with over 10 years of experience in creating delicious and innovative dishes for all occasions.</p>
                <div class="social">
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""> <i class="bi bi-linkedin"></i> </a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
            <div class="team-member d-flex align-items-start">
              <div class="pic"><img src="assets/img/team/team-3.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>William Anderson</h4>
                <span>CTO</span>
                <p>Quisquam facilis cum velit laborum corrupti fuga rerum quia</p>
                <div class="social">                  
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""> <i class="bi bi-linkedin"></i> </a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
            <div class="team-member d-flex align-items-start">
              <div class="pic"><img src="assets/img/team/team-4.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Amanda Jepson</h4>
                <span>Accountant</span>
                <p>Dolorum tempora officiis odit laborum officiis et et accusamus</p>
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""> <i class="bi bi-linkedin"></i> </a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->

        </div>

      </div>

    </section><!-- /Team Section -->

    

    <!-- Clients Section -->
    <section id="clients" class="clients section light-background">

      <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
          <h2>Clients</h2>
          <p>Check Out Our Clients<br></p>
        </div><!-- End Section Title -->

      <div class="container" >

        <div class="row gy-4">

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="assets/img/clients/fcm.png" class="img-fluid" alt="">
          </div><!-- End Client Item -->

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="assets/img/clients/hemms-bookshop.png" class="img-fluid" alt="">
          </div><!-- End Client Item -->

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="assets/img/clients/muthaiga-travel.png" class="img-fluid" alt="">
          </div><!-- End Client Item -->

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="assets/img/clients/client-4.png" class="img-fluid" alt="">
          </div><!-- End Client Item -->

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="assets/img/clients/client-5.png" class="img-fluid" alt="">
          </div><!-- End Client Item -->

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="assets/img/clients/client-6.png" class="img-fluid" alt="">
          </div><!-- End Client Item -->

        </div>

      </div>

    </section><!-- /Clients Section -->



     <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section">

     <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Clients</h2>
        <p>What Clients Say about us<br></p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="testimonial-item">
              <img src="assets/img/testimonials/alexander.png" class="testimonial-img" alt="">
              <h3>Alexander Walala</h3>
              <h4>Transporter</h4>
              <div class="stars">
                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
              </div>
              <p>
                <i class="bi bi-quote quote-icon-left"></i>
                <span>Jolly Kitchen Kitengela (Liz ) provided an outstanding catering experience for our event! The food was absolutely delicious, fresh, and beautifully presented. Every guest kept complimenting the flavors and the quality of the meals. You can really tell they take pride in what they do.
                  <i class="bi bi-quote quote-icon-right"></i>
              </p>
            </div>
          </div><!-- End testimonial item -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="testimonial-item">
              <img src="assets/img/testimonials/medak.png" class="testimonial-img" alt="">
              <h3>Medak</h3>
              <h4>Mechanic</h4>
              <div class="stars">
                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
              </div>
              <p>
                <i class="bi bi-quote quote-icon-left"></i>
                <span>I bought healthy drinks from Jolly kitchen and all I can say is that , my gut is happy .</span>
                <i class="bi bi-quote quote-icon-right"></i>
              </p>
            </div>
          </div><!-- End testimonial item -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
            <div class="testimonial-item">
              <img src="assets/img/testimonials/precious.png" class="testimonial-img" alt="">
              <h3>Precious Vessel</h3>
              <h4>Local business owner</h4>
              <div class="stars">
                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
              </div>
              <p>
                <i class="bi bi-quote quote-icon-left"></i>
                <span>They catered for a wedding at whispering palm garden last weekend the food was excellent.</span>
                <i class="bi bi-quote quote-icon-right"></i>
              </p>
            </div>
          </div><!-- End testimonial item -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
            <div class="testimonial-item">
              <img src="assets/img/testimonials/purity.png" class="testimonial-img" alt="">
              <h3>Purity Gacheri</h3>
              <h4>local business owner</h4>
              <div class="stars">
                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
              </div>
              <p>
                <i class="bi bi-quote quote-icon-left"></i>
                <span>Top notch service and delicious food!</span>
                <i class="bi bi-quote quote-icon-right"></i>
              </p>
            </div>
          </div><!-- End testimonial item -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="500">
            <div class="testimonial-item">
              <img src="assets/img/testimonials/nehemiah.png" class="testimonial-img" alt="">
              <h3>Nehemiah Amombo</h3>
              <h4>Entrepreneur</h4>
              <div class="stars">
                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
              </div>
              <p>
                <i class="bi bi-quote quote-icon-left"></i>
                <span>Five starts for top notch service </span>
                <i class="bi bi-quote quote-icon-right"></i>
              </p>
            </div>
          </div><!-- End testimonial item -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="600">
            <div class="testimonial-item">
              <img src="assets/img/testimonials/Bernard.png" class="testimonial-img" alt="">
              <h3>Bernard Mbogo N</h3>
              <h4>Entreprenuer</h4>
              <div class="stars">
                <i class="bi bi-star-fill"></i></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
              </div>
              <p>
                <i class="bi bi-quote quote-icon-left"></i>
                <span>Excellent customer service.</span>
                <i class="bi bi-quote quote-icon-right"></i>
              </p>
            </div>
          </div><!-- End testimonial item -->

        </div>

      </div>

    </section><!-- /Testimonials Section -->


  

@endsection