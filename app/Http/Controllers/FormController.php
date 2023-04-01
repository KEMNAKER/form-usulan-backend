<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Contracts\Controller;
use App\Http\Requests\Form\StoreProposalFormRequest;
use App\Http\Resources\Form\ProposalFormResource;
use App\Models\JFUP;
use App\Models\ProposalForm;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class FormController extends Controller
{
    /**
     * Handle the get proposal forms action
     */
    public function getProposalForms(Request $request): JsonResource
    {
        // get all user's proposal forms
        $proposalForms = ProposalForm::whereUserId($request->user()->id)->get();

        return ProposalFormResource::collection($proposalForms);
    }

    /**
     * Handle the store proposal form action
     */
    public function storeProposalForm(StoreProposalFormRequest $request): JsonResource
    {
        // create the proposal form
        $proposalForm = ProposalForm::updateOrCreate([
            'user_id' => $request->user()->id,
            'second_echelon_id' => $request->second_echelon_id,
            'application_name' => $request->application_name,
        ]);

        // iterate the jfups
        for ($i = 0; $i < count($request->jfup_proposal_type_ids); $i++) {
            // create the jfup
            JFUP::updateOrCreate([
                'proposal_form_id' => $proposalForm->id,
                'proposal_type_id' => $request->jfup_proposal_type_ids[$i],
                'priority_level_id' => $request->jfup_priority_level_ids[$i],
                'feature' => $request->jfup_features[$i],
                'statement' => $request->jfup_statements[$i],
            ]);
        }

        return new ProposalFormResource($proposalForm->fresh());
    }
}
