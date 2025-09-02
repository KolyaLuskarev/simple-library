<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Простая библиотека</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> {{-- если есть стили --}}
</head>
<body>
    <header>
        <h1>Моя библиотека</h1>
        <nav>
            <a href="{{ route('books.index') }}">Книги</a>
            <a href="{{ route('books.create') }}">Добавить книгу</a>
        </nav>
    </header>

    <main>
        @yield('content') {{-- сюда подставляется содержимое из дочерних шаблонов --}}
    </main>

    <footer>
        <p>© <?= date('Y') ?> Моя библиотека</p>
    </footer>
</body>
</html>

