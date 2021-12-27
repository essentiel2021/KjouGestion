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
                            @foreach ($analysesdechargements as $analysesdechargement)
                                <tr>
                                    <td>{{ $analysesdechargement->analyseur }}</td>
                                    <td>{{ $analysesdechargement->th_amande }}</td>
                                    <td>{{ $analysesdechargement->th_cajou }}</td>
                                    <td>{{ $analysesdechargement->outturn }}</td>
                                    <td>{{ $analysesdechargement->grainage }}</td>
                                    <td>{{ $analysesdechargement->huileux }}</td>
                                    <td>{{ $analysesdechargement->pique }}</td>
                                    <td>{{ $analysesdechargement->prix }}</td>
                                    <td>
                                        <a href="" class="btn btn-info">Modifier</a> &nbsp;
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
                        {{ $analysesdechargements->links() }}
                    </div>
                </div>
            </div>
        </div>

    </div>
    
@endsection