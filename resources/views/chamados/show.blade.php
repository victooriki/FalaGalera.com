<h1>Detalhes do Chamado {{ $chamado->titulo }}</h1>

<ul>
    <li>{{ $chamado->titulo }}</li>
    <li>{{ $chamado->descricao }}</li>
    <li>{{ $chamado->email }}</li>
    <li>{{ $chamado->stats }}</li>
</ul>

<form action="{{ route('chamados.destroy', $chamado->id)}}" method="post">
    @csrf()
    @method('DELETE')
    <button type="submit">Deletar</button>
</form>