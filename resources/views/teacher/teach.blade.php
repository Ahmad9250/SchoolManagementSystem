<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('teacher.style')
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('teacher.sidebar')
      <!-- partial -->
      @include('teacher.navbar')
        <!-- partial -->
     @include('teacher.body')

    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('teacher.script')
  </body>
</html>