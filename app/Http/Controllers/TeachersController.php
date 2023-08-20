<?php

namespace App\Http\Controllers;

use App\Http\Requests\TeacherRequest;
use App\Repos\TeachersRepo;
use App\Traits\HttpResponses;
use Illuminate\Http\Request;

class TeachersController extends Controller
{
    use HttpResponses;
    protected TeachersRepo $teachersRepo;

    public function __construct(TeachersRepo $teachersRepo)
    {
        $this->teachersRepo = $teachersRepo; 
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teachers = $this->teachersRepo->getTeachers();
        $countTeachers = $teachers->count();
        return view('dashboards.admins.pages.teachers.index', compact('teachers', 'countTeachers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboards.admins.pages.teachers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TeacherRequest $request)
    {
        return $this->teachersRepo->storeTeacher($request->validated());
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $teacher = $this->teachersRepo->getTeacher($id);
        return response()->json(['teacher' => $teacher], 200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $teacher = $this->teachersRepo->getTeacher($id);
        // return view('dashboards.admins.pages.teachers.edit', compact('teacher'));
        return $this->success(["Teacher"=>$teacher], "Teacher Data Returned Successfully",200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TeacherRequest $request, string $id)
    {
        $validation = $request->validated();

        if ($validation->fails()) {
            return redirect()->back()->withErrors($validation)->withInput();
        }
        $this->teachersRepo->updateTeacher($id, $request->validated());
        return redirect()->route('admin.teachers.index')->with("success", "Teacher Updated Successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->teachersRepo->deleteTeacher($id);
        return redirect()->route('admin.teachers.index')->with("success", "Teacher Deleted Successfully");

    }
}