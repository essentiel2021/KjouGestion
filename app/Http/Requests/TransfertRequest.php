<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TransfertRequest extends FormRequest
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
            'produit_id' =>['required','exists:produits,id'],
            'client_id' =>['required','exists:clients,id'],
            'fournisseur_id' =>['required','exists:fournisseurs,id'],
            'chauffeur_id' => ['required','exists:chauffeurs,id'],
            'vehicule_id' => ['required','exists:vehicules,id'],
            'provenance_id' => ['required','exists:provenances,id'],
            'site_id' => ['required','exists:sites,id'],
            'poids_sortie' => ['required'],
            'poids_usine' => ['required']
        ];
    }
}
