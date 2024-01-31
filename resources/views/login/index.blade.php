<!doctype html>
<html lang="en">

<head>
    <title>COURTIFY - Login</title>

    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <style>
        body {
            padding-top: 60px;
        }
    </style>
    
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/login-register.css" rel="stylesheet" />
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">

    <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
    <script src="assets/js/bootstrap.js" type="text/javascript"></script>
    <script src="assets/js/login-register.js" type="text/javascript"></script>

</head>

<body>
    <div class="modal fade login" id="loginModal">
        <div class="modal-dialog login animated">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <img src="{{ asset('images/courtify.png') }}" alt="Image" style="width: 100px;">
                    <br>
                    <i class="fas fa-crow fa-2x me-3 pt-5 mt-xl-4"></i>
                    <span class="h1 fw-bold mb-0" style="font-size: 24px;">Welcome Back</span>
                    <br>
                    <span class="h1 mb-0" style="font-size: 12px;">Welcome Back! Please enter your details</span>
                </div>
                <div class="modal-body">
                    <div class="box">
                        <div class="content">
                            <div class="error"></div> 
                            <div class="form loginBox">

                            @if(session()->has('success'))
                            <div class="alert alert-success alert-dismissible show" role="alert">
                                {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                              </div>
                            @endif

                            @if(session()->has('loginError'))
                            <div class="alert alert-danger alert-dismissible show" role="alert">
                               {{ session('loginError') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                              </div>
                            @endif

                                <form method="post" action="/login" accept-charset="UTF-8">
                                    @csrf
                                    <input id="email" class="form-control @error('email') is-invalid @enderror" type="email"
                                        placeholder="Email" name="email" autofocus required value="{{ old('email') }}">
                                    @error('email')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                    <input id="password" class="form-control" type="password"
                                        placeholder="Password" name="password" required>
                                    <button class="button btn btn-lg btn-primary" type="submit">Sign In</button>
                                </form>
                            </div>
                        </div>
                        <div class="division">
                            <div class="line l"></div>
                            <span>or</span>
                            <div class="line r"></div>
                        </div>
                        <div class="social">
                            <a id="google_login" class="circle google" href="{{ route('redirect') }}">
                                <i class="fa fa-google-plus fa-fw"></i>
                            </a>
                        </div>
                    </div>
                </div>              
                <div class="modal-footer">
                    <div class="forgot register-footer">
                        <span>Don't have an account?
                            <a href="/register">Sign Up</a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function() {
            openLoginModal();
        });
    </script>

</body>

</html>
