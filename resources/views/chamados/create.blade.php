<h1>Novo Chamado</h1>

<x-alert/>

<form action="{{ route('chamados.store') }}" method="POST">
    @include('chamados.partials.form')
</form>