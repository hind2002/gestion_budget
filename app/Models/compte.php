<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class compte extends Model
{
    protected $fillable=[
        'nom',
        'code',
        "user_id",
        "montant_initial",
        'budget',
        'description'
    ];
    /**
     * Get the user that owns the compte
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
