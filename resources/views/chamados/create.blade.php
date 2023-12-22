<h1>Novo Chamado</h1>

<form action="{{ route('chamados.insert_chamado') }}" method="POST">
    @csrf()

    <input type="text" name="titulo" placeholder="Titulo:">
    <input type="text" name="descricao" placeholder="Descrição:" max="150">
    <input type="text" name="email" placeholder="Email:">
    <button type="submit">Enviar</button>
</form>