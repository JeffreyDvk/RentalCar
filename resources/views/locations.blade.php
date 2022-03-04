@extends('base')

@section("content")
        <div>
            <h3>Historique des réservations</h3>
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
@endsection
