@extends('layouts.app')

@section('content')
    <h1>Admin Dashboard</h1>
    <h2>List of users</h2>
    <ul>
        @foreach($users as $user)
            <li class="py-2">
                Full name : {{ $user->firstName }} {{ $user->lastName }}
                <br>
                role : {{ $user->role->label }}
                <br>
                @if($user->studentClassroom == null)
                    classroom taught :
                    @foreach($user->taughtClassrooms as $taughtClassroom)
                        {{ $taughtClassroom->name }}
                    @endforeach
                @endif
                @if($user->studentClassroom != null)
                    classroom :
                    {{ $user->studentClassroom->name }}
                @endif
            </li>
        @endforeach
    </ul>
    <a href="{{ route('admin.user.create') }}">Create new user</a>
@endsection
