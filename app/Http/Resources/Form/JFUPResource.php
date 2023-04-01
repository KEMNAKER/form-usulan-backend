<?php

namespace App\Http\Resources\Form;

use App\Http\Resources\Meta\PriorityLevelResource;
use App\Http\Resources\Meta\ProposalTypeResource;
use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Http\Resources\Json\JsonResource;
use JsonSerializable;

class JFUPResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     */
    public function toArray($request): array|Arrayable|JsonSerializable
    {
        return [
            'id' => $this->id,
            'proposal_type' => new ProposalTypeResource($this->proposalType),
            'priority_level' => new PriorityLevelResource($this->priorityLevel),
            'feature' => $this->feature,
            'statement' => $this->statement,
        ];
    }
}
