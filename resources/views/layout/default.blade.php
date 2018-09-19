<?php
/**
 * Created by PhpStorm.
 * User: Emmanuel
 * Date: 15/09/2018
 * Time: 18:03
 */
?>
<!doctype html>
<html lang="fr">
<head>
    @include('layout.partials._meta')
    <title>SYGEB</title>
    @include('layout.partials._stylesheet')
</head>
<body>
    @include('layout.partials._loader')
    <div class="wrapper">
        @include('layout.partials._header')
        @include('layout.partials._asideBar')
        <section id="content" class="seipkon-content-wrapper">
            <div class="page-content">
                <div class="container-fluid">
                    @yield('content')
                </div>
            </div>

            @include('layout.partials._footer')
        </section>
        <!-- End Right Side Content -->
    </div>

    @include('layout.partials._jsfiles')
    @yield('js')
</body>
</html>
