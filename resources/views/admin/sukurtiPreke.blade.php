@extends('layouts.administratorMaster')

@section('title')
Sukurti preke
@endsection

@section('content')

<form action="{{ route('sukurti.store') }}" enctype='multipart/form-data' method="POST">
{{ method_field('POST') }}
{{ csrf_field() }}

<div class="form-group col-md-12">
    <label for="pavadinimas">Pavadinimas:</label>
    <input type="text" class="form-control" name="pavadinimas" value="" required>
</div>

<div class="form-group col-md-12">
    <label for="tipas">Tipas:</label>
    <select name="tipas" class="form-control">
        <option value="apyranke">Apyrankė</option>
        <option value="auskarai">Auskarai</option>
    </select>
</div>

<div class="form-group col-md-12">
    <label for="nuotrauka">Nuotrauka:</label>
    <input type="file" name="nuotrauka" class="form-control" id="nuotrauka" required>
    <input type="hidden" value='{{ csrf_token() }}'>
</div>

<div class="form-group col-md-12">
    <label for="kiekis">Kiekis:</label>
    <input type="number" class="form-control" name="kiekis" value="0">
</div>

<div class="form-group col-md-12">
    <label for="kaina">Kaina:</label>
    <input type="number" class="form-control" name="kaina" value="0">
</div>

<div class="form-group col-md-12">
    <label for="aprasymas" >Aprasymas:</label>
    <textarea name="aprasymas" class="form-control" rows="3" cols="16" style="width:100%"></textarea>
</div>

<div class=text-right>
    <button class="btn btn-primary">Įkelti produktą</button>
</div>
</form>

@endsection
