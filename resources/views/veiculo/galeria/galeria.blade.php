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

<div class="row">
    @foreach ($galerias as $item)
        <div class="col-4">
            <div class="card mt-5">
                <img src="{{url('storage/'.$item->path)}}" class="img-fluid" alt="...">
            </div>
        </div>
    @endforeach
</div>
@endsection

