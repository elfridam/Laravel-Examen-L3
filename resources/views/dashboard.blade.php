@extends('layout')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @if (session('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>
                @endif
                
                @foreach ($types as $form_type)
                    <div class="card">
                        {{ $form_type->libelle }}
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection 
