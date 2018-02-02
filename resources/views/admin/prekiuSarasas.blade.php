@extends('layouts.administratorMaster')

@push('styles')
    <link href="{{ asset('css/preke.css') }}" rel="stylesheet">
@endpush

@section('title')
Prekės
@endsection

@section('content')

    <h3>Prekių sąrašas</h3>

    <div class='row' style="border-bottom-style:solid">
            <div class="id col-sm-1">
                <b>ID</b>
            </div>
            <div class="pavadinimas col-sm-3">
                <b>Pavadinimas</b>
            </div>
            <div class="prekes-kodas col-md-4">
                <b>Prekės kodas</b>
            </div>
            <div class="prekes-tipas col-sm-2">
                <b>Tipas</b>
            </div>
            <div class="prekes-edit col-sm-2">
                <b>Taisyti</b>
            </div>
        </div>

    @foreach($prekes as $preke)
        <div class='row'>
            <div class="id col-sm-1">
                {{ $preke->id }}
            </div>
            <div class="pavadinimas col-sm-3">
                {{ $preke->pavadinimas }}
            </div>
            <div class="prekes-kodas col-md-4">
                {{ $preke->prekesKodas }}
            </div>
            <div class="prekes-tipas col-sm-2">
                {{ $preke->prekesTipas }}
            </div>
            <div class="prekes-edit col-sm-2">
                <div class='col-sm-6'>
                    <a href="{{ route('prekes.edit', $preke->id) }}" class='btn btn-default'>Keisti</a>
                </div>
                <div class='col-sm-6'>
                    <form action="{{ route('prekes.destroy', $preke->id) }}" method="POST">
                        {{ method_field('DELETE') }}
                        {{ csrf_field() }}
                        <button class="btn btn-default">Trinti</button>
                    </form>
                </div>
            </div>
        </div>
    @endforeach

@endsection
