<?php

namespace App\Http\Resources\Form;

use App\Http\Resources\Auth\UserResource;
use App\Http\Resources\Meta\SecondEchelonResource;
use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Http\Resources\Json\JsonResource;
use JsonSerializable;

class ProposalFormResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     */
    public function toArray($request): array|Arrayable|JsonSerializable
    {
        return [
            'id' => $this->id,
            'application_name' => $this->application_name,
            'second_echelon' => new SecondEchelonResource($this->secondEchelon),
            'creator' => new UserResource($this->user),
            'jfups' => JFUPResource::collection($this->jfups),
        ];
    }
}
