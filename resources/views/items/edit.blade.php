@extends('layout')

@section('content')
<h1>Editar Item</h1>
<form action="{{ route('items.update', $item) }}" method="POST">
    @csrf
    @method('PUT')
    <label for="name">Nome:</label>
    <input type="text" name="name" id="name" value="{{ $item->name }}" required>
    <label for="quantity">Quantidade:</label>
    <input type="number" name="quantity" id="quantity" value="{{ $item->quantity }}" required>
    <label for="description">Descrição:</label>
    <textarea name="description" id="description">{{ $item->description }}</textarea>
    <button type="submit">Salvar</button>
</form>
@endsection
