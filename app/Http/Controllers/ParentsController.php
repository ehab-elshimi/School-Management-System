<?php

namespace App\Http\Controllers;

use App\Http\Requests\ParentRequest;
use App\Models\ParentData;
use App\Models\Phone;
use App\Models\User;
use App\Repos\ParentsRepo;
use App\Traits\FileUploadTrait;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

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
    
    public function store(ParentRequest $request)
    {
        return $this->parentsRepo->store($request);
    }

    public function show(string $id)
    {
        return $this->parentsRepo->show($id);
    }
    public function edit(string $id)
    {
        return $this->parentsRepo->edit($id);
    }
    public function update(ParentRequest $request, string $id)
    {
        $validation = $request->validated();

        return $this->parentsRepo->update($id, $request->toArray());
    }
    public function destroy(string $id)
    {
        return $this->parentsRepo->destroy($id);
    }
    public function getParents()
    {
        return $this->parentsRepo->getParents();
    }
}
