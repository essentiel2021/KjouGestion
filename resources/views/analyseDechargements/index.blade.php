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
                                <th>Analyseur</th>
                                <th>TH amande</th>
                                <th>TH cajou</th>
                                <th>Outturn</th>
                                <th>Grainage</th>
                                <th>Huilleux</th>
                                <th>Pique</th>
                                <th>Prix</th>
                                <th>Operations</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Analyseur</th>
                                <th>TH amande</th>
                                <th>TH cajou</th>
                                <th>Outturn</th>
                                <th>Grainage</th>
                                <th>Huilleux</th>
                                <th>Pique</th>
                                <th>Prix</th>
                                <th>Operations</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($analysesDechargements as $analysesDechargement)
                                <tr>
                                    <td>{{ $analysesDechargement->analyseur }}</td>
                                    <td>{{ $analysesDechargement->th_amande }}</td>
                                    <td>{{ $analysesDechargement->th_cajou }}</td>
                                    <td>{{ $analysesDechargement->outturn }}</td>
                                    <td>{{ $analysesDechargement->grainage }}</td>
                                    <td>{{ $analysesDechargement->huileux }}</td>
                                    <td>{{ $analysesDechargement->pique }}</td>
                                    <td>{{ $analysesDechargement->prix }}</td>
                                    <td>
                                        <a href="{{ route('analysedechargements.edit', ['analysedechargement' => $analysesDechargement->id]) }}" class="btn btn-info">Modifier</a> &nbsp;
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
                        {{ $analysesDechargements->links() }}
                    </div>
                </div>
            </div>
        </div>

    </div>
    
@endsection