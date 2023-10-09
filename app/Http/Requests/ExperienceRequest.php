<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ExperienceRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'start_date_exp' => 'required',
            'end_date_exp' => 'required',
            'title_exp' => 'required',
            'company_exp' => 'required',
            'desc_exp' => 'required',
        ];
    }

    public function messages(): array
    {
        return [
            'start_date_exp.required' => 'A Start Date Field Is Empty',
            'end_date_exp.required' => 'A End Date Field Is Empty',
            'title_exp.required' => 'A Title Field Is Empty',
            'company_exp.required' => 'A Company Field Is Empty',
            'desc_exp.required' => 'A Description Field Is Empty',
        ];
    }
}
