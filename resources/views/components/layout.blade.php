<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet">
   <script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
   <title>
      @yield('title', 'Job Hunt App')
   </title>
</head>
<body class="d-flex flex-column min-vh-100">
   
   @section('main')
      This is main content
   @show

   @section('footer')
      <footer class="mt-auto text-center py-3">
         @php
         $current_year = date("Y");
         $until_year = 2023!=$current_year ? "-".$current_year : "";
         @endphp
         <span>&copy; 2023{{ $until_year }} fuadmln, Inc.</span>
      </footer>
   @show

</body>
</html>