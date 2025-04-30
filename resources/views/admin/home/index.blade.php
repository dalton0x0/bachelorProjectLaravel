@extends('layouts.app')

@push('stylesheet')
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
@endpush

@section('content')
    <nav
        class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start position-absolute ms-3 bg-white loopple-fixed-start"
        id="sidenav-main" data-sidebar="true" data-sidebar-value="53">
        <div class="sidenav-header">
            <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute right-0 top-0 d-none d-xl-none"
               aria-hidden="true" id="iconSidenav"></i>
            <a class="navbar-brand m-0" href="javascript:;">
                <img src="https://demos.creative-tim.com/soft-ui-dashboard/assets/img/logo-ct.png"
                     class="navbar-brand-img h-100" alt="...">
                <span class="ms-1 font-weight-bold">ITIC Intranet</span>
            </a>
        </div>
        <hr class="horizontal dark mt-0">
        <div class="collapse navbar-collapse  w-auto" id="sidenav-collapse-main">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link  active" href="javascript:;">
                        <div
                            class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="bi bi-house" style="font-size: 1rem;"></i>
                        </div>
                        <span class="nav-link-text ms-1">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  " href="javascript:;">
                        <div
                            class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="bi bi-person-fill" style="font-size: 1rem; color: black;"></i>
                        </div>
                        <span class="nav-link-text ms-1">Users</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  " href="javascript:;">
                        <div
                            class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="bi bi-person-fill" style="font-size: 1rem; color: black;"></i>
                        </div>
                        <span class="nav-link-text ms-1">Classrooms</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  " href="javascript:;">
                        <div
                            class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="bi bi-person-fill" style="font-size: 1rem; color: black;"></i>
                        </div>
                        <span class="nav-link-text ms-1">Evaluations</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  " href="javascript:;">
                        <div
                            class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="bi bi-person-fill" style="font-size: 1rem; color: black;"></i>
                        </div>
                        <span class="nav-link-text ms-1">Ranking</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  " href="javascript:;">
                        <div
                            class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="bi bi-person-fill" style="font-size: 1rem; color: black;"></i>
                        </div>
                        <span class="nav-link-text ms-1">Log out</span>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="main-content" id="panel">
        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 mt-3 shadow-none border-radius-xl" id="navbarTop"
             data-navbar="true" data-navbar-value="48">
            <div class="container-fluid">
                <a class="navbar-brand" href="" rel="tooltip" title="Designed and Coded by Creative Tim"
                   data-placement="bottom" target="_blank">Dashboard</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
                        aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navigation">
                    <ul class="navbar-nav navbar-nav-hover ms-auto">
                        <div class="row">
                            <div class="col-auto m-auto">
                                <a class="cursor-pointer">
                                    <i class="fa fa-cog fixed-plugin-button-nav" aria-hidden="true"></i>
                                </a>
                            </div>
                            <div class="col-auto m-auto">
                                <div class="dropdown">
                                    <a class="cursor-pointer" type="button" id="dropdownMenuButton"
                                       data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-bell" aria-hidden="true"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-right px-2 py-3 ms-n4"
                                        aria-labelledby="dropdownMenuButton">
                                        ...
                                    </ul>
                                </div>
                            </div>
                            <div class="col-auto">
                                <div class="bg-white border-radius-lg d-flex me-2">
                                    <input type="text" class="form-control border-0 ps-3" placeholder="Type here...">
                                    <button class="btn bg-gradient-primary my-1 me-1">
                                        <i class="bi bi-search" style="font-size: 1rem;"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container-fluid pt-3">
            <div class="row removable">
                <div class="col-xl-3 col-sm-6">
                    <div class="card mb-4">
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-8">
                                    <div class="numbers">
                                        <p class="text-sm mb-0 text-capitalize font-weight-bold">Teachers</p>
                                        <h5 class="font-weight-bolder mb-0">20</h5>
                                    </div>
                                </div>
                                <div class="col-4 text-end">
                                    <div
                                        class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                        <i class="bi bi-person-fill" style="font-size: 1rem;"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6">
                    <div class="card mb-4">
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-8">
                                    <div class="numbers">
                                        <p class="text-sm mb-0 text-capitalize font-weight-bold">Students</p>
                                        <h5 class="font-weight-bolder mb-0">100</h5>
                                    </div>
                                </div>
                                <div class="col-4 text-end">
                                    <div
                                        class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                        <i class="bi bi-person-fill" style="font-size: 1rem;"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6">
                    <div class="card mb-4">
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-8">
                                    <div class="numbers">
                                        <p class="text-sm mb-0 text-capitalize font-weight-bold">Classrooms</p>
                                        <h5 class="font-weight-bolder mb-0">6</h5>
                                    </div>
                                </div>
                                <div class="col-4 text-end">
                                    <div
                                        class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                        <i class="bi bi-person-fill" style="font-size: 1rem;"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6">
                    <div class="card mb-4">
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-8">
                                    <div class="numbers">
                                        <p class="text-sm mb-0 text-capitalize font-weight-bold">Evaluations</p>
                                        <h5 class="font-weight-bolder mb-0">10</h5>
                                    </div>
                                </div>
                                <div class="col-4 text-end">
                                    <div
                                        class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                        <i class="bi bi-person-fill" style="font-size: 1rem;"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Recently added users</h6>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                            <tr>
                                <th class="text-secondary font-weight-bolder opacity-7">Full name</th>
                                <th class="text-secondary font-weight-bolder opacity-7 ps-2">Role</th>
                                <th class="text-center text-secondary font-weight-bolder opacity-7">Status</th>
                                <th class="text-center text-secondary font-weight-bolder opacity-7">Created at</th>
                                <th class="text-secondary opacity-7"><br></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td>
                                        <div class="d-flex px-2 py-1">
                                            <div>
                                                <img src="{{ asset('storage/svg/person.svg') }}"
                                                     class="avatar avatar-sm me-3" alt="...">
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="mb-0 text-sm">{{ $user->firstName }} {{ $user->lastName }}</h6>
                                                <p class="text-xs text-secondary mb-0">{{ $user->email }}</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="mb-0 text-sm">{{ $user->role->label }}</p>
                                        <p class="text-xs text-secondary mb-0">
                                            @if($user->role->label === 'teacher')
                                                {{ $user->taughtClassrooms->pluck('name')->join(', ') }}
                                            @elseif($user->role->label === 'student')
                                                @if($user->studiedClassroom)
                                                    {{ $user->studiedClassroom->name }}
                                                @else
                                                    <span class="text-muted">No classroom assigned</span>
                                                @endif
                                            @endif
                                        </p>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        <span class="badge badge-sm bg-gradient-success">{{ ($user->deleted_at) == null ? 'Enabled' : 'Disabled' }}</span>
                                    </td>
                                    <td class="align-middle text-center">
                                        <span class="text-secondary text-xs font-weight-bold">{{ $user->created_at->format('d/m/Y') }}</span>
                                    </td>
                                    <td class="align-middle">
                                        <a href="javascript:;" class="text-secondary font-weight-bold text-xs"
                                           data-toggle="tooltip" data-original-title="Edit user">
                                            Edit
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <button class="btn btn-primary mb-4">View all</button>
        </div>
        <!-- Footer -->
        <footer class="footer pt-3 pb-4">
            <div class="container-fluid">
                <div class="row align-items-center justify-content-lg-between">
                    <div class="col-lg-6 mb-lg-0 mb-4">
                        <div class="copyright text-center text-sm text-muted text-lg-start">
                            © {{ date("Y") }},
                            <a href="https://iticparis.com" class="font-weight-bold text-capitalize" target="_blank">
                                ITIC Paris</a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                            <li class="nav-item nav-link text-muted">All rights reserved</li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
    </div>
@endsection
