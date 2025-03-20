@extends('layouts.app')

@section('content')
    <h1>Admin Dashboard</h1>
    <h2>List of users</h2>
    <ul>
        @foreach($users as $user)
            <li class="py-2">
                Full name : {{ $user->firstname }} {{ $user->lastname }}
                <br>
                role : {{ $user->role->wording }}
                <br>
                classroom :
                @foreach($user->classrooms as $classroom)
                    {{ $classroom->name }}
                @endforeach
            </li>
        @endforeach
            <a href="{{ route('admin.user.create') }}">Create new user</a>
    </ul>
@endsection
