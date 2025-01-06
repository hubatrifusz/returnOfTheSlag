@extends('layouts.app')

@section('content')
    <h1>Slag Edit</h1>

    <form action="{{ route('slag.update', $slag->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label for="nev">Name:</label>
            <input type="text" id="nev" name="nev" value="{{ old('nev', $slag->nev) }}">
        </div>

        <div>
            <label for="hossz">Length:</label>
            <input type="text" id="hossz" name="hossz" value="{{ old('hossz', $slag->hossz) }}">
        </div>

        <div>
            <label for="anyaga">Material:</label>
            <input type="text" id="anyaga" name="anyaga" value="{{ old('anyaga', $slag->anyaga) }}">
        </div>

        <div>
            <label for="nyomasallo">Pressure:</label>
            <input type="text" id="nyomasallo" name="nyomasallo" value="{{ old('nyomasallo', $slag->nyomasallo) }}">
        </div>

        <div>
            <label for="csatlakozo_meret">Connector Size:</label>
            <input type="text" id="csatlakozo_meret" name="csatlakozo_meret" value="{{ old('csatlakozo_meret', $slag->csatlakozo_meret) }}">
        </div>

        <div>
            <label for="ar">Price:</label>
            <input type="number" id="ar" name="ar" value="{{ old('ar', $slag->ar) }}">
        </div>

        <div>
            <label for="kep">Image URL:</label>
            <input type="text" id="kep" name="kep" value="{{ old('kep', $slag->kep) }}">
        </div>

        <button type="submit">Update</button>
    </form>
@endsection
