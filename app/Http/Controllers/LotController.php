<?php

namespace App\Http\Controllers;

use App\Models\AnalyseDechargement;
use App\Models\AnalyseTransfert;
use App\Models\Campagne;
use App\Models\Chauffeur;
use App\Models\Client;
use App\Models\Cooperative;
use App\Models\Fournisseur;
use App\Models\Pil;
use App\Models\Produit;
use App\Models\Provenance;
use App\Models\Site;
use App\Models\Transfert;
use App\Models\Vehicule;
use Illuminate\Http\Request;

class LotController extends Controller
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
        $campagnes = Campagne::get();
        $cooperatives = Cooperative::get();
        $forunisseurs = Fournisseur::get();
        $clients = Client::get();
        $vehicules = Vehicule::get();
        $chauffeurs = Chauffeur::get();
        $sites = Site::get();
        $produits = Produit::get();
        $provenances = Provenance::get();
        $transferts = Transfert::get();
        $analysedechargements = AnalyseDechargement::get();
        $analysetransferts = AnalyseTransfert::get();
        $pils = Pil::get();
        $data = [
            'title' => $description = 'Ajouter un nouveau lot',
            'description' => $description,
            'campagnes' => $campagnes,
            'cooperatives' => $cooperatives,
            'fournisseurs' => $forunisseurs,
            'clients' => $clients,
            'vehicules' => $vehicules,
            'chauffeurs' => $chauffeurs,
            'sites' => $sites,
            'produits' => $produits,
            'provenances' => $provenances,
            'transferts' => $transferts,
            'analysedechargements' =>$analysedechargements,
            'analysetransferts' =>$analysetransferts,
            'pils' => $pils
        ];
        return view('lots.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
