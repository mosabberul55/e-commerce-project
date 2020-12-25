<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  @include('partials.styles')
  <title>Ecommarce</title>
</head>
<body>
  <div class="wrapper">
    {{-- start nav --}}
    @include('partials.nav')
    {{-- start sidebar + content --}}
      @yield('content')
    {{-- Footer --}}
    @include('partials.footer')

  </div>


  {{-- scripts --}}
  @include('partials.scripts')
</body>
</html>
