<?php

namespace App\Http\Controllers;

use App\Http\Requests\LotRequest;
use App\Models\AnalyseDechargement;
use App\Models\AnalyseTransfert;
use App\Models\Campagne;
use App\Models\Chauffeur;
use App\Models\Client;
use App\Models\Cooperative;
use App\Models\Fournisseur;
use App\Models\Lot;
use App\Models\Pil;
use App\Models\Produit;
use App\Models\Provenance;
use App\Models\Site;
use App\Models\Transfert;
use App\Models\Vehicule;
use Illuminate\Http\Request;

class LotController extends Controller
{
    protected $perPage = 5;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lots = Chauffeur::orderByDesc('id')->paginate($this->perPage);
        $data = [
            'title' => 'Liste des lots',
            'description' => 'Retrouvez tous les lots de '. config('app.name'),
            'lots' => $lots
        ];
        return view('lots.index',$data);
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
    public function store(LotRequest $request)
    {
        $lot = new Lot();
        $lot->campagne_id = request('campagne_id');
        $lot->fournisseur_id = request('fournisseur_id');
        $lot->client_id = request('client_id');
        $lot->vehicule_id = request('vehicule_id');
        $lot->chauffeur_id = request('chauffeur_id');
        $lot->site_id = request('site_id');
        $lot->produit_id = request('produit_id');
        $lot->provenance_id = request('provenance_id');
        $lot->transfert_id = request('transfert_id');
        $lot->pil_id = request('pil_id');
        $lot->cooperative_id = request('cooperative_id');
        $lot->analysedechargement_id = request('analysedechargement_id');
        $lot->analysetransfert_id = request('analysetransfert_id');
        $lot->code = request('code');
        $lot->nbre_sacs = request('nbr_sac');
        $lot->emballage = request('emballage');
        $lot->poids_premier_pese = request('poids_premier_pese');
        dump($lot->poids_premier_pese);
        $lot->poids_deuxieme_pese = request('deuxieme_pese');
        dd($lot->poids_deuxieme_pese);
        $lot->poids_net = request('poid_net');
        $lot->peseur = request('peseur');
        $lot->sacs_dechire = request('sac_d');
        $lot->tare_sacs = request('sac_tare');
        $lot->autre_tare = request('autre_tare');
        $lot->sacs_recond = request('sac_recond');
        $lot->sacs_humide = request('sac_humide');
        $lot->detail = request('detail');
        $lot->libelle = request('libelle');
        $lot->date_premier_pese = request('date_premier_pese');
        $lot->date_deuxieme_pese = request('date_deuxieme_pese');
        $lot->save();
        // $valitedData = $request->validated();
        // Lot::create($valitedData);
        
        $success = 'lot ajouté';
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
