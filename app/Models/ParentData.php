<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ParentData extends Model
{
    protected $table = 'parent_data';

    use HasFactory;
    protected $fillable = ['national_id_num', 'national_id_face','national_id_background', 'address','user_id'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
