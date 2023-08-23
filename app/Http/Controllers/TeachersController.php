<?php

namespace App\Http\Controllers;

use App\Http\Requests\TeacherRequest;
use App\Repos\TeachersRepo;

class TeachersController extends Controller
{
    protected TeachersRepo $teachersRepo;

    public function __construct(TeachersRepo $teachersRepo)
    {
        $this->teachersRepo = $teachersRepo; 
    }

    public function index()
    {
        return $this->teachersRepo->index();
    }
    public function create()
    {
        return $this->teachersRepo->create();
    }
    public function store(TeacherRequest $request)
    {
        $validation = $request->validated();

        return $this->teachersRepo->store($request->toArray());
    }
    public function show(string $id)
    {
        return $this->teachersRepo->show($id);
    }
    public function edit(string $id)
    {
        return $this->teachersRepo->edit($id);
    }
    public function update(TeacherRequest $request, string $id)
    {
        $validation = $request->validated();

        return $this->teachersRepo->update($id, $request->toArray());
    }
    public function destroy(string $id)
    {
        return $this->teachersRepo->destroy($id);
    }
    public function getTeachers()
    {
        return $this->teachersRepo->getTeachers();
    }
}