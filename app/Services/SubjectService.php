<?php

namespace App\Services;

use App\Models\Subject;

class SubjectService extends BaseServices
{
    protected $model;

    public function __construct()
    {
        $this->model = new Subject();
    }
}