@extends('layouts.default')

@section('content')
<table>
    <thead>
        <tr>
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
                <td>{{ $comic->title }}</td>
                <td>{{ $comic->description }}</td>
                <td>{{ $comic->thumb }}</td>
                <td>{{ $comic->price }}</td>
                <td>{{ $comic->series }}</td>
                <td>{{ $comic->sale_date }}</td>
                <td>{{ $comic->type }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection