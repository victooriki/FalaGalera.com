<h1>Editar Chamado {{ $chamado->titulo }}</h1>

<x-alert/>

<form action="{{ route('chamados.update', $chamado->id) }}" method="POST">
    @method('PUT')
    @include('chamados.partials.form', [
        'chamado' => $chamado
    ])
</form>