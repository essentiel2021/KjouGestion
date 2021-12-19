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
                    Ajouter un produit
                </div>
                <div class="card-body">
                
                <form action="{{ route('produits.store') }}" method="post">

                    @csrf

                    <div class="form-group">
                        <label for="libelle">Libelle</label>
                        <input type="text" name="libelle" class="form-control @error('libelle') is-invalid @enderror" value="{{ old('libelle') }}">
                        @error('libelle')
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