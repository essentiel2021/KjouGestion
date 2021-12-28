<?php

namespace App\Http\Controllers;

use App\Models\Site;
use App\Models\Client;
use App\Models\Produit;
use App\Models\Vehicule;
use App\Models\Chauffeur;
use App\Models\Provenance;
use App\Models\Fournisseur;
use Illuminate\Http\Request;
use App\Http\Requests\TransfertRequest;
use App\Models\Transfert;

class TransfertController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $forunisseurs = Fournisseur::get();
        $clients = Client::get();
        $vehicules = Vehicule::get();
        $chauffeurs = Chauffeur::get();
        $sites = Site::get();
        $produits = Produit::get();
        $provenances = Provenance::get();
        $data = [
            'title' => $description = 'Enregistrer un nouveau transfert',
            'description' => $description,
            'clients' => $clients,
            'vehicules' => $vehicules,
            'chauffeurs' => $chauffeurs,
            'sites' => $sites,
            'produits' => $produits,
            'provenances' => $provenances,
            'fournisseurs' => $forunisseurs,
        ];
        return view('transferts.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TransfertRequest $request)
    {
        // $transfert = Transfert::create(request()->validate([
        //     'produit_id' =>['required','exists:produits,id'],
        //     'client_id' =>['required','exists:clients,id'],
        //     'fournisseur_id' =>['required','exists:fournisseurs,id'],
        //     'chauffeur_id' => ['required','exists:chauffeurs,id'],
        //     'vehicule_id' => ['required','exists:vehicules,id'],
        //     'provenance_id' => ['required','exists:provenances,id'],
        //     'site_id' => ['required','exists:sites,id'],
        //     'poids_sortie' => ['required'],
        //     'poids_usine' => ['required']
        // ]));

        // $transfert = Transfert::create([
        //     'fournisseur_id' => request('fournisseur_id'),
        //     'client_id' => request('client_id'),
        //     'vehicule_id' => request('vehicule_id'),
        //     'chauffeur_id' => request('chauffeur_id'),
        //     'site_id' => request('site_id'),
        //     'produit_id' => request('produit_id'),
        //     'provenance_id' => request('provenance_id'),
        //     'poids_sortie' => request('poids_sortie'),
        //     'poids_usine' => request('poids_usine'),
        // ]);

        // $transfert = new Transfert();
        // $transfert->fournisseur_id = request('fournisseur_id');
        // $transfert->client_id = request('client_id');
        // $transfert->vehicule_id = request('vehicule_id');
        // $transfert->chauffeur_id = request('chauffeur_id');
        // $transfert->site_id = request('site_id');
        // $transfert->produit_id = request('produit_id');
        // $transfert->provenance_id = request('provenance_id');
        // $transfert->poids_sortie = request('poids_sortie');
        // $transfert->poids_usine = request('poids_usine');
        // $transfert->save();

        $valitedData = $request->validated();
        Transfert::create($valitedData);
        $success = 'transfert ajouté';
        return back()->withSuccess($success);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
