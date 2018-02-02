@extends('layouts.administratorMaster')

@push('styles')
    <link href="{{ asset('css/useriai.css') }}" rel="stylesheet">
@endpush

@section('title')
Vartotojai
@endsection

@section('content')

<h2>Vartotojų redagavimas</h2>

<div class='users_row row users_row_border'>

    <div class='users_id col-xs-1'>
        <b>ID</b>
    </div>
    <div class='users_name col-xs-3'>
        <b>Vardas</b>
    </div>
    <div class='users_email col-xs-3'>
        <b>El. paštas</b>
    </div>
    <div class='users_privilege col-xs-3'>
        <b>Privilegija</b>
    </div>
    <div class='users_edit col-xs-2'>
        <b>Redagavimas</b>
    </div>
</div>

@foreach($users as $user)

    <div class='users_row row is-flex'>

        <div class='users_id col-xs-1 light_border'>
            {{ $user->id }}
        </div>
        <div class='users_name col-xs-3 light_border'>
            {{ $user->name }}
        </div>
        <div class='users_email col-xs-3 light_border'>
            {{ $user->email }}
        </div>
        <div class='users_privilege col-xs-3 light_border'>
            @if(isset($user->privilegija ))
                {{ $user->privilegija }}
            @else
                Member
            @endif
        </div>

        <div class='users_edit col-xs-2 light_border'>
            <div class='col-sm-6'>
                <a href="{{ route('vartotojai.edit', $user->id) }}" class='btn btn-default'>Keisti</a>
            </div>
            <div class='col-sm-6'>
                <form action="{{ route('vartotojai.destroy', $user->id) }}" method="POST">
                    {{ method_field('DELETE') }}
                    {{ csrf_field() }}
                    <button class="btn btn-default">Trinti</button>
                </form>
            </div>
        </div>

    </div>
@endforeach

@endsection