@extends('layouts.front')
@section('content')
@if(Session::has('email_varify'))
    <script>swal('{{ Session::get("title") }}', '{{ Session::get("email_varify") }}', '{{ Session::get("type") }}')</script>
@endif
<!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up">Get connected with the <br>Best Professionals</h1>
          <h2 data-aos="fade-up" data-aos-delay="400">Are you a proffesional ?</h2>
          <div data-aos="fade-up" data-aos-delay="600">
            <div class="text-center text-lg-start">
              <a href="#about" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                <span>Get Started</span>
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
          <img src="{!! asset('img/hero-img.png') !!}" class="img-fluid" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">
    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="bi bi-emoji-smile"></i>
              <div>
                <p>Accountants</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="bi bi-journal-richtext" style="color: #ee6c20;"></i>
              <div>
                <p>Lawyer</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="bi bi-headset" style="color: #15be56;"></i>
              <div>
                <p>Financial Advisor</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="bi bi-people" style="color: #bb0852;"></i>
              <div>
                <p>Consultant</p>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">

      <div class="container" data-aos="fade-up">        

        <div class="row">

          <div class="col-lg-6 mt-5 mt-lg-0">
            <header class="section-header-left">
          <h3>A Simple Process</h3>
           </header>
            <div class="row align-self-center gy-4">

              <div class="col-md-12" data-aos="zoom-out" data-aos-delay="200">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-check"></i>
                  <h3>Tell us what you need: Fill out the form, call us or email us. A member of our team will confirm your need.</h3>
                </div>
              </div>

              <div class="col-md-12" data-aos="zoom-out" data-aos-delay="300">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-check"></i>
                  <h3>Receive 3 Quotes, Choose your favourite professional:A member of our team will provide you with the best professional and arrange interviews, the final choice is all yours.</h3>
                </div>
              </div>

              <div class="col-md-12" data-aos="zoom-out" data-aos-delay="400">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-check"></i>
                  <h3>Start your project: Our member will assist your form beggining to end to make sure you are sattisfied.</h3>
                </div>
              </div>

            </div>
          </div>
          <div class="col-lg-6">
            <header class="section-header-left">
           <h3>Let us find your expert!</h3>
           </header>
            <img src="{!! asset('img/features.png') !!}" class="img-fluid" alt="">
          </div>

        </div> <!-- / row -->
</div>
</section>
<!-- ======= Values Section ======= -->
    <section id="values" class="values">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <p>Whats driving us</p>
        </header>

        <div class="row">
          <div class="col-lg-3 m-b-10">
            <div class="box" data-aos="fade-up" data-aos-delay="200">
              <img src="{!! asset('img/values-1.png') !!}" class="img-fluid" alt="">
              <h3>Equity</h3>
              <p>Notre nom l'indique, la balance est pour nous un vecteur.</p>
            </div>
          </div>

          <div class="col-lg-3 mt-4 mt-lg-0 m-b-10">
            <div class="box" data-aos="fade-up" data-aos-delay="400">
              <img src="{!! asset('img/values-2.png') !!}" class="img-fluid" alt="">
              <h3>Free Service</h3>
              <p>Ce service est gratuit pour les client</p>
            </div>
          </div>

          <div class="col-lg-3 mt-4 mt-lg-0 m-b-10">
            <div class="box" data-aos="fade-up" data-aos-delay="600">
              <img src="{!! asset('img/values-3.png') !!}" class="img-fluid" alt="">
              <h3>Techno</h3>
              <p>Notre plateforme (….)</p>
            </div>
          </div>

          <div class="col-lg-3 m-b-10">
            <div class="box" data-aos="fade-up" data-aos-delay="200">
              <img src="{!! asset('img/values-1.png') !!}" class="img-fluid" alt="">
              <h3>Trust</h3>
              <p>Processus de sélection strict</p>
            </div>
          </div>

        </div>

      </div>

    </section> <!--End Values Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts number-skale-solutions">
      <div class="container" data-aos="fade-up">
        <header class="section-header">
          <p>Skale Solutions in Numbers</p>
        </header>
        <div class="row gy-4">

          <div class="col-lg-4 col-md-6">
            <div class="count-box">
              <div>
                <span data-purecounter-start="0" data-purecounter-end="12500" data-purecounter-duration="1" class="purecounter"></span>
                <p>Independent Consultants and industry experts</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="count-box">
              <div>
                <span data-purecounter-start="0" data-purecounter-end="3000" data-purecounter-duration="1" class="purecounter"></span>
                <p>Projects completed in the past 5 years</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="count-box">
              <div>
                <span data-purecounter-start="0" data-purecounter-end="26" data-purecounter-duration="1" class="purecounter"></span>
                <p>Countries in which we've completed projects</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="count-box">
              <div>
                <span data-purecounter-start="0" data-purecounter-end="4.6" data-purecounter-duration="1" class="purecounter"></span>
                <p>Out 0f 5 as an average project evaluation score</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="count-box">
              <div>
                <span data-purecounter-start="0" data-purecounter-end="2.3" data-purecounter-duration="1" class="purecounter"></span>
                <p>of the DAX-30 companies work with us</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="count-box">
              <div>
                <span data-purecounter-start="0" data-purecounter-end="48" data-purecounter-duration="1" class="purecounter"></span>
                <p>Hours or less untill we send you a candidate proposal</p>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->
  </main><!-- End #main -->

  <footer id="footer" class="footer">
  <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-12 text-center">
            <h4>Our Newsletter</h4>
            <p>Are you ready to work with us? Let's grow your business.</p>
          </div>
          <div class="col-lg-6">
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
    </div>
  </footer>
@endsection
