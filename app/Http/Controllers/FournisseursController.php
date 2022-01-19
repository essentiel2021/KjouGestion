<?php

namespace App\Http\Controllers;

use App\Http\Requests\FournisseurRequest;
use App\Models\Fournisseur;
use Illuminate\Http\Request;

class FournisseursController extends Controller
{
    protected $perPage = 5;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fournisseurs = Fournisseur::orderByDesc('id')->paginate($this->perPage);
        $data = [
            'title' => 'Liste des fournisseurs',
            'description' => 'Retrouvez toutes les fournisseurs de '. config('app.name'),
            'fournisseurs' => $fournisseurs
        ];
        return view('fournisseurs.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'title' => $description = 'Ajouter un nouveau fournisseur',
            'description' => $description,
        ];
        return view('fournisseurs.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FournisseurRequest $request)
    {
        $validatedData = $request->validated();
        Fournisseur::create($validatedData);
        $success = 'fournisseur ajouté';
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
    public function edit(Fournisseur $fournisseur)
    {
        $data = [
            'title' => $description = 'Mise à jour du fournisseur ' 
            .$fournisseur->nom,
            'description' => $description,
            'fournisseur' => $fournisseur
        ];
        return view('fournisseurs.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(FournisseurRequest $request, Fournisseur $fournisseur)
    {
        $validatedData = $request->validated();
        Fournisseur::updateOrCreate(['id' => $fournisseur->id],$validatedData);
        $success = 'Modification effectué avec succès';
        return back()->withSuccess($success);
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
