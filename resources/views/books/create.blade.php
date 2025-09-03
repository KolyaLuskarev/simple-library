@extends('layouts.app')

@section('content')
    <h1>Добавить книгу</h1>

    {{-- Показываем ошибки валидации --}}
    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('books.store') }}" method="POST">
        @csrf

        <div>
            <label for="title">Название книги:</label>
            <input type="text" id="title" name="title" value="{{ old('title') }}" required maxlength="255">
        </div>

        <div>
            <label for="author_id">Автор:</label>
            <select name="author_id" id="author_id" required>
                <option value="">-- Выберите автора --</option>
                @foreach ($authors as $author)
                    <option value="{{ $author->id }}" {{ old('author_id') == $author->id ? 'selected' : '' }}>
                        {{ $author->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <button type="submit">Сохранить</button>
    </form>

    <p><a href="{{ route('books.index') }}">Назад к списку книг</a></p>
@endsection

