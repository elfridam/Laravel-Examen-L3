@extends('layout')



@section('content')

    <main class="login-form">

        <div class="cotainer">

            <div class="row justify-content-center">

                <div class="col-md-8">

                    <div class="card">

                        <div class="card-header">Register</div>

                        <div class="card-body">



                            <form action="{{ route('register.post') }}" method="POST">

                                @csrf

                                <div class="form-group row">
                                    <label for="nom" class="col-md-4 col-form-label text-md-right">nom</label>
                                    <div class="col-md-6">
                                        <input type="text" id="nom" class="form-control" name="nom" required autofocus>
                                        @if ($errors->has('nom'))
                                            <span class="text-danger">{{ $errors->first('nom') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="prenom" class="col-md-4 col-form-label text-md-right">prenom</label>
                                    <div class="col-md-6">
                                        <input type="text" id="prenom" class="form-control" name="prenom" required autofocus>
                                        @if ($errors->has('prenom'))
                                            <span class="text-danger">{{ $errors->first('prenom') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="email_address" class="col-md-4 col-form-label text-md-right">E-Mail</label>
                                    <div class="col-md-6">
                                        <input type="text" id="email_address" class="form-control" name="email" required autofocus>
                                        @if ($errors->has('email'))
                                            <span class="text-danger">{{ $errors->first('email') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password" class="col-md-4 col-form-label text-md-right">Mot de passe</label>
                                    <div class="col-md-6">
                                        <input type="password" id="password" class="form-control" name="password" required>
                                        @if ($errors->has('password'))
                                            <span class="text-danger">{{ $errors->first('password') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="age" class="col-md-4 col-form-label text-md-right">age</label>
                                    <div class="col-md-6">
                                        <input type="number" id="age" class="form-control" name="age" required autofocus>
                                        @if ($errors->has('age'))
                                            <span class="text-danger">{{ $errors->first('age') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="niveau_etude" class="col-md-4 col-form-label text-md-right">Niveau d'étude</label>
                                    <div class="col-md-6">
                                        <input type="text" id="niveau_etude" class="form-control" name="niveau_etude" required autofocus>
                                        @if ($errors->has('niveau_etude'))
                                            <span class="text-danger">{{ $errors->first('niveau_etude') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="sexe" class="col-md-4 col-form-label text-md-right">Sexe</label>
                                    <div class="col-md-6">
                                        <select class="form-control" id="sexe" name="sexe">
                                            <option value=""></option>
                                            <option value="homme">Homme</option>
                                            <option value="femme">Femme</option>
                                        </select>
                                        @if ($errors->has('sexe'))
                                            <span class="text-danger">{{ $errors->first('sexe') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-6 offset-md-4">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="remember">Se souvenir de moi
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        S'inscrire
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection
