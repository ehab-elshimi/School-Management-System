<?php

namespace App\Repos;

use App\Models\ParentData as ParentModel;
use App\Models\ParentData;
use App\Models\Phone;
use App\Models\User;
use App\Services\ParentService;
use App\Traits\FileUploadTrait;
use App\Traits\HttpResponses;
use App\Traits\ImagesTrait;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

class ParentsRepo
{
    use HttpResponses, ImagesTrait, FileUploadTrait;

    protected $model;

    protected ParentService $parentService;

    public function __construct(ParentService $parentService)
    {
        $this->model = new ParentModel();

        $this->parentService = $parentService;
    }
    // List
    public function index()
    {
        $parents = $this->parentService->retrieve(false, $this->model);
        $countParents = $parents->count();
        return $this->success(['parents' => $parents], "Successfully Retrieved Parents", 200);
        // return view('dashboards.admins.pages.parents.index', compact('parents', 'countParents'));
    }
    public function getParents()
    {
        $parents = $this->parentService->retrieve(false, $this->model);
        $countParents = $parents->count();
        return $this->success(['parents' => $parents], "Successfully Retrieved Parents", 200);
    }

    // Create
    public function create()
    {
        return view('dashboards.admins.pages.parents.create');
    }
    // Store
    public function store($request)
    {
        //Parent Photo
        if ($request->hasFile('photo')) {
            $storagePath = 'public/parents/photos'; // Update this to your storage path
            $requestData['photo'] = $this->uploadFile($request, 'photo', $storagePath);
        } else {
            // No file uploaded, set image path to null or handle the situation as needed
            $requestData['photo'] = null;
        }

        // National ID Face 
        if ($request->hasFile('national_id_face')) {
            $storagePath = 'public/parents/national_id/faces'; // Update this to your storage path
            $requestData['national_id_face'] = $this->uploadFile($request, 'national_id_face', $storagePath);
        } else {
            // No file uploaded, set image path to null or handle the situation as needed
            $requestData['national_id_face'] = null;
        }
        // National ID Background      
        if ($request->hasFile('national_id_background')) {
            $storagePath = 'public/parents/national_id/backgrounds'; // Update this to your storage path
            $requestData['national_id_background'] = $this->uploadFile($request, 'national_id_background', $storagePath);
        } else {
            // No file uploaded, set image path to null or handle the situation as needed
            $requestData['national_id_background'] = null;
        }

        // Store
        // Create parent as user 
        $user = User::create([
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'fname' => $request->input('fname'),
            'lname' => $request->input('lname'),
            'gender' => $request->input('gender'),
            'dob' => $this->processDob($request->input('dob')),
            'photo' => isset($requestData['photo']) ? $requestData['photo'] : null,
        ]);


        // Create parent record
        $parent = ParentData::create([
            'national_id_num' => $request->input('national_id_num'),
            'national_id_face' => $requestData['national_id_face'],
            'national_id_background' => $requestData['national_id_background'],
            'address' => $request->input('address'),
            'user_id' => $user->id,
        ]);

        // Find a phone with the provided number
        $phone = Phone::where('phone', $request->input('phone'))->first();

        if ($phone) {
            $user->phones()->attach($phone->id); // Attach the existing phone to the user
        } else {
            // Create a new phone and attach it to the user
            $newPhone = Phone::create(['phone' => $request->input('phone')]);
            $user->phones()->attach($newPhone->id);
        }
    
        return $this->success("Parent Stored Successfully" , "Parent Stored Successfully", 200);
    }
    // Show
    public function show($parentId)
    {
        $parent = $this->parentService->show($this->model, $parentId);
        return $this->success(["parent" => $parent], "Parent Retrieved Successfully", 200);
        // return view('dashboards.admins.pages.parents.show', compact('parent'));
    }
    // Show
    public function edit($parentId)
    {
        $parent = $this->parentService->show($this->model, $parentId);
        return $this->success(["parent" => $parent], "Parent Retrieved Successfully", 200);
        // return view('dashboards.admins.pages.parents.edit', compact('parent'));
    }
    // Update
    public function update($parentId, $data)
    {
        $parent = $this->parentService->update($this->model, $parentId, $data);
        return $this->success(["parent" => $parent], "Parent Updated Successfully", 200);
        // return redirect()->route('admin.parents.index')->with("success", "parent Updated Successfully");
    }
    // Delete
    public function destroy($parentId)
    {
        $this->parentService->delete($this->model, $parentId);
        return $this->success(null, "Parent Deleted Successfully", 200);
        // return redirect()->route('admin.parents.index')->with("success", "Parent Updated Successfully");
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
