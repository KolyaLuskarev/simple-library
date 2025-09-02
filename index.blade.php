<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Список книг</title>
</head>
<body>
    <h1>Книги</h1>

    <a href="{{ route('books.create') }}">Добавить книгу</a>

    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <ul>
        @foreach($books as $book)
            <li>
                {{ $book->title }} — <strong>{{ $book->author->name }}</strong>
            </li>
        @endforeach
    </ul>
</body>
</html>
