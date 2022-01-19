@extends('layouts.main')

@section('content')

    <div class="row">
        <div class="col-lg-1"></div>
        <div class="col-lg-10">

            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <div class="card card-outline-secondary my-4">
                <div class="card-header">
                    Modification du transfert {{ $transfert->libelle}}
                </div>
                <div class="card-body">
                
                <form action="{{ route('transferts.update',['transfert' => $transfert->id]) }}" method="post">
                    @method('PUT')
                    @csrf
                    <div class="row">
                        <div class="form-group col-lg-6">
                            <label for="vehicule_id">Vehicules</label>
                            <select class="form-control" name="vehicule_id">
                                <option value=""></option>
                                @foreach ($vehicules as $vehicule)
                                    <option value="{{$vehicule->id}}" @if(old('vehicule_id',$transfert->vehicule_id) == $vehicule->id) selected @endif>{{$vehicule->matricule}}</option>
                                @endforeach
                            </select>
                            @error('vehicule_id')
                                <div class="error">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-lg-6">
                            <label for="libelle">Libelle</label>
                            <input type="text" name="libelle" class="form-control" value="{{ old('libelle',$transfert->libelle) }}">
                            @error('libelle')
                                <div class="error">{{ $message }}</div>
                            @enderror

                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-lg-6">
                            <label for="client_id">Client</label>
                            <select class="form-control" name="client_id">
                                <option value=""></option>
                                @foreach ($clients as $client)
                                    <option value="{{$client->id}}" @if(old('client_id',$transfert->client_id) == $client->id) selected @endif>{{$client->nom}}</option>
                                @endforeach
                            </select>
                            @error('client_id')
                                <div class="error">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-lg-6">
                            <label for="fournisseur_id">Fournisseurs</label>
                            <select class="form-control" name="fournisseur_id">
                                <option value=""></option>
                                @foreach ($fournisseurs as $fournisseur)
                                    <option value="{{$fournisseur->id}}" @if(old('fournisseur_id',$transfert->fournisseur_id) == $fournisseur->id) selected @endif>{{$fournisseur->nom}}</option>
                                @endforeach
                            </select>
                            @error('fournisseur_id')
                                <div class="error">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-lg-6">
                            <label for="chauffeur_id">Chauffeurs</label>
                            <select class="form-control" name="chauffeur_id">
                                <option value=""></option>
                                @foreach ($chauffeurs as $chauffeur)
                                    <option value="{{$chauffeur->id}}" @if(old('chauffeur_id',$transfert->chauffeur_id) == $chauffeur->id) selected @endif>{{$chauffeur->nom}}</option>
                                @endforeach
                            </select>
                            @error('chauffeur_id')
                                <div class="error">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-lg-6">
                            <label for="provenance_id">Provenance</label>
                           <select class="form-control" name="provenance_id">
                               <option value=""></option>
                               @foreach ($provenances as $provenance)
                                    <option value="{{ $provenance->id }}" @if(old('provenance_id',$transfert->provenance_id) == $provenance->id) selected @endif>{{ $provenance->libelle }}</option>
                               @endforeach
                           </select>
                           @error('provenance_id')
                                <div class="error">{{ $message }}</div>
                            @enderror
                        </div>

                    </div>

                    <div class="row">
                        <div class="form-group col-lg-6">
                            <label for="site_id">Sites</label>
                            <select class="form-control" name="site_id">
                                <option value=""></option>
                                @foreach ($sites as $site)
                                    <option value="{{$site->id}}" @if(old('site_id') == $site->id) selected @endif>{{$site->libelle}}</option>
                                @endforeach
                            </select>
                            @error('site_id')
                                <div class="error">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-lg-6">
                            <label for="produit_id">Produits</label>
                            <select class="form-control" name="produit_id">
                                <option value=""></option>
                                @foreach ($produits as $produit)
                                    <option value="{{$produit->id}}" @if(old('produit_id') == $produit->id) selected @endif>{{$produit->libelle}}</option>
                                @endforeach
                            </select>
                            @error('produit_id')
                                <div class="error">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                   
                    <div class="row">
                        <div class="form-group col-lg-6">
                            <label for="poids_sortie">Poids sortie</label>
                            <input type="number" name="poids_sortie" class="form-control @error('poids_sortie') is-invalid @enderror" value="{{ old('poids_sortie') }}">
                            @error('poids_sortie')
                                <div class="error">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-lg-6">
                            <label for="poids_usine">Poids usine</label>
                            <input type="number" name="poids_usine" class="form-control @error('poids_usine') is-invalid @enderror" value="{{ old('poids_usine') }}">
                            @error('poids_usine')
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
        <div class="col-lg-1"></div>
    </div>
@endsection