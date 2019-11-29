@extends('layouts.template')

@section('body')

<form action="#" method="POST">
        <div>
            <label for="_placa">Placa: </label>
            <input type="text" name="placa" id="_placa">
        </div>
        <div>
            <label for="_chassi">Chassi: </label>
            <input type="text" name="chassi" id="_chassi">
        </div>
        <div>
            <label for="_marca">Marca: </label>
            <select name="marca" id="_marca">
                <option value="_marca"></option>
            </select>
            </div>
        <div>
            <label for="_modelo">Modelo: </label>
            <select name="modelo" id="_modelo">
                <option value="_marca"></option>
            </select>
        </div>
        <div>
            <label for="_anoFabricacao">Ano de fabricação: </label>
            <input type="date" name="anoFabricacao" id="_anoFabricacao"><br>
        </div>
        <div>
            <label for="_anoModelo">Ano Modelo: </label>
            <input type="date" name="anoFabricacao" id="_anoModelo"><br>
        </div>
    </form>



@endsection