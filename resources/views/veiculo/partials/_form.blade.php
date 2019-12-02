<form action="{{route('veiculo.store')}}" method="POST">
    @method('POST')
    @csrf
    <div>
        <label for="_placa">Placa: </label>
        <input type="text" name="placa" id="_placa">
        @if($errors->has('placa'))
        <div class="invalid-feedback"> {{  $errors->first('placa') }}</div>
        @endif
    </div>
    <div>
        <label for="_chassi">Chassi: </label>
        <input type="text" name="chassi" id="_chassi">
        @if($errors->has('chassi'))
        <div class="invalid-feedback"> {{  $errors->first('chassi') }}</div>
        @endif
    </div>
    <div>
        <label for="_marca">Marca: </label>
        <select name="marca" id="_marca">
            <option value="">-----</option>
            @foreach ($marcas as $marca)
            <option value="{{$marca->id}}">{{$marca->nome}}</option>
            @endforeach
        </select>
        @if($errors->has('marca'))
        <div class="invalid-feedback"> {{  $errors->first('marca') }}</div>
        @endif
        </div>
    <div>
        <label for="_modelo">Modelo: </label>
        <select name="modelo" id="_modelo">
            <option value="_marca">-----</option>
            @foreach ($modelos as $modelo)
            <option value="{{$modelo->id}}">{{$modelo->nome}}</option>
            @endforeach
        </select>
        @if($errors->has('modelo'))
        <div class="invalid-feedback"> {{  $errors->first('modelo') }}</div>
        @endif
    </div>
    <div>
        <label for="_anoFabricacao">Ano de fabricação: </label>
        <input type="text" name="anoFabricacao" id="_anoFabricacao">
        @if($errors->has('anoFabricacao'))
        <div class="invalid-feedback"> {{  $errors->first('anoFabricacao') }}</div>
        @endif
    </div>
    <div>
        <label for="_anoModelo">Ano Modelo: </label>
        <input type="text" name="anoModelo" id="_anoModelo">
        @if($errors->has('anoModelo'))
        <div class="invalid-feedback"> {{  $errors->first('anoModelo') }}</div>
        @endif
    </div>
    <div>
        <button type="submit">Salvar</button>
    </div>
</form>