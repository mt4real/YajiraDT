<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Yajira extends Model
{

    use HasFactory;

    protected $fillable = [
        'id', 'firstname', 'lastname','email', 'address',
    ];



//     public function getCreatedAtAttribute($date)
// {
//     return Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('Y-M-d');
// }

// public function getUpdatedAtAttribute($date)
// {
//     return Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('Y-M-d');
// }


    
}
