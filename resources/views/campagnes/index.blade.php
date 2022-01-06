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
                                <th>Année en cours</th>
                                <th>Année suivante</th>
                                <th>Operations</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Libelle</th>
                                <th>Année en cours</th>
                                <th>Année suivante</th>
                                <th>Operations</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($campagnes as $campagne)
                                <tr>
                                    <td>{{ $campagne->libelle }}</td>
                                    <td>{{ $campagne->annee_encours }}</td>
                                    <td>{{ $campagne->annee_suivante }}</td>
                                    <td>
                                        <a href="{{route('campagnes.edit',['campagne' => $campagne->slug])}}" class="btn btn-info">Modifier</a> &nbsp;
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
                        {{ $campagnes->links() }}
                    </div>
                </div>
            </div>
        </div>

    </div>
    
@endsection