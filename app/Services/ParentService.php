<?php

namespace App\Services;

use App\Models\ParentData as ParentModel;
use App\Models\User;
use App\Traits\FileUploadTrait;
use App\Traits\HttpResponses;

class ParentService extends BaseServices
{
    /**
     * -----------------------------------------------------
     * My Services 
     * -----------------------------------------------------
     * [1] => Store Parent Service
     * [2] => Show Parent Service
     * [3] => List Parents Service
     * -----------------------------------------------------
     */
    use HttpResponses, FileUploadTrait;
    protected $model;
    protected UserService $userService;

    public function __construct(UserService $userService)
    {
        $this->model = new ParentModel();
        $this->userService = $userService;
    }
    /**
     * Store Parent Service
     */
    public function storeParent($data){
        // First => Store Parent As User 
        $user = $this->userService->storeUser($data->all());
        if(isset($user)){
            // Second => Store Parent Data As Parent In Table Parents According To Schema 
            $formatParentStoredData = $this->formatParentStoredData($data->all(), $user);
            if (!isset($formatParentStoredData)) {
                return $this->error(["Parent Data" => $formatParentStoredData], "Error When Formatting Data Of Parent, Please Check Validation Of This Data", 422);
            }
            try{
                $parent = parent::store($this->model, $formatParentStoredData);
                // Store Formatted Data OF Parent In parents table
                return $this->success($this->showParent($parent->id) , "Parent Stored Successfully", 200);
            } catch (\Exception $e) {
                return $this->error("An exception occurred: " . $e->getMessage(), "Error When Stored User Data In Table users", 422);
            }
        }
    }
    /**
     * Show Parent Service 
     */
    public function showParent($parentId){
        return $this->getParentData($this->show($this->model, $parentId));
    }
    
    public function getParentData(ParentModel $member)
    {
        return [
            "id" => $member->id,
            "first_name" => $member->user->fname,
            "last_name" => $member->user->lname,
            "email" => $member->user->email,
            "gender" => $member->user->gender,
            "dob" => $member->user->dob,
            "photo" => $member->user->photo,
            "national_id_num" => $member->national_id_num,
            "national_id_face" => $member->national_id_face,
            "national_id_background" => $member->national_id_background,
            "phones" => $member->user->phones->pluck('phone'),
            "address" => $member->address,
            "created_at" => $member->created_at,
            "updated_at" => $member->updated_at
        ];
    }
    public function formatParentStoredData($requestStoredParent, User $user):array
    {
        // Upload Images
        $parentImagesPaths = $this->storeParentImagesInStorage($requestStoredParent);
        return [
            'national_id_num' => $requestStoredParent['national_id_num'],
            'national_id_face' => $parentImagesPaths['national_id_face'],
            'national_id_background' => $parentImagesPaths['national_id_background'],
            'address' => $requestStoredParent['address'],
            'user_id' => $user->id 
        ];
    }
    public function storeParentImagesInStorage($requestImages)
    {
        
        // National ID Face 
        if ($requestImages['national_id_face']) {
            $storagePath = 'public/parents/national_id/faces'; // Update this to your storage path
            $requestData['national_id_face'] = $this->uploadImage($requestImages, 'national_id_face', $storagePath);
        } else {
            // No file uploaded, set image path to null or handle the situation as needed
            $requestData['national_id_face'] = null;
        }
        // National ID Background      
        if ($requestImages['national_id_background']) {
            $storagePath = 'public/parents/national_id/backgrounds'; // Update this to your storage path
            $requestData['national_id_background'] = $this->uploadImage($requestImages, 'national_id_background', $storagePath);
        } else {
            // No file uploaded, set image path to null or handle the situation as needed
            $requestData['national_id_background'] = null;
        }
        return [
            "national_id_face" => $requestData['national_id_face'],
            "national_id_background" => $requestData['national_id_background'],
        ];
    }
    
}