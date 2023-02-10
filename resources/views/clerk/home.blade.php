<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('clerk.style')
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('clerk.sidebar')
      <!-- partial -->
      @include('clerk.navbar')
        <!-- partial -->
     @include('clerk.body')

    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('clerk.script')
  </body>
</html>