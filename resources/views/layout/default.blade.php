<!doctype html>
<html>
<head>
   @include('FrontEnd.head')
</head>
<body>
<div class="container">
   <header>
       @include('FrontEnd.navigation')
   </header>
   <div id="main" class="row">
           @yield('content')
   </div>
   <footer class="footer text-center">
       @include('FrontEnd.footer')
   </footer>
</div>
</body>
</html>