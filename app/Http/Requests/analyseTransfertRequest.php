<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class analyseTransfertRequest extends FormRequest
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
            'analyseur' => ['required','unique:analysetransferts,analyseur'],
            'libelle' => ['required','unique:analysetransferts,libelle'],
            'th_amande' => ['required'],
            'th_cajou' => ['required'],
            'outturn' => ['required'],
            'grainage' => ['required'],
            'huileux' => ['required'],
            'pique' => ['required'],
            'prix' => ['required']
        ];
    }
}
