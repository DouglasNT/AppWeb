@extends('layout')
@section('content')

<section class="container">
    <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/carousel-01.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="assets/carousel-02.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="assets/carousel-03.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>

<section class="container">

    <div class="row" style="margin-top: 50px">
        <div class="col-sm-6 mb-3 mb-sm-0">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Gerencie sua Frota</h5>
                    <p class="card-text">Consulte os dados dos veículos utilizados de sua Frota</p>
                    <a href="{{route('gerenciar-frota')}}" class="btn btn-primary">Gerenciar</a>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Saida do veículo</h5>
                    <p class="card-text">Registre aqui a utilização de um dos veículos de sua frota.</p>
                    <a href="{{route('mostrar-formulario')}}" class="btn btn-primary">Registrar</a>
                </div>
            </div>
        </div>
    </div>

</section>

@endsection
