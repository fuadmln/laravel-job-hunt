<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet">
   <link href="{{ URL::asset('css/my-style.css') }}" rel="stylesheet">
   <script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
   <title>
      @yield('title', 'Job Hunt App')
   </title>
</head>
<body class="d-flex flex-column min-vh-100">
   @section('header')
      @include('components/header')
   @show
   
   @section('main')
      This is main content
   @show

   @section('footer')
      @include('components/footer')
   @show

   @section('script')
   @show

</body>
</html>