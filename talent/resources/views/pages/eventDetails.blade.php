@extends('layouts.masterPage')
@section('contant')

            {{-- Start Page Banner Section --}}
<section class="page-banner overlay">
  <div class="container">
    <div class="banner-inner">
      <h2 class="wow fadeInUp" data-wow-duration="1.5s">Event</h2>
      <nav aria-label="breadcrumb" class="wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.3s">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">event</li>
        </ol>
      </nav>
    </div>
  </div>
</section>
            {{-- End Page Banner Section --}}

            {{-- Start Event Details Section --}}
<section class="service-details pt-140 pb-150 rpt-90 rpb-100">
  <div class="container">
    <div class="row">
      <div class="col-lg-8">
        <div class="service-details-content">
          <div class="section-title">
            <h2>{{$event->title_event}} <span>Event.</span></h2>
          </div>
          {{-- <p>{{$event->description_event}}</p> --}}
          <div class="details-image">
            <img src="{{asset("images/".$event->image)}}" alt="Event Details Image">
          </div>
          <br><br>
          <p>{{$event->description_event}}</p>
          <br>


          <h3>Helping Business Owners.</h3>
          <p>There are many The generated Lorem Ipsum is therefore always fre from repetition, injected humour, or non-characteristic words etc.</p>
          {{-- <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in som form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All th Lorem Ipsum generators on the Internet tend to repea.</p>
          <h3>Business Iformation & Advice.</h3>
          <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in som form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All th Lorem Ipsum generators on the Internet tend to repeat.</p>
          <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in som form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All th Lorem Ipsum generators on the Internet tend to repeat.</p>
          <h3>Contract Review & Development.</h3>
          <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in som form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All th Lorem Ipsum generators on the Internet tend to repeat.</p> --}}

          {{-- <div class="prev-next-area">
            <div class="row">
              <div class="col-sm-6">
                <a class="prev-next-btn prev-btn wow fadeInUp" data-wow-duration="2s" href="service-details.html"><span>Previous.</span></a>
              </div>
              <div class="col-sm-6">
                <a class="prev-next-btn next-btn wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.3s" href="service-details.html"><span>Next.</span></a>
              </div>
            </div>
          </div> --}}

        </div>
      </div>
      <div class="col-lg-4">
        <div class="service-sidebar">

          {{-- <div class="sidebar-widget service-widget">
            <h3>Our Services</h3>
            <ul>
              <li><a href="service-details.html">Investment Advisor</a></li>
              <li><a href="service-details.html">Business Consulting</a></li>
              <li><a href="service-details.html">Lawyer Consulting</a></li>
              <li><a href="service-details.html">Planning & Management</a></li>
            </ul>
          </div> --}}

          <div class="sidebar-widget contact-widget text-center bg-snow">
            <p>WE ARE READY.</p>
            <h3>How Can We Help You?</h3>
            <a href="{{asset('contact')}}" class="theme-btn">Contact Now <i class="fas fa-arrow-right"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
            {{-- End Event Details Section --}}


            {{-- Start Call To Action Section --}}
        <section class="cta-section bg-snow pt-130 rpt-80 pb-135 rpb-100">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-lg-8">
                <div class="cta-text wow fadeInUp rmb-25" data-wow-duration="2s">
                  {{-- <h3>You Want To Work With Best Consulting<span> Solutions Company?</span></h3> --}}
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

            {{-- Start AboutUs Section --}}
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
                    <img src="{{asset('assets/images/testimonials/team1.jpg')}}" alt="Reviewed By">
                  </div>
                  <div class="textimonial-content">
                    <p>The jordanian Talent Project family, a Jordanian youth group, seeks to attract talents in remote areas and gover norates, 
                      develop their capabilites, direct them, and netword them, in addition to supporting and exploiting them, in the development of the Jordanian society.</p>
                    <div class="reviewer">
                      <h3>Hamza Aloufee</h3>
                      <span>Project Founder</span>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </section>
            {{-- End AboutUs Section --}}
@endsection