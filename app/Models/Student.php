<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = ['student_code', 'date_of_join', 'address', 'user_id'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
