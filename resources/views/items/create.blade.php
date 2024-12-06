@extends('layout')

@section('content')
<h1>Adicionar Item</h1>
<form action="{{ route('items.store') }}" method="POST">
    @csrf
    <label for="name">Nome:</label>
    <input type="text" name="name" id="name" required>
    <label for="quantity">Quantidade:</label>
    <input type="number" name="quantity" id="quantity" required>
    <label for="description">Descrição:</label>
    <textarea name="description" id="description"></textarea>
    <button type="submit">Salvar</button>
</form>
@endsection
