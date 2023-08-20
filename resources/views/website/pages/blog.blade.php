@extends('website.layout')
@section('content')
    <!--====== PAGE BANNER PART START ======-->
    
    <section id="page-banner" class="pt-105 pb-130 bg_cover" data-overlay="8" style="background-image: url(images/page-banner-4.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-banner-cont">
                        <h2>Blog</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Blog</li>
                            </ol>
                        </nav>
                    </div>  <!-- page banner cont -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    
    <!--====== PAGE BANNER PART ENDS ======-->
   
    <!--====== BLOG PART START ======-->
    
    <section id="blog-page" class="pt-90 pb-120 gray-bg">
        <div class="container">
           <div class="row">
               <div class="col-lg-8">
                   <div class="singel-blog mt-30">
                       <div class="blog-thum">
                           <img src="{{ asset('website/images/blog/b-1.jpg') }}" alt="Blog">
                       </div>
                       <div class="blog-cont">
                           <a href="{{ route('website.blog-singel')}}"><h3>Few tips for get better results in examination</h3></a>
                           <ul>
                               <li><a href="#"><i class="fa fa-calendar"></i>25 Dec 2018</a></li>
                               <li><a href="#"><i class="fa fa-user"></i>Mark anthem</a></li>
                               <li><a href="#"><i class="fa fa-tags"></i>Education</a></li>
                           </ul>
                           <p>Lorem ipsum gravida nibh vel velit auctor aliquetn sollicitudirem quibibendum auci elit cons equat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus .</p>
                       </div>
                   </div> <!-- singel blog -->
                   <div class="singel-blog mt-30">
                       <div class="blog-thum">
                           <img src="{{ asset('website/images/blog/b-2.jpg') }}" alt="Blog">
                       </div>
                       <div class="blog-cont">
                           <a href="{{ route('website.blog-singel')}}"><h3>Few tips for get better results in examination</h3></a>
                           <ul>
                               <li><a href="#"><i class="fa fa-calendar"></i>25 Dec 2018</a></li>
                               <li><a href="#"><i class="fa fa-user"></i>Mark anthem</a></li>
                               <li><a href="#"><i class="fa fa-tags"></i>Education</a></li>
                           </ul>
                           <p>Lorem ipsum gravida nibh vel velit auctor aliquetn sollicitudirem quibibendum auci elit cons equat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus .</p>
                       </div>
                   </div> <!-- singel blog -->
                   <nav class="courses-pagination mt-50">
                        <ul class="pagination justify-content-lg-end justify-content-center">
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
               <div class="col-lg-4">
                   <div class="saidbar">
                       <div class="row">
                           <div class="col-lg-12 col-md-6">
                               <div class="saidbar-search mt-30">
                                   <form action="#">
                                       <input type="text" placeholder="Search">
                                       <button type="button"><i class="fa fa-search"></i></button>
                                   </form>
                               </div> <!-- saidbar search -->
                               <div class="categories mt-30">
                                   <h4>Categories</h4>
                                   <ul>
                                       <li><a href="#">Fronted</a></li>
                                       <li><a href="#">Backend</a></li>
                                       <li><a href="#">Photography</a></li>
                                       <li><a href="#">Teachnology</a></li>
                                       <li><a href="#">GMET</a></li>
                                       <li><a href="#">Language</a></li>
                                       <li><a href="#">Science</a></li>
                                       <li><a href="#">Accounting</a></li>
                                   </ul>
                               </div>
                           </div> <!-- categories -->
                           <div class="col-lg-12 col-md-6">
                               <div class="saidbar-post mt-30">
                                   <h4>Popular Posts</h4>
                                   <ul>
                                       <li>
                                            <a href="#">
                                                <div class="singel-post">
                                                   <div class="thum">
                                                       <img src="{{ asset('website/images/blog/blog-post/bp-1.jpg') }}" alt="Blog">
                                                   </div>
                                                   <div class="cont">
                                                       <h6>Introduction to languages</h6>
                                                       <span>20 Dec 2018</span>
                                                   </div>
                                               </div> <!-- singel post -->
                                            </a>
                                       </li>
                                       <li>
                                            <a href="#">
                                                <div class="singel-post">
                                                   <div class="thum">
                                                       <img src="{{ asset('website/images/blog/blog-post/bp-2.jpg') }}" alt="Blog">
                                                   </div>
                                                   <div class="cont">
                                                       <h6>How to build a game with java</h6>
                                                       <span>10 Dec 2018</span>
                                                   </div>
                                               </div> <!-- singel post -->
                                            </a>
                                       </li>
                                       <li>
                                            <a href="#">
                                                <div class="singel-post">
                                                   <div class="thum">
                                                       <img src="{{ asset('website/images/blog/blog-post/bp-1.jpg') }}" alt="Blog">
                                                   </div>
                                                   <div class="cont">
                                                       <h6>Basic accounting from primary</h6>
                                                       <span>07 Dec 2018</span>
                                                   </div>
                                               </div> <!-- singel post -->
                                            </a>
                                       </li>
                                   </ul>
                               </div> <!-- saidbar post -->
                           </div>
                       </div> <!-- row -->
                   </div> <!-- saidbar -->
               </div>
           </div> <!-- row -->
        </div> <!-- container -->
    </section>
    
    <!--====== BLOG PART ENDS ======-->
@endsection