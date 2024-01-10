<h1>Editar Chamado {{ $chamado->titulo }}</h1>

<form action="{{ route('chamados.update', $chamado->id) }}" method="POST">
    @csrf()
    @method('PUT')

    <input type="text" name="titulo" placeholder="Titulo:" value="{{ $chamado->titulo }}">
    <input type="text" name="descricao" placeholder="Descrição:" max="150" value="{{ $chamado->descricao }}">
    <input type="text" name="email" placeholder="Email:" value="{{ $chamado->email }}">
    <button type="submit">Enviar</button>
</form>