<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('officer.style')
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('officer.sidebar')
      <!-- partial -->
      @include('officer.navbar')
        <!-- partial -->
     @include('officer.body')

    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('officer.script')
  </body>
</html>