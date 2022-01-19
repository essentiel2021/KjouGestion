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
                                <th>Code</th>
                                <th>Peseur</th>
                                <th>Emballage</th>
                                <th>Poids net</th>
                                <th>Analyse dechargement</th>
                                <th>Analyse de transfert</th>
                                <th>Operations</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Code</th>
                                <th>Peseur</th>
                                <th>Emballage</th>
                                <th>Poids net</th>
                                <th>Analyse dechargement</th>
                                <th>Analyse de transfert</th>
                                <th>Operations</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($lots as $lot)
                                <tr>
                                    <td>{{ $lot->code }}</td>
                                    <td>{{ $lot->peseur }}</td>
                                    <td>{{$lot->emballage}}</td>
                                    <td>{{$lot->poids_net}}</td>
                                    <td>{{$lot->analyseDechargement->analyseur ?? ''}}</td>
                                    <td>{{ $lot->analyseTransfert->analyseur ?? ''}}</td>
                                    <td>
                                        <a href="{{ route('lots.edit',['lot' => $lot->id]) }}" class="btn btn-info">Modifier</a> &nbsp;
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
                        {{ $lots->links() }}
                    </div>
                </div>
            </div>
        </div>

    </div>
    
@endsection