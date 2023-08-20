<?php

namespace App\Http\Controllers;

use App\Repos\StudentsRepo;
use App\Traits\HttpResponses;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    protected StudentsRepo $studentsRepo;

    public function __construct(StudentsRepo $studentsRepo)
    {
        $this->studentsRepo = $studentsRepo; 
    }
    public function index()
    {
        return $this->studentsRepo->index();
    }
}
    

    