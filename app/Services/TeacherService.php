<?php

namespace App\Services;

use App\Models\Teacher;

class TeacherService extends BaseServices
{
    protected $model;

    public function __construct()
    {
        $this->model = new Teacher();
    }
    public function getTeacherData(Teacher $member)
    {
        return [
            "id" => $member->id,
            "teacher_code" => $member->teacher_code,
            "first_name" => $member->user->fname,
            "last_name" => $member->user->lname,
            "email" => $member->user->email,
            "gender" => $member->user->gender,
            "dob" => $member->user->dob,
            "photo" => $member->user->photo,
            "phones" => $member->user->phones->pluck('phone'),
            "address" => $member->address,
            "created_at" => $member->created_at,
            "updated_at" => $member->updated_at,
        ];
    }
}