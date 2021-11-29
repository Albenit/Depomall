<html>
@extends('partials/bootstrap')
<section class="vh-100" style="background-color: #f8f8f8;">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card shadow-2-strong" style="border-radius: 1rem;">
                    <div class="card-body p-5 ">

                        <h3 class="mb-5">Porosit Produktin</h3>
                        <form method="POST" action="{{route('ruajporosin')}}">
                            @csrf
                            <input type="hidden" name="produkt_id" value="{{$porosiaData->id}}">
                            <div class="form-outline mb-4">
                                <label>Emri Produktit</label>
                                <input type="text" name="emri_produktit" class="form-control" value="{{$porosiaData->emri_produktit}}" readonly />
                            </div>
                            <div class="form-outline mb-4">
                                <label>Qmimi Produktit</label>
                                <input type="number" name="qmimi_produkit" class="form-control" value="{{$porosiaData->qmimi }}" readonly />
                            </div>
                            <div class="form-outline mb-4">
                                <label>Sasia Ne Stok</label>
                                <input type="number" class="form-control" value="{{$porosiaData->sasia }}" readonly />
                            </div>
                            <div class="form-outline mb-4">
                                <label>Sasia Per Porosi</label>
                                <input type="number" name="sasia_produktit" class="form-control" />
                            </div>
                        <div class="form-outline mb-4">
                            <label>Numri Porosis</label>
                            <input type="number" name="nr_porosis" class="form-control"/>
                        </div>
                        <div class="form-outline mb-4">
                            <label>Emri Klientit</label>
                            <input type="text" name="emri_klientit" class="form-control" />
                        </div>
                        <div class="form-outline mb-4">
                            <label>Numri Telefonit</label>
                            <input type="text" name="nr_telefonit" class="form-control" />
                        </div>


                        <button class="btn btn-primary btn-lg btn-block" type="submit">Ruaj Porosin</button>
                        <hr class="my-4">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</html>
