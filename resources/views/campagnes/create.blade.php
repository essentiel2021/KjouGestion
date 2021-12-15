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
                    Ajouter une nouvelle campagne
                </div>
                <div class="card-body">
                
                <form action="{{ route('campagnes.store') }}" method="post">

                    @csrf
                    <div class="form-group">
                        <label for="libelle">Libelle</label>
                        <input type="text" name="libelle" class="form-control @error('libelle') is-invalid @enderror" value="{{ old('libelle') }}">
                        @error('libelle')
                            <div class="error">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="annee_encours">Année en cours</label>
                        <input type="text" name="annee_encours" class="form-control @error('annee_encours') is-invalid @enderror" value="{{ old('annee_encours') }}">
                        @error('annee_encours')
                            <div class="error">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="annee_suivante">Année suivante</label>
                        <input type="text" name="annee_suivante" class="form-control @error('annee_suivante') is-invalid @enderror" value="{{ old('annee_suivante') }}">
                        @error('annee_suivante')
                            <div class="error">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Ajouter</button>
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