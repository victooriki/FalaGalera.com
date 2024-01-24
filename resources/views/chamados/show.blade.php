@extends('layouts.app')

@section('title', 'Detalhes da Dúvida')

@section('header')
<h1 class="text-lg text-black-500">Dúvida: {{ $chamado->titulo }}</h1>
@endsection

@section('content')
<ul>
    <li>{{ $chamado->titulo }}</li>
    <li>{{ $chamado->descricao }}</li>
    <li>{{ $chamado->email }}</li>
    <li>{{ $chamado->stats }}</li>
</ul>

<form action="{{ route('chamados.destroy', $chamado->id)}}" method="post">
    @csrf()
    @method('DELETE')
    <button type="submit" class="bg-red-500 hover:bg-red-400 text-white font-bold py-2 px-4 border-b-4 border-red-700 hover:border-red-500 rounded">Deletar</button>
</form>
@endsection