<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClassroomRequest;
use App\Repos\ClassroomsRepo;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Validation\ValidationException;

class ClassroomsController extends Controller
{
    protected ClassroomsRepo $classroomsRepo;

    public function __construct(ClassroomsRepo $classroomsRepo)
    {
        $this->classroomsRepo = $classroomsRepo; 
    }
    public function index()
    {
        return $this->classroomsRepo->index();
    }
    public function create()
    {
        return $this->classroomsRepo->create();
    }
    public function store(ClassroomRequest $request)
    {
        try {
            return $this->classroomsRepo->store($request->validated());
        } catch (ValidationException $e) {
            return back()->withErrors($e->errors())->withInput();
        }
    }
    public function show(string $id)
    {
        return $this->classroomsRepo->show($id);
    }
    public function edit(string $id)
    {
        return $this->classroomsRepo->edit($id);
    }
    public function update(ClassroomRequest $request, string $id)
    {
        try {
            return $this->classroomsRepo->update($id, $request);
        } catch (ValidationException $e) {
            return back()->withErrors($e->errors())->withInput();
        }
    }
    public function destroy(string $id)
    {
        return $this->classroomsRepo->destroy($id);
    }
}
