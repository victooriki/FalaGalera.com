<h1>Novo Chamado</h1>

@if($errors->any())
    @foreach($errors->all() as $error)
        {{ $error }}
    @endforeach
@endif

<form action="{{ route('chamados.insert_chamado') }}" method="POST">
    @csrf()

    <input type="text" name="titulo" placeholder="Titulo:" value="{{ old('titulo') }}">
    <input type="text" name="descricao" placeholder="Descrição:" max="150" value="{{ old('descricao') }}">
    <input type="text" name="email" placeholder="Email:" value="{{ old('email') }}">
    <button type="submit">Enviar</button>
</form>