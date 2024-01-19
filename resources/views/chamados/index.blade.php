<h1>Tabela de Chamados</h1>

<a href="{{ route('chamados.create') }}">Novo Chamado</a>

<table>
    <thead>
        <th>Titulo</th>
        <th>Descrição</th>
        <th>Status</th>
        <th>Ações</th>
    </thead>
    <tbody>
        @foreach ($chamados->items() as $chamado)
            <tr>
                <td>{{ $chamado->titulo }}</td>
                <td>{{ $chamado->descricao }}</td>
                <td>{{ getStatsChamados($chamado->stats) }}</td>
                <td>
                    <a href="{{ route('chamados.show', $chamado->id) }}">Visualizar</a>
                    <a href="{{ route('chamados.edit', $chamado->id) }}">Editar</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

<x-pagination 
    :paginator="$chamados" 
    :appends="$filters" />
