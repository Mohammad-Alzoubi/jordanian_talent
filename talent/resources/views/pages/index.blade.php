@extends('layouts.masterPage')
@section('contant')

<section class="hero-section overlay">
  <div class="container">
    <div class="hero-inner">
      <span class="sub-title wow fadeInUp" data-wow-duration="1s">SINCE 2020.</span>
      <h1><span class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">The</span><br>
        <span class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">Jordanian</span><br>
        <span class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.8s">Talent</span>
      </h1>
      <a href="{{asset('contact')}}" class="theme-btn wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s">Free Appoinment <i class="fas fa-arrow-right"></i></a>
    </div>
  </div>
</section>





                {{-- End Hero Section --}}


                {{-- Start Our Success Section --}}
<div class="our-success pb-30 rpb-0 wow fadeInUp" data-wow-duration="2s">
  <div class="container">
    <div class="success-wrap bg-orange">
      <div class="row">
        <div class="col-xl-3 col-lg-6 col-md-6">
          <div class="success-item">
            <div class="success-icon">
              <i class="flaticon-people"></i>
            </div>
            <div class="success-content">
              <span class="count-text" data-speed="2500" data-stop="568">0</span>
              <p>Happy Client</p>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6">
          <div class="success-item">
            <div class="success-icon">
              <i class="flaticon-edit"></i>
            </div>
            <div class="success-content">
              <span class="count-text" data-speed="2500" data-stop="894">0</span>
              <p>Complete Case</p>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6">
          <div class="success-item">
            <div class="success-icon">
              <i class="flaticon-computer"></i>
            </div>
            <div class="success-content">
              <span class="count-text" data-speed="2500" data-stop="860">0</span>
              <p>Guides Given</p>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6">
          <div class="success-item">
            <div class="success-icon">
              <i class="flaticon-review"></i>
            </div>
            <div class="success-content">
              <span class="count-text" data-speed="2500" data-stop="34">0</span>
              <p>Winning Awards</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
                {{-- End Our Success Section --}}
            

                {{-- Start About Us Section --}}
<section class="about-us pb-150 rpb-100">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6">
        <div class="about-image rmb-50">
          <img class="wow fadeInBottomLeft" data-wow-duration="2s" src="{{asset('assets/images/about/about.jpg')}}" alt="About Image">
          <div class="about-border"></div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="about-content">
          <div class="section-title mb-25 wow fadeInUp" data-wow-duration="2s">
            <h2>Jordanian Talent<br><span>Our mission.</span></h2>
          </div>

          <i style="font-size: 1.5rem;" class="wow fadeInUp" data-wow-duration="2s" >Our mission is to convert passionate people with talents to success stories that will enlighten the community they live in.</i>

          <a href="{{asset('about')}}" class="theme-btn wow fadeInUp" data-wow-duration="2s">Explore More <i class="fas fa-arrow-right"></i></a>
        </div>
      </div>
    </div>
  </div>
</section>
                {{-- End About Us Section --}}
{{-- =============================================================== --}}
                {{-- Start Event Section --}}
<section class="services-section bg-snow pt-140 rpt-90 pb-110 rpb-60">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-7 col-md-8">
        <div class="section-title text-center mb-80 wow fadeInUp" data-wow-duration="2s">
          <h2>Events Jordanian Talent</h2>
          <p>Events about Jordanian Talent</p>
        </div>
      </div>
    </div>
    <div class="row">
      @foreach ($events as $event)
        <div class="col-lg-4 col-md-6">
          <div class="service-item wow fadeInUp" data-wow-duration="2s">
            <a href="eventDetails/{{$event->id}}">
              <div class="service-icon d-flex">
                  <img style="width: 100%" src="{{asset("images/".$event->image)}}" alt="Services">
                  {{-- <a href="service-details.html" class="ml-auto"><i class="fas fa-angle-double-right"></i></a> --}}
              </div>
            </a>
            <div class="service-content">
              <h4><a href="eventDetails/{{$event->id}}">{{$event->title_event}}</a></h4>
              <p>{{$event->description_event}}</p>
            </div>
            <p style="float: right; margin-top:10px">Date: {{$event->date_event}}</p>
          </div>
        </div>
      @endforeach



{{-- ********************************************************************************* --}}
<div class="separetor wow fadeInUp" data-wow-duration="2s"></div>
{{-- ********************************************************************************* --}}

      @foreach ($l_event as $event)
        <div class="col-lg-4 col-md-6">
          <div class="service-item wow fadeInUp" data-wow-duration="2s">
            <a href="eventDetails/{{$event->id}}">
              <div class="service-icon d-flex">
                  <img style="width: 100%" src="{{asset("images/".$event->image)}}" alt="Services">
              </div>
            </a>
            <div class="service-content">
              <h4><a href="eventDetails/{{$event->id}}">{{$event->title_event}}</a></h4>
              <p>{{$event->description_event}}</p>
            </div>
            <p style="float: right; margin-top:10px">Date: {{$event->date_event}}</p>
          </div>
        </div>
      @endforeach

    </div>
  </div>
</section>
                {{-- End Event Section --}}

{{-- =========================================================================================  --}}

                {{-- Start News Section --}}
<section class="services-section bg-snow pt-140 rpt-90 pb-110 rpb-60">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-7 col-md-8">
        <div class="section-title text-center mb-80 wow fadeInUp" data-wow-duration="2s">
          <h2> News Jordanian Talent</h2>
          <p>News about Jordanian Talent</p>
        </div>
      </div>
    </div>

    <div class="row">

      @foreach ($news as $new)
      <div class="col-lg-4 col-md-6">
        <div class="service-item wow fadeInUp" data-wow-duration="2s">
          <a href="newsDetails/{{$new->id}}">
            <div class="service-icon d-flex">
                <img style="width: 100%" src="{{asset("images/".$new->image)}}" alt="Services">
                {{-- <a href="service-details.html" class="ml-auto"><i class="fas fa-angle-double-right"></i></a> --}}
            </div>
          </a>
          <div class="service-content">
            <h4><a href="newsDetails/{{$new->id}}">{{$new->title_news}}</a></h4>
            <p>{{$new->description_news}}</p>
          </div>
          <p style="float: right; margin-top:10px">Date: {{$new->date_news}}</p>
        </div>
      </div>
    @endforeach


      <div class="separetor wow fadeInUp" data-wow-duration="2s"></div>

      @foreach ($l_news as $new)
      <div class="col-lg-4 col-md-6">
        <div class="service-item wow fadeInUp" data-wow-duration="2s">
          <a href="service-details.html">
            <div class="service-icon d-flex">
                <img style="width: 100%" src="{{asset("images/".$new->image)}}" alt="Services">
                {{-- <a href="service-details.html" class="ml-auto"><i class="fas fa-angle-double-right"></i></a> --}}
            </div>
          </a>
          <div class="service-content">
            <h4><a href="service-details.html">{{$new->title_news}}</a></h4>
            <p>{{$new->description_news}}</p>
          </div>
          <p style="float: right; margin-top:10px">Date: {{$new->date_news}}</p>
        </div>
      </div>
    @endforeach


    </div>
  </div>
</section>

                {{-- End Service Section --}}

                {{-- Star Partners Section --}}
            
<section class="partners-section pt-135 rpt-85 pb-145 rpb-130">
  <div class="container">
    <div class="row">
      <div class="col-xl-4">
        <div class="section-title wow fadeInUp" data-wow-duration="2s">
          <h2>Our Trusted<br> Partners.</h2>
        </div>
      </div>
      <div class="col-xl-8">
        <div class="partner-wrap">
          <div class="partner-item">
            <img src="{{asset('assets/images/partners/partner1.png')}}" alt="Partner Image">
          </div>
          <div class="partner-item">
            <img src="{{asset('assets/images/partners/partner2.png')}}" alt="Partner Image">
          </div>
          <div class="partner-item">
            <img src="{{asset('assets/images/partners/partner3.png')}}" alt="Partner Image">
          </div>
          <div class="partner-item">
            <img src="{{asset('assets/images/partners/partner4.png')}}" alt="Partner Image">
          </div>
          <div class="partner-item">
            <img src="{{asset('assets/images/partners/partner2.png')}}" alt="Partner Image">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

                {{-- End Partners Section --}}


                {{-- Star Cases Section --}}
            
<section class="cases-section bg-black pt-140 rpt-90 pb-150 rpb-100">
  <div class="container">
  </div>
</section>
                {{-- End Cases Section --}}

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
        <img src="{{asset('assets/images/team/team2.jpg')}}" alt="Team Image">
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
        <img src="{{asset('assets/images/team/team3.jpg')}}" alt="Team Image">
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
<!--==================================================================== 
                End Team Section
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

@endsection

