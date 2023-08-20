<?php

namespace App\Services;

use App\Models\Student;
use App\Models\Teacher;

class TeacherService extends BaseServices
{
    protected $model;

    public function __construct()
    {
        $this->model = new Teacher();
    }
}