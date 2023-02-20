@extends('layout')

@section('content')
    <div class="container">
        <div class="offre-card" style="width: 800px; margin: 0 auto;">
            <form action="{{ route('referentiel.store')}}" method="POST" class="row">
                @csrf
                <div class="form-group col-md-12 my-3">
                    <input type="text" class="form-control" name="libelle" id="libelle" placeholder="Libellé">
                </div>  
                <div class="form-group col-md-12 my-3">
                    <input type="number" class="form-control" name="horaire" placeholder="horaire">
                </div>              
                <div class="form-group col-md-12 my-3">
                    <select class="form-select form-control" id="type_id" name="type_id">
                        <option selected>Type de Formation</option>
                        @foreach ($type_formation as $type)
                        <option value="{{ $type->libelle }}">{{ $type->libelle }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group my-3">
                    <input type="checkbox" class="form-control" name="validated" placeholder="Validé?">
                </div>
                
                <div class="form-group col-md-12 ">
                    <button class="btn btn-success">Enregistrer</button>
                </div>
            </form>
        </div>
    </div>
@endsection