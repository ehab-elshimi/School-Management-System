<?php

namespace App\Http\Controllers\DashboardHome;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SuperAdminController extends Controller
{
    public function home(){
        return view('dashboards.super-admins.pages.index');
    }
}
