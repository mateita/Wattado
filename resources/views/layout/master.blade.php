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
  <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
 
  @stack('custom-styles')

  
</head>
<body>

      <div class="container-fluid" style="height:100vh; width: 100vw;">
        <div class="row">
          <div class="col-12">
                @yield('content')
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            @include('layout.footer')
          </div>
        </div>
      </div>


  
  <script src="{{ asset('js/app.js') }}"></script>
  <script src="{{ asset('assets/plugins/feather-icons/feather.min.js') }}"></script>

  @stack('custom-scripts')
</body>
</html>