<?php

namespace App\Repos;

use App\Models\Phone;
use App\Models\Student;
use App\Models\User;
use App\Services\StudentService;
use App\Services\UserService;
use App\Traits\FileUploadTrait;
use App\Traits\FormatUserRequest;
use App\Traits\HttpResponses;
use App\Traits\SaveUserPhones;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

class StudentsRepo
{   
    use HttpResponses, FileUploadTrait, FormatUserRequest, SaveUserPhones;

    protected StudentService $studentService;
    protected UserService $userService;
    protected $model;
    public function __construct(StudentService $studentService, UserService $userService)
    {
        $this->model = new Student();
        $this->studentService = $studentService;
        $this->userService = $userService;
    }
    public function index()
    {
        $students = $this->studentService->retrieve(false, $this->model)->map(function ($student) {
            return $this->studentService->getStudentData($student);
        });

        $studentsCount = $students->count();

        return $this->success(["students" => $students, "students_count" => $studentsCount] , "Students Retrieved Successfully", 200);

        return view('dashboards.admins.pages.students.index', compact('students', 'studentsCount'));
    }
    public function create()
    {
        return view('dashboards.admins.pages.students.create');
    }
    public function store($request)
    {
        $student = $this->studentService->storeStudent($request);    
        return $this->success(["student" => $student] , "Student Stored Successfully", 200);
    }
    public function show($studentId)
    {
        $student = $this->studentService->showStudent($studentId);
        return $this->success(["student" => $student] , "Student ID {$studentId} Retrieved Successfully", 200);
    }
    public function edit($studentId)
    {
        $student = $this->studentService->showStudent($studentId);
        
        return view('dashboards.admins.pages.students.edit', compact('student'));
    }
    public function update($studentId, $request)
    {
        $updatedStudent = $this->studentService->update($this->model, $studentId,$request->toArray());
        // return redirect()->back();
        return $this->success(["student" => $updatedStudent] , "Student ID {$studentId} Updated Successfully", 200);
    }
    public function destroy($studentId)
    {
        $delete = $this->studentService->deleteStudent($studentId);
        return $delete;
        if($delete = "User Successfully deleted"){
            return "ASD";
        
        }
    }
}