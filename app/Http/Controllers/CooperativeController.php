<?php

namespace App\Http\Controllers;

use App\Http\Requests\CooperativeRequest;
use App\Models\Cooperative;
use Illuminate\Http\Request;

class CooperativeController extends Controller
{
    protected $perPage = 5; 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cooperatives = Cooperative::orderByDesc('id')->paginate($this->perPage);
        $data = [
            'title' => 'Liste des coopératives',
            'description' => 'Retrouvez toutes les cooperatives de '. config('app.name'),
            'cooperatives' => $cooperatives
        ];
        return view('cooperatives.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'title' => $description = 'Ajouter un nouvelle cooperative',
            'description' => $description,
        ];
        return view('cooperatives.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CooperativeRequest $request)
    {
        $validatedData = $request->validated();
        Cooperative::create($validatedData);
        $success = 'cooperative ajouté';
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
    public function edit(Cooperative $cooperative)
    {
        $data = [
            'title' => $description = 'Mise à jour de la cooperative' 
            .$cooperative->nom,
            'description' => $description,
            'cooperative' => $cooperative
        ];
        return view('cooperatives.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CooperativeRequest $request, Cooperative $cooperative)
    {
        $validatedData = $request->validated();
        Cooperative::updateOrCreate(['id' => $cooperative->id],$validatedData);
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
