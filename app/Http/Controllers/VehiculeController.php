<?php

namespace App\Http\Controllers;

use App\Http\Requests\VehiculeRequest;
use App\Models\Vehicule;
use Illuminate\Http\Request;

class VehiculeController extends Controller
{
    protected $perPage = 5;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vehicules = Vehicule::orderByDesc('id')->paginate($this->perPage);
        $data = [
            'title' => 'Liste des vehicules',
            'description' => 'Retrouvez tous les vehicules '. config('app.name'),
            'vehicules' => $vehicules
        ];
        return view('vehicules.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'title' => $description = 'Ajouter un nouveau vehicule',
            'description' => $description,
        ];
        return view('vehicules.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(VehiculeRequest $request)
    {
        $validatedData = $request->validated();
        Vehicule::create($validatedData);
        $success = 'vehicule ajouté';
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
    public function edit(Vehicule $vehicule)
    {
        $data = [
            'title' => $description = 'Mise à jour du vehicule ' 
            .$vehicule->libelle,
            'description' => $description,
            'vehicule' => $vehicule
         ]; 
        return view('vehicules.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(VehiculeRequest $request, Vehicule $vehicule)
    {
        $validatedData = $request->validated();
        Vehicule::updateOrCreate(['id' => $vehicule->id],$validatedData);
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
