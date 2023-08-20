<?php

namespace App\Http\Controllers\DashboardHome;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function home(){
        return view('dashboards.teachers.pages.index');
    }
}
