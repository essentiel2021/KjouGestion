<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class ChauffeurRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nom' => ['required','min:5','max:10'],
            'numeroPermis' => $this->method() == 'POST' ? ['required','unique:chauffeurs'] : ['required',Rule::unique('chauffeurs')->ignore($this->chauffeur)],
        ];
    }
}
