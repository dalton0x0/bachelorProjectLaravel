@extends('layouts.app')

@section('title', 'Form users')

@section('content')
    <div class="container p-4">
        <div class="row justify-content-md-center">
            <div class="text-center mb-5">
                <h1 class="display-5 fw-bolder">
                    <span
                        class="text-gradient d-inline">{{ $user->exists ? 'Update : ' . $user->firstName . ' ' . $user->lastName : 'Create new users' }}</span>
                </h1>
            </div>
            <div class="col-md-8">
                <form action="{{ route($user->exists ? 'admin.users.update' : 'admin.users.store', $user) }}"
                      method="post" id="categoryContent" enctype="multipart/form-data">
                    @csrf
                    @method($user->exists ? 'put' : 'post')
                    <div class="row">
                        <div class="col-md-6">
                            @include('partials.input', ['value' => $user->exists ? $user->firstName : null,'name' => 'firstName', 'label' => 'First name', 'placeholder' => 'John'])
                        </div>
                        <div class="col-md-6">
                            @include('partials.input', ['value' => $user->exists ? $user->lastName : null,'name' => 'lastName', 'label' => 'Last name', 'placeholder' => 'DOE'])
                        </div>
                    </div>
                    @include('partials.input', ['value' => $user->exists ? $user->email : null,'name' => 'email', 'label' => 'Email', 'placeholder' => 'john@doe.com'])
                    <div class="row">
                        <div class="col-md-6">
                            @include('partials.input', ['value' => $user->exists ? $user->username : null,'name' => 'username', 'label' => 'Username', 'placeholder' => 'jdoe'])
                        </div>
                        <div class="col-md-6">
                            @include('partials.input', ['type' => 'password','name' => 'password', 'label' => 'Password', 'placeholder' => 'password'])
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            @include('partials.select-role', ['name' => 'role_id', 'label' => 'Role'])
                        </div>
                        <div class="col-md-6">
                            @include('partials.select-classroom', ['name' => 'classroom_id', 'label' => 'Classroom'])
                        </div>
                    </div>

                    <div class="mt-4">
                        <a href="{{ route('admin.users.index') }}" class="btn btn-primary me-2 rounded">
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
@endsection
