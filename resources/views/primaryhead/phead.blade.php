<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('primaryhead.style')
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('primaryhead.sidebar')
      <!-- partial -->
      @include('primaryhead.navbar')
        <!-- partial -->
     @include('primaryhead.body')

    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('primaryhead.script')
  </body>
</html>