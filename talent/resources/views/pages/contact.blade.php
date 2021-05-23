@extends('layouts.masterPage')
@section('contant')
<!--==================================================================== 
            Start Page Banner Section
        =====================================================================-->
<section class="page-banner overlay">
  <div class="container">
    <div class="banner-inner">
      <h2 class="wow fadeInUp" data-wow-duration="1.5s">Contact Us.</h2>
      <nav aria-label="breadcrumb" class="wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.3s">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Contact</li>
        </ol>
      </nav>
    </div>
  </div>
</section>
<!--==================================================================== 
            End Page Banner Section
        =====================================================================-->


<!--==================================================================== 
            Start Get In Touch Section
        =====================================================================-->
<section class="get-in-touch py-150 rpy-100">
  <div class="container">
    <div class="row">
      <div class="col-lg-4">
        <div class="contact-sidebar">
          {{-- <div class="sidebar-widget bg-snow">
            <h3>Location: 01</h3>
            <ul>
              <li>
                <div class="left-icon">
                  <i class="fas fa-map-marker-alt"></i>
                </div>
                <div class="right-content">
                  61 South Big Rock Cove Zurich, Villad 60047
                </div>
              </li>
              <li>
                <div class="left-icon">
                  <i class="fas fa-phone-alt"></i>
                </div>
                <div class="right-content">
                  <a href="callto:+88999666444">+88-999-666-444</a><br>
                  <a href="callto:+88888555777">+88-888-555-777</a>
                </div>
              </li>
              <li>
                <div class="left-icon">
                  <i class="fa fa-envelope"></i>
                </div>
                <div class="right-content">
                  <a href="mailto:info@domain.com">info@domain.com</a><br>
                  <a href="mailto:support@domain.com">support@domain.com</a>
                </div>
              </li>
            </ul>
          </div> --}}
          <div class="sidebar-widget bg-black text-white">
            <h3>Location: 01</h3>
            <ul>
              <li>
                <div class="left-icon">
                  <i class="fas fa-map-marker-alt"></i>
                </div>
                <div class="right-content">
                  Amman – KHBP – Bldg. 23 – ZINC.
                </div>
              </li>
              <li>
                <div class="left-icon">
                  <i class="fas fa-phone-alt"></i>
                </div>
                <div class="right-content">
                  <a href="callto:+962788076981">+962 7 8807 6981</a><br>
                  <a href="callto:+962788076981">+962 7 8807 6981</a>
                </div>
              </li>
              <li>
                <div class="left-icon">
                  <i class="fa fa-envelope"></i>
                </div>
                <div class="right-content">
                  <a href="mailto: jordanian.talent@gmail.com"> jordanian.talent@gmail.com</a><br>
                  {{-- <a href="mailto:support@domain.com">support@domain.com</a> --}}
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-lg-8">
        <div class="section-title">
          <h2>Get In <span>Touch.</span></h2>
        </div>
        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in som form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of hidden in the middle of text.</p>

        @if ($message = Session::get('success'))
					<p class="alert alert-success">
						{{ $message }}
					</p>
				@endif
        <form id="call-back-form" class="call-back-form" name="call-back-form" action="contact" method="post">
          {{ csrf_field() }}
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
          <div class="form-group mb-0 text-center">
            <button class="theme-btn" type="submit">Submit Now <i class="fas fa-arrow-right"></i></button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
<!--==================================================================== 
            End Get In Touch Section
        =====================================================================-->


<!--==================================================================== 
            Start Map Section
        =====================================================================-->
<div class="contact-map pb-150 rpb-100">
  <div class="container">
    <div class="map-inner">
      <div class="map" id="map"></div>
    </div>
  </div>
</div>
<!--==================================================================== 
            End Map Section
        =====================================================================-->


<!--==================================================================== 
            Start Call To Action Section
        =====================================================================-->
<section class="cta-section bg-orange pt-130 rpt-80 pb-135 rpb-100">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-8">
        <div class="cta-text wow fadeInUp rmb-25" data-wow-duration="2s">
          {{-- <h3>You Want To Work With Best Consulting Solutions Company?</h3> --}}
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
<!--==================================================================== 
            End Call To Action Section
        =====================================================================-->

@endsection