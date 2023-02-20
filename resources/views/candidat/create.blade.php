@extends('layout')

@section('content')
    <div class="container">
        <div class="card my-4 col-md-6" style="margin: 0 auto">
            <div class="card-header bg-success text-light text-bold">Ajouter un candidat</div>
            <div class="card-body">
                    <form action="{{ route('candidat.store') }}" method="POST" id="mon-formulaire">
                    @csrf
                    <div class="card-body">
                        <div class="mt-4 form-group">
                            <div>
                                <label class="h6">Nom</label>
                            </div>
                            <div>
                                <input type="text"  name="nomCandidat" class="form-control" placeholder="Nom du candidat" id="nom">
                            </div>
                        </div>
                        <div class="mt-4 form-group">
                            <div>
                                <label class="h6">Prénom</label>
                            </div>
                            <div>
                                <input type="text" name="prenom" class="form-control" placeholder="Prenom du candidat" id="prenom">
                            </div>
                        </div>
                        <div class="mt-4 form-group">
                            <div>
                                <label class="h6">Email</label>
                            </div>
                            <div>
                                <input type="email" name="email" class="form-control" placeholder="email du candidat" id="email">
                            </div>
                        </div>
                        <div class="mt-4 form-group">
                            <div>
                                <label class="h6">Age</label>
                            </div>
                            <div>
                                <input type="number" name="age" class="form-control" placeholder="Age du candidat" id="age" min="0" max="35">
                            </div>
                        </div>
                        <div class="mt-4 form-group">
                            <div>
                                <label class="h6">Niveau d'étude</label>
                            </div>
                            <div>
                                <input type="text" name="niveauEtude" class="form-control" placeholder="Niveau d'étude du candidat" id="niveau">
                            </div>
                        </div>
                        <div class="mt-4 form-group">
                            <div>
                                <input type="text" name="formations" class="form-control" id="niveau" value="{{ $formation['id'] }}" hidden>
                            </div>
                        </div>
                        <div class="mt-4 form-group">
                            <div>
                                <label class="h6">Sexe</label>
                            </div>
                            <div>
                                <select name="sexe" id="sexe" class="form-control">
                                    <option value="">--Faites votre choix--</option>
                                    <option value="Homme">Homme</option>
                                    <option value="Femme">Femme</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-center ">
                        <button type="submit" class="btn btn-success btn-group-lg">Enregistrer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection