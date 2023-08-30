<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentRequest;
use App\Repos\StudentsRepo;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class StudentsController extends Controller
{
    protected StudentsRepo $studentsRepo;

    public function __construct(StudentsRepo $studentsRepo)
    {
        $this->studentsRepo = $studentsRepo; 
    }
    public function index()
    {
        return $this->studentsRepo->index();
    }
    public function create()
    {
        return $this->studentsRepo->create();
    }
    public function store(StudentRequest $request)
    {
        try {
            return $this->studentsRepo->store($request);
        } catch (ValidationException $e) {
            return back()->withErrors($e->errors())->withInput();
        }
    }
    public function show(string $id)
    {
        return $this->studentsRepo->show($id);
    }
    public function edit(string $id)
    {
        return $this->studentsRepo->edit($id);
    }
    public function update(StudentRequest $request, string $id)
    {
        try {
            return $this->studentsRepo->update($id, $request);
        } catch (ValidationException $e) {
            return back()->withErrors($e->errors())->withInput();
        }
    }
    public function destroy(string $id)
    {
        return $this->studentsRepo->destroy($id);
    }
}
    

    