@extends('website.layout')
@section('content')
<!--====== PAGE BANNER PART START ======-->
    
<section id="page-banner" class="pt-105 pb-130 bg_cover" data-overlay="8" style="background-image: url(images/page-banner-6.jpg)">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-banner-cont">
                    <h2>Contact</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Contact</li>
                        </ol>
                    </nav>
                </div>  <!-- page banner cont -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>

<!--====== PAGE BANNER PART ENDS ======-->

<!--====== CONTACT PART START ======-->

<section id="contact-page" class="pt-90 pb-120 gray-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="contact-from">
                    <div class="section-title">
                        <h5>Contact Us</h5>
                        <h2>Keep in touch</h2>
                    </div> <!-- section title -->
                    <div class="main-form pt-45">
                        <form id="contact-form" action="#" method="post" data-toggle="validator">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="singel-form form-group">
                                        <input name="name" type="text" placeholder="Your name" data-error="Name is required." required="required">
                                        <div class="help-block with-errors"></div>
                                    </div> <!-- singel form -->
                                </div>
                                <div class="col-md-6">
                                    <div class="singel-form form-group">
                                        <input name="email" type="email" placeholder="Email" data-error="Valid email is required." required="required">
                                        <div class="help-block with-errors"></div>
                                    </div> <!-- singel form -->
                                </div>
                                <div class="col-md-6">
                                    <div class="singel-form form-group">
                                        <input name="subject" type="text" placeholder="Subject" data-error="Subject is required." required="required">
                                        <div class="help-block with-errors"></div>
                                    </div> <!-- singel form --> 
                                </div>
                                <div class="col-md-6">
                                    <div class="singel-form form-group">
                                        <input name="phone" type="text" placeholder="Phone" data-error="Phone is required." required="required">
                                        <div class="help-block with-errors"></div>
                                    </div> <!-- singel form -->
                                </div>
                                <div class="col-md-12">
                                    <div class="singel-form form-group">
                                        <textarea name="messege" placeholder="Messege" data-error="Please,leave us a message." required="required"></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div> <!-- singel form -->
                                </div>
                                <p class="form-message"></p>
                                <div class="col-md-12">
                                    <div class="singel-form">
                                        <button type="submit" class="main-btn">Send</button>
                                    </div> <!-- singel form -->
                                </div> 
                            </div> <!-- row -->
                        </form>
                    </div> <!-- main form -->
                </div> <!--  contact from -->
            </div>
            <div class="col-lg-4">
                <div class="contact-address">
                    <div class="contact-heading">
                        <h5>Address</h5>
                        <p>If you have any further questions, please don’t hesitate to contact me.</p>
                    </div>
                    <ul>
                        <li>
                            <div class="singel-address">
                                <div class="icon">
                                    <i class="fa fa-home"></i>
                                </div>
                                <div class="cont">
                                    <p>143 castle road 517 district, kiyev port south Canada</p>
                                </div>
                            </div> <!-- singel address -->
                        </li>
                        <li>
                            <div class="singel-address">
                                <div class="icon">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <div class="cont">
                                    <p>+3 123 456 789</p>
                                    <p>+1 222 345 342</p>
                                </div>
                            </div> <!-- singel address -->
                        </li>
                        <li>
                            <div class="singel-address">
                                <div class="icon">
                                    <i class="fa fa-envelope-o"></i>
                                </div>
                                <div class="cont">
                                    <p>info@yourmail.com</p>
                                    <p>info@yourmail.com</p>
                                </div>
                            </div> <!-- singel address -->
                        </li>
                        <li>
                            <div class="singel-address">
                                <div class="icon">
                                    <i class="fa fa-globe"></i>
                                </div>
                                <div class="cont">
                                    <p>www.yoursite.com</p>
                                    <p>www.example.com</p>
                                </div>
                            </div> <!-- singel address -->
                        </li>
                    </ul>
                </div> <!-- contact address -->
            
            </div>
        </div> <!-- row -->
    </div> <!-- container -->

</section>
<div class="map map-big">
    <div id="contact-map"></div>
</div> <!-- map -->
<!--====== CONTACT PART ENDS ======-->
@endsection