<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LotRequest extends FormRequest
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
            'analysetransfert_id' => ['required','exists:analysetransferts,id'],
            'cooperative_id' => ['required','exists:cooperatives,id'],
            'campagne_id' => ['required','exists:campagnes,id'],
            'transfert_id' => ['required','exists:transferts,id'],
            'analysedechargement_id' => ['required','exists:analysedechargements,id'],
            'analysetransfert_id' => ['required','exists:analysetransferts,id'],
            'pil_id' => ['required','exists:pils,id'],
            'code' => ['required'],
            'emballage' => ['required'],
            'peseur' => ['required'],
            'libelle' => ['required'],
            'poids_premier_pese' => ['required'],
            'poids_deuxieme_pese' => ['required'],
            'poids_net' => ['required'],
            'sacs_dechire' => ['required'],
            'tare_sacs' => ['required'],
            'autre_tare' => ['required'],
            'sacs_recond' => ['required'],
            'nbre_sacs' => ['required'],
            'sacs_humide' => ['required'],
            'detail' => ['required'],
            'date_premier_pese' => ['required'],
            'date_deuxieme_pese' => ['required'],
        ];
    }
}
