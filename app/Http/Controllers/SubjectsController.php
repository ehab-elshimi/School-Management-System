<?php

namespace App\Http\Controllers;

use App\Http\Requests\SubjectRequest;
use App\Repos\SubjectsRepo;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class SubjectsController extends Controller
{
    protected SubjectsRepo $subjectsRepo;

    public function __construct(SubjectsRepo $subjectsRepo)
    {
        $this->subjectsRepo = $subjectsRepo; 
    }
    public function index()
    {
        return $this->subjectsRepo->index();
    }
    public function create()
    {
        return $this->subjectsRepo->create();
    }
    public function store(SubjectRequest $request)
    {
        try {
            return $this->subjectsRepo->store($request->validated());
        } catch (ValidationException $e) {
            return back()->withErrors($e->errors())->withInput();
        }
    }
    public function show(string $id)
    {
        return $this->subjectsRepo->show($id);
    }
    public function edit(string $id)
    {
        return $this->subjectsRepo->edit($id);
    }
    public function update(SubjectRequest $request, string $id)
    {
        try {
            return $this->subjectsRepo->update($id, $request);
        } catch (ValidationException $e) {
            return back()->withErrors($e->errors())->withInput();
        }
    }
    public function destroy(string $id)
    {
        return $this->subjectsRepo->destroy($id);
    }
}
