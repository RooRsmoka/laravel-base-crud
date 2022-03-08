@extends('layouts.default')

@section('content')
<table>
    <thead>
        <tr>
            <th>Title</th>
            <th>Price</th>
            <th>Series</th>
            <th>Description</th>
            <th>Sale Date</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $comic)
            <tr>
                <td>{{$comic->title}}</td>
                <td>{{$comic->thumb}}</td>
                <td>{{$comic->price}}</td>
                <td>{{$comic->series}}</td>
                <td>{{$comic->description}}</td>
                <td>{{$comic->sale_date}}</td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection