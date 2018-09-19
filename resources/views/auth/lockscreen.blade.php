<?php
/**
 * Created by PhpStorm.
 * User: Emmanuel
 * Date: 18/09/2018
 * Time: 12:55
 */
?>
    <!doctype html>
<html lang="fr">
<head>
    <@include('layout.partials._meta')
    <!-- Title -->
    <title>SYGEB : Lockscreen</title>
    @include('layout.partials._stylesheet')
</head>
<body class="body_white_bg_lockscreen">
    @include('layout.partials._loader')

    <!-- Login Form Start -->
    <div class="seipkon-login-form-area lockscreen_area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="lockscreen-box">
                        <div class="lockscreen-seipkon-logo">
                            <a href="index.html">
                                <img src="assets/img/logo.png" alt="Seipkon Logo" />
                            </a>
                        </div>
                        <div class="lockscreen-form">
                            <img src="assets/img/avatar.jpg" alt="user image" />
                            <h3>hi,Jhon doe. Your Session Is Locked</h3>
                            <form action="http://themescare.com/demos/seipkon-admin-template/index.html">
                                <div class="form-group">
                                    <input type="password" placeholder="Choose Password" class="form-control" required >
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-layout-submit unlock-submit">
                                                <button type="submit" >Unlock</button>
                                                <p>
                                                    <a href="#">Switch User</a>
                                                </p>
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
    </div>
    <!-- Login Form End -->

    @include('layout.partials._jsfiles')
</body>
</html>
