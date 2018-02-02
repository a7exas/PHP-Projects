@extends('layouts.administratorMaster')

@push('styles')
    <link href="{{ asset('css/administrator.css') }}" rel="stylesheet">
@endpush

@section('title')
Admin
@endsection

@section('content')
    <h3>Naujausios prekės</h3>

    <div class='row' style="border-bottom-style:solid">
            <div class="id col-sm-1 invis">
                <b>ID</b>
            </div>
            <div class="pavadinimas col-sm-3">
                <b>Pavadinimas</b>
            </div>
            <div class="prekes-kodas col-md-5 invis">
                <b>Prekės kodas</b>
            </div>
            <div class="prekes-tipas col-sm-3 invis">
                <b>Tipas</b>
            </div>
        </div>

    @foreach($prekes as $preke)
        <div class='row'>
            <div class="id col-sm-1 invis">
                {{ $preke->id }}
            </div>
            <div class="pavadinimas col-sm-3">
                {{ $preke->pavadinimas }}
            </div>
            <div class="prekes-kodas col-md-5 invis">
                {{ $preke->prekesKodas }}
            </div>
            <div class="prekes-tipas col-sm-3 invis">
                {{ $preke->prekesTipas }}
            </div>
        </div>
    @endforeach
        <a href="/prekes" class='btn btn-default'>Visos prekės</a>
@endsection
