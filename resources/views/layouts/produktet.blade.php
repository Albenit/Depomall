<html>
@extends('layouts/dashboard')

@section('content')
    <div style="margin-left: 900px" data-toggle="modal" data-target="#exampleModal"
         class="d-sm-flex align-items-center justify-content-between mb-4">
        <a class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Rexhistro Produkt</a>
    </div>

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
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Id No</th>
            <th scope="col">Emri Produktit</th>
            <th scope="col">Sasia</th>
            <th scope="col">Qmimi</th>
            <th scope="col">Aksioni</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            <td><button class="btn-outline-success">Dalje</button></td>
        </tr>
        </tbody>
    </table>

@endsection
</html>
