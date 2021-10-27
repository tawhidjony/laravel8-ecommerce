<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('assets/backend/fontawesome/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/backend-main.css') }}" rel="stylesheet">
</head>
<body class="position-relative">
  <div class="container-fluid px-0">
      <!-- The side bar -->
      @include('layouts.backend.partials.sideNav')
      <!-- Main section -->
      <main class="bg-light main-full-body">
          <!-- The navbar -->
         @include('layouts.backend.partials.topNav')
          <!--Page Body part -->
          <div class="page-body p-4 text-dark">
              @yield('content')
          </div>
      </main>
  </div>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/backend-all-plugin.js') }}"></script>
</body>
</html>
