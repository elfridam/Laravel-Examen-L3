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

                <h1 class="my-5">À quel type de formation souhaitez-vous vous inscrire ?</h1>
                <div class="col-md-12 d-flex">
                    @foreach ($type as $form_type)
                        <div class="mt-4 mx-3 p-5 bg-primary text-white rounded col-md-6">
                            <a href="/types/{{ $form_type['id'] }}" class="btn btn-primary text-xl-center">
                                <h1 class="text-md-center">
                                    {{ $form_type->libelle }}
                                </h1>
                            </a>    
                        </div>
                    @endforeach
                </div>
        </div>
    </div>

@endsection 
