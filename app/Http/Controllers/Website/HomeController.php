<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return view('website.pages.home');
    }
    public function about(){
        return view('website.pages.about');
    }
    public function blog(){
        return view('website.pages.blog');
    }
    public function blogSingel(){
        return view('website.pages.blog-singel');
    }
    public function contact(){
        return view('website.pages.contact');
    }
    public function contactDemo2(){
        return view('website.pages.contact-demo-2');
    }
    public function courses(){
        return view('website.pages.courses');
    }
    public function coursesSingel(){
        return view('website.pages.courses-singel');
    }
    public function events(){
        return view('website.pages.events');
    }
    public function eventsSingel(){
        return view('website.pages.events-singel');
    }
    public function homeDemo2(){
        return view('website.pages.home-demo-2');
    }
    public function homeDemo3(){
        return view('website.pages.home-demo-3');
    }
    public function homeDemo4(){
        return view('website.pages.home-demo-4');
    }
    public function shop(){
        return view('website.pages.shop');
    }
    public function shopSingel(){
        return view('website.pages.shop-singel');
    }
    public function teachers(){
        return view('website.pages.teachers');
    }
    public function teachersSingel(){
        return view('website.pages.teachers-singel');
    }
}
