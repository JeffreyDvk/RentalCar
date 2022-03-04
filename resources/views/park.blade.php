@extends('base')
@section("head")
    <style>
        .car-card{
            box-shadow: 0 0 10px rgba(0,0,0,0.4);
        }
        .car-card p{
            font-weight: 600;
            margin-top: 0.5em;
            margin-bottom: 0;
        }
        .car-card span{
            font-weight: 400
        }
        h3{
            margin-top: 2em; 
            margin-bottom: 0.8em;
        }
    </style>
@endsection
@section("content")
    <div>
        <h1>Location de voiture</h1>
        <div>
            <h3>Historique de mes réservations</h3>
            <table class="table table-striped">
                <thead>
                    <th>Id</th>
                    <th>Duree</th>
                    <th>Coût</th>
                    <th>Immatriculation de véhicule</th>
                    <th>Date de location</th>
                    <th>Date de retour</th>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>3</td>
                        <td>750000</td>
                        <td>13AB52</td>
                        <td>13 Janvier 2022 13:22</td>
                        <td>14 Janvier 2020 22:21</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div>
            <h3>Liste des voitures disponibles</h3>
            <div class="filter-list">
                <form class="row g-3">
                    <div class="col-md-3">
                        <select class="form-select">
                            <option value="">Marque</option>
                            <option value="Audi">Audi</option>
                            <option value="BMW">BMW</option>
                            <option value="Citroën">Citroën</option>
                            <option value="Mercedes">Mercedes</option>
                            <option value="Renault">Renault</option>
                            <option value="Peugeot">Peugeot</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <input class="form-control" type="text" placeholder="Nom complet"/>
                    </div>
                    <div class="col-md-3">
                        <input class="form-control" type="number" placeholder="Nombre de place"/>
                    </div>
                    <div class="col-md-3">
                        <input class="form-control" type="number" placeholder="Coût minimum"/>
                    </div>
                    <div class="col-md-3">
                        <input class="form-control" type="number" placeholder="Coût maximum"/>
                    </div>
                </form>
            </div>
            <div class="row mt-4">
                <div class="col-md-3 col-sm-4 col-6 p-2 mt-3">
                    <div class="car-card">
                        <img src="img/car/car.webp" class="w-100" alt="">
                        <div class="car-card__infos p-2">
                            <p>Immatriculation: <span>13367020</span></p>
                            <p>Marque: <span>Citroën</span></p>
                            <p>Nombre de place: <span>7</span></p>
                            <p>Coût de location: <span>115700 F</span></p>
                        </div>
                        <div class="p-2">
                            <button class="car-rent-trigger btn btn-success btn-lg btn-block">Louer</button>
                        </div>
                    </div>
                </div>
                
                
            </div>
            
        </div>
    </div>
@endsection
@section("scripts")

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        $(".car-rent-trigger").on("click",function(){
            console.log("Yo")
            Swal.fire({
                text: 'Pour combien de jour voulez vous réserver le véhicule ?',
                input: 'number',
                showCancelButton: true,
                confirmButtonText: 'Confirmer',
                cancelButtonText: 'Annuler',
                showLoaderOnConfirm: true,
            })
            .then((result,data) => {
                if (result.value > 0) {
                    Swal.fire({
                        text: 'Frais total de location : 2500F',
                        showCancelButton: true,
                        confirmButtonText: 'Payer',
                        cancelButtonText: 'Annuler',
                        showLoaderOnConfirm: true,
                    })
                    .then((result,data) => {
                        
                    })
                } else if (result.isDenied) {
                    Swal.fire('Paramètre incorrect', '', 'error')
                }
            })
        })
    </script>
@endsection