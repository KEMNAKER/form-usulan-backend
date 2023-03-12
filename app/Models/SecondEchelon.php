<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SecondEchelon extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_echelon_id',
        'name',
    ];

    /**
     * Define the first echelon that associate with second echelon
     */
    public function firstEchelon(): BelongsTo
    {
        return $this->belongsTo(FirstEchelon::class);
    }
}
