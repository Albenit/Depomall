<html>
@extends('layouts/dashboard')
@section('title','Porosit')
@section('content')
    @if(\Illuminate\Support\Facades\Session::has(('success')))

        <div class="alert alert-success alert-dismissible">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Sukses !</strong>   {!! \Illuminate\Support\Facades\Session::get('success')!!}
        </div>

    @endif

    <table class="table table-striped ">
        <thead class="thead-dark">
        <tr>
            <th scope="col">Emri Klientit</th>
            <th scope="col">Nr Telefonit</th>
            <th scope="col">Nr Porosis</th>
            <th scope="col">Emri Produktit</th>
            <th scope="col">Sasia</th>
            <th scope="col">Qmimi</th>
            <th scope="col">Qmimi Total</th>
            <th scope="col">Aksioni</th>
        </tr>
        </thead>
        <tbody>
        @foreach($porosit as $porosia)
            <tr>
                <th scope="row">{{$porosia->emri_klientit}}</th>
                <td>{{$porosia->nr_telefonit}}</td>
                <td>{{$porosia->nr_porosis}}</td>
                <td>{{$porosia->emri_produktit}}</td>
                <td>{{$porosia->sasia}} pcs</td>
                <td>{{$porosia->qmimi_produktit}} $</td>
                <td>{{$porosia->qmimi_total}} $</td>
                <td> <div>
                        <a href="#" class="btn btn-success">Perfundo</a>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    @endsection
</html>
