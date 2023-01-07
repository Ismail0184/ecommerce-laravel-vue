<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Manage your website | Log In</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Manage your website by customization from the admin panel" name="description" />
    <meta content="Md Ismail Hossain | 01845854380" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('/')}}website/assets/images/favicon.ico">
    <!-- Theme Config Js -->
    <script src="{{asset('/')}}website/assets/js/hyper-config.js"></script>
    <!-- App css -->
    <link href="{{asset('/')}}website/assets/css/app-saas.min.css" rel="stylesheet" type="text/css" id="app-style" />
    <!-- Icons css -->
    <link href="{{asset('/')}}website/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
</head>

<body class="authentication-bg">
<div class="account-pages pt-2 pt-sm-5 pb-4 pb-sm-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xxl-4 col-lg-5">
                <div class="card">

                    <!-- Logo -->
                    <div class="card-header pt-4 pb-4 text-center bg-primary">
                        <a href="index.html">
                            <span><img src="{{asset('/')}}website/assets/images/logo.png" alt="logo" height="22"></span>
                        </a>
                    </div>

                    <div class="card-body p-4">

                        <div class="text-center w-75 m-auto">
                            <h4 class="text-dark-50 text-center pb-0 fw-bold">Sign In</h4>
                            <p class="text-muted mb-4">Enter your email address and password to access admin panel.</p>
                        </div>

                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="mb-3">
                                <label for="emailaddress" class="form-label">{{ __('Email') }}</label>
                                <input class="form-control" type="email" name="email" id="emailaddress" required="" placeholder="Enter your email">
                            </div>

                            <div class="mb-3">
                                <a href="{{ route('password.request') }}" class="text-muted float-end"><small>{{ __('Forgot your password?') }}</small></a>
                                <label for="password" class="form-label">{{ __('Password') }}</label>
                                <div class="input-group input-group-merge">
                                    <input type="password" id="password" name="password" class="form-control" placeholder="Enter your password">
                                    <div class="input-group-text" data-password="false">
                                        <span class="password-eye"></span>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3 mb-3">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="checkbox-signin" checked>
                                    <label class="form-check-label" for="checkbox-signin">Remember me</label>
                                </div>
                            </div>

                            <div class="mb-3 mb-0 text-center">
                                <button class="btn btn-primary" type="submit">{{ __('Log in') }}</button>
                            </div>

                        </form>
                    </div> <!-- end card-body -->
                </div>
                <!-- end card -->

                <div class="row mt-3">
                    <div class="col-12 text-center">
                        <p class="text-muted">Don't have an account? <a href="{{route('register')}}" class="text-muted ms-1"><b>Sign Up</b></a></p>
                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div> <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</div>
<!-- end page -->
<footer class="footer footer-alt">
    <script>document.write(new Date().getFullYear())</script> © Md Ismail Hossain
</footer>
<script src="{{asset('/')}}website/assets/js/vendor.min.js"></script>
<script src="{{asset('/')}}website/assets/js/app.min.js"></script>
</body>
</html>
