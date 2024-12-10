<link rel="stylesheet" href="{{ asset('app.css') }}">
<nav>
    <a href="{{ route('index') }}"><Button>Home</Button></a>
</nav>
<h1>Editar Item</h1>
<form action="{{ route('items.update', $item) }}" method="POST">
    @csrf
    @method('PUT')
    <label class="txt" for="name">Nome:</label>
    <input type="text" name="name" id="name" value="{{ $item->name }}" required>
    <label class="txt" for="quantity">Quantidade:</label>
    <input type="number" name="quantity" id="quantity" value="{{ $item->quantity }}" required>
    <button type="submit">Salvar</button>
</form>
