<?php

namespace App\Http\Resources\Meta;

use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Http\Resources\Json\JsonResource;
use JsonSerializable;

class FirstEchelonResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     */
    public function toArray($request): array|Arrayable|JsonSerializable
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
        ];
    }
}
