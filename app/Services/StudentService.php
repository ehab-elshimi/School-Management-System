<?php

namespace App\Services;

use App\Models\Student;
use App\Models\User;
use App\Helpers\DateHelper;
use App\Traits\HttpResponses;

class StudentService extends BaseServices
{
    /**
     * -----------------------------------------------------
     * My Services 
     * -----------------------------------------------------
     * [1]  =>  Store Student Service
     * [2]  =>  Show Student Service
     * [3]  =>  List Students Service
     * [4]  =>  Delete Student Service
     * -----------------------------------------------------
     */
    use HttpResponses;
    protected $model;
    protected UserService $userService;

    public function __construct(UserService $userService)
    {
        $this->model = new Student();
        $this->userService = $userService;
    }
    /**
     * Store Student Service
     * Give Me Only Student Data
     */
    public function storeStudent($data){
        // First => Store As User 
        $user = $this->userService->storeUser($data->all());
        if(isset($user)){
            // Second => Store Data In Table According To Schema 
            $formatStudentStoredData = $this->formatStudentStoredData($data->all(), $user);
            if (!isset($formatStudentStoredData)) {
                return $this->error(["Student Data" => $formatStudentStoredData], "Error When Formatting Data Of Student, Please Check Validation Of This Data", 422);
            }
            try{
                $student = parent::store($this->model, $formatStudentStoredData);
                // Store Formatted Dat
                return $this->showStudent($student->id);
            } catch (\Exception $e) {
                return $this->error("An exception occurred: " . $e->getMessage(), "Error When Stored User Data In Table users", 422);
            }
        }
    }
    /**
     * Show Student Service 
     * Give Me Only Student ID
     */
    public function showStudent($studentId){
        return $this->getStudentData($this->show($this->model, $studentId));
    }
    /**
     * Delete Student Service 
     * Give Me Only Student ID
     */
    public function deleteStudent($studentId){   
        return $studentId;
        $deletedStudent = $this->show($this->model, $studentId);
        // delete student as user 
        $userId = $deletedStudent->user_id;
        $this->userService->deleteUser($userId);     
        parent::delete($this->model, $studentId);  
        return "User Successfully deleted";
    }  
    public function getStudentData(Student $member){
        return [
            "id" => $member->id,
            "student_code" => $member->student_code,
            "date_of_join" => $member->date_of_join,
            "first_name" => $member->user->fname,
            "last_name" => $member->user->lname,
            "email" => $member->user->email,
            "gender" => $member->user->gender,
            "dob" => $member->user->dob,
            "photo" => $member->user->photo,
            "phones" => $member->user->phones->pluck('phone'),
            "address" => $member->address,
            "student_created_at" => $member->created_at,
            "student_updated_at" => $member->updated_at,
        ];
    }
    public function formatStudentStoredData($requestStoredStudent, User $user){
        return [
            'student_code'   => $requestStoredStudent['student_code'],
            'date_of_join'   => DateHelper::processDob($requestStoredStudent['date_of_join']),
            'address'        => $requestStoredStudent['address'],
            'user_id'        => $user->id 
        ];
    }
}