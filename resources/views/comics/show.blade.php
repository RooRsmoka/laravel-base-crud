@extends('layouts.default')

@section('content')
<div>
    <a href="{{ route('comics.index') }}">Back</a>
    <a href="{{ route('comics.edit', $comic->id) }}">Edit</a>
    @include('partials.deleteBtn', [
        'id' => $comic->id, 
        'route' => 'comics.destroy'
    ])
</div>
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