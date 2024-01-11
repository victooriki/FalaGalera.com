<h1>Detalhes do Chamado {{ $chamado->titulo }}</h1>

<ul>
    <li>{{ $chamado->titulo }}</li>
    <li>{{ $chamado->descricao }}</li>
    <li>{{ $chamado->email }}</li>
    <li>{{ $chamado->stats }}</li>
    @if($chamado->stats == 2)
        <li>{{ $chamado->data_fechamento }}</li>
    @endif
    @if($chamado->stats == 3)
        <li>{{ $chamado->data_conclusao}}</li>
        <li>{{ $chamado->avaliacao}}</li>
        <li>{{ $chamado->feedback_avaliacao}}</li>
    @endif
</ul>

<form action="{{ route('chamados.destroy', $chamado->id)}}" method="post">
    @csrf()
    @method('DELETE')
    <button type="submit">Deletar</button>
</form>