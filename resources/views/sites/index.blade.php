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
                                <th>Détails</th>
                                <th>Modifier</th>
                                <th>supprimer</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Libelle</th>
                                <th>Détails</th>
                                <th>Modifier</th>
                                <th>supprimer</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($sites as $site)
                                <tr>
                                    <td>{{ $site->libelle }}</td>
                                    <td>
                                        <a href="{{ route('sites.show',['site' => $site->slug]) }}" ><i class="fas fa-bars"></i></a>
                                    </td>
                                    <td>
                                        <a href="{{ route('sites.edit',['site' => $site->slug]) }}" ><i class="far fa-edit"></i></a>
                                    </td>
                                    <td>
                                        <form style="display: inline;" action="" method="post">
                                            @method('DELETE')
                                            @csrf
                                           <a href=""></a>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="pagination">
                        {{ $sites->links() }}
                    </div>
                </div>
            </div>
        </div>

    </div>
    
@endsection