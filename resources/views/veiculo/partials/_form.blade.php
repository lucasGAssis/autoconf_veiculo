@if(empty($veiculo))
<form action="{{route('veiculo.store')}}" method="POST" novalidate>
    @method('POST')
@else
<form action="{{route('veiculo.update', $veiculo->id)}}" method="POST" >
    @method('PUT')
@endif
    @csrf
    <div class="form-row">
        <div class="col-12 col-md-6">
            <label for="_placa">Placa: </label>
            <input class="text-uppercase form-control @if($errors->{$errorBag}->has('placa')) is-invalid @endif" type="text" name="placa" id="_placa" value="{{ old('placa', !empty($veiculo->placa) ? $veiculo->placa : '') }}">
            @if($errors->{$errorBag}->has('placa'))
            <div class="invalid-feedback"> {{$errors->{$errorBag}->first('placa')}}</div>
            @endif

        </div>
    </div>
    <div class="form-row">
        <div class="col-12 col-md-6">
        <label for="_chassi">Chassi: </label>
        <input class="text-uppercase form-control @if($errors->{$errorBag}->has('chassi')) is-invalid @endif" type="text" name="chassi" id="_chassi" value="{{ old('chassi', !empty($veiculo->chassi) ? $veiculo->chassi : '')}}">
        @if($errors->{$errorBag}->has('chassi'))
            <div class="invalid-feedback"> {{  $errors->{$errorBag}->first('chassi') }}</div>
        @endif
        </div>
    </div>
    <div class="form-row">
        <div class="col-12 col-md-6">
        <label for="_marca">Marca: </label>
        <select class="form-control @if($errors->{$errorBag}->has('marcaId')) is-invalid @endif" name="marcaId" id="_marca">
            <option value="">-----</option>
            @foreach ($marcas as $marca)a
            <option value="{{$marca->id}}" @if(old('marcaId', !empty($veiculo->modelo->marca->id) ? $veiculo->modelo->marca->id : '') == $marca->id) selected="" @endif>{{$marca->nome}}</option>
            @endforeach
        </select>
        @if($errors->{$errorBag}->has('marcaId'))
            <div class="invalid-feedback"> {{  $errors->{$errorBag}->first('marcaId') }}</div>
        @endif
        </div>
    </div>
    <div class="form-row">
        <div class="col-12 col-md-6">
        <label for="_modelo">Modelo: </label>
        <select class="form-control @if($errors->{$errorBag}->has('modeloId')) is-invalid @endif" name="modeloId" id="_modelo">
            <option value="">-----</option>
            @foreach ($modelos as $modelo)
            <option value="{{$modelo->id}}" @if(old('modeloId', !empty($veiculo->modelo->id) ? $veiculo->modelo->id : '') == $modelo->id) selected="" @endif>{{$modelo->nome}}</option>
            @endforeach
        </select>
        @if($errors->{$errorBag}->has('modeloId'))
            <div class="invalid-feedback"> {{  $errors->{$errorBag}->first('modeloId') }}</div>
        @endif
        </div>
    </div>
    <div class="form-row">
        <div class="col-12 col-md-6">
        <label for="_anoFabricacao">Ano de fabricação: </label>
        <input class="form-control @if($errors->{$errorBag}->has('anoFabricacao')) is-invalid @endif" type="text" name="anoFabricacao" id="_anoFabricacao" value="{{ old('anoFabricacao', !empty($veiculo->anoFabricacao) ? $veiculo->anoFabricacao : '')}}">
        @if($errors->{$errorBag}->has('anoFabricacao'))
            <div class="invalid-feedback"> {{  $errors->{$errorBag}->first('anoFabricacao') }}</div>
        @endif
        </div>
    </div>
    <div class="form-row">
        <div class="col-12 col-md-6">
        <label for="_anoModelo">Ano Modelo: </label>
        <input class="form-control @if($errors->{$errorBag}->has('anoModelo')) is-invalid @endif" type="text" name="anoModelo" id="_anoModelo" value="{{ old('anoModelo', !empty($veiculo->anoModelo) ? $veiculo->anoModelo : '')}}">
        @if($errors->{$errorBag}->has('anoModelo'))
            <div class="invalid-feedback"> {{  $errors->{$errorBag}->first('anoModelo') }}</div>
        @endif
        </div>
    </div>
    <div>
        <button type="submit">Salvar</button>
    </div>
</form>

