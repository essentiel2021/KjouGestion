<?php

namespace App\Http\Controllers;

use App\Http\Requests\AnalyseDechargementRequest;
use App\Models\AnalyseDechargement;
use Illuminate\Http\Request;

class AnalyseDechargementController extends Controller
{
    protected $perPage = 5;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $analysesdechargements = AnalyseDechargement::orderByDesc('id')->paginate($this->perPage);
        $data = [
            'title' => 'Liste des analyses de dechargements',
            'description' => 'Retrouvez toutes les analyses de déchargements de '. config('app.name'),
            'analysesdechargements' => $analysesdechargements
        ];
        return view('analyseDechargements.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'title' => $description = 'Ajouter une nouvelle analyse de dechargement',
            'description' => $description,
        ];
        return view('analysedechargements.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AnalyseDechargementRequest $request)
    {
        $validatedData = $request->validated();
        //AnalyseDechargement::create($validatedData);
        AnalyseDechargement::create($validatedData);
        $success = 'analyse de dechargement ajouté';
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
