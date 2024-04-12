@extends('layouts.app')

@section('content')
    <div class="container mx-auto">
        @include('_header')

        <h1 class="text-3xl font-bold mb-4">Book List</h1>
        <table class="min-w-full">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Author</th>
                    <th>ISBN</th>
                    <th>Date Published</th>
                    <th>Description</th>
                </tr>
            </thead>
            <tbody>
                @foreach($books as $book)
                <tr>
                    <td>{{ $book->title }}</td>
                    <td>{{ $book->author }}</td>
                    <td>{{ $book->isbn }}</td>
                    <td>{{ $book->date_published }}</td>
                    <td>{{ $book->description }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>

        @include('_footer')
    </div>
@endsection