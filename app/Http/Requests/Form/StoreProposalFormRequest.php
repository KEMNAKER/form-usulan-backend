<?php

namespace App\Http\Requests\Form;

use Illuminate\Foundation\Http\FormRequest;

class StoreProposalFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return ! empty($this->user());
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        return [
            'second_echelon_id' => [
                'required',
                'integer',
                'exists:second_echelons,id',
            ],
            'application_name' => [
                'required',
                'string',
                'max:255',
            ],
            'jfup_proposal_type_ids' => [
                'required',
                'array',
            ],
            'jfup_proposal_type_ids.*' => [
                'required',
                'integer',
                'exists:proposal_types,id',
            ],
            'jfup_priority_level_ids' => [
                'required',
                'array',
            ],
            'jfup_priority_level_ids.*' => [
                'required',
                'integer',
                'exists:priority_levels,id',
            ],
            'jfup_features' => [
                'required',
                'array',
            ],
            'jfup_features.*' => [
                'required',
                'string',
                'max:255',
            ],
            'jfup_statements' => [
                'required',
                'array',
            ],
            'jfup_statements.*' => [
                'required',
                'string',
                'max:5000',
            ],
        ];
    }
}
