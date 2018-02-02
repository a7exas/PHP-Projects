@extends('layouts.administratorMaster')

@push('styles')
    <link href="{{ asset('css/useriai.css') }}" rel="stylesheet">
@endpush

@section('title')
Redaguoti
@endsection

@section('content')

<h2>Redaguoti produktą: {{ $preke->pavadinimas }}</h2>

<div class='users_row row'>

    <form action="{{ route('prekes.update', $preke->id) }}" enctype="multipart/form-data" method="POST">
        {{ method_field('PUT') }}
        {{ csrf_field() }}

        <div class="form-group col-md-12">
            <label for="pavadinimas">Pavadinimas:</label>
            <input type="text" class="form-control" name="pavadinimas" value="{{ $preke->pavadinimas }}" required>

            <label for="tipas">Tipas:</label>
            <select name="tipas" class="form-control">
                <option value="apyranke"
                @if($preke->prekesTipas == 'apyranke')
                    selected
                @endif
                >Apyrankė</option>
                <option value="auskarai"
                @if($preke->prekesTipas == 'auskarai')
                    selected
                @endif
                >Auskarai</option>
            </select>

            <label for="nuotrauka">Nuotrauka:</label>
            <input type="file" name="nuotrauka" class="form-control" id="nuotrauka">
            <input type="hidden" value='{{ csrf_token() }}'>

            <label for="kiekis">Kiekis:</label>
            <input type="number" class="form-control" name="kiekis" value="{{ $preke->kiekis }}">

            <label for="kaina">Kaina:</label>
            <input type="number" class="form-control" name="kaina" value="{{ $preke->kaina }}">

            <label for="aprasymas" >Aprasymas:</label>
            <textarea name="aprasymas" class="form-control" rows="3" cols="16" style="width:100%">{{ $preke->aprasymas }}</textarea>
        </div>

            <button type="submit" class="btn btn-primary">Atnaujinti</button>

        </div>
    </form>

</div>

@endsection