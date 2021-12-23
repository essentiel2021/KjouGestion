@extends('layouts.main')

@section('content')

    <div class="row">
        <div class="col-lg-12">

            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <div class="card card-outline-secondary my-4">
                <div class="card-header">
                    Enregistrer un lot
                </div>
                <div class="card-body">
                
                <form action="{{ route('lots.store') }}" method="post">

                    @csrf
                    <div class="row">
                        <div class="form-group col-lg-6">
                            <label for="client">Client</label>
                            <select class="form-control" name="client">
                                <option value=""></option>
                                @foreach ($clients as $client)
                                    <option value="{{$client->id}}">{{$client->nom}}</option>
                                @endforeach
                            </select>
                            @error('client')
                                <div class="error">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-lg-6">
                            <label for="client">Fournisseurs</label>
                            <select class="form-control" name="client">
                                <option value=""></option>
                                @foreach ($clients as $client)
                                    <option value="{{$client->id}}">{{$client->nom}}</option>
                                @endforeach
                            </select>
                            @error('client')
                                <div class="error">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-lg-6">
                            <label for="libelle">Libelle</label>
                            <input type="text" name="libelle" class="form-control @error('analyseur') is-invalid @enderror" value="{{ old('libelle') }}">
                            @error('analyseur')
                                <div class="error">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-lg-6">
                            <label for="code">Code</label>
                            <input type="text" name="code" class="form-control @error('code') is-invalid @enderror" value="{{ old('code') }}">
                            @error('code')
                                <div class="error">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-lg-6">
                            <label for="peseur">Peseur</label>
                            <input type="text" name="peseur" class="form-control @error('peseur') is-invalid @enderror" value="{{ old('peseur') }}">
                            @error('peseur')
                                <div class="error">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-lg-6">
                            <label for="emballage">Emballage</label>
                            <input type="text" name="emballage" class="form-control @error('emballage') is-invalid @enderror" value="{{ old('emballage') }}">
                            @error('emballage')
                                <div class="error">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-lg-6">
                            <label for="poid_premier">Poids du premier pesé</label>
                            <input type="number" name="poid_premier" class="form-control @error('poid_premier') is-invalid @enderror" value="{{ old('poid_premier') }}">
                            @error('poid_premier')
                                <div class="error">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-lg-6">
                            <label for="poid_deuxieme">Poids du deuxième pesé</label>
                            <input type="number" name="poid_deuxieme" class="form-control @error('poid_deuxieme') is-invalid @enderror" value="{{ old('poid_deuxieme') }}">
                            @error('poid_deuxieme')
                                <div class="error">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-lg-6">
                            <label for="poid_net">Poids net</label>
                            <input type="number" name="pique" class="form-control @error('poid_net') is-invalid @enderror" value="{{ old('poid_net') }}">
                            @error('poid_net')
                                <div class="error">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-lg-6">
                            <label for="sac_dechire">Sacs déchirés</label>
                            <input type="number" name="sac_dechire" class="form-control @error('sac_dechire') is-invalid @enderror" value="{{ old('sac_dechire') }}">
                            @error('sac_dechire')
                                <div class="error">{{ $message }}</div>
                            @enderror
                        </div>

                    </div>
                    <div class="row">
                        <div class="form-group col-lg-6">
                            <label for="tar_sac">Tare sac</label>
                            <input type="number" name="tar_sac" class="form-control @error('tar_sac') is-invalid @enderror" value="{{ old('tar_sac') }}">
                            @error('tar_sac')
                                <div class="error">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-lg-6">
                            <label for="autre_tare">Autre tare</label>
                            <input type="number" name="autre_tare" class="form-control @error('autre_tare') is-invalid @enderror" value="{{ old('autre_tare') }}">
                            @error('autre_tare')
                                <div class="error">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-lg-6">
                            <label for="sac_recond">Sacs recond</label>
                            <input type="number" name="sac_recond" class="form-control @error('sac_recond') is-invalid @enderror" value="{{ old('sac_recond') }}">
                            @error('sac_recond')
                                <div class="error">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-lg-6">
                            <label for="nbre_sac">Nombre de sac</label>
                            <input type="number" name="nbre_sac" class="form-control @error('nbre_sac') is-invalid @enderror" value="{{ old('nbre_sac') }}">
                            @error('nbre_sac')
                                <div class="error">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-lg-6">
                            <label for="sac_humide">Sacs humides</label>
                            <input type="number" name="sac_humide" class="form-control @error('sac_recond') is-invalid @enderror" value="{{ old('sac_humide') }}">
                            @error('sac_humide')
                                <div class="error">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="content">Detail</label>
                            <textarea class="form-control  @error('sac_recond') is-invalid @enderror" name="content" cols="50" rows="5" placeholder="Contenu de l'article">{{ old('content') }}</textarea>
                            @error('content')
                              <div class="error">{{ $message }}</div>
                            @enderror
                          </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Ajouter</button>
                </form>

                </div>
            </div>
            <!-- /.card -->

        </div>
    </div>
@endsection