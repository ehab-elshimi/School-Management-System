<?php

namespace App\Services;

use App\Models\Student;

class StudentService extends BaseServices
{
    protected $model;

    public function __construct()
    {
        $this->model = new Student();
    }
}