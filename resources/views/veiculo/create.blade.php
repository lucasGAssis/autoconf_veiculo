@extends('layouts.template')

@section('body')
@include('veiculo.partials._form', ['errorBag' => 'veiculoStore'])
@endsection

@push('scripts')
<script>
$(document).ready(function(){
    $('[name=placa]').mask('SSS-0A00');
    $('[name=anoFabricacao]').mask('9999');
    $('[name=anoModelo]').mask('9999');

    $('[name=marcaId]').on('change', function(){
        $.ajax({
            type: 'post',
            url: '{{ route("modelo.search") }}',
            dataType: "json",
            data: { marcaId: $('[name=marcaId]').val() },
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(data){
                var $el = $('[name=modeloId]');
                $el.empty();
                $el.append($("<option></option>").attr("value", 0).attr('selected','').text('Modelo'));
                $.each(data, function(value, key) {
                    $el.append($("<option></option>").attr("value", key.id).text(key.nome));
                });

                @if($errors->any())
                $('[name=modeloId]').val('{{ old('modelo') }}');
                @endif
            }
        });
    })
    @if($errors->any())
    $('[name=marcaId]').trigger('change');
    @endif 
});
</script>

@endpush