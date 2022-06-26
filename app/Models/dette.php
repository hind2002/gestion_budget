<?php

namespace App\Models;

use App\Models\dette;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class dette extends Model
{
    use HasFactory;
    protected $fillable=[
        "user_id",
        'date_dette',
        'valeur_dette',
        'a_qui',
    ];
    
}
