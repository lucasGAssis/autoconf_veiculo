@extends('layouts.template')

@section('body')

@endsection

@csrf

<form action"" method="POST">
    @method('POST')
    <div class="form-row">
    </div>
    <div class="form-row">
        <div class="col-12 col-md-6">
            <label for="_foto">Foto: </label>
            <input type="file" name="placa" id="_foto">
            <button type="submit" class="btn btn-primary">Salvar</button>
            

        </div>
    </div>

</form>