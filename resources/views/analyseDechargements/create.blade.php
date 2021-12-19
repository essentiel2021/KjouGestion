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
                    Enregistrer une analyse de dechargement
                </div>
                <div class="card-body">
                
                <form action="{{ route('analysedechargements.store') }}" method="post">

                    @csrf
                    <div class="row">
                        <div class="form-group col-lg-6">
                            <label for="analyseur">Analyste</label>
                            <input type="text" name="analyseur" class="form-control @error('analyseur') is-invalid @enderror" value="{{ old('analyseur') }}">
                            @error('analyseur')
                                <div class="error">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-lg-6">
                            <label for="th_amande">TH Amande</label>
                            <input type="text" name="th_amande" class="form-control @error('th_amande') is-invalid @enderror" value="{{ old('th_amande') }}">
                            @error('th_amande')
                                <div class="error">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-lg-6">
                            <label for="th_cajou">TH Cajou</label>
                            <input type="text" name="th_cajou" class="form-control @error('th_cajou') is-invalid @enderror" value="{{ old('th_cajou') }}">
                            @error('th_cajou')
                                <div class="error">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-lg-6">
                            <label for="outturn">Outturn</label>
                            <input type="text" name="outturn" class="form-control @error('outturn') is-invalid @enderror" value="{{ old('outturn') }}">
                            @error('outturn')
                                <div class="error">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-lg-6">
                            <label for="grainage">Grainage</label>
                            <input type="text" name="grainage" class="form-control @error('grainage') is-invalid @enderror" value="{{ old('grainage') }}">
                            @error('grainage')
                                <div class="error">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-lg-6">
                            <label for="huileux">Huilleux</label>
                            <input type="text" name="huileux" class="form-control @error('huileux') is-invalid @enderror" value="{{ old('huileux') }}">
                            @error('huileux')
                                <div class="error">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-lg-6">
                            <label for="pique">Pique</label>
                            <input type="text" name="pique" class="form-control @error('pique') is-invalid @enderror" value="{{ old('pique') }}">
                            @error('pique')
                                <div class="error">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-lg-6">
                            <label for="prix">Prix</label>
                            <input type="text" name="prix" class="form-control @error('prix') is-invalid @enderror" value="{{ old('prix') }}">
                            @error('prix')
                                <div class="error">{{ $message }}</div>
                            @enderror
                        </div>

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