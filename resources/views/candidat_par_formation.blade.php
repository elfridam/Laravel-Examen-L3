@extends('layout')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 pt-4">
                    @foreach ($formations as $formation)

                        <div class="card offset-4 col-md-4 p-3 mb-3 ">{{ $formation->nomFormation }} <b class="badge badge-info badge-pill py-2 mt-3">{{ $formation->candidats_count }} candidat(s)</b></div>

                    @endforeach
            </div>
        </div>
    </div>

@endsection 
