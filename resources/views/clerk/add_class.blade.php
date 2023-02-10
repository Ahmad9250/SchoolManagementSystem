<!DOCTYPE html>
<html lang="en">
  <head>

    <style type="text/css">

      label{
        display: inline-block;
        width: 200px;
      }
      
    </style>
    
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
        <div class="container-fluid page-body-wrapper">
          <div class="container" align="center" style="padding-top: 100px;">
            <form action="{{url('upload_class')}}" method="post">
              @csrf

              <div style="padding: 15px;">
              <label>Class Name </label>
              <input type="text" name="classname"  validate>
              </div>


              <div style="padding: 15px;">
              <input type="submit" class="btn btn-success">
              <a class="btn btn-primary" href="home" role="button">Go back</a>
              </div>
             

              
            </form>
          </div>
        
   

    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('clerk.script')
    <div>
    

    </div>
    
  </body>
</html>