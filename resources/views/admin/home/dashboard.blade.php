@extends('layouts.app')

@section('content')
    <h1>Admin Dashboard</h1>
    <h2>List of users</h2>
    <ul>
        @foreach($users as $user)
            <li>Firstname : {{ $user->firstname }}, <br>role : {{ $user->role->wording }}</li>
        @endforeach
            <a href="{{ route('admin.user.create') }}">Créer un utilisateur</a>
    </ul>
@endsection
