@extends('layouts.masterPage')
@section('contant')
            {{-- Start Page Banner Section --}}
<section class="page-banner overlay">
    <div class="container">
        <div class="banner-inner">
            <h2 class="wow fadeInUp" data-wow-duration="1.5s">404_Error</h2>
            <nav aria-label="breadcrumb" class="wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.3s">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Pages</li>
                </ol>
            </nav>
        </div>
    </div>
</section>
{{-- ====================================================================  --}}
            {{-- End Page Banner Section --}}

            {{-- Start Error Page Section --}}
<section class="error-section pt-200 rpt-100 pb-185 rpb-85">
    <div class="container">
        <div class="error-image text-center">
            <img src="{{asset('assets/images/error-page/404-error.png')}}" alt="Error Image">
        </div>
        <div class="error-content">
            <div class="content-left wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.3s">
                <h2>Sorry!</h2>
                <h3>This Page Is Not Found.</h3>
            </div>
            <div class="content-right wow fadeInUp" data-wow-duration="1.5s">
                <a href="{{asset('/')}}" class="theme-btn"><i class="fas fa-arrow-left"></i> Back To Home</a>
            </div>
        </div>
    </div>
</section>
            {{-- End Error Page Section --}}

            {{-- Start Call To Action Section --}}
<section class="cta-section bg-orange pt-130 rpt-80 pb-135 rpb-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <div class="cta-text wow fadeInUp rmb-25" data-wow-duration="2s">
                    <h3>You Want To Work With Best Consulting Solutions Company?</h3>
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
@endsection