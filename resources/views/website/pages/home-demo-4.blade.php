@extends('website.layout')
@section('content')

    <!--====== SLIDER PART START ======-->
    
    <section id="slider-part-3" class="bg_cover"  style="background-image: url(images/slider/s-3.jpg)">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="slider-cont-3 text-center">
                        <h2>Search for prefered courses</h2>
                        <span>More then 3000+ courses for you</span>
                        <div class="slider-search mt-45">
                           <form action="#">
                                <div class="row no-gutters">
                                    <div class="col-sm-3">
                                        <select>
                                            <option value="0">Category</option>
                                            <option value="1">Category 01</option>
                                            <option value="2">Category 02</option>
                                            <option value="3">Category 03</option>
                                            <option value="4">Category 04</option>
                                            <option value="5">Category 05</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" placeholder="Search keyword">
                                    </div>
                                    <div class="col-sm-3">
                                        <button type="button" class="main-btn">Search Now</button>
                                    </div>
                                </div> <!-- row -->
                            </form>
                        </div>
                    </div> <!-- slider cont3 -->
                </div>
            </div> <!-- row -->
            <div class="slider-feature pt-30 d-none d-md-block">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6">
                        <div class="singel-slider-feature justify-content-center mt-30">
                            <div class="icon">
                                <img src="images/all-icon/man.png" alt="icon">
                            </div>
                            <div class="cont">
                                <h3>13,0000</h3>
                                <span>Worldwide Students</span>
                            </div>
                        </div> <!-- singel slider feature -->
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="singel-slider-feature justify-content-center mt-30">
                            <div class="icon">
                                <img src="images/all-icon/book.png" alt="icon">
                            </div>
                            <div class="cont">
                                <h3>4,000509</h3>
                                <span>Available Courses</span>
                            </div>
                        </div> <!-- singel slider feature -->
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="singel-slider-feature justify-content-center mt-30">
                            <div class="icon">
                                <img src="images/all-icon/expert.png" alt="icon">
                            </div>
                            <div class="cont">
                                <h3>Expert Instructor</h3>
                                <span>Expert Instructors</span>
                            </div>
                        </div> <!-- singel slider feature -->
                    </div>
                </div> <!-- row -->
            </div> <!-- slider feature -->
        </div> <!-- container -->
    </section>
    
    <!--====== SLIDER PART ENDS ======-->
    
    <!--====== CATEGORY PART START ======-->
    
    <section id="category-3" class="category-2-items pt-50 pb-80 gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="singel-items text-center mt-30">
                        <div class="items-image">
                            <img src="images/category/ctg-1.jpg" alt="Category">
                        </div>
                        <div class="items-cont">
                            <a href="#">
                                <h5>App Design</h5>
                                <span>24 courses</span>
                            </a>
                        </div>
                    </div> <!-- singel items -->
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="singel-items text-center mt-30">
                        <div class="items-image">
                            <img src="images/category/ctg-1.jpg" alt="Category">
                        </div>
                        <div class="items-cont">
                            <a href="#">
                                <h5>UI/ UX Design</h5>
                                <span>103 courses</span>
                            </a>
                        </div>
                    </div> <!-- singel items -->
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="singel-items text-center mt-30">
                        <div class="items-image">
                            <img src="images/category/ctg-1.jpg" alt="Category">
                        </div>
                        <div class="items-cont">
                            <a href="#">
                                <h5>App development</h5>
                                <span>57 courses</span>
                            </a>
                        </div>
                    </div> <!-- singel items -->
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="singel-items text-center mt-30">
                        <div class="items-image">
                            <img src="images/category/ctg-1.jpg" alt="Category">
                        </div>
                        <div class="items-cont">
                            <a href="#">
                                <h5>Photography</h5>
                                <span>17 courses</span>
                            </a>
                        </div>
                    </div> <!-- singel items -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    
    <!--====== CATEGORY PART ENDS ======-->
    
    <!--====== COURSE PART START ======-->
    
    <section id="course-part" class="pt-115 pb-115">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-title pb-45">
                        <h5>Our course</h5>
                        <h2>Featured courses </h2>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row course-slied mt-30">
                <div class="col-lg-4">
                    <div class="singel-course-2">
                        <div class="thum">
                            <div class="image">
                                <img src="images/course/cu-1.jpg" alt="Course">
                            </div>
                            <div class="price">
                                <span>Free</span>
                            </div>
                            <div class="course-teacher">
                                <div class="thum">
                                    <a href="{{asset('website.courses-singel')}}"><img src="images/course/teacher/t-1.jpg" alt="teacher"></a>
                                </div>
                                <div class="name">
                                    <a href="#"><h6>Mark anthem</h6></a>
                                </div>
                                <div class="review">
                                    <ul>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="cont">
                            <a href="#"><h4>Learn basis javascirpt from start for beginner</h4></a>
                        </div>
                    </div> <!-- singel course -->
                </div>
                <div class="col-lg-4">
                    <div class="singel-course-2">
                        <div class="thum">
                            <div class="image">
                                <img src="images/course/cu-2.jpg" alt="Course">
                            </div>
                            <div class="price">
                                <span>Free</span>
                            </div>
                            <div class="course-teacher">
                                <div class="thum">
                                    <a href="{{asset('website.courses-singel')}}"><img src="images/course/teacher/t-2.jpg" alt="teacher"></a>
                                </div>
                                <div class="name">
                                    <a href="#"><h6>Mark anthem</h6></a>
                                </div>
                                <div class="review">
                                    <ul>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="cont">
                            <a href="#"><h4>Learn basis javascirpt from start for beginner</h4></a>
                        </div>
                    </div> <!-- singel course -->
                </div>
                <div class="col-lg-4">
                    <div class="singel-course-2">
                        <div class="thum">
                            <div class="image">
                                <img src="images/course/cu-3.jpg" alt="Course">
                            </div>
                            <div class="price">
                                <span>Free</span>
                            </div>
                            <div class="course-teacher">
                                <div class="thum">
                                    <a href="{{asset('website.courses-singel')}}"><img src="images/course/teacher/t-3.jpg" alt="teacher"></a>
                                </div>
                                <div class="name">
                                    <a href="#"><h6>Mark anthem</h6></a>
                                </div>
                                <div class="review">
                                    <ul>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="cont">
                            <a href="#"><h4>Learn basis javascirpt from start for beginner</h4></a>
                        </div>
                    </div> <!-- singel course -->
                </div>
                <div class="col-lg-4">
                    <div class="singel-course-2">
                        <div class="thum">
                            <div class="image">
                                <img src="images/course/cu-4.jpg" alt="Course">
                            </div>
                            <div class="price">
                                <span>Free</span>
                            </div>
                            <div class="course-teacher">
                                <div class="thum">
                                    <a href="{{asset('website.courses-singel')}}"><img src="images/course/teacher/t-4.jpg" alt="teacher"></a>
                                </div>
                                <div class="name">
                                    <a href="#"><h6>Mark anthem</h6></a>
                                </div>
                                <div class="review">
                                    <ul>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="cont">
                            <a href="#"><h4>Learn basis javascirpt from start for beginner</h4></a>
                        </div>
                    </div> <!-- singel course -->
                </div>
                <div class="col-lg-4">
                    <div class="singel-course-2">
                        <div class="thum">
                            <div class="image">
                                <img src="images/course/cu-5.jpg" alt="Course">
                            </div>
                            <div class="price">
                                <span>Free</span>
                            </div>
                            <div class="course-teacher">
                                <div class="thum">
                                    <a href="{{asset('website.courses-singel')}}"><img src="images/course/teacher/t-5.jpg" alt="teacher"></a>
                                </div>
                                <div class="name">
                                    <a href="#"><h6>Mark anthem</h6></a>
                                </div>
                                <div class="review">
                                    <ul>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="cont">
                            <a href="#"><h4>Learn basis javascirpt from start for beginner</h4></a>
                        </div>
                    </div> <!-- singel course -->
                </div>
            </div> <!-- course slied -->
        </div> <!-- container -->
    </section>
    
    <!--====== COURSE PART ENDS ======-->
    
    <!--====== COUNT DOWN PART START ======-->
    
    <section id="count-down-part" class="bg_cover pt-70 pb-120" data-overlay="8" style="background-image: url(images/bg-2.jpg)">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6">
                    <div class="count-down-cont pt-50">
                        <h3>Get 100s of online Courses For Free</h3>
                        <h2>Sign up Now</h2>
                        <div data-countdown="2019/03/01"></div>
                    </div> <!-- count down cont -->
                </div>
                <div class="col-lg-5 offset-lg-1 col-md-8">
                    <div class="category-form category-form-3 pt-50">
                        <div class="form-title text-center">
                            <h3>Get 50 courses free!</h3>
                            <span>Sign up now </span>
                        </div>
                        <div class="main-form">
                            <form action="#">
                                <div class="singel-form">
                                    <input type="text" placeholder="Your name">
                                </div>
                                <div class="singel-form">
                                    <input type="email" placeholder="Your Mail">
                                </div>
                                <div class="singel-form">
                                    <input type="text" placeholder="Your Phone">
                                </div>
                                <div class="singel-form">
                                    <button class="main-btn" type="button">Get it Now</button>
                                </div>
                            </form>
                        </div>
                    </div> <!-- category form -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    
    <!--====== COUNT DOWN PART ENDS ======-->
    
    <!--====== COUNTER PART START ======-->
    
    <div id="counter-part" class="bg_cover pt-25 pb-70 gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="singel-counter counter-3 text-center mt-40">
                        <span><span class="counter">30,000</span>+</span>
                        <p>Students enrolled</p>
                    </div> <!-- singel counter -->
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="singel-counter counter-3 text-center mt-40">
                        <span><span class="counter">41,000</span>+</span>
                        <p>Courses Uploaded</p>
                    </div> <!-- singel counter -->
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="singel-counter counter-3 text-center mt-40">
                        <span><span class="counter">11,000</span>+</span>
                        <p>People certifie</p>
                    </div> <!-- singel counter -->
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="singel-counter counter-3 text-center mt-40">
                        <span><span class="counter">39,000</span>+</span>
                        <p>Global Teachers</p>
                    </div> <!-- singel counter -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </div>
    
    <!--====== COUNTER PART ENDS ======-->
    
    <!--====== EVENT 2 PART START ======-->
    
    <section id="event-part" class="pt-120 pb-120">
        <div class="container">
            <div class="event-bg bg_cover" style="background-image: url(images/bg-3.jpg)">
                <div class="row">
                    <div class="col-lg-5 offset-lg-6 col-md-8 offset-md-2 col-sm-10 offset-sm-1">
                        <div class="event-2 pt-90 pb-70">
                            <div class="event-title">
                                <h3>Upcoming events</h3>
                            </div> <!-- event title -->
                            <ul>
                                <li>
                                    <div class="singel-event">
                                        <span><i class="fa fa-calendar"></i> 2 December 2018</span>
                                        <a href="{{asset('website.events-singel')}}"><h4>Campus clean workshop</h4></a>
                                        <span><i class="fa fa-clock-o"></i> 10:00 Am - 3:00 Pm</span>
                                        <span><i class="fa fa-map-marker"></i> Rc Auditorim</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="singel-event">
                                        <span><i class="fa fa-calendar"></i> 2 December 2018</span>
                                        <a href="{{asset('website.events-singel')}}"><h4>Tech Summit</h4></a>
                                        <span><i class="fa fa-clock-o"></i> 10:00 Am - 3:00 Pm</span>
                                        <span><i class="fa fa-map-marker"></i> Rc Auditorim</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="singel-event">
                                        <span><i class="fa fa-calendar"></i> 2 December 2018</span>
                                        <a href="{{asset('website.events-singel')}}"><h4>Enviroement conference</h4></a>
                                        <span><i class="fa fa-clock-o"></i> 10:00 Am - 3:00 Pm</span>
                                        <span><i class="fa fa-map-marker"></i> Rc Auditorim</span>
                                    </div>
                                </li>
                            </ul> 
                        </div> <!-- event 2 -->
                    </div>
                </div> <!-- row -->
            </div>
        </div> <!-- container -->
    </section>
    
    <!--====== EVENT 2 PART ENDS ======-->
    
    <!--====== TEACHERS PART START ======-->
    
    <section id="teachers-part" class="pt-65 pb-120 gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-title mt-50 pb-25">
                        <h5>Top Tutors</h5>
                        <h2>Featured Teachers</h2>
                    </div> <!-- section title -->
                    <div class="teachers-2">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="teachers-2-singel mt-30">
                                    <div class="thum">
                                        <img src="images/teachers/teacher-2/tc-1.jpg" alt="Teacher">
                                    </div>
                                    <div class="cont">
                                        <a href="{{asset('website.teachers-singel')}}"><h5>Mark anthem</h5></a>
                                        <p>JAVA Expert</p>
                                        <span><i class="fa fa-book"></i>10 Courses</span>
                                    </div>
                                </div> <!-- teachers 2 singel -->
                            </div>
                            <div class="col-md-6">
                                <div class="teachers-2-singel mt-30">
                                    <div class="thum">
                                        <img src="images/teachers/teacher-2/tc-2.jpg" alt="Teacher">
                                    </div>
                                    <div class="cont">
                                        <a href="{{asset('website.teachers-singel')}}"><h5>Hellen Mark</h5></a>
                                        <p>Laravel Expert</p>
                                        <span><i class="fa fa-book"></i>05 Courses</span>
                                    </div>
                                </div> <!-- teachers 2 singel -->
                            </div>
                            <div class="col-md-6">
                                <div class="teachers-2-singel mt-30">
                                    <div class="thum">
                                        <img src="images/teachers/teacher-2/tc-1.jpg" alt="Teacher">
                                    </div>
                                    <div class="cont">
                                        <a href="{{asset('website.teachers-singel')}}"><h5>Maria Noor</h5></a>
                                        <p>JAVA Expert</p>
                                        <span><i class="fa fa-book"></i>10 Courses</span>
                                    </div>
                                </div> <!-- teachers 2 singel -->
                            </div>
                            <div class="col-md-6">
                                <div class="teachers-2-singel mt-30">
                                    <div class="thum">
                                        <img src="images/teachers/teacher-2/tc-1.jpg" alt="Teacher">
                                    </div>
                                    <div class="cont">
                                        <a href="{{asset('website.teachers-singel')}}"><h5>Alan hen</h5></a>
                                        <p>Laravel Expert</p>
                                        <span><i class="fa fa-book"></i>05 Courses</span>
                                    </div>
                                </div> <!-- teachers 2 singel -->
                            </div>
                        </div> <!-- row -->
                    </div> <!-- teachers 2 -->
                </div>
                <div class="col-lg-6 ">
                    <div class="happy-student mt-55">
                        <div class="happy-title">
                            <h3>Happy Students</h3>
                        </div>
                        <div class="student-slied">
                            <div class="singel-student">
                                <img src="images/teachers/teacher-2/quote.png" alt="Quote">
                                <p>Aliquetn sollicitudirem quibibendum auci elit cons equat ipsutis sem nibh id elit. Duis sed odio sit amet</p>
                                <h6>Mark anthem</h6>
                                <span>Bsc, Engineering</span>
                            </div> <!-- singel student -->
                            
                            <div class="singel-student">
                                <img src="images/teachers/teacher-2/quote.png" alt="Quote">
                                <p>Aliquetn sollicitudirem quibibendum auci elit cons equat ipsutis sem nibh id elit. Duis sed odio sit amet</p>
                                <h6>Mark anthem</h6>
                                <span>Bsc, Engineering</span>
                            </div> <!-- singel student -->
                            
                            <div class="singel-student">
                                <img src="images/teachers/teacher-2/quote.png" alt="Quote">
                                <p>Aliquetn sollicitudirem quibibendum auci elit cons equat ipsutis sem nibh id elit. Duis sed odio sit amet</p>
                                <h6>Mark anthem</h6>
                                <span>Bsc, Engineering</span>
                            </div> <!-- singel student -->
                        </div> <!-- student slied -->
                        <div class="student-image">
                            <img src="images/teachers/teacher-2/happy.png" alt="Image">
                        </div>
                    </div> <!-- happy student -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    
    <!--====== TEACHERS PART ENDS ======-->
   
    <!--====== NEWS PART START ======-->
    
    <section id="news-part" class="pt-115 pb-110">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-title pb-50">
                        <h5>Latest News</h5>
                        <h2>From the news</h2>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="singel-news mt-30">
                        <div class="news-thum pb-25">
                            <img src="images/news/n-1.jpg" alt="News">
                        </div>
                        <div class="news-cont">
                            <ul>
                                <li><a href="#"><i class="fa fa-calendar"></i>2 December 2018 </a></li>
                                <li><a href="#"> <span>By</span> Adam linn</a></li>
                            </ul>
                            <a href="{{asset('website.blog-singel')}}"><h3>Tips to grade high cgpa in university life</h3></a>
                            <p>Lorem ipsum gravida nibh vel velit auctor aliquetn sollicitudirem quibibendum auci elit cons equat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt .</p>
                        </div>
                    </div> <!-- singel news -->
                </div>
                <div class="col-lg-6">
                    <div class="singel-news news-list">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="news-thum mt-30">
                                    <img src="images/news/ns-1.jpg" alt="News">
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="news-cont mt-30">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-calendar"></i>2 December 2018 </a></li>
                                        <li><a href="#"> <span>By</span> Adam linn</a></li>
                                    </ul>
                                    <a href="{{asset('website.blog-singel')}}"><h3>Intellectual communication</h3></a>
                                    <p>Gravida nibh vel velit auctor aliquetn sollicitudirem quibibendum auci elit cons  vel.</p>
                                </div>
                            </div>
                        </div> <!-- row -->
                    </div> <!-- singel news -->
                    <div class="singel-news news-list">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="news-thum mt-30">
                                    <img src="images/news/ns-2.jpg" alt="News">
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="news-cont mt-30">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-calendar"></i>2 December 2018 </a></li>
                                        <li><a href="#"> <span>By</span> Adam linn</a></li>
                                    </ul>
                                    <a href="{{asset('website.blog-singel')}}"><h3>Study makes you perfect</h3></a>
                                    <p>Gravida nibh vel velit auctor aliquetn sollicitudirem quibibendum auci elit cons  vel.</p>
                                </div>
                            </div>
                        </div> <!-- row -->
                    </div> <!-- singel news -->
                    <div class="singel-news news-list">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="news-thum mt-30">
                                    <img src="images/news/ns-3.jpg" alt="News">
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="news-cont mt-30">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-calendar"></i>2 December 2018 </a></li>
                                        <li><a href="#"> <span>By</span> Adam linn</a></li>
                                    </ul>
                                    <a href="{{asset('website.blog-singel')}}"><h3>Technology edcution is now....</h3></a>
                                    <p>Gravida nibh vel velit auctor aliquetn sollicitudirem quibibendum auci elit cons  vel.</p>
                                </div>
                            </div>
                        </div> <!-- row -->
                    </div> <!-- singel news -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    
    <!--====== NEWS PART ENDS ======-->
   
    <!--====== PATNAR LOGO PART START ======-->
    
    <div id="patnar-logo" class="pt-40 pb-80 gray-bg">
        <div class="container">
            <div class="row patnar-slied">
                <div class="col-lg-12">
                    <div class="singel-patnar text-center mt-40">
                        <img src="images/patnar-logo/p-1.png" alt="Logo">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="singel-patnar text-center mt-40">
                        <img src="images/patnar-logo/p-2.png" alt="Logo">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="singel-patnar text-center mt-40">
                        <img src="images/patnar-logo/p-3.png" alt="Logo">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="singel-patnar text-center mt-40">
                        <img src="images/patnar-logo/p-4.png" alt="Logo">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="singel-patnar text-center mt-40">
                        <img src="images/patnar-logo/p-2.png" alt="Logo">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="singel-patnar text-center mt-40">
                        <img src="images/patnar-logo/p-3.png" alt="Logo">
                    </div>
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </div> 
    
    <!--====== PATNAR LOGO PART ENDS ======-->
@endsection