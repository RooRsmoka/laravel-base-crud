@extends('layouts.default')

@section('content')
<h3>Comics</h3>

<ul>
    <li>
        <h2>Title: {{$comic->title}}</h2>
    </li>
    <li>
        <h2>Price: {{$comic->price}}</h2>
    </li>
    <li>
        <h2>Price: {{$comic->thumb}}</h2>
    </li>
    <li>
        <h2>Description: {{$comic->description}}</h2>
    </li>
    <li>
       <h2>Sale Date: {{$comic->sale_date}}</h2>
    </li>
    <li>
        <h2>Series: {{$comic->series}}</h2>
    </li>
</ul>
@endsection