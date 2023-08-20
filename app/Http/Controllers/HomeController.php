<?php

namespace App\Http\Controllers;

use App\Enums\UserRoleEnum;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function dashboard()
    {
        if (Auth::check()) {
            $userRole = Auth::user()->roles->first();

            if ($userRole) {
                switch ($userRole->name) {
                    case UserRoleEnum::SUPER_ADMIN->value:
                        return redirect()->route('super-admin.home');
                    case UserRoleEnum::ADMIN->value:
                        return redirect()->route('admin.home');
                    case UserRoleEnum::TEACHER->value:
                        return redirect()->route('teacher.home');
                    case UserRoleEnum::PARENT->value:
                        return redirect()->route('parent.home');
                    case UserRoleEnum::STUDENT->value:
                        return redirect()->route('student.home');    
                }
            }
        }

        Auth::logout();
        return redirect('login');
    } 
}