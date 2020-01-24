@extends('layouts.template')
@section('body')
    @include('loja.partials._form', ['errorBag' => 'lojaStore'])
@endsection
@push('scripts')
    <script>
        $(document).ready(function(){   
            $("#_cnpj").mask("99.999.999/9999-99");
            $('#_cep').mask('99999-999');
        });
    </script>
@endpush