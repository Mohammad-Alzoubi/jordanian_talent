@extends('layouts.masterPage')
@section('contant')

<!--==================================================================== 
            Start Page Banner Section
=====================================================================-->
<section class="page-banner overlay">
    <div class="container">
        <div class="banner-inner">
            <h2 class="wow fadeInUp" data-wow-duration="1.5s">Case Details</h2>
            <nav aria-label="breadcrumb" class="wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.3s">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Case</li>
                </ol>
            </nav>
        </div>
    </div>
</section>
<!--==================================================================== 
            End Page Banner Section
        =====================================================================-->


<!--==================================================================== 
            Start Case Details Section
        =====================================================================-->
<section class="case-details pt-150 rpt-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="case-sidebar">
                    <div class="sidebar-widget information-widget bg-snow">
                        <h3>Case Information<span>.</span></h3>
                        <ul>
                            <li><span>Clients </span> Marian Crant</li>
                            <li><span>Category </span> Data Management</li>
                            <li><span>Date </span> 22 August 2021</li>
                            <li><span>Website </span> <a href="https://www.domain.com/">www.domain.com</a></li>
                            <li><span>Location </span> U598, USA.</li>
                            <li><span>Duration </span> 04 months.</li>
                        </ul>
                    </div>
                    <div class="sidebar-widget contact-widget text-center bg-black">
                        <p>WE ARE READY.</p>
                        <h3>How Can We Help You?</h3>
                        <a href="contact.html" class="theme-btn">Contact Now <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="case-details-content">
                    <div class="case-gallery">
                        <div class="tab-content" id="img-gallery">
                            <div class="tab-pane" id="tab1" role="tabpanel" aria-labelledby="tab-01">
                                <figure>
                                    <img src="assets/images/cases/case-details2.jpg" alt="Case Details Image">
                                </figure>
                            </div>
                            <div class="tab-pane fade fade show active" id="tab2" role="tabpanel" aria-labelledby="tab-02">
                                <figure>
                                    <img src="assets/images/cases/case-details1.jpg" alt="Case Details Image">
                                </figure>
                            </div>
                            <div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="tab-03">
                                <figure>
                                    <img src="assets/images/cases/case-details2.jpg" alt="Case Details Image">
                                </figure>
                            </div>
                            <div class="tab-pane fade" id="tab4" role="tabpanel" aria-labelledby="tab-04">
                                <figure>
                                    <img src="assets/images/cases/case-details1.jpg" alt="Case Details Image">
                                </figure>
                            </div>
                        </div>
                        <ul class="case-gallery-list nav" id="case-images" role="tablist">
                            <li>
                                <a id="tab-01" data-toggle="tab" href="#tab1" role="tab" aria-controls="tab1" aria-selected="true">
                                    <figure>
                                        <img src="assets/images/cases/thumb2.jpg" alt="Case Thumb Image">
                                    </figure>
                                </a>
                            </li>
                            <li>
                                <a class="active" id="tab-02" data-toggle="tab" href="#tab2" role="tab" aria-controls="tab2" aria-selected="false">
                                    <figure>
                                        <img src="assets/images/cases/thumb1.jpg" alt="Case Thumb Image">
                                    </figure>
                                </a>
                            </li>
                            <li>
                                <a id="tab-03" data-toggle="tab" href="#tab3" role="tab" aria-controls="tab3" aria-selected="false">
                                    <figure>
                                        <img src="assets/images/cases/thumb3.jpg" alt="Case Thumb Image">
                                    </figure>
                                </a>
                            </li>
                            <li>
                                <a id="tab-04" data-toggle="tab" href="#tab4" role="tab" aria-controls="tab4" aria-selected="false">
                                    <figure>
                                        <img src="assets/images/cases/thumb4.jpg" alt="Case Thumb Image">
                                    </figure>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="section-title">
                        <h2>Planning & <span>Management</span></h2>
                    </div>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in som form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All th Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary. It uses a dictionary of over 200 Latin words, combined with a handful of model sentenc structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always fre from repetition, injected humour, or non-characteristic words etc.</p>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in som form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All th Lorem Ipsum generators on the Internet tend to repea.</p>
                    <div class="case-middle">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="middle-content">
                                    <h3>Legal Strategy</h3>
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in som form, by injected humour, or randomised words which don't look even slightly believable. You need to be sure there isn't anything embarrassing hidden in the middle of text. All th Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.</p>
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in som form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="middle-image">
                                    <img src="assets/images/cases/case-middle.jpg" alt="Case Middle Image">
                                </div>
                            </div>
                        </div>
                    </div>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in som form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All th Lorem Ipsum generators on the Internet tend to repea.</p>
                    <h3>Case Result/Implication.</h3>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in som form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All th Lorem Ipsum generators on the Internet tend to repeat.</p>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in som form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All th Lorem Ipsum generators on the Internet tend to repeat.</p>
                    <div class="prev-next-area">
                        <div class="row">
                            <div class="col-sm-6">
                                <a class="prev-next-btn prev-btn wow fadeInUp" data-wow-duration="2s" href="case-details.html"><span>Previous.</span></a>
                            </div>
                            <div class="col-sm-6">
                                <a class="prev-next-btn next-btn wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.3s" href="case-details.html"><span>Next.</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--==================================================================== 
            End Case Details Section
        =====================================================================-->


<!--==================================================================== 
            Star Related Cases Section
        =====================================================================-->
<section class="related-cases pt-140 rpt-90 pb-150 rpb-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section-title text-center mb-80 wow fadeInUp" data-wow-duration="2s">
                    <h2>Related Cases</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-sm-6">
                <div class="case-item wow fadeInUp" data-wow-duration="2s">
                    <div class="case-image">
                        <img src="assets/images/cases/case1.jpg" alt="Case Image">
                        <a href="case-details.html"><i class="fas fa-angle-double-right"></i></a>
                    </div>
                    <div class="case-content">
                        <span>HOME / LAND</span>
                        <h4><a href="case-details.html">Mortgage Advisor</a></h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="case-item wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.3s">
                    <div class="case-image">
                        <img src="assets/images/cases/case2.jpg" alt="Case Image">
                        <a href="case-details.html"><i class="fas fa-angle-double-right"></i></a>
                    </div>
                    <div class="case-content">
                        <span>BUSINESS SOLUTION</span>
                        <h4><a href="case-details.html">Online Consulting</a></h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="case-item wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.5s">
                    <div class="case-image">
                        <img src="assets/images/cases/case3.jpg" alt="Case Image">
                        <a href="case-details.html"><i class="fas fa-angle-double-right"></i></a>
                    </div>
                    <div class="case-content">
                        <span>CORPORATE SERVICES</span>
                        <h4><a href="case-details.html">Planning & Management</a></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--==================================================================== 
            End Related Cases Section
        =====================================================================-->


<!--==================================================================== 
            Start Call To Action Section
        =====================================================================-->
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
                    <a href="contact.html" class="theme-btn">Contact Now <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--==================================================================== 
            End Call To Action Section
=====================================================================-->

@endsection