@extends('layouts.template')
@section('body')
<a href="{{route('veiculo.create')}}">Adicionar Veículo</a>

<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Placa</th>
        <th scope="col">Chassi</th>
        <th scope="col">Modelo</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($veiculos as $item)
        <tr>
            <th scope="row">{{ $item->id }}</th>
                <td>{{ $item->placa }}</td>
                <td>{{ $item->chassi }}</td>
                <td>{{ $item->nome }}</td>
        </tr>
        @endforeach
    </tbody>
  </table>
  @endsection