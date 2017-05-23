<!doctype html>
<html lang="{{ config('app.locale') }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ env('APP_NAME') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    @if (env('APP_ENV') == 'local')
      <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    @else
      <link rel="stylesheet" href="/css/app.css">
    @endif
    
  </head>
  <body>
    <div id="app">
      @yield('content')
    </div>

    @if (env('APP_ENV') == 'local')
      <script src="{{ mix('js/app.js') }}"></script>
    @else
      <script src="/js/app.js"></script>
    @endif
  </body>
</html>
