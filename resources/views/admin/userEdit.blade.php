@extends('layouts.administratorMaster')

@push('styles')
    <link href="{{ asset('css/useriai.css') }}" rel="stylesheet">
@endpush

@section('title')
Redaguoti
@endsection

@section('content')

<h2>Redaguoti vartotoją: {{ $user->name }}</h2>

<div class='users_row row'>

    <form action="{{ route('vartotojai.update', $user->id) }}" method="POST">
        {{ method_field('PUT') }}
        {{ csrf_field() }}

        <div class="form-group">

            <div class='vardas'>
            <label for="1">Vardas: </label>
            <input type='text' id='1' name='name' class="form-control" value='{{ $user->name }}'></input>
            </div>

            <div class='elpastas'>
            <label for="2">El. Paštas: </label>
            <input type='text' id='2' name='email' class="form-control" value='{{ $user->email }}'></input>
            </div>

            <div class='privilegijos'>
            <label for="3">Privilegijos: </label>
            <select id='3' name="privilege" class="form-control">

                <option value="superUser"
                @if( $user->privilegija == 'superUser')
                    selected
                @endif
                >Super User</option>

                <option value="admin" 
                @if( $user->privilegija == 'admin')
                    selected
                @endif
                >Admin</option>

                <option value="member"
                 @if( $user->privilegija == 'member' || $user->privilegija == '')
                    selected
                @endif>Member</option>
            </select>

            Dabartinė privilegija: 
            @if( $user->privilegija == 'superUser')
                Super User
            @elseif( $user->privilegija  == 'admin')
                Admin
            @else
                Member
            @endif

            </div>

            <button type="submit" class="btn btn-primary">Atnaujinti</button>

        </div>
    </form>

</div>

@endsection