@extends('layout')

@section('content')
<nav>
    <a href="{{ route('index') }}"><Button>Home</Button></a>
</nav>
<h1>Adicionar Item</h1>
<form action="{{ route('items.store') }}" method="POST">
    @csrf
    <label class= "txt" for="name">Nome:</label>
    <input type="text" name="name" id="name" required>
    <label class= "txt" for="quantity">Quantidade:</label>
    <input type="number" name="quantity" id="quantity" required>
    <button type="submit">Salvar</button>
</form>
@endsection
