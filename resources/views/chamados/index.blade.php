@extends('layouts.app')

@section('title', 'Fórum')

@section('header')
@include('chamados.partials.header', compact('chamados'))
@endsection

@section('content')
    
@include('chamados.partials.content')

<x-pagination 
    :paginator="$chamados" 
    :appends="$filters" />

@endsection