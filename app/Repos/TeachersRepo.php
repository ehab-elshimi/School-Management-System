<?php

namespace App\Repos;

use App\Models\Phone;
use App\Models\Teacher;
use App\Models\User;
use App\Services\TeacherService;
use App\Traits\FileUploadTrait;
use App\Traits\FormatUserRequest;
use App\Traits\HttpResponses;
use App\Traits\SaveUserPhones;
use Illuminate\Http\Request;

class TeachersRepo
{   
    use HttpResponses, FileUploadTrait, FormatUserRequest, SaveUserPhones;

    protected TeacherService $teacherService;
    protected $model;
    public function __construct(TeacherService $teacherService)
    {
        $this->model = new Teacher();
        $this->teacherService = $teacherService;
    }
    public function index()
    {
        $teachers = $this->teacherService->retrieve(false, $this->model)->map(function ($teacher) {
            return $this->teacherService->getTeacherData($teacher);
        });

        $teachersCount = $teachers->count();
        
        return $this->success(["teachers" => $teachers, "teachersCount" => $teachersCount] , "Teachers Retrieved Successfully", 200);

        return view('dashboards.admins.pages.teachers.index', compact('teachers', 'teachersCount'));
    }
    public function create()
    {
        return view('dashboards.admins.pages.teachers.create');
    }
    public function store($request)
    {
         // Student  Photo
         if ($request->hasFile('photo')) {
            $storagePath = 'public/teachers/photos'; // Update this to your storage path
            $requestData['photo'] = $this->uploadFile($request, 'photo', $storagePath);
        } else {
            // No file uploaded, set image path to null or handle the situation as needed
            $requestData['photo'] = null;
        }
        // Create teacher as user 
        $user = User::create($this->formatUserData($request));
        // Create parent record
        $teacher = Teacher::create([
            'teacher_code' => $request->input('teacher_code'),
            'address' => $request->input('address'),
            'user_id' => $user->id,
        ]);
        // save teacher's phones
        $this->SaveUserPhones($user,  $request->input('phone'));
        return $this->success("Teacher Stored Successfully" , "Teacher Stored Successfully", 200);
        // return $this->index();
    }
    public function show($teacherId)
    {
        $teacher = $this->teacherService->getTeacherData($this->teacherService->show($this->model, $teacherId));
        return $this->success(["teacher" => $teacher] , "Teacher ID {$teacherId} Retrieved Successfully", 200);
    }
    public function edit($teacherId)
    {
        $teacher = $this->teacherService->show($this->model, $teacherId);
        
        return view('dashboards.admins.pages.teachers.edit', compact('teacher'));
    }
    public function update($teacherId, $request)
    {
        $updatedTeacher = $this->teacherService->update($this->model, $teacherId,$request->toArray());
        // return redirect()->back();
        return $this->success(["teacher" => $updatedTeacher] , "Teacher ID {$teacherId} Updated Successfully", 200);
    }
    public function destroy($teacherId)
    {
        $deletedTeacher = $this->teacherService->getTeacherData($this->teacherService->show($this->model, $teacherId));

        // delete 
        $this->teacherService->delete($this->model, $teacherId);
        return $this->success(["teacher" => $deletedTeacher], "Teacher ID {$teacherId} Deleted Successfully", 200);
    }

}