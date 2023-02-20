@extends('layout')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 pt-4">
                    @foreach ($referentiels as $referentiel)

                        <div class="card offset-4 col-md-4 p-3 mb-3 ">{{ $referentiel->libelle }} <b class="badge badge-success badge-pill py-2 mt-3">{{ $referentiel->formations_count }} formation(s)</b></div>

                    @endforeach
            </div>
        </div>
    </div>

@endsection 
