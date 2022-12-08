<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{csrf_token()}}">
    @yield('title')
    <!-- Styles -->
    <link href="{{ URL::asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/route.css') }}" rel="stylesheet">
    <!-- Scripts -->
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
  </head>
  <body>
    <div class="App">
      <header class="App-header">
        <img src="{{ asset('logo.svg') }}" class="App-logo" alt="logo" />
        <a
          class="App-link"
          href="https://laravel.com/docs"
          target="_blank"
          rel="noopener noreferrer"
        >
          Learn Laravel
        </a>
        @include('my.header')
        @include('my.nav')        
        <div class="container">
            @yield('content')
        </div>
        @include('my.footer')
      </header>
    </div>
  </body>
</html>