<?php

namespace App\Services;

use App\Models\ParentData as ParentModel;

class ParentService extends BaseServices
{
    protected $model;

    public function __construct()
    {
        $this->model = new ParentModel();
    }

}