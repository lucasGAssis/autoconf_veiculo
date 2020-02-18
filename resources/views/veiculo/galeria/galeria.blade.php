@extends('layouts.template')

@section('body')

<div class="row mt-5">
    <form action="{{ route('galeria.save', $veiculo->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('POST')
        <div class="form-row">
        </div>
        <div class="form-row">
            <div class="col-md-12 mb-3">
                <label for="_foto">Foto: </label>
                <input type="file" name="image[]" multiple class="form-control-file" id="_foto" value="{{old('image','')}}">
            </div>
            <button type="submit" class="btn btn-primary">Salvar</button>  
    </form>
</div>
@endsection

