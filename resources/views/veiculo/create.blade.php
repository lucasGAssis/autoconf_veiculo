@extends('layouts.template')

@section('body')
@include('veiculo.partials._form')
@endsection

@push('scripts')
<script>
$(document).ready(function(){
    $('[name=placa]').mask('AAA-0S00', 'AAA-0000');
});
</script>

@endpush