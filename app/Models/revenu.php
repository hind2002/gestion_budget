<?php

namespace App\Models;

use App\Models\compte;
use App\Models\revenu;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class revenu extends Model
{
    use HasFactory;
    protected $fillable=[
        'name_r',
        'date',
        "compte_id",
        "valeur_revenu",
        
    ];
    public function compte(): BelongsTo
    {
        return $this->belongsTo(compte::class);
    }
}
