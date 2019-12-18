<form action="{{route('veiculo.store')}}" method="POST" novalidate>
    @method('POST')
    @csrf
    <div class="form-row">
        <div class="col-12 col-md-6">
            <label for="_placa">Placa: </label>
            <input class="text-uppercase form-control" type="text" name="placa" id="_placa" value="{{ old('placa', '') }}">
            @if($errors->has('placa'))
            <div class="invalid-feedback">{{  $errors->first('placa') }}</div>
        </div>
        @endif
    </div>
    <div class="form-row">
        <label for="_chassi">Chassi: </label>
        <input class="text-uppercase form-control" type="text" name="chassi" id="_chassi" value="{{ old('chassi', '')}}">
        @if($errors->has('chassi'))
        <div class="invalid-feedback"> {{  $errors->first('chassi') }}</div>
        @endif
    </div>
    <div class="form-row">
        <label for="_marca">Marca: </label>
        <select class="form-control" name="marcaId" id="_marca">
            <option value="">-----</option>
            @foreach ($marcas as $marca)a
            <option value="{{$marca->id}}" @if(old('marcaId', '') == $marca->id) selected="" @endif>{{$marca->nome}}</option>
            @endforeach
        </select>
        @if($errors->has('marca'))
        <div class="invalid-feedback"> {{  $errors->first('marca') }}</div>
        @endif
        </div>
    <div class="form-row">
        <label for="_modelo">Modelo: </label>
        <select class="form-control" name="modeloId" id="_modelo">
            <option value="">-----</option>
            @foreach ($modelos as $modelo)
            <option value="{{$modelo->id}}" @if(old('modeloId', '') == $modelo->id) selected="" @endif>{{$modelo->nome}}</option>
            @endforeach
        </select>
        @if($errors->has('modelo'))
        <div class="invalid-feedback"> {{  $errors->first('modelo') }}</div>
        @endif
    </div>
    <div class="form-row">
        <label for="_anoFabricacao">Ano de fabricação: </label>
        <input class="form-control" type="text" name="anoFabricacao" id="_anoFabricacao" value="{{ old('anoFabricacao', '')}}">
        @if($errors->has('anoFabricacao'))
        <div class="invalid-feedback"> {{  $errors->first('anoFabricacao') }}</div>
        @endif
    </div>
    <div class="form-row">
        <label for="_anoModelo">Ano Modelo: </label>
        <input class="form-control" type="text" name="anoModelo" id="_anoModelo" value="{{ old('anoModelo', '')}}">
        @if($errors->has('anoModelo'))
        <div class="invalid-feedback"> {{  $errors->first('anoModelo') }}</div>
        @endif
    </div>
    <div>
        <button type="submit">Salvar</button>
    </div>
</form>

@php
    if($errors->any()){
        var_dump($errors);
    }
@endphp
