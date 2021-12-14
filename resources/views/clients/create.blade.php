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
                Ajouter un client
                </div>
                <div class="card-body">
                
                <form action="{{ route('clients.store') }}" method="post">

                    @csrf

                    <div class="form-group">
                    <label for="nom">nom</label>
                    <input type="text" name="nom" class="form-control" value="{{ old('nom') }}">
                    @error('nom')
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