<?php

namespace App\Services;

use App\Models\User;
use App\Traits\FileUploadTrait;
use App\Traits\HttpResponses;
use Illuminate\Support\Facades\Hash;
use App\Helpers\DateHelper;
use App\Traits\SaveUserPhones;

class UserService extends BaseServices
{
    /**
     * -----------------------------------------------------
     * My Services 
     * -----------------------------------------------------
     * [1]  =>  Store User Service
     * [2]  =>  Show User Service
     * [3]  =>  List Users Service
     * [4]  =>  Delete User Service
     * -----------------------------------------------------
     */
    use HttpResponses, FileUploadTrait, SaveUserPhones;

    protected $model;

    public function __construct()
    {
        $this->model = new User();
    }
    /**
     * Store User Service
     */
    public function storeUser(array $requestStoredUser)
    {
        $data = $this->formatUserStoredData($requestStoredUser);

        if (!isset($data)) {
            return $this->error(["User Data" => $requestStoredUser], "Error When Formatting Data Of User, Please Check Validation Of This Data", 422);
        }
        try{
            // Store Formatted Data OF User In users table
            $user = parent::store($this->model, $data);
            // User Phones
            $this->saveUserPhones($user, $requestStoredUser["phone"]);
            return $this->show($this->model, $user->id);
        } catch (\Exception $e) {
            return $this->error("An exception occurred: " . $e->getMessage(), "Error When Stored User Data In Table users", 422);
        }
    }
    public function deleteUser($userId){
        return parent::delete($this->model, $userId);
    }
    public function formatUserStoredData($userStoredData)
    {
        //Parent Photo
        if (isset($userStoredData["photo"])) {
            $storagePath = 'public/users/photos'; // Update this to your storage path
            $userStoredData['photo'] = $this->uploadImage($userStoredData, 'photo', $storagePath);
        } else {
            // No file uploaded
            $userStoredData['photo'] = null;
        }
        //Format User Data



        return [
            'email' => $userStoredData['email'],
            'password' => Hash::make($userStoredData['password']),
            'fname' => $userStoredData['fname'],
            'lname' => $userStoredData['lname'],
            'gender' => $userStoredData['gender'],
            
            'dob' => DateHelper::processDob($userStoredData['dob']),
            'photo' => isset($userStoredData['photo']) ? $userStoredData['photo'] : null,
        ];
    }
}