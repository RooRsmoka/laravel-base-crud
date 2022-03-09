@extends('layouts.default')

@section('content')
<a href="{{ route('comics.index') }}">Back</a>
<form action="{{ route('comics.update', $comic->id) }}" method="post">
    @csrf
    @method('put')
    <div>
        <label>Title</label>
        <input type="text" name="title" value="{{ $comic->title }}">
    </div>
    <div>
        <label>Description</label>
        <textarea name="description" cols="30" rows="10">{{ $comic->description }}</textarea>
    </div>
    <div>
        <label>Thumbnail</label>
        <input type="text" name="thumb" value="{{ $comic->thumb }}">
    </div>
    <div>
        <label>Price</label>
        <input type="text" name="price" value="{{ $comic->price }}">
    </div>
    <div>
        <label>Series</label>
        <input type="text" name="series" value="{{ $comic->series }}">
    </div>
    <div>
        <label>Sale date</label>
        <input type="date" name="sale_date" value="{{ $comic->sale_date }}">
    </div>
    <div>
        <label>Type</label>
        <input type="text" name="Type" value="{{ $comic->type }}">
    </div>
    <div>
        <button type="reset">Reset</button>
        <button type="submit">Crea</button>
    </div>
</form>
@endsection