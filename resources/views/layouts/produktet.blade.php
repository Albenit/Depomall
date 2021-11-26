<html>
@extends('layouts/dashboard')
@section('title', 'Produktet')
@section('content')
    <div style="margin-left: 20px" data-toggle="modal" data-target="#exampleModal"
         class="d-sm-flex align-items-center justify-content-between mb-4">
        <a class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Rexhistro Produkt</a>
    </div>
    @if(\Illuminate\Support\Facades\Session::has(('success')))

        <div class="alert alert-success alert-dismissible">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Sukses !</strong>   {!! \Illuminate\Support\Facades\Session::get('success')!!}
        </div>

    @endif
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Rexhistro Produktin</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form method="POST" action="{{route('rexhistro_produktin')}}">
                        @csrf
                        <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Emri Produktit</label>
                            <input name="emri_produktit" type="text" class="form-control" id="emri_produktit" aria-describedby="emailHelp" placeholder="Emri Produktit">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Nr Serik</label>
                            <input name="nr_serik" type="number" class="form-control" id="nr_serik" placeholder="Nr Serik">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Sasia</label>
                            <input name="sasia" type="number" class="form-control" id="sasia" placeholder="Sasia">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Qmimi</label>
                            <input name="qmimi" type="number" class="form-control" id="qmimi" placeholder="Qmimi">
                        </div>
                        <div class="modal-footer">
                            <input type="submit" class="btn btn-primary" value="Rexhistro">
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

    <table class="table table-striped">
        <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Emri Produktit</th>
            <th scope="col">Nr Serik</th>
            <th scope="col">Sasia</th>
            <th scope="col">Qmimi</th>
            <th scope="col">Aksioni</th>
        </tr>
        </thead>
        <tbody>
                @foreach($produktet as $produkti)
                <tr>
                    <th scope="row">{{$produkti->id}}</th>
                    <td>{{$produkti->emri_produktit}}</td>
                    <td>{{$produkti->nr_serik}}</td>
                    <td>{{$produkti->sasia}} pcs</td>
                    <td>{{$produkti->qmimi}} $</td>
                    <td> <div>
                            <a href="#" class="btn btn-success">Shitje</a>
                            <a href="{{route('porositprod',['id'=> $produkti->id])}}" class="btn btn-info">Porosit</a>
                        </div>
                    </td>
                </tr>
                @endforeach
        </tbody>
    </table>

@endsection

</html>
