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
                    Modification du fournissuer {{ $fournisseur->nom}}
                </div>
                <div class="card-body">
                
                <form action="{{ route('fournisseurs.update',['fournisseur' => $fournisseur->slug]) }}" method="post">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="nom">nom</label>
                        <input type="text" name="nom" class="form-control @error('nom') is-invalid @enderror" value="{{ old('nom',$fournisseur->nom) }}">
                        @error('nom')
                            <div class="error">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="contact">Contact</label>
                        <input type="text" name="contact" class="form-control @error('nom') is-invalid @enderror" value="{{ old('contact',$fournisseur->contact) }}">
                        @error('contact')
                            <div class="error">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-check">
                        <input class="form-check-input @error('nom') is-invalid @enderror" type="radio" name="sexe" id="masculin" value="M" {{ old('sexe',$fournisseur->sexe) == 'M'?'checked' : ''}}>
                        <label class="form-check-label" for="masculin">
                          Masculin
                        </label>
                    </div>
                    <div class="form-check mb-2">
                        <input class="form-check-input @error('nom') is-invalid @enderror" type="radio" name="sexe" id="feminin" value="F" {{ old('sexe',$fournisseur->sexe) == 'F'?'checked' : ''}}>
                        <label class="form-check-label" for="feminin">
                          Feminin
                        </label>
                    </div>
                    @error('sexe')
                        <div class="error mb-2 ">{{ $message }}</div>
                    @enderror
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