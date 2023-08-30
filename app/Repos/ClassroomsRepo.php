<?php

namespace App\Repos;

use App\Models\Classroom;
use App\Services\ClassroomService;
use App\Traits\HttpResponses;

class ClassroomsRepo
{   
    use HttpResponses;

    protected ClassroomService $classroomService;
    protected $model;

    public function __construct(ClassroomService $classroomService)
    {
        $this->model = new Classroom();
        $this->classroomService = $classroomService;
    }
    public function index()
    {
        $classrooms = $this->classroomService->retrieve(false, $this->model);
        $classroomsCount = $classrooms->count();
        return view('dashboards.admins.pages.classrooms.index', compact('classrooms', 'classroomsCount'));
    }
    public function create()
    {
        return view('dashboards.admins.pages.classrooms.create');
    }
    public function store($request)
    {
        $this->classroomService->store($this->model, $request);
        // return $this->success("Classroom Stored Successfully" , "Classroom Stored Successfully", 200);
        return redirect()->route('admin.classrooms.index');
    }
    public function show($classroomId)
    {
        $classroom = $this->classroomService->show($this->model, $classroomId);
        return $this->success(["classroom" => $classroom] , "Classroom ID {$classroomId} Retrieved Successfully", 200);
    }
    public function edit($classroomId)
    {
        $classroom = $this->classroomService->show($this->model, $classroomId);

        return view('dashboards.admins.pages.classrooms.edit', compact('classroom'));
    }
    public function update($classroomId, $request)
    {
        $updatedClassroom = $this->classroomService->update($this->model, $classroomId,$request->toArray());
        // return $this->success(["classroom" => $updatedClassroom] , "Classroom ID {$classroomId} Updated Successfully", 200);
        return redirect()->back();

    }
    public function destroy($classroomId)
    {
        $deletedClassroom = $this->classroomService->show($this->model, $classroomId);
        // delete 
        $this->classroomService->delete($this->model, $classroomId);
        // return $this->success(["classroom" => $deletedClassroom], "Classroom ID {$classroomId} Deleted Successfully", 200);
        return $this->index();
    }
}