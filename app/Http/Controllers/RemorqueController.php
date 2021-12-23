<?php

namespace App\Http\Controllers;

use App\Http\Requests\RemorqueRequest;
use App\Models\Remorque;
use Illuminate\Http\Request;

class RemorqueController extends Controller
{
    protected $perPage = 5;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $remorques = Remorque::orderByDesc('id')->paginate($this->perPage);
        $data = [
            'title' => 'Liste des remorques',
            'description' => 'Retrouvez toutes les remorques de '. config('app.name'),
            'remorques' => $remorques
        ];
        return view('remorques.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'title' => $description = 'Ajouter une nouvelle remorque',
            'description' => $description,
        ];
        return view('remorques.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RemorqueRequest $request)
    {
        $validatedData = $request->validated();
        Remorque::create($validatedData);
        $success = 'remorque ajouté';
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
