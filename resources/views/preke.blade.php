@extends('layouts.app')

@push('styles')
    <link href="{{ asset('css/preke.css') }}" rel="stylesheet">
@endpush

@section('title')
{{ $preke->pavadinimas }}
@endsection

@section('content')

    <div class='row'>
        <div class="nuotrauka col-lg-8">
            <img src='{{Storage::url($preke->nuotrauka)}}' alt='{{$preke->pavadinimas}}' class='main-nuotrauka'>
        </div>

        <div class='col-md-4'>
            <h3>{{ $preke->pavadinimas }}</h3>
            <div class="row mini-aprasymas">
                <div class='mini-kaire col-sm-8'>
                    <p class='kaina'>{{ $preke->kaina }}€</p>
                    <p>Sandelyje: 
                        @if($preke->kiekis < 1)
                            <font color='red'>Šiuo metu neturime</font>
                        @else
                            {{ $preke->kiekis }}
                        @endif</p>
                </div>
                <div class='mini-desine col-sm-4'>
                    <p>Like</p>
                    <p>Į krepšelį</p>
                </div>
            </div>
            <div class='ismatavimai'>
                <p>Išmatavimai:</p>
            </div>
        </div>
    </div>

    <h4>Aprašymas</h4>
    <div class="main-aprasymas">
        {{ $preke->aprasymas }}
    </div>

@endsection
