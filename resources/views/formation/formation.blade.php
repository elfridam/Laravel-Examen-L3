@extends('layout')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 text-center">
                @if (session('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>
                @endif

                <h1 class="my-5">Formations en {{ $referentiel->libelle }}</h1>
                <div class="col-md-12 d-flex">
                    @foreach ($referentiel->formations as $formation)
                        <div class="col-md-6 card">
                            <div class="card-body">
                                <h4 class="card-title">{{ $formation->nomFormation }} <b class="badge badge-primary">{{ $formation->duree }}h</b></h4>
                                <p class="card-text "> </p>
                                <p class="card-text">{{ $formation->description }} </p>
                                <a href="/formations/{{ $formation['id'] }}" class="btn btn-primary" style="width:200px;">
                                    S'inscrire à la formation
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

@endsection 
