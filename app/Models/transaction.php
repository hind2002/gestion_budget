<?php

namespace App\Models;

use App\Models\compte;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class transaction extends Model
{
    use HasFactory;
    protected $fillable=[
        'montant',
        'sens',
        'compte_id'
    ];


    public function compte(): BelongsTo
    {
        return $this->belongsTo(compte::class);
    }
}

