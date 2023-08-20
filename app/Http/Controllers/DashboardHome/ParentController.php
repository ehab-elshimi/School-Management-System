<?php

namespace App\Http\Controllers\DashboardHome;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ParentController extends Controller
{
    public function home(){
        return view('dashboards.parents.pages.index');
    }
}
