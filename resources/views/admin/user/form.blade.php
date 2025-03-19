@extends('layouts.app')

@section('title', 'Form user')

@section('content')
    <div class="my-5">
        <div class="container p-4">
            <div class="row justify-content-md-center">
                <div class="text-center mb-5">
                    <h1 class="display-5 fw-bolder">
                        <span class="text-gradient d-inline">{{ $user->exists ? 'Update : ' . $user->firstname . $user->lastname : 'Create new user' }}</span>
                    </h1>
                </div>
                <div class="col-md-6">
                    <form action="{{ route($user->exists ? 'admin.user.update' : 'admin.user.store', $user) }}" method="post" id="categoryContent" enctype="multipart/form-data">
                        @csrf
                        @method($user->exists ? 'put' : 'post')
                        <div class="row">
                            <div class="col-md-6">
                                @include('partials.input', ['value' => $user->name ?? null,'name' => 'firstname', 'label' => 'Firstname', 'placeholder' => 'firstname'])
                            </div>
                            <div class="col-md-6">
                                @include('partials.input', ['value' => $user->name ?? null,'name' => 'lastname', 'label' => 'Lastname', 'placeholder' => 'lastname'])
                            </div>
                        </div>
                        @include('partials.input', ['value' => $user->name ?? null,'name' => 'email', 'label' => 'Email', 'placeholder' => 'email'])
                        <div class="row">
                            <div class="col-md-6">
                                @include('partials.input', ['value' => $user->name ?? null,'name' => 'username', 'label' => 'Username', 'placeholder' => 'username'])
                            </div>
                            <div class="col-md-6">
                                @include('partials.input', ['type' => 'password','value' => $user->name ?? null,'name' => 'password', 'label' => 'Password', 'placeholder' => 'password'])
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                @include('partials.select-role', ['name' => 'role_id', 'label' => 'Role'])
                            </div>
                            <div class="col-md-6">
                                @include('partials.select-role', ['name' => 'classroom_id', 'label' => 'Classroom'])
                            </div>
                        </div>

                        <div class="mt-4">
                            <a href="{{ route('admin.user.index') }}" class="btn btn-primary me-2 rounded">
                                <i class="bi-arrow-left-short"></i> Back
                            </a>
                            @if($user->exists)
                                <button class="btn btn-outline-primary me-2 rounded" type="submit">
                                    <i class="bi-check2-circle"></i> Update
                                </button>
                            @else
                                <button class="btn btn-outline-success me-2 rounded" type="submit">
                                    <i class="bi-plus-circle"></i> Create
                                </button>
                            @endif
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
