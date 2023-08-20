<?php

namespace App\Repos;

use App\Services\StudentService;
use App\Traits\HttpResponses;
use Symfony\Component\HttpFoundation\Response;

class StudentsRepo
{   
    use HttpResponses;

    protected StudentService $studentService;

    public function __construct(StudentService $studentService)
    {
        $this->studentService = $studentService;
    }
    public function index(): Response
    {
        return response(Response::HTTP_OK);
    }
}