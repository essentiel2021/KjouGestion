<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class FournisseurRequest extends FormRequest
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
            'nom' => ['required','min:5'],
            'contact' => $this->method() == 'POST' ? ['required','min:10','max:10','unique:fournisseurs'] : ['required','min:10','max:10',Rule::unique('fournisseurs')->ignore($this->fournisseur)] ,
            'sexe' => ['required']
        ];
    }
}
