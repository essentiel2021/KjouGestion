<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CampagneRequest;
use App\Models\Campagne;

class CampagneController extends Controller
{
    protected $perPage = 5;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $campagnes = Campagne::orderByDesc('id')->paginate($this->perPage);
        $data = [
            'title' => 'Liste des campagnes',
            'description' => 'Retrouvez toutes les campagnes de '. config('app.name'),
            'campagnes' => $campagnes
        ];
        return view('campagnes.index',$data);
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'title' => $description = 'Ajouter un nouvelle campagne',
            'description' => $description,
        ];
        return view('campagnes.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CampagneRequest $request)
    {
        $validatedData = $request->validated();
        Campagne::create($validatedData);

        $success = 'campagne ajouté';
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
    public function edit(Campagne $campagne)
    {
        $data = [
            'title' => $description = 'Mise à jour du client ' 
            .$campagne->libelle,
            'description' => $description,
            'campagne' => $campagne
        ];
        return view('campagnes.edit',$data);
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
