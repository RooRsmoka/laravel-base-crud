@extends('layouts.default')

@section('content')
<a href="{{ route('comics.create') }}">Add comic</a>
<table>
    <thead>
        <tr>
            <th>Id</th>
            <th>Title</th>
            <th>Description</th>
            <th>Thumbnail</th>
            <th>Price</th>
            <th>Series</th>
            <th>Sale Date</th>
            <th>type</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $comic)
            <tr>
                <td>{{ $comic->id }}</td>
                <td>{{ $comic->title }}</td>
                <td>{{ $comic->description }}</td>
                <td>{{ $comic->thumb }}</td>
                <td>{{ $comic->price }}</td>
                <td>{{ $comic->series }}</td>
                <td>{{ $comic->sale_date }}</td>
                <td>{{ $comic->type }}</td>
                <td>
                    <a href="{{ route('comics.edit', $comic->id) }}">Edit</a>
                    <a href="{{ route('comics.show', $comic->id) }}">Details</a>
                    @include('partials.deleteBtn', [
                        'id' => $comic->id, 
                        'route' => 'comics.destroy'
                    ])
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection