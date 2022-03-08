@extends('layouts.default')

@section('content')
<form action="{{ route('comics.store') }}" method="post">
@csrf
    <div>
        <label>Title</label>
        <input type="text" name="address">
    </div>
    <div>
        <label>Description</label>
        <input type="text" name="city">
    </div>
    <div>
        <label>Thumbnail</label>
        <input type="text" name="region">
    </div>
    <div>
        <label>Price</label>
        <input type="text" name="province">
    </div>
    <div>
        <label>Series</label>
        <input type="text" name="country">
    </div>
    <div>
        <label>Sale date</label>
        <input type="number" name="squareMeters">
    </div>
    <div>
        <label>Type</label>
        <textarea name="description" cols="30" rows="10"></textarea>
    </div>
    <div>
        <button type="reset">Indietro</button>
        <button type="submit">Crea</button>
    </div>
</form>
@endsection