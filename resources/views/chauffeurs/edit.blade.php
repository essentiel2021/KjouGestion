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
                 Modification du chauffeur {{$chauffeur->nom}}
                </div>
                <div class="card-body">
                
                <form action="{{ route('chauffeurs.update',['chauffeur' => $chauffeur->slug]) }}" method="post">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="nom">Nom</label>
                        <input type="text" name="nom" class="form-control @error('nom') is-invalid @enderror" value="{{ old('nom',$chauffeur->nom) }}">
                        @error('nom')
                            <div class="error">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="numeroPermis">Numéro du permis</label>
                        <input type="text" name="numeroPermis" class="form-control @error('numeroPermis') is-invalid @enderror" value="{{ old('numeroPermis',$chauffeur->numeroPermis) }}">
                        @error('numeroPermis')
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