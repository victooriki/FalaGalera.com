<h1>Tabela de Chamados</h1>

<table>
    <thead>
        <th>Titulo</th>
        <th>Descrição</th>
        <th>Status</th>
        <th>Criando em</th>
        <th>Ações</th>
    </thead>
    <tbody>
        @foreach ($chamados as $chamado)
        <tr>
            <td>{{ $chamado->titulo }}</td>
            <td>{{ $chamado->descricao }}</td>
            <td>{{ $chamado->stats }}</td>
            <td>{{ $chamado->created_at }}</td>
            <td>
                >
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

