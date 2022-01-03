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
                    Enregistrer un transfert
                </div>
                <div class="card-body">
                
                <form action="{{ route('lots.store') }}" method="post">

                    @csrf
                    <div class="row">
                        <div class="form-group col-lg-4">
                            <label for="client_id">Client</label>
                            <select class="form-control" name="client_id">
                                <option value=""></option>
                                @foreach ($clients as $client)
                                    <option value="{{$client->id}}" @if(old('client_id') == $client->id) selected @endif>{{$client->nom}}</option>
                                @endforeach
                            </select>
                            @error('client_id')
                                <div class="error">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-lg-4">
                            <label for="fournisseur_id">Fournisseurs</label>
                            <select class="form-control" name="fournisseur_id">
                                <option value=""></option>
                                @foreach ($fournisseurs as $fournisseur)
                                    <option value="{{$fournisseur->id}}" @if(old('fournisseur_id') == $fournisseur->id) selected @endif>{{$fournisseur->nom}}</option>
                                @endforeach
                            </select>
                            @error('fournisseur_id')
                                <div class="error">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-lg-4">
                            <label for="vehicule_id">Vehicules</label>
                            <select class="form-control" name="vehicule_id">
                                <option value=""></option>
                                @foreach ($vehicules as $vehicule)
                                    <option value="{{$vehicule->id}}" @if(old('vehicule_id') == $vehicule->id) selected @endif>{{$vehicule->matricule}}</option>
                                @endforeach
                            </select>
                            @error('vehicule_id')
                                <div class="error">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-lg-4">
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
                        <div class="form-group col-lg-4">
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
                        <div class="form-group col-lg-4">
                            <label for="provenance_id">Provenance</label>
                           <select class="form-control" name="provenance_id">
                               <option value=""></option>
                               @foreach ($provenances as $provenance)
                                    <option value="{{ $provenance->id }}" @if(old('provenance_id') == $provenance->id) selected @endif>{{ $provenance->libelle }}</option>
                               @endforeach
                           </select>
                           @error('provenance_id')
                                <div class="error">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                   
                    <div class="row">

                        <div class="form-group col-lg-4">
                            <label for="campagne_id">Campagne</label>
                            <select class="form-control" name="campagne_id">
                                <option value=""></option>
                                @foreach ($campagnes as $campagne)
                                    <option value="{{$campagne->id}}" @if(old('campagne_id') == $campagne->id) selected @endif>{{$campagne->libelle}}</option>
                                @endforeach
                            </select>
                            @error('campagne_id')
                                <div class="error">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-lg-4">
                            <label for="cooperative_id">Cooperative</label>
                            <select class="form-control" name="cooperative_id">
                                <option value=""></option>
                                @foreach ($cooperatives as $cooperative)
                                    <option value="{{$cooperative->id}}" @if(old('cooperative_id') == $cooperative->id) selected @endif>{{$cooperative->nom}}</option>
                                @endforeach
                            </select>
                            @error('cooperative_id')
                                <div class="error">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-lg-4">
                            <label for="chauffeur_id">Chauffeurs</label>
                            <select class="form-control" name="chauffeur_id">
                                <option value=""></option>
                                @foreach ($chauffeurs as $chauffeur)
                                    <option value="{{$chauffeur->id}}" @if(old('chauffeur_id') == $chauffeur->id) selected @endif>{{$chauffeur->nom}}</option>
                                @endforeach
                            </select>
                            @error('chauffeur_id')
                                <div class="error">{{ $message }}</div>
                            @enderror
                        </div>   

                    </div>

                    <div class="row">

                        <div class="form-group col-lg-4">
                            <label for="analysedechargement_id">Analyse de dechargement</label>
                            <select class="form-control" name="analysedechargement_id">
                                <option value=""></option>
                                @foreach ($analysedechargements as $analysedechargement)
                                    <option value="{{$analysedechargement->id}}" @if(old('analysedechargement_id') == $analysedechargement->id) selected @endif>{{$analysedechargement->libelle}}</option>
                                @endforeach
                            </select>
                            @error('analysedechargement_id')
                                <div class="error">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-lg-4">
                            <label for="analysetransfert_id">Analyse de transfert</label>
                            <select class="form-control" name="analysetransfert_id">
                                <option value=""></option>
                                @foreach ($analysetransferts as $analysetransfert)
                                    <option value="{{$analysetransfert->id}}" @if(old('analysetransfert_id') == $analysetransfert->id) selected @endif>{{$analysetransfert->libelle}}</option>
                                @endforeach
                            </select>
                            @error('analysetransfert_id')
                                <div class="error">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-lg-4">
                            <label for="transfert_id">Transfert</label>
                            <select class="form-control" name="transfert_id">
                                <option value=""></option>
                                @foreach ($transferts as $transfert)
                                    <option value="{{$transfert->id}}" @if(old('transfert_id') == $transfert->id) selected @endif>{{$transfert->libelle}}</option>
                                @endforeach
                            </select>
                            @error('transfert_id')
                                <div class="error">{{ $message }}</div>
                            @enderror
                        </div>   
                    </div>
                    <div class="row">
                        <div class="form-group col-lg-4">
                            <label for="pil_id">pil</label>
                            <select class="form-control" name="pil_id">
                                <option value=""></option>
                                @foreach ($pils as $pil)
                                    <option value="{{$pil->id}}" @if(old('pil_id') == $pil->id) selected @endif>{{$pil->libelle}}</option>
                                @endforeach
                            </select>
                            @error('pil_id')
                                <div class="error">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-lg-4">
                            <label for="code">Code</label>
                            <input type="text" name="code" class="form-control" value="{{ old('code') }}">
                            @error('code')
                                <div class="error">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-lg-4">
                            <label for="emballage">Emballage</label>
                            <input type="text" name="emballage" class="form-control" value="{{ old('emballage') }}">
                            @error('emballage')
                                <div class="error">{{ $message }}</div>
                            @enderror
                        </div>          
                    </div>
                    <div class="row">
                        <div class="form-group col-lg-4">
                            <label for="libelle">libelle</label>
                            <input type="text" name="libelle" class="form-control" value="{{ old('libelle') }}">
                            @error('libelle')
                                <div class="error">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-lg-4">
                            <label for="poids_premier_pese">Premier pesé</label>
                            <input type="number" name="poids_premier_pese" class="form-control" value="{{ old('poids_premier_pese') }}">
                            @error('poids_premier_pese')
                                <div class="error">{{ $message }}</div>
                            @enderror
                        </div>  
                        <div class="form-group col-lg-4">
                            <label for="deuxieme_pese">Deuxième pesé</label>
                            <input type="number" name="deuxieme_pese" class="form-control" value="{{ old('deuxieme_pese') }}">
                            @error('deuxieme_pese')
                                <div class="error">{{ $message }}</div>
                            @enderror
                        </div>  
                    </div>
                    <div class="row">
                        <div class="form-group col-lg-4">
                            <label for="poid_net">Poids net</label>
                            <input type="number" name="poid_net" class="form-control" value="{{ old('poid_net') }}">
                            @error('poid_net')
                                <div class="error">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-lg-4">
                            <label for="peseur">Peseur</label>
                            <input type="text" name="peseur" class="form-control" value="{{ old('peseur') }}">
                            @error('peseur')
                                <div class="error">{{ $message }}</div>
                            @enderror
                        </div>  
                        <div class="form-group col-lg-4">
                            <label for="sac_d">Sacs déchirés</label>
                            <input type="number" name="sac_d" class="form-control" value="{{ old('sac_d') }}">
                            @error('sac_d')
                                <div class="error">{{ $message }}</div>
                            @enderror
                        </div>  
                    </div>
                    <div class="row">
                       
                        <div class="form-group col-lg-4">
                            <label for="sac_tare">Sacs tare</label>
                            <input type="number" name="sac_tare" class="form-control" value="{{ old('sac_tare') }}">
                            @error('sac_tare')
                                <div class="error">{{ $message }}</div>
                            @enderror
                        </div>  
                        <div class="form-group col-lg-4">
                            <label for="autre_tare">Autre tare</label>
                            <input type="number" name="autre_tare" class="form-control" value="{{ old('autre_tare') }}">
                            @error('autre_tare')
                                <div class="error">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-lg-4">
                            <label for="sac_recond">Sacs recond</label>
                            <input type="number" name="sac_recond" class="form-control" value="{{ old('sac_recond') }}">
                            @error('sac_recond')
                                <div class="error">{{ $message }}</div>
                            @enderror
                        </div>               
                    </div>
                    <div class="row">
                        <div class="form-group col-lg-4">
                            <label for="sac_humide">Sacs humide</label>
                            <input type="number" name="sac_humide" class="form-control" value="{{ old('sac_humide') }}">
                            @error('sac_humide')
                                <div class="error">{{ $message }}</div>
                            @enderror
                        </div>    
                        <div class="form-group col-lg-4">
                            <label for="nbr_sac">Nombre de sac</label>
                            <input type="number" name="nbr_sac" class="form-control" value="{{ old('nbr_sac') }}">
                            @error('nbr_sac')
                                <div class="error">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="date_premier_pese">Date pesé 1</label>
                            <input type="datetime-local" name="date_premier_pese" class="form-control @error('date_premier_pese') is-invalid @enderror" value="{{ old('date_premier_pese') }}">
                            @error('date_premier_pese')
                                <div class="error">{{ $message }}</div>
                            @enderror
                        </div>       
                    </div>
                    <div class="row">
                        <div class="form-group col-lg-6">
                            <label for="date_deuxieme_pese">Date pesé 2</label>
                            <input type="datetime-local" name="date_deuxieme_pese" class="form-control @error('date_deuxieme_pese') is-invalid @enderror" value="{{ old('date_deuxieme_pese') }}">
                            @error('date_deuxieme_pese')
                                <div class="error">{{ $message }}</div>
                            @enderror
                        </div> 
                        <div class="form-group col-lg-6">
                            <label for="detail">Detail</label>
                            <textarea class="form-control" name="detail" cols="30" rows="5" placeholder="Contenu du lot">{{ old('detail') }}</textarea>
                            @error('detail')
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