<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('highhead.style')
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('highhead.sidebar')
      <!-- partial -->
      @include('highhead.navbar')
        <!-- partial -->
     @include('highhead.body')

    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('highhead.script')
  </body>
</html>