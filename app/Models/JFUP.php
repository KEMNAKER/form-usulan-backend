<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class JFUP extends Model
{
    use HasFactory;

    /**
     * Configure the table name
     */
    protected $table = 'jfups';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'proposal_form_id',
        'proposal_type_id',
        'priority_level_id',
        'feature',
        'statement',
    ];

    /**
     * Get the proposal form that associate with jfup
     */
    public function proposalForm(): BelongsTo
    {
        return $this->belongsTo(ProposalForm::class);
    }

    /**
     * Get the proposal type that associate with jfup
     */
    public function proposalType(): BelongsTo
    {
        return $this->belongsTo(ProposalType::class);
    }

    /**
     * Get the priority level that associate with jfup
     */
    public function priorityLevel(): BelongsTo
    {
        return $this->belongsTo(PriorityLevel::class);
    }
}
