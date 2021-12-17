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
                Ajouter un chauffeur
                </div>
                <div class="card-body">
                
                <form action="{{ route('vehicules.store') }}" method="post">

                    @csrf

                    <div class="form-group">
                        <label for="matricule">Numéro matricule</label>
                        <input type="text" name="matricule" class="form-control @error('numeroPermis') is-invalid @enderror" value="{{ old('matricule') }}">
                        @error('matricule')
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