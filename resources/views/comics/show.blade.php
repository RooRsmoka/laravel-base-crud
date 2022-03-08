@extends('layouts.default')

@section('content')
<ul>
    <li>
        <h2>Title: {{$comic->title}}</h2>
    </li>
    <li>
        <h2>Description: {{$comic->description}}</h2>
    </li>
    <li>
        <h2>Thumbnail: {{$comic->thumb}}</h2>
    </li>
    <li>
        <h2>Price: {{$comic->price}}</h2>
    </li>
    <li>
       <h2>Series: {{$comic->series}}</h2>
    </li>
    <li>
        <h2>Sale date: {{$comic->sale_date}}</h2>
    </li>
    <li>
        <h2>Type: {{$comic->type}}</h2>
    </li>
</ul>
@endsection