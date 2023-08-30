<?php

namespace App\Http\Controllers;

use App\Http\Requests\TeacherRequest;
use App\Repos\TeachersRepo;
use Illuminate\Validation\ValidationException;

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
        try {
            return $this->teachersRepo->store($request);
        } catch (ValidationException $e) {
            return back()->withErrors($e->errors())->withInput();
        }
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
        try {
            return $this->teachersRepo->update($id, $request);
        } catch (ValidationException $e) {
            return back()->withErrors($e->errors())->withInput();
        }
    }
    public function destroy(string $id)
    {
        return $this->teachersRepo->destroy($id);
    }
}