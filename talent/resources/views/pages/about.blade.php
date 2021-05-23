@extends('layouts.masterPage')
@section('contant')

<!--==================================================================== 
            Start Page Banner Section
=====================================================================-->
<section class="page-banner overlay">
  <div class="container">
    <div class="banner-inner">
      <h2 class="wow fadeInUp" data-wow-duration="1.5s">About Us.</h2>
      <nav aria-label="breadcrumb" class="wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.3s">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">About</li>
        </ol>
      </nav>
    </div>
  </div>
</section>
<!--==================================================================== 
          End Page Banner Section
      =====================================================================-->


<!--==================================================================== 
          Start Vission Mission Section
      =====================================================================-->
<section class="vission-mission py-150 rpy-100">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <ul class="vission-tabs">
          <li class="wow fadeInUp" data-tab="tab_1" data-wow-duration="1.5s">
            <h3>Our Mission</h3>
          </li>
          <li class="active wow fadeInUp" data-tab="tab_2" data-wow-duration="1.5s" data-wow-delay="0.3s">
            <h3>Our Vission</h3>
          </li>
          <li class="wow fadeInUp" data-tab="tab_3" data-wow-duration="1.5s" data-wow-delay="0.5s">
            <h3>Our Goals</h3>
          </li>
        </ul>
      </div>
      <div class="col-lg-6">
        <div class="vission-content-wrap">
          <div id="tab_1" class="vission-tab-content">
            <div class="section-title">
              <h2>Jordanian Talent <span>Our Mission</span></h2>
            </div>
            <p style="font-size: 19px;">Knowledge is the basis for reforming societes. In this country we need more success stories, which are the pillar that contributes to evaluating the behaviour of the indevidual and society.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco aboris nisi ut aliquip ex ea commodo consequat in voluptate velit.</p>
            <div class="success-item bg-snow">
              <div class="icon-image">
                <img src="assets/images/services/icon2.png" alt="Success Icon Image">
              </div>
              <div class="success-content">
                <span class="count-text" data-speed="2500" data-stop="568">0</span>
                <h5>Complete Projects.</h5>
              </div>
            </div>
          </div>
          <div id="tab_2" class="vission-tab-content active">
            <div class="section-title">
              <h2>Jordanian Talent <span>Our Vission.</span></h2>
            </div>
            <p style="font-size: 19px;">Jordanian Your, ambitious, tolerant, leaders, at a high level of Positive and effective energy, keeping with technological and scientific progress, able to face challenges, able to think outside the box</p>

            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
            <div class="success-item bg-snow">
              <div class="icon-image">
                <img src="assets/images/about/icon.png" alt="Success Icon Image">
              </div>
              <div class="success-content">
                <span class="count-text" data-speed="2500" data-stop="890">0</span>
                <h5>Happy Customers.</h5>
              </div>
            </div>
          </div>
          <div id="tab_3" class="vission-tab-content">
            <div class="section-title">
              <h2>Jordanian Talent <span>Our Goals.</span></h2>
            </div>
            <p style="font-size: 19px;">Attracting, developin, directing and supporting talents, in addition to networking them, and creating passion in the hearts of young people , By cultivating motivation and behavioural values that help build societies, not destroy them, and social reform.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
            <div class="success-item bg-snow">
              <div class="icon-image">
                <img src="assets/images/services/icon6.png" alt="Success Icon Image">
              </div>
              <div class="success-content">
                <span class="count-text" data-speed="2500" data-stop="134">0</span>
                <h5>Winning Awards.</h5>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--==================================================================== 
          End Vission Mission Section
      =====================================================================-->

<!--==================================================================== 
          Start Call Back Section
      =====================================================================-->
<section class="call-back-section text-white py-150 rpt-90 rpb-100">
  <div class="call-back-shap"></div>
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="section-title wow fadeInUp" data-wow-duration="2s">
          <h2>Request A Call Back.</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do labore et dolore magna aliqua enim ad minim veniam.</p>
        </div>
      </div>
      <div class="col-lg-6">
        <form id="call-back-form" class="call-back-form" name="call-back-form" action="/contact" method="post">
          @csrf
          <div class="row clearfix">
            <div class="col-md-6">
              <div class="form-group">
                @if ($errors->has('name'))
										<div class="alert alert-danger">{{ $errors->first('name') }}</div>
                @endif
                <input type="text" name="name" class="form-control" value="" placeholder="Name Here" >
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                @if ($errors->has('email'))
										<div class="alert alert-danger">{{ $errors->first('email') }}</div>
                @endif
                <input type="email" name="email" class="form-control" value="" placeholder="Email Here" >
              </div>
            </div>

            <div class="col-md-12 mb-40">
              <div class="form-group">
                @if ($errors->has('message'))
                  <div class="alert alert-danger">{{ $errors->first('message') }}</div>
                @endif
                <textarea name="message" rows="7" class="form-control" placeholder="Text here..."></textarea>
              </div>
            </div>
          </div>
          <div class="form-group call-submit text-center">
            <button class="theme-btn" type="submit">Submit Now <i class="fas fa-arrow-right"></i></button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
          {{-- End Call Back Section --}}


          {{-- Start Team Section --}}
<section class="team-section pt-135 rpt-90 pb-90 rpb-40">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-xl-7 col-md-8">
        <div class="section-title text-center mb-80 wow fadeInUp" data-wow-duration="2s">
          <h2>Our Team Members</h2>
          <p>About Team of the Jordanian Talent</p>
        </div>
      </div>
    </div>
  </div>

  <div class="team-wrap">

    <div class="team-item wow fadeInUp" data-wow-duration="2s">
      <div class="item-image">
        <img src="{{asset('assets/images/team/team1.jpg')}}" alt="Team Image">
        <div class="social-style-two">
          <a href="https://web.facebook.com/hamza.aloufee.jo/"><i class="fab fa-facebook-f"></i></a>
          <a href="callto:+962788076981"><i class="fab fa-skype"></i></a>
          <a href="https://twitter.com/AloufeeHamza"><i class="fab fa-twitter"></i></a>
          <a href="https://www.linkedin.com/in/hamza-aloufee-b7b493198/"><i class="fab fa-linkedin-in"></i></a>
        </div>
      </div>
      <div class="team-desc">
        <h3>Hamza Aloufee</h3>
        <p>Project Founder</p>
      </div>
    </div>
    <div class="team-item wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.3s">
      <div class="item-image">
        <img src="assets/images/team/team2.jpg" alt="Team Image">
        <div class="social-style-two">
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-skype"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-pinterest-p"></i></a>
        </div>
      </div>
      <div class="team-desc">
        <h3>Novella Shrader</h3>
        <p>Mortgage Advisor</p>
      </div>
    </div>
    <div class="team-item wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.5s">
      <div class="item-image">
        <img src="assets/images/team/team3.jpg" alt="Team Image">
        <div class="social-style-two">
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-skype"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-pinterest-p"></i></a>
        </div>
      </div>
      <div class="team-desc">
        <h3>Winfred Locklear</h3>
        <p>Consulting Lawyer</p>
      </div>
    </div>


  </div>
</section>
          {{-- End Team Section --}}
          {{-- Start Call To Action Section --}}
<section class="cta-section bg-snow pt-130 rpt-80 pb-135 rpb-100">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-8">
        <div class="cta-text wow fadeInUp rmb-25" data-wow-duration="2s">
          <h3>You Want to work with the Best talent<span> development company?</span></h3>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="cta-btn wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.3s">
          <a href="{{asset('contact')}}" class="theme-btn">Contact Now <i class="fas fa-arrow-right"></i></a>
        </div>
      </div>
    </div>
  </div>
</section>
          {{-- End Call To Action Section --}}

          {{-- Start About Section --}}
<section class="testimonial-section pt-135 rpt-85 pb-150 rpb-100">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-xl-6 col-md-8 col-sm-9">
        <div class="section-title text-center mb-80 wow fadeInUp" data-wow-duration="2s">
          <h2><span>About Us!</span></h2>
          <p>About us the jordanian Talent</p>
        </div>
      </div>
    </div>
    <div class="testimonial-area">

      <div class="testimony-content">

        <div class="review-single active">
          <div class="textimonial-image">
            <img src="assets/images/testimonials/about.jpg" alt="Reviewed By">
          </div>
          <div class="textimonial-content">
            <p>The jordanian Talent Project family, a Jordanian youth group, seeks to attract talents in remote areas and gover norates, 
              develop their capabilites, direct them, and netword them, in addition to supporting and exploiting them, in the development of the Jordanian society.</p>
            {{-- <div class="reviewer">
              <h3>Hamza Aloufee</h3>
              <span>Project Founder</span>
            </div> --}}
          </div>
        </div>
        
      </div>
    </div>
  </div>
</section>
          {{-- End About Section --}}

@endsection