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
                                <th>Nom du chauffeur</th>
                                <th>Numero du permis</th>
                                <th>Operations</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Nom du chauffeur</th>
                                <th>Numero du permis</th>
                                <th>Operations</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($chauffeurs as $chauffeur)
                                <tr>
                                    <td>{{ $chauffeur->nom }}</td>
                                    <td>{{ $chauffeur->numeroPermis }}</td>
                                    <td>
                                        <a href="{{ route('chauffeurs.edit',['chauffeur' => $chauffeur->slug]) }}" class="btn btn-info">Modifier</a> &nbsp;
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
                        {{ $chauffeurs->links() }}
                    </div>
                </div>
            </div>
        </div>

    </div>
    
@endsection