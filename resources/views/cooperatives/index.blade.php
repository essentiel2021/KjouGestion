@extends('layouts.main')

@section('content')

    <div class="container-fluid">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            
            <div class="card-body">
                <h2>Coopérative</h2>
                <div class="bg-gray-100 p-3 mb-3">
                    <a href="{{ route('campagnes.create') }}" class="btn btn-success">Nouvelle coopérative</a>
                </div>
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
                            @foreach ($cooperatives as $cooperative)
                               <tr>
                                   <td>{{$cooperative->nom}}</td>
                                   <td>
                                    <a href="{{ route('cooperatives.show',['cooperative' => $cooperative->slug]) }}" ><i class="fas fa-bars"></i></a>
                                   </td>
                                   <td>
                                    <a href="{{ route('cooperatives.edit',['cooperative' => $cooperative->slug]) }}" ><i class="far fa-edit"></i></a>
                                   </td>
                                   <td>
                                    <form style="display: inline;" action="" method="post">
                                        @method('DELETE')
                                         @csrf
                                        <a href="">
                                            <i class="fas fa-trash-alt"></i>
                                        </a>
                                    </form>

                                   </td>
                               </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="pagination">
                        {{ $cooperatives->links() }}
                    </div>
                </div>
            </div>
        </div>

    </div>
    
@endsection