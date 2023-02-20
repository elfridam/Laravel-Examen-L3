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

                <h1 class="my-5">Choisissez un réferentiel</h1>
                <div class="col-md-12 d-flex">
                    @foreach ($types->referentiels as $referentiel)
                        <div class="mt-4 mx-3 p-5 bg-primary text-white rounded col-md-6">
                            <a href="/referentiels/{{ $referentiel['id'] }}"  class="btn btn-primary text-lg-center">
                                <h1 class="text-md-center">
                                    {{ $referentiel->libelle }}
                                </h1>
                            </a>    
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

@endsection 
