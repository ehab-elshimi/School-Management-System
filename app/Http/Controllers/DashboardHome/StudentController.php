<?php

namespace App\Http\Controllers\DashboardHome;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function home(){
        return view('dashboards.students.pages.index');
    }
}
