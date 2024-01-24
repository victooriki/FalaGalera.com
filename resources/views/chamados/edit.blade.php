@extends('layouts.app')

@section('title', 'Editar Dúvida')

@section('header')
<h1 class="text-lg text-black-500">Editar Dúvida: {{ $chamado->titulo }}</h1>
@endsection

@section('content')
<form action="{{ route('chamados.update', $chamado->id) }}" method="POST">
    @method('PUT')
    @include('chamados.partials.form', [
        'chamado' => $chamado
    ])
</form>
@endsection