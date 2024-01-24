@extends('layouts.app')

@section('title', 'Criar Nova Dúvida')

@section('header')
<h1 class="text-lg text-black-500">Nova Dúvida</h1>
@endsection

@section('content')
<form action="{{ route('chamados.store') }}" method="POST">
    @include('chamados.partials.form')
</form>
@endsection