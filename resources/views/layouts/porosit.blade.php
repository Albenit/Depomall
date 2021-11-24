<html>
@extends('partials/bootstrap')
<section class="vh-100" style="background-color: #f8f8f8;">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card shadow-2-strong" style="border-radius: 1rem;">
                    <div class="card-body p-5 text-center">

                        <h3 class="mb-5">Porosit Produktin</h3>
                        <form method="POST" action="{{route('ruajporosin')}}">
                            @csrf
                            <input type="hidden" value="{{$id}}">
                        <div class="form-outline mb-4">
                            <input type="number" name="nr_porosis" class="form-control" placeholder="Numri Porosis"/>
                        </div>
                        <div class="form-outline mb-4">
                            <input type="text" name="emri_klientit" class="form-control" placeholder="Emri Klientit" />
                        </div>
                        <div class="form-outline mb-4">
                            <input type="text" name="nr_telefonit" class="form-control" placeholder="Numri Telefonit" />
                        </div>
                        <div class="form-outline mb-4">
                            <input type="text" name="emri_produktit" class="form-control" placeholder="Emri Produktit" />
                        </div>
                        <div class="form-outline mb-4">
                            <input type="number" name="sasia_produktit" class="form-control" placeholder="Sasia Produktit" />
                        </div>
                        <div class="form-outline mb-4">
                            <input type="number" name="qmimi_produkit" class="form-control" placeholder="Qmimi Produktit" />
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
