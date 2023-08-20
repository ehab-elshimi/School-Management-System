@extends('website.layout')
@section('content')
 <!--====== PAGE BANNER PART START ======-->
    
 <section id="page-banner" class="pt-105 pb-110 bg_cover" data-overlay="8" style="background-image: url(images/page-banner-3.jpg)">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-banner-cont">
                    <h2>Events</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Events</li>
                        </ol>
                    </nav>
                </div>  <!-- page banner cont -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>

<!--====== PAGE BANNER PART ENDS ======-->

<!--====== EVENTS PART START ======-->

<section id="event-page" class="pt-90 pb-120 gray-bg">
    <div class="container">
       <div class="row">
           <div class="col-lg-6">
               <div class="singel-event-list mt-30">
                   <div class="event-thum">
                       <img src="images/event/e-1.jpg" alt="Event">
                   </div>
                   <div class="event-cont">
                       <span><i class="fa fa-calendar"></i> 2 December 2018</span>
                        <a href="{{asset('website.events-singel')}}"><h4>Tech Summit</h4></a>
                        <span><i class="fa fa-clock-o"></i> 10:00 Am - 3:00 Pm</span>
                        <span><i class="fa fa-map-marker"></i> Rc Auditorim</span>
                        <p>Nam nec tellus a odio tincidunt auctor a ornare odionon mauris itae erat conuat</p>
                   </div>
               </div>
           </div>
           <div class="col-lg-6">
               <div class="singel-event-list mt-30">
                   <div class="event-thum">
                       <img src="images/event/e-2.jpg" alt="Event">
                   </div>
                   <div class="event-cont">
                       <span><i class="fa fa-calendar"></i> 2 December 2018</span>
                        <a href="{{asset('website.events-singel')}}"><h4>Tech Summit</h4></a>
                        <span><i class="fa fa-clock-o"></i> 10:00 Am - 3:00 Pm</span>
                        <span><i class="fa fa-map-marker"></i> Rc Auditorim</span>
                        <p>Nam nec tellus a odio tincidunt auctor a ornare odionon mauris itae erat conuat</p>
                   </div>
               </div>
           </div>
           <div class="col-lg-6">
               <div class="singel-event-list mt-30">
                   <div class="event-thum">
                       <img src="images/event/e-3.jpg" alt="Event">
                   </div>
                   <div class="event-cont">
                       <span><i class="fa fa-calendar"></i> 2 December 2018</span>
                        <a href="{{asset('website.events-singel')}}"><h4>Tech Summit</h4></a>
                        <span><i class="fa fa-clock-o"></i> 10:00 Am - 3:00 Pm</span>
                        <span><i class="fa fa-map-marker"></i> Rc Auditorim</span>
                        <p>Nam nec tellus a odio tincidunt auctor a ornare odionon mauris itae erat conuat</p>
                   </div>
               </div>
           </div>
           <div class="col-lg-6">
               <div class="singel-event-list mt-30">
                   <div class="event-thum">
                       <img src="images/event/e-4.jpg" alt="Event">
                   </div>
                   <div class="event-cont">
                       <span><i class="fa fa-calendar"></i> 2 December 2018</span>
                        <a href="{{asset('website.events-singel')}}"><h4>Tech Summit</h4></a>
                        <span><i class="fa fa-clock-o"></i> 10:00 Am - 3:00 Pm</span>
                        <span><i class="fa fa-map-marker"></i> Rc Auditorim</span>
                        <p>Nam nec tellus a odio tincidunt auctor a ornare odionon mauris itae erat conuat</p>
                   </div>
               </div>
           </div>
           <div class="col-lg-6">
               <div class="singel-event-list mt-30">
                   <div class="event-thum">
                       <img src="images/event/e-1.jpg" alt="Event">
                   </div>
                   <div class="event-cont">
                       <span><i class="fa fa-calendar"></i> 2 December 2018</span>
                        <a href="{{asset('website.events-singel')}}"><h4>Tech Summit</h4></a>
                        <span><i class="fa fa-clock-o"></i> 10:00 Am - 3:00 Pm</span>
                        <span><i class="fa fa-map-marker"></i> Rc Auditorim</span>
                        <p>Nam nec tellus a odio tincidunt auctor a ornare odionon mauris itae erat conuat</p>
                   </div>
               </div>
           </div>
           <div class="col-lg-6">
               <div class="singel-event-list mt-30">
                   <div class="event-thum">
                       <img src="images/event/e-2.jpg" alt="Event">
                   </div>
                   <div class="event-cont">
                       <span><i class="fa fa-calendar"></i> 2 December 2018</span>
                        <a href="{{asset('website.events-singel')}}"><h4>Tech Summit</h4></a>
                        <span><i class="fa fa-clock-o"></i> 10:00 Am - 3:00 Pm</span>
                        <span><i class="fa fa-map-marker"></i> Rc Auditorim</span>
                        <p>Nam nec tellus a odio tincidunt auctor a ornare odionon mauris itae erat conuat</p>
                   </div>
               </div>
           </div>
       </div> <!-- row -->
        <div class="row">
            <div class="col-lg-12">
                <nav class="courses-pagination mt-50">
                    <ul class="pagination justify-content-center">
                        <li class="page-item">
                            <a href="#" aria-label="Previous">
                                <i class="fa fa-angle-left"></i>
                            </a>
                        </li>
                        <li class="page-item"><a class="active" href="#">1</a></li>
                        <li class="page-item"><a href="#">2</a></li>
                        <li class="page-item"><a href="#">3</a></li>
                        <li class="page-item">
                            <a href="#" aria-label="Next">
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                </nav>  <!-- courses pagination -->
            </div>
        </div>  <!-- row -->
    </div> <!-- container -->
</section>

<!--====== EVENTS PART ENDS ======-->
@endsection