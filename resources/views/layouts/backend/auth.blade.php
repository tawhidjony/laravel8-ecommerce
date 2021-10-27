<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&display=swap" rel="stylesheet">
    <!-- Stylesheet -->
    <link href="{{ asset('assets/backend/fontawesome/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/backend-main.css') }}" rel="stylesheet">
    <!-- Theme color -->
    <meta name="theme-color" content="#fafafa">
</head>

<body class="position-relative">
<!-- Main content start -->
<div class="login-page d-flex flex-row justify-content-center align-items-center">
    @yield('content')
</div>
</body>

</html>
