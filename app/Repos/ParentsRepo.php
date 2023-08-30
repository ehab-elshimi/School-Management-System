<?php

namespace App\Repos;

use App\Models\ParentData as ParentModel;
use App\Models\ParentData;
use App\Models\Phone;
use App\Models\User;
use App\Services\ParentService;
use App\Services\UserService;
use App\Traits\FileUploadTrait;
use App\Traits\FormatUserRequest;
use App\Traits\HttpResponses;
use App\Traits\SaveUserPhones;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ParentsRepo
{   
    use HttpResponses, FileUploadTrait, FormatUserRequest, SaveUserPhones;

    protected ParentService $parentService;
    protected $model;
    public function __construct(ParentService $parentService)
    {
        $this->model = new ParentModel();
        $this->parentService = $parentService;
    }
    public function index()
    {
        $parents = $this->parentService->retrieve(false, $this->model)->map(function ($parent) {
            return $this->parentService->getParentData($parent);
        });

        $parentsCount = $parents->count();
        
        return $this->success(["parents" => $parents, "parentsCount" => $parentsCount] , "Parents Retrieved Successfully", 200);
        
        return view('dashboards.admins.pages.parents.index', compact('parents', 'parentsCount'));
    }
    public function create()
    {
        return view('dashboards.admins.pages.parents.create');
    }
    public function store($parentData)
    {
       return $this->parentService->storeParent($parentData);
    }
    public function show($parentId)
    {
        $parent = $this->parentService->showParent($parentId);
        return $this->success(["parent" => $parent] , "Parent ID {$parentId} Retrieved Successfully", 200);
    }
    public function edit($parentId)
    {
        $parent = $this->parentService->show($this->model, $parentId);
        
        return view('dashboards.admins.pages.parents.edit', compact('parent'));
    }
    public function update($parentId, $request)
    {
        $updatedParent = $this->parentService->update($this->model, $parentId,$request->toArray());
        // return redirect()->back();
        return $this->success(["parent" => $updatedParent] , "Parent ID {$parentId} Updated Successfully", 200);
    }
    public function destroy($parentId)
    {
        $deletedParent = $this->parentService->getParentData($this->parentService->show($this->model, $parentId));
        // delete 
        $this->parentService->delete($this->model, $parentId);
        return $this->success(["parent" => $deletedParent], "Parent ID {$parentId} Deleted Successfully", 200);
    }
    public function processDob($rawDob)
    {
        if (!empty($rawDob)) {
            return Carbon::createFromFormat('d-m-Y', $rawDob)->toDateString();
        } else {
            return null;
        }
    }
}