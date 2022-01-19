@extends('layouts.main')

@section('content')

    <div class="container-fluid">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Libelle</th>
                                <th>Fournisseur</th>
                                <th>Client</th>
                                <th>Vehicule</th>
                                <th>Chauffeur</th>
                                <th>Site</th>
                                <th>Produit</th>
                                <th>Provenance</th>
                                <th>Poids sortie</th>
                                <th>Poids usine</th>
                                <th>Operations</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Libelle</th>
                                <th>Fournisseur</th>
                                <th>Client</th>
                                <th>Vehicule</th>
                                <th>Chauffeur</th>
                                <th>Site</th>
                                <th>Produit</th>
                                <th>Provenance</th>
                                <th>Poids sortie</th>
                                <th>Poids usine</th>
                                <th>Operations</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($transferts as $transfert)
                                <tr>
                                    <td>{{ $transfert->libelle }}</td>
                                    <td>{{ $transfert->fournisseur->nom }}</td>
                                    <td>{{$transfert->client->nom}}</td>
                                    <td>{{$transfert->vehicule->matricule}}</td>
                                    <td>{{$transfert->chauffeur->nom}}</td>
                                    <td>{{ $transfert->site->libelle }}</td>
                                    <td>{{$transfert->produit->libelle}}</td>
                                    <td>{{$transfert->provenance->libelle}}</td>
                                    <td>{{$transfert->poids_sortie}}</td>
                                    <td>{{ $transfert->poids_usine }}</td>
                                    <td>
                                        <a href="{{route('transferts.edit',['transfert' => $transfert->id])}}" class="btn btn-info">Modifier</a> &nbsp;
                                        <form style="display: inline;" action="" method="post">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" class="btn btn-danger">supprimer</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="pagination">
                        {{ $transferts->links() }}
                    </div>
                </div>
            </div>
        </div>

    </div>
    
@endsection