<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Добавить книгу</title>
</head>
<body>
    <h1>Добавить книгу</h1>

    <form method="POST" action="{{ route('books.store') }}">
        @csrf

        <label>Название:</label><br>
        <input type="text" name="title" value="{{ old('title') }}">
        @error('title')
            <div style="color:red;">{{ $message }}</div>
        @enderror
        <br><br>

        <label>Автор:</label><br>
        <select name="author_id">
            <option value="">Выберите автора</option>
            @foreach($authors as $author)
                <option value="{{ $author->id }}" @selected(old('author_id') == $author->id)>{{ $author->name }}</option>
            @endforeach
        </select>
        @error('author_id')
            <div style="color:red;">{{ $message }}</div>
        @enderror
        <br><br>

        <button type="submit">Сохранить</button>
    </form>

    <p><a href="{{ route('books.index') }}">Назад к списку</a></p>
</body>
</html>
