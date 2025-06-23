<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('partials.head')
<style>
    body {
        background: #3F5EFB;
        background: radial-gradient(circle, rgba(63, 94, 251, 1) 0%, rgba(252, 70, 107, 1) 100%);
    }
</style>
<body>
<div class="container">
    <div class="row justify-content-center align-items-center">
        <div class="col-xl-10 col-lg-12 col-md-9">
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <div class="row flex justify-content-center align-items-center">
                        <div class="col-lg-6 d-none d-lg-block bg-login-image">
                            <img src="{{ asset('storage/img/logo/logo-tech-school.svg') }}" class="img-fluid p-5" alt="ITIC Tech School">
                        </div>
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Welcome to Scool !</h1>
                                </div>
                                <form class="user" id="loginForm" action="{{ route('admin.dashboard') }}">
                                    @csrf
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user"
                                               id="username" aria-describedby="emailHelp"
                                               placeholder="Nom d'utilisateur">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user"
                                               id="password" placeholder="Mot de passe">
                                    </div>
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox small">
                                            <input type="checkbox" class="custom-control-input" id="rememberMe">
                                            <label class="custom-control-label" for="rememberMe"> Remember me</label>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-user btn-block" id="loginBtn">
                                        Login
                                    </button>
                                </form>
                                <div class="text-center pt-3">
                                    <p>En vous connectant, vous acceptez nos <br>
                                        <a class="small" href="#">termes & conditions</a></p>
                                </div>
                                <hr>
                                <div class="text-center">
                                    <a class="small" href="#">Forget password ?</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <script src="{{ mix('js/app.js') }}"></script>
    <script src="{{ mix('js/custom.js') }}"></script>
    @stack('scripts')
</body>
</html>
