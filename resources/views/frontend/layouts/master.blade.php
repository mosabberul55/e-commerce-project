<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  @include('frontend.partials.styles')
  <title>@yield('title', 'Laravel E-commerce Project')</title>
</head>
<body>
  <div class="wrapper">
    {{-- start nav --}}
    @include('frontend.partials.nav')
    {{-- start sidebar + content --}}
      @yield('content')
    {{-- Footer --}}
    @include('frontend.partials.footer')

  </div>


  {{-- scripts --}}
  @include('frontend.partials.scripts')
</body>
</html>
