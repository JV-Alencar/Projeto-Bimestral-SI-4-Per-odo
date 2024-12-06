<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Compras</title>
</head>
<body>
    <header>
        <nav>
            <a href="{{ route('items.index') }}">Home</a>
        </nav>
    </header>
    <main>
        @yield('content')
    </main>
</body>
</html>
