<html>
@extends('layouts/dashboard')
@section('title','Shitjet')
@section('content')
    <table class="table table-striped ">
        <thead class="thead-dark">
        <tr>
            <th scope="col">Emri Klientit</th>
            <th scope="col">Emri Produktit</th>
            <th scope="col">Qmimi Produktit</th>
            <th scope="col">Sasia Shitjes</th>
            <th scope="col">Qmimi Total</th>
        </tr>
        </thead>
        <tbody>
        @foreach($shitjet as $shitja)

            <tr>
                <th scope="row">{{$shitja->emri_klientit}}</th>
                <td>{{$shitja->emri_produktit}}</td>
                <td>{{$shitja->qmimi_produktit}} $</td>
                <td>{{$shitja->sasia_shitjes}} pcs</td>
                <td>{{$shitja->qmimi_total}} $</td>

            </tr>
        @endforeach
        </tbody>
    </table>

@endsection
</html>
