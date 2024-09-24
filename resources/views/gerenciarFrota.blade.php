@extends('layout')
@section('content')

<section class="container m-5">

    <h1>Gerenciar Registros da Frota</h1>


    <form class="row g-3" method="get" action="{{route('gerenciar-frota')}}">



        <div class="col-auto">
            <label for="veiculoFrota" class="visually-hidden">Veiculo:</label>
            <input type="text" class="form-control-plaintext" id="veiculo" name="veiculo" placeholder="BMW">
        </div>

        <div class="col-auto">
            <button type="submit" class="btn btn-primary mb-3">Pesquisar</button>
        </div>
    </form>


    <table class="table">
        <thead>
            <tr>
                <th scope="col">Código</th>
                <th scope="col">Veiculo</th>
                <th scope="col">Motorista</th>
                <th scope="col">Placa</th>
                <th scope="col">Data</th>
                <th scope="col">Alterar</th>
                <th scope="col">Excluir</th>

            </tr>
        </thead>
        <tbody>
            @foreach($registrosFrota as $registrosFrotas)
            <tr>
                <th scope="row">{{$registrosFrotas->id}}</th>
                <td>{{$registrosFrotas->veiculo}}</td>
                <td>{{$registrosFrotas->motorista}}</td>
                <td>{{$registrosFrotas->placa}}</td>
                <td>{{$registrosFrotas->data}}</td>
                <td>
                    <a href="{{route('mostrar-frota-id', $registrosFrotas->id)}}">
                        <button type="button" class="btn btn-primary">X</button>
                    </a>
                </td>
                <td>
                    <form method="Post" action="{{route('apagar-frota', $registrosFrotas->id)}}">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-danger">X</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</section>

@endsection
