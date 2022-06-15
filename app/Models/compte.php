<?php

namespace App\Models;

use App\Models\User;
use App\Models\revenu;
use App\Models\depense;
use App\Models\transaction;
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
    public function getRouteKeyName()
    {
        return 'id';
    }
    public function depenses()
    {
        return $this->hasMany(depense::class);
    }
    public function revenus()
    {
        return $this->hasMany(revenu::class);
    }
    public function transactions()
    {
        return $this->hasMany(transaction::class);
    }
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
