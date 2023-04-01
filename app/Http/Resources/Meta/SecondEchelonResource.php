<?php

namespace App\Http\Resources\Meta;

use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Http\Resources\Json\JsonResource;
use JsonSerializable;

class SecondEchelonResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     */
    public function toArray($request): array|Arrayable|JsonSerializable
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'first_echelon' => new FirstEchelonResource($this->firstEchelon),
        ];
    }
}
