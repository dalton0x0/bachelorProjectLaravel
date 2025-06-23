@extends('layouts.app')

@push('stylesheet')
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
@endpush

@section('content')

    <h1 class="h3 mb-4 text-gray-800">Overview</h1>

    <div class="row" id="dashboard-cards">

        <!-- Users count -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                All users
                            </div>
                            <div
                                class="h5 mb-0 font-weight-bold text-gray-800">{{ $users->count() }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="bi bi-people text-gray-300" style="font-size: 2rem;"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Classrooms count -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                All classrooms
                            </div>
                            <div
                                class="h5 mb-0 font-weight-bold text-gray-800">{{ $classrooms->count() }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="bi bi-building text-gray-300" style="font-size: 2rem;"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Evaluations count -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">All
                                Evaluations
                            </div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div
                                        class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{ $evaluations->count() }}</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="bi bi-clipboard text-gray-300" style="font-size: 2rem;"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Notes count -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                All Notes
                            </div>
                            <div
                                class="h5 mb-0 font-weight-bold text-gray-800">{{ $notes->count() }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="bi bi-shield-lock text-gray-300" style="font-size: 2rem;"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Users added</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="users-table" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Full name</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Created at</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody id="users-table-body">
                    @foreach($users as $user)
                        <tr>
                            <td class="text-gray-800">{{ $user->firstName }} {{ $user->lastName }}</td>
                            <td class="text-gray-800">{{ $user->email }}</td>
                            <td class="text-gray-800">{{ $user->role->label }}</td>
                            <td class="text-gray-800">{{ $user->created_at->format('d/m/Y') }}</td>
                            <td>
                                <a class="btn btn-success btn-circle btn-sm edit-btn" href="{{ route('admin.users.edit', $user) }}">
                                    <i class="bi bi-pencil"></i>
                                </a>
                                <a class="btn btn-danger btn-circle btn-sm delete-btn" href="{{ route('admin.users.destroy', $user) }}">
                                    <i class="bi bi-trash"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
