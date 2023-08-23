<?php

namespace App\Repos;

use App\Models\Teacher;
use App\Services\TeacherService;
use App\Traits\HttpResponses;

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
    public function index()
    {
        
        $teachers = $this->teacherService->retrieve(false ,$this->model);
        $countTeachers = $teachers->count();
        // return $this->success(['teachers' => $teachers], "Successfully Retrieved Teachers", 200);
        return view('dashboards.admins.pages.teachers.index', compact('teachers', 'countTeachers'));
    }
    public function getTeachers()
    {
        $teachers = $this->teacherService->retrieve(false ,$this->model);
        $countTeachers = $teachers->count();
        return $this->success(['teachers' => $teachers], "Successfully Retrieved Teachers", 200);
    }
    
    // Create
    public function create()
    {
        return view('dashboards.admins.pages.teachers.create');
    }
    // Store
    public function store($data)
    {
        $storeTeacher = $this->teacherService->store($this->model, $data);
        return $this->success($storeTeacher, "Teacher Stored Successfully", 200);
    }
    // Show
    public function show($teacherId)
    {
        $teacher = $this->teacherService->show($this->model, $teacherId);
        return $this->success(["teacher" => $teacher], "Teacher Retrieved Successfully", 200);
        // return view('dashboards.admins.pages.teachers.show', compact('teacher'));
    }
    // Show
    public function edit($teacherId)
    {
        $teacher = $this->teacherService->show($this->model, $teacherId);
        return $this->success(["teacher" => $teacher], "Teacher Retrieved Successfully", 200);
        // return view('dashboards.admins.pages.teachers.edit', compact('teacher'));
    }
    // Update
    public function update($teacherId, $data)
    {
        $teacher = $this->teacherService->update($this->model, $teacherId, $data);
        return $this->success(["teacher" => $teacher], "Teacher Updated Successfully", 200);
        // return redirect()->route('admin.teachers.index')->with("success", "Teacher Updated Successfully");
    }
    // Delete
    public function destroy($teacherId)
    {
        $this->teacherService->delete($this->model, $teacherId);
        // return $this->success(null, "Teacher Deleted Successfully", 200);
        return redirect()->route('admin.teachers.index')->with("success", "Teacher Updated Successfully");
    }

}