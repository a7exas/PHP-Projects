@extends('layouts.app')

@push('styles')
    <link href="{{ asset('css/produktai.css') }}" rel="stylesheet">
@endpush

@section('title')
Katalogas
@endsection

@section('content')
    <h1>Prekių katalogas</h1><br>

    <div class="visos-prekes">

    @foreach($prekes->chunk(3) as $prekiu_eile)

        <div class="row produktu-eile display-flex">

            @foreach($prekiu_eile as $preke)

            <div class="produktas col-md-4">

                <div class="nuotrauka">
                <a href="{{ route('katalogas.show', $preke->prekesKodas) }}">
                    <img src="{{Storage::url($preke->nuotrauka)}}" alt='{{ $preke->pavadinimas }}'>
                </a>
                </div>

                <div class="row trumpas-aprasas">
                    <div class="pavadinimas col-md-9">
                    <a href="{{ route('katalogas.show', $preke->prekesKodas) }}">
                        <h3>{{ $preke->pavadinimas }}</h3>
                    </a>
                    </div>

                    <div class="kaina col-md-3">
                        <h3>{{ $preke->kaina }}€</h3>
                    </div>
                </div>

            </div>
            @endforeach
        </div>
    @endforeach
    </div>
@endsection
