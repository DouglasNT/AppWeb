@extends('layout')
@section('content')

<section class="container m-5">

    <div style="margin-bottom:50px">
        <h1>Alterar Frota</h1>
    </div>

    <section>
        <div style="display: flex; justify-content:center; align-items:center">
            <form class="row g-3" method="POST" action="{{route('alterar-frota', $registrosFrota->id)}}">
                @method('put')
                @csrf
                <div class="col-md-6; shadow p-3 mb-5 bg-body-tertiary rounded">
                    <label for="inputVeiculo" class="form-label">Veiculo</label>
                    <input type="text" name="veiculo" value="{{old('veiculo', $registrosFrota->veiculo)}}"
                        class="form-control" id="inputVeiculo" placeholder="BMW">
                    @error('veiculo')
                    <div class="text-sm-start text-light">*Preencher o campo Veiculo.</div>
                    @enderror
                </div>

                <div class="col-md-6; shadow p-3 mb-5 bg-body-tertiary rounded">
                    <label for="inputMotorista" class="form-label">Motorista</label>
                    <input type="text" name="motorista" value="{{old('motorista', $registrosFrota->motorista)}}"
                        class="form-control" id="inputMotorista" placeholder="jose">
                    @error('motorista')
                    <div class="text-sm-start text light">*Preencher o campo Motorista.</div>
                    @enderror
                </div>

                <div class="col-md-6; shadow p-3 mb-5 bg-body-tertiary rounded">
                    <label for="inputPlaca" class="form-label">Placa</label>
                    <input type="text" name="placa" value="{{old('placa', $registrosFrota->placa)}}"
                        class="form-control" id="inputPlaca" placeholder="sem-0000">
                    @error('placa')
                    <div class="text-sm-start text light">*Preencher o campo Placa.</div>
                    @enderror
                </div>

                <div class="col-md-6; shadow p-3 mb-5 bg-body-tertiary rounded">
                    <label for="inputData" class="form-label">Data</label>
                    <input type="text" name="data" value="{{old('data', $registrosFrota->data)}}" class="form-control"
                        id="inputData" placeholder="01/02/0304">
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
