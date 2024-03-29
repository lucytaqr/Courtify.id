<!doctype html>
<html lang="en">

<head>
    <title>Login/Register Modal by Creative Tim</title>

    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />


    <style>
        body {
            padding-top: 60px;
        }
    </style>

    <link href="assets/css/bootstrap.css" rel="stylesheet" />

    <link href="assets/css/register.css" rel="stylesheet" />
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
                    <span class="h1 fw-bold mb-0" style="font-size: 24px;">Hello, Welcome in Courtify</span>
                    <br>
                    <span class="h1 mb-0" style="font-size: 12px;">Please enter your details</span>
                </div>
                <div class="modal-body">
                    <div class="box">
                        <div class="content">
                            <div class="social">
                                <div class="px-5 ms-xl-4">
                                </div>
                            </div>
                            <div class="modal-body">
                                <div class="box">
                                    <div class="content">
                                        <div class="social">
                                        </div>

                                        <div class="error"></div>
                                        <div class="form loginBox">
                                            <form method="" action="" accept-charset="UTF-8">
                                                <input id="name" class="form-control" type="text"
                                                    placeholder="Name" name="name">
                                                <input id="email" class="form-control" type="text"
                                                    placeholder="Email" name="email">
                                                <input id="password" class="form-control" type="password"
                                                    placeholder="Password" name="password">
                                                <input id="confrim password" class="form-control" type="password"
                                                    placeholder="Confrim Password" name="confrim password">
                                                <input class="btn btn-default btn-login" type="button" value="Login"
                                                    onclick="loginAjax()">
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="box">
                                    <div class="content registerBox" style="display:none;">
                                        <div class="form">
                                            <form method="" html="{:multipart=>true}" data-remote="true"
                                                action="" accept-charset="UTF-8">
                                                <input id="name" class="form-control" type="text"
                                                    placeholder="Name" name="name">
                                                <input id="email" class="form-control" type="text"
                                                    placeholder="Email" name="email">
                                                <input id="password" class="form-control" type="password"
                                                    placeholder="Password" name="password">
                                                <input id="password_confirmation" class="form-control" type="password"
                                                    placeholder="Repeat Password" name="password_confirmation">
                                                <input class="btn btn-default btn-register" type="button"
                                                    value="Create account" name="commit">
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="division">
                            <div class="line l"></div>
                            <span>or</span>
                            <div class="line r"></div>
                        </div>
                        <div class="modal-body">
                            <div class="box">
                                <div class="content">
                                    <div class="social">
                                        <a id="google_login" class="circle google" href="{{ route('redirect') }}">
                                            <i class="fa fa-google-plus fa-fw"></i>
                                        </a>
                                    </div>
                                    <div class="modal-footer">
                                        <div class="forgot login-footer">
                                            <span>Already have an account?
                                                <a href="javascript: showRegisterForm();">Sign in</a>
                                                ?</span>
                                        </div>
                                        <div class="forgot register-footer" style="display:none">
                                            <span>Already have an account?</span>
                                            <a href="javascript: showLoginForm();">Login</a>
                                        </div>
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
