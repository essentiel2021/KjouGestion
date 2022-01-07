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
                Ajouter un site
                </div>
                <div class="card-body">
                
                <form action="{{ route('sites.update',['site' => $site->slug]) }}" method="post">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="nom">Libelle</label>
                        <input type="text" name="libelle" class="form-control @error('libelle') is-invalid @enderror" value="{{ old('libelle',$site->libelle) }}">
                        @error('libelle')
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