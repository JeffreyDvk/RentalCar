@extends('base')
@section("content")
    <h1 class="h3 mb-3">Profile utilisateur</h1>
    <div class="">
        <div id="account" >
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Informations personelles</h5>
                </div>
                <div class="card-body">
                    <form>
                        <div class="mb-3 col-md-6">
                            <label class="form-label" for="inputFirstName">Nom et prénoms</label>
                            <input type="text" class="form-control" id="inputFirstName" value="{{ auth()->user()->name }}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="inputEmail4">Email</label>
                            <input type="email" class="form-control" id="inputEmail4" value="{{ auth()->user()->email }}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="inputAddress">Address</label>
                            <input type="text" class="form-control" id="inputAddress" placeholder="">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="inputAddress2">Address 2</label>
                            <input type="text" class="form-control" id="inputAddress2" placeholder="">
                        </div>
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="inputCity">Ville</label>
                                <input type="text" class="form-control" id="inputCity">
                            </div>
                            <div class="mb-3 col-md-4">
                                <label class="form-label" for="inputState">Pays</label>
                                <select id="inputState" class="form-control">
                                    <option selected>Choisir..</option>
                                    <option>...</option>
                                </select>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Modifier</button>
                    </form>
                </div>
            </div>
        </div>
        <div id="password" >
            <div class="card">
                <div class="card-body">
                    <form>
                        <div class="mb-3">
                            <label class="form-label" for="inputPasswordCurrent">Mot de passe actuel</label>
                            <input type="password" class="form-control" id="inputPasswordCurrent">
                            <small><a href="#">Mot de passe oublié ?</a></small>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="inputPasswordNew">Nouveau mot de passe</label>
                            <input type="password" class="form-control" id="inputPasswordNew">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="inputPa  sswordNew2">Confirmer le mot de passe</label>
                            <input type="password" class="form-control" id="inputPasswordNew2">
                        </div>
                        <button type="submit" class="btn btn-primary">Modifier</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection