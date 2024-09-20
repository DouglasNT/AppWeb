@extends('layout')
@section('content')

<section class="container m-5">

    <h1>Cadastrar Frota</h1>
    <section>
    <div style="display: flex; justify-content:center; align-items:center; height:50vh">
        <form class="row g-3" method="POST" action="{{route('cadastrar-formulario)}}">
         @csrf
            <div class="col-md-6">
                <label for="inputVeiculo" class="form-label">Veiculo</label>
                <input type="text" name="veiculo" value="{{old('veiculo')}}" class="form-control" id="inputVeiculo" placeholder="Scania">
                @error('veiculo')
                <div class="text-sm-start text-light">*Preencher o campo Veículo.</div>
                @enderror
            </div>

            <div class="col-md-6">
                <label for="inputMotorista" class="form-label">Motorista</label>
                <input type="text" name="motorista" value="{{old('motorista')}}" class="form-control" id="inputMotorista" placeholder="jose">
                @error('motorista')
                <div class="text-sm-start text light">*Preencher o campo Motorista.</div>
                @enderror
            </div>

            <div class="col-md-6">
                <label for="inputPlaca" class="form-label">Placa</label>
                <input type="text" name="placa" value="{{old('placa')}}" class="form-control" id="inputPlaca" placeholder="sem-0000">
                @error('placa')
                <div class="text-sm-start text light">*Preencher o campo Placa.</div>
                @enderror
            </div>

            <div class="col-md-6">
                <label for="inputDlaca" class="form-label">Data</label>
                <input type="text" name="data" value="{{old('data')}}" class="form-control" id="inputData" placeholder="01/02/0304">
                @error('data')
                <div class="text-sm-start text light">*Preencher o campo Data.</div>
                @enderror
            </div>

            <div class="col-12">
                <button type="submit" class="btn btn-primary">Salvar</button>
            </div>
        </form>
    </div>
    </section>
</section>

@endsection