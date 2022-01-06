<?php

namespace App\Http\Controllers;

use App\Http\Requests\analyseTransfertRequest;
use App\Models\AnalyseTransfert;
use Illuminate\Http\Request;

class AnalyseTransfertController extends Controller
{
    protected $perPage = 5;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $analysetransferts = AnalyseTransfert::orderByDesc('id')->paginate($this->perPage);
        $data = [
            'title' => 'Liste des analyses de transferts',
            'description' => 'Retrouvez toutes les analyses de transferts de '. config('app.name'),
            'analysetransferts' => $analysetransferts
        ];
        return view('analyseTransferts.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'title' => $description = 'Ajouter une nouvelle analyse de transfert',
            'description' => $description,
        ];
        return view('analysetransferts.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(analyseTransfertRequest $request)
    {
        $validatedData = $request->validated();
        AnalyseTransfert::create($validatedData);
        $success = 'analyse de transfert ajouté';
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
    public function edit(AnalyseTransfert $analysetransfert)
    {
        $data = [
            'title' => $description = 'Mise à jour de l\'analyse de transfert ' 
            .$analysetransfert->analyseur,
            'description' => $description,
            'analysetransfert' => $analysetransfert
        ];
        return view('analyseTransferts.edit',$data);
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
