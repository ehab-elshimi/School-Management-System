<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    use HasFactory;
    protected $table = 'phones';

    protected $fillable = ['phone'];

    public function users()
    {
        return $this->belongsToMany(User::class, 'user_phones');
    }
}
