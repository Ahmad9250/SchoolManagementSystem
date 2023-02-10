<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('principal.style')
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('principal.sidebar')
      <!-- partial -->
      @include('principal.navbar')
        <!-- partial -->
     @include('principal.body')

    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('principal.script')
  </body>
</html>