<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProvenanceRequest;
use App\Models\Provenance;
use Illuminate\Http\Request;

class ProvenanceController extends Controller
{
    protected $perPage = 5;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $provenances = Provenance::orderByDesc('id')->paginate($this->perPage);
        $data = [
            'title' => 'Liste des provenances',
            'description' => 'Retrouvez toutes les provenances de '. config('app.name'),
            'provenances' => $provenances
        ];
        return view('provenances.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'title' => $description = 'Ajouter une nouvelle provenance',
            'description' => $description,
        ];
        return view('provenances.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProvenanceRequest $request)
    {
        $validatedData = $request->validated();
        Provenance::create($validatedData);
        $success = 'provenance ajouté';
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
    public function edit(Provenance $provenance)
    {
        $data = [
            'title' => $description = 'Mise à jour de la provenance ' 
            .$provenance->libelle,
            'description' => $description,
            'provenance' => $provenance
        ];
        return view('provenances.edit',$data);  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProvenanceRequest $request, Provenance $provenance)
    {
        $validatedData = $request->validated();
        $provenance = Provenance::updateOrCreate(['id' => $provenance->id],$validatedData);
        $success = 'Modification effectué avec succès';
        //return back()->withSuccess($success);
        return redirect()->route('provenances.edit',['provenance' => $provenance->slug])->withSuccess($success);
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
