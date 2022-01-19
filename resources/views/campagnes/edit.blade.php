@extends('layouts.main')

@section('content')

    <div class="row">

        <div class="col-lg-2">
        {{-- @include('includes.sidebar') --}}
        </div>

        <div class="col-lg-8">

            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <!-- /.card -->

            <div class="card card-outline-secondary my-4">
                <div class="card-header">
                    Modification de la campagne {{ $campagne->libelle }}
                </div>
                <div class="card-body">
                
                <form action="{{ route('campagnes.update',['campagne' => $campagne->slug]) }}" method="post">

                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="libelle">Libelle</label>
                        <input type="text" name="libelle" class="form-control @error('libelle') is-invalid @enderror" value="{{ old('libelle',$campagne->libelle) }}">
                        @error('libelle')
                            <div class="error">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="annee_encours">Année en cours</label>
                        <input type="date" name="annee_encours" class="form-control @error('annee_encours') is-invalid @enderror" value="{{ old('annee_encours',$campagne->annee_encours) }}">
                        @error('annee_encours')
                            <div class="error">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="annee_suivante">Année suivante</label>
                        <input type="date" name="annee_suivante" class="form-control @error('annee_suivante') is-invalid @enderror" value="{{ old('annee_suivante',$campagne->annee_suivante) }}">
                        @error('annee_suivante')
                            <div class="error">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Modifier</button>
                </form>

                </div>
            </div>
            <!-- /.card -->

        </div>
        <div class="col-lg-2">
            {{-- @include('includes.sidebar') --}}
        </div>
    </div>
@endsection