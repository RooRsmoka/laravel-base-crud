@extends('layouts.default')

@section('content')
<a href="{{ route('comics.index') }}">Back</a>
<form action="{{ route('comics.store') }}" method="post">
@csrf
    <div>
        <label>Title</label>
        <input type="text" name="title">
    </div>
    <div>
        <label>Description</label>
        <textarea name="description" cols="30" rows="10"></textarea>
    </div>
    <div>
        <label>Thumbnail</label>
        <input type="text" name="thumb">
    </div>
    <div>
        <label>Price</label>
        <input type="text" name="price">
    </div>
    <div>
        <label>Series</label>
        <input type="text" name="series">
    </div>
    <div>
        <label>Sale date</label>
        <input type="date" name="sale_date">
    </div>
    <div>
        <label>Type</label>
        <input type="text" name="type">
    </div>
    <div>
        <button type="reset">Reset</button>
        <button type="submit">Crea</button>
    </div>
</form>
@endsection