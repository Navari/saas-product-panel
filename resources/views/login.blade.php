<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <title>Login 2 | Veltrix - Admin & Dashboard Template</title>
    <!-- Bootstrap Css -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css">
    <!-- Icons Css -->
    <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css">
    <!-- App Css-->
    <link href="{{ asset('assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css">

</head>

<body class="account-pages">
<!-- Begin page -->
<div class="accountbg" style="background: url('{{ asset('assets/images/bg.jpg') }}');background-size: cover;background-position: center;"></div>

<div class="wrapper-page account-page-full">

    <div class="card shadow-none">
        <div class="card-block">

            <div class="account-box">

                <div class="card-box shadow-none p-4">
                    <div class="p-2">
                        <div class="text-center mt-4">
                            <a href="{{ route('login') }}"><img src="{{ asset('assets/images/logo-dark.png') }}" height="22" alt="logo"></a>
                        </div>

                        <h4 class="font-size-18 mt-5 text-center">Welcome Back !</h4>
                        <p class="text-muted text-center">Sign in to continue to Veltrix.</p>

                        <form class="mt-4" method="POST" action="{{ route('auth') }}">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label" for="username">Email</label>
                                <input type="text" name="email" class="form-control" id="username" placeholder="Enter username">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="userpassword">Password</label>
                                <input type="password" name="password" class="form-control" id="userpassword" placeholder="Enter password">
                            </div>
                            <div class="mb-3 row">
                                <div class="col-sm-6">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="customControlInline">
                                        <label class="form-check-label" for="customControlInline">Remember me</label>
                                    </div>
                                </div>
                                <div class="col-sm-6 text-end">
                                    <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Log In</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>



<!-- JAVASCRIPT -->
<script src="{{ asset('assets/libs/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/libs/metismenu/metisMenu.min.js') }}"></script>
<script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
<script src="{{ asset('assets/libs/node-waves/waves.min.js') }}"></script>


<script src="{{ asset('assets/js/app.js') }}"></script>

</body>
</html>
