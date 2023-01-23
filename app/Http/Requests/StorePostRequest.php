<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nom' => 'required|max:255',
            'contrat_type' => 'required',
            'context' => 'required',
            'mission' => 'required',
            'qualifications' => 'required',
            'niveauExperience' => 'required',
            'niveauEtude' => 'required',
           'dateLimite' => 'required|date|after:tomorrow'

        ];
    }
}
