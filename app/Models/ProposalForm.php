<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ProposalForm extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'second_echelon_id',
        'application_name',
    ];

    /**
     * Get the user that associate with proposal form
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the second echelon that associate with proposal form
     */
    public function secondEchelon(): BelongsTo
    {
        return $this->belongsTo(SecondEchelon::class);
    }

    /**
     * Get the jfups that associate with proposal form
     */
    public function jfups(): HasMany
    {
        return $this->hasMany(JFUP::class);
    }
}
