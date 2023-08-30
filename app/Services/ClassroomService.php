<?php

namespace App\Services;

use App\Models\Classroom;

class ClassroomService extends BaseServices
{
    protected $model;

    public function __construct()
    {
        $this->model = new Classroom();
    }
}