@extends('layouts.app') {{-- если используешь базовый шаблон --}}

@section('content')
    <h1>Список книг</h1>

    <ul>
        @foreach($books as $book)
            <li>
                <strong>{{ $book->title }}</strong> — автор: {{ $book->author->name ?? 'Неизвестен' }}
            </li>
        @endforeach
    </ul>
@endsection

