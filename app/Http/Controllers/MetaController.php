<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Contracts\Controller;
use App\Http\Resources\Meta\FirstEchelonResource;
use App\Http\Resources\Meta\PriorityLevelResource;
use App\Http\Resources\Meta\ProposalTypeResource;
use App\Http\Resources\Meta\SecondEchelonResource;
use App\Models\FirstEchelon;
use App\Models\PriorityLevel;
use App\Models\ProposalType;
use App\Models\SecondEchelon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class MetaController extends Controller
{
    /**
     * Handle the get first echelons action
     */
    public function getFirstEchelons(): JsonResource
    {
        // get all first echelons
        $firstEchelons = FirstEchelon::all();

        return FirstEchelonResource::collection($firstEchelons);
    }

    /**
     * Handle the get second echelons action
     */
    public function getSecondEchelons(Request $request): JsonResource
    {
        // get the first echelon id
        $firstEchelonID = (int) $request->query('first_echelon');

        // get all second echelons
        $secondEchelons = SecondEchelon::whereFirstEchelonId($firstEchelonID)->get();

        return SecondEchelonResource::collection($secondEchelons);
    }

    /**
     * Handle the get priority levels action
     */
    public function getPriorityLevels(): JsonResource
    {
        // get all priority levels
        $priorityLevels = PriorityLevel::all();

        return PriorityLevelResource::collection($priorityLevels);
    }

    /**
     * Handle the get proposal types action
     */
    public function getProposalTypes(): JsonResource
    {
        // get all proposal types
        $proposalTypes = ProposalType::all();

        return ProposalTypeResource::collection($proposalTypes);
    }
}
