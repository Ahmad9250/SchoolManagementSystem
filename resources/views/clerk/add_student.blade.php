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
            <form action="{{url('upload_student')}}" method="post" enctype="multipart/form-data">
              @csrf

              <div style="padding: 15px;">
              <label>Full Name </label>
              <input type="text" name="fullname"  validate>
              </div>

              <div style="padding: 15px;">
              <label>Roll no </label>
              <input type="text" name="rollno"  validate>
              </div>

              <div style="padding: 15px;">
              <label>Dob </label>
              <input type="text" name="dob"  validate>
              </div>

              <div style="padding: 15px;">
              <label>Gender </label>
              <input type="text" name="gender"  validate>
              </div>

              <div style="padding: 15px;">
              <label>Fee </label>
              <input type="text" name="fee"  validate>

              </div> <div style="padding: 15px;">
              <label>Address</label>
              <input type="text" name="address"  validate>
              </div>

              <div style="padding: 15px;">
              <label>Contact </label>
              <input type="text" name="contact"  validate>
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
  </body>
</html>