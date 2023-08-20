<?php

namespace App\Http\Controllers\DashboardHome;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function home(){
        return view('dashboards.admins.pages.index');
    }
}
