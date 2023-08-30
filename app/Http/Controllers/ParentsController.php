<?php

namespace App\Http\Controllers;

use App\Http\Requests\ParentDataRequest;
use App\Repos\ParentsRepo;
use Illuminate\Validation\ValidationException;

class ParentsController extends Controller
{
    protected ParentsRepo $parentsRepo;

    public function __construct(ParentsRepo $parentsRepo)
    {
        $this->parentsRepo = $parentsRepo;
    }
    public function index()
    {
        return $this->parentsRepo->index();
    }
    public function create()
    {
        return $this->parentsRepo->create();
    }
    public function store(ParentDataRequest $request)
    {
        try {
            return $this->parentsRepo->store( $request);
        } catch (ValidationException $e) {
            return back()->withErrors($e->errors())->withInput();
        }
    }
    public function show(string $id)
    {
        return $this->parentsRepo->show($id);
    }
    public function edit(string $id)
    {
        return $this->parentsRepo->edit($id);
    }
    public function update(ParentDataRequest $request, string $id)
    {
        try {
            return $this->parentsRepo->update($id, $request);
        } catch (ValidationException $e) {
            return back()->withErrors($e->errors())->withInput();
        }
    }
    public function destroy(string $id)
    {
        return $this->parentsRepo->destroy($id);
    }
}
