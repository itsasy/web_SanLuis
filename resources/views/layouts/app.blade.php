<!DOCTYPE html>
<html lang="es">

<head>
   <meta charset="UTF-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge" />
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <meta name="csrf-token" content="{{ csrf_token() }}">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
      integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
   @yield('sound')

   <link rel="stylesheet" href="{{asset('css/dataTables.bootstrap4.min.css')}}" />
   {{-- <link rel="stylesheet" href="{{asset('css/style.css')}}"> --}}
   <link rel="stylesheet" href="{{asset('css/style_rivera.css')}}">
   
   @stack('styles')
   <title> SOS San Luis - @yield('title') </title>

</head>

<body>
   <header>
       @yield('header')
   </header>
   <div>
      @yield('toggle_menu')
      @yield('btn_return_map')
      @yield('btn_return_places')
      @yield('btn_return_module')
      @yield('btn_return_evacupoints')
      @yield('btn_return_institutes')
      @yield('content')
   </div>

   <script src="{{asset('js/jquery.min.js')}}"></script>

   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js">
   </script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js">
   </script>
  
   
   <script src="{{asset('js/jquery.dataTables.js')}}"></script>
   <script src="{{asset('js/dataTables.bootstrap4.min.js')}}"></script>
   
   <script src="{{asset('js/script_rivera.js')}}"></script>
   <script src="{{asset('js/scripts_table.js')}}"></script>
   

   <script src="{{asset('js/app.js')}}"></script>
    @yield('script')
</body>

</html>

{{--
<!DOCTYPE html>
<html lang="es">

<head>
   <meta charset="UTF-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge" />
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <meta name="csrf-token" content="{{ csrf_token() }}">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
      integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
   @yield('sound')

   <link rel="stylesheet" href="{{asset('css/dataTables.bootstrap4.min.css')}}" />
   {{-- <link rel="stylesheet" href="{{asset('css/style.css')}}"> --}}
   {{--<link rel="stylesheet" href="{{asset('css/style_rivera.css')}}">
   
   @stack('styles')
   <title> SOS San Luis - @yield('title') </title>

</head>

<body>
   <header>
      @yield('header')
   </header>
   <div>
      @yield('toggle_menu')
      @yield('btn_return_map')
      @yield('btn_return_places')
      @yield('btn_return_module')
      @yield('btn_return_evacupoints')
      @yield('btn_return_institutes')
      @yield('content')
   </div>

   <script src="{{asset('js/jquery.min.js')}}"></script>

   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js">
   </script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js">
   </script>
  
   
   <script src="{{asset('js/jquery.dataTables.js')}}"></script>
   <script src="{{asset('js/dataTables.bootstrap4.min.js')}}"></script>
   
   <script src="{{asset('js/script_rivera.js')}}"></script>
   <script src="{{asset('js/scripts_table.js')}}"></script>
   
   
  
   
   <script src="{{asset('js/app.js')}}"></script>
    @yield('script')
</body>

</html>--}}