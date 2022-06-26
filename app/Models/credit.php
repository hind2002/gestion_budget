<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\credit;

class credit extends Model
{
    use HasFactory;
    protected $fillable=[
        "user_id",
        'date_credit',
        'valeur_credit',
        'de_qui',
        
    ];
    
}
