<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('middlehead.style')
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('middlehead.sidebar')
      <!-- partial -->
      @include('middlehead.navbar')
        <!-- partial -->
     @include('middlehead.body')

    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('middlehead.script')
  </body>
</html>