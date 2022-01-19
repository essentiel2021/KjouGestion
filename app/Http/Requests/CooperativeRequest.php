<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CooperativeRequest extends FormRequest
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
            'nom' => $this->method() == 'POST' ? ['required','min:5','max:10','unique:cooperatives,nom'] :
            ['required','min:5','max:10',Rule::unique('cooperatives')->ignore($this->cooperative)] ,
            'libelle' => ['required'],
            'sigle' =>['required','max:5','unique:cooperatives,sigle']
        ];
    }
}
