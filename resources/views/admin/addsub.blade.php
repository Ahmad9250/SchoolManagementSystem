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
    @include('admin.style')
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      @include('admin.navbar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
          <div class="container" align="center" style="padding-top: 100px;">
            <form action="{{url('up_course')}}" method="post" enctype="multipart/form-data">
              @csrf

              <div style="padding: 15px;">
              <label>Course Name </label>
              <input type="text" name="coursename"  validate>
              </div>

              
              

              <div style="padding: 15px;">
              <input type="submit" class="btn btn-success">
              <a class="btn btn-primary" href="Admin" role="button">Go back</a>
              </div>
             

              
            </form>
          </div>
        
   

    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <div>
    

    </div>
    
  </body>
</html>