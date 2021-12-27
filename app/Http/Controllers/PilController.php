<?php

namespace App\Http\Controllers;

use App\Http\Requests\PilRequest;
use App\Models\Pil;
use Illuminate\Http\Request;

class PilController extends Controller
{
    protected $perPage = 5;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pils = Pil::orderByDesc('id')->paginate($this->perPage);
        $data = [
            'title' => 'Liste des pils',
            'description' => 'Retrouvez tous les pils de '. config('app.name'),
            'pils' => $pils
        ];
        return view('pils.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'title' => $description = 'Ajouter un nouveau pil',
            'description' => $description,
        ];
        return view('pils.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PilRequest $request)
    {
        $validatedData = $request->validated();
        Pil::create($validatedData);
        $success = 'pil ajouté';
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
    public function edit(Pil $pil)
    {
        dd($pil);
        $data = [
            'title' => $description = 'Mise à jour du pil ' 
            .$pil->libelle,
            'description' => $description,
            'pil' => $pil
        ];
        return view('pils.edit',$data);  
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
