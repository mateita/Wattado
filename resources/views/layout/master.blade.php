<!doctype html>
<html lang="en">
<head>

  <title>Wattado</title>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!-- CSRF Token -->
  <meta name="_token" content="{{ csrf_token() }}">

  
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  @stack('custom-styles')

  
</head>
<body>
  
    <div class="main-wrapper" id="app">
      <div class="container-fluid g-0">
        <div class="row">
          <div class="col-12">
             @include('layout.header')
          </div>
        </div>
        <div class="row">
          <div class="col-auto">
            @include('layout.sidebar')
          </div>
          <div class="col-auto">
            <div class="page-content">
                @yield('content')
            </div>
            @include('layout.footer')
          </div>
        </div>
      </div>
    </div>

  
  <script src="{{ asset('js/app.js') }}"></script>
  <script src="{{ asset('assets/plugins/feather-icons/feather.min.js') }}"></script>

  @stack('custom-scripts')
</body>
</html>