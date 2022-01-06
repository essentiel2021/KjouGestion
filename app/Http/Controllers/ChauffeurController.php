<?php

namespace App\Http\Controllers;

use App\Http\Requests\ChauffeurRequest;
use App\Models\Chauffeur;
use Illuminate\Http\Request;

class ChauffeurController extends Controller
{
    protected $perPage = 5;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $chauffeurs = Chauffeur::orderByDesc('id')->paginate($this->perPage);
        $data = [
            'title' => 'Liste des chauffeurs',
            'description' => 'Retrouvez tous les chauffeurs de '. config('app.name'),
            'chauffeurs' => $chauffeurs
        ];
        return view('chauffeurs.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'title' => $description = 'Ajouter un nouveau chauffeur',
            'description' => $description,
        ];
        return view('chauffeurs.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ChauffeurRequest $request)
    {
        $validatedData = $request->validated();
        Chauffeur::create($validatedData);
        $success = 'chauffeur ajouté';
        return back()->withSuccess($success);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Chauffeur $chauffeur)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Chauffeur $chauffeur)
    {
        $data = [
            'title' => $description = 'Mise à jour du chauffeur ' 
            .$chauffeur->nom,
            'description' => $description,
            'chauffeur' => $chauffeur
        ];
        return view('chauffeurs.edit',$data);
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
