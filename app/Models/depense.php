<?php

namespace App\Models;

use App\Models\compte;
use App\Models\depense;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class depense extends Model
{
    use HasFactory;
    protected $fillable=[
        'name_d',
        'date_d',
        "compte_id",
        "valeur_depense_d",
        'description'
    ];
    
    /**
     * Get the compte that owns the depense
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function compte(): BelongsTo
    {
        return $this->belongsTo(compte::class);
    }
    /**
     * Get all of the comments for the depense
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    
}
/**
 * Get all of the comments for the depense
 *
 * @return \Illuminate\Database\Eloquent\Relations\HasMany
 */
