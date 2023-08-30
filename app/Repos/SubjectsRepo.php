<?php

namespace App\Repos;

use App\Models\Subject;
use App\Services\SubjectService;
use App\Traits\HttpResponses;

class SubjectsRepo
{   
    use HttpResponses;

    protected SubjectService $subjectService;
    protected $model;
    public function __construct(SubjectService $subjectService)
    {
        $this->model = new Subject();
        $this->subjectService = $subjectService;
    }
    public function index()
    {
        $subjects = $this->subjectService->retrieve(false, $this->model);
        $subjectsCount = $subjects->count();
        // return $subjects;
        return view('dashboards.admins.pages.subjects.index', compact('subjects', 'subjectsCount'));
    }
    public function create()
    {
        return view('dashboards.admins.pages.subjects.create');
    }
    public function store($request)
    {
        $this->subjectService->store($this->model, $request);
        // return $this->success("Subject Stored Successfully" , "Subject Stored Successfully", 200);
        return redirect()->route('admin.subjects.index');
    }
    public function show($subjectId)
    {
        $subject = $this->subjectService->show($this->model, $subjectId);
        return $this->success(["subject" => $subject] , "Subject ID {$subjectId} Retrieved Successfully", 200);
    }
    public function edit($subjectId)
    {
        $subject = $this->subjectService->show($this->model, $subjectId);
        
        return view('dashboards.admins.pages.subjects.edit', compact('subject'));
    }
    public function update($subjectId, $request)
    {
        $updatedSubject = $this->subjectService->update($this->model, $subjectId,$request->toArray());
        return redirect()->back();
        // return $this->success(["subject" => $updatedSubject] , "Subject ID {$subjectId} Updated Successfully", 200);
    }
    public function destroy($subjectId)
    {
        $deletedSubject = $this->subjectService->show($this->model, $subjectId);
        // delete 
        $this->subjectService->delete($this->model, $subjectId);
        // return $this->success(["subject" => $deletedSubject], "Subject ID {$subjectId} Deleted Successfully", 200);
        return $this->index();
    }
}