<link rel="stylesheet" href="{{ asset('app.css') }}">
<a href="{{ route('items.create') }}"><Button>Adicionar Item</Button></a>
<h1>Lista De Itens</h1>
<table>
    <thead>
        <tr>
            <th>Nome</th>
            <th>Quantidade</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach($items as $item)
        <tr>
            <td>{{ $item->name }}</td>
            <td>{{ $item->quantity }}</td>  
            <td>
                <a href="{{ route('items.edit', $item) }}"><Button>Editar</Button></a>
                <form action="{{ route('items.destroy', $item) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="delet">Excluir</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
