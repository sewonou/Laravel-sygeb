<?php
/**
 * Created by PhpStorm.
 * User: Emmanuel
 * Date: 18/09/2018
 * Time: 06:27
 */
?>
<!doctype html>
<html lang="fr">
<head>
    @include('layout.partials._meta')
    <!-- Title -->
    <title>SYGEB : Signin</title>
    @include('layout.partials._stylesheet')
</head>
<body class="body_white_bg">
    @include('layout.partials._loader')
    <!-- Login Page Header Area Start -->
    <div class="seipkon-login-page-header-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <div class="login-page-logo">
                        <a href="index.html">
                            <img src="assets/img/logo.png" alt="Seipkon Logo" />
                        </a>
                    </div>
                </div>
                <div class="col-md-8 col-sm-8">
                    <div class="login-page-logo-right">
                        <p>New to Seipkon?</p>
                        <a href="register.html">Sign up</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Login Page Header Area End -->

    <!-- Login Form Start -->
    <div class="seipkon-login-form-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div class="login-form-box">
                        <h3>Sign in to Seipkon</h3>
                        <form action="http://themescare.com/demos/seipkon-admin-template/index.html" >
                            <div class="form-group">
                                <input type="text" placeholder="Email or Username" class="form-control" required >
                            </div>
                            <div class="form-group">
                                <input type="password" placeholder="Password" class="form-control" required >
                            </div>
                            <div class="form-group form-checkbox">
                                <input type="checkbox" id="chk_2">
                                <label class="inline control-label" for="chk_2">Remember me</label>
                                <p class="lost-pass pull-right">
                                    <a href="#">forget you password?</a>
                                </p>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-layout-submit">
                                            <button type="submit" >Sign in</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Login Form End -->
    @include('layout.partials._jsfiles')
</body>
</html>
