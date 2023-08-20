<?php

namespace App\Repos;

use App\Models\Teacher;
use App\Services\TeacherService;
use App\Traits\HttpResponses;
use Symfony\Component\HttpFoundation\Response;

class TeachersRepo
{   
    use HttpResponses;

    protected $model;
    
    protected TeacherService $teacherService;

    public function __construct(TeacherService $teacherService)
    {
        $this->model = new Teacher();

        $this->teacherService = $teacherService;
    }
    // List
    public function getTeachers()
    {
        $teachers = $this->teacherService->retrieve(false);

        return $teachers;
    }
    // Store
    public function storeTeacher($request)
    {
        return response(Response::HTTP_OK);
    }
    // Show
    public function getTeacher($teacherId)
    {
        $teacher = $this->teacherService->show($teacherId);

        return $teacher;
    }
    // Update
    public function updateTeacher($teacherId, $request)
    {
        $teacher = $this->teacherService->show($teacherId);

        $teacherData = $request->json()->all();
        $teacher->update($teacherData);

        return $teacher;
    }
    // Delete
    public function deleteTeacher($teacherId)
    {
        return response(Response::HTTP_OK);
    }
}