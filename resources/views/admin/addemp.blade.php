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
            <form action="{{url('add_emp')}}" method="post" enctype="multipart/form-data">
              @csrf

              <div style="padding: 5px;">
              <label>Full Name </label>
              <input type="text" name="fullname"  validate>
              </div>

              <div style="padding: 5px;">
              <label>Employ no </label>
              <input type="text" name="empno"  validate>
              </div>

              <div style="padding: 5px;">
              <label>Dob </label>
              <input type="text" name="dob"  validate>
              </div>

              <div style="padding: 5px;">
              <label>Gender </label>
              <input type="text" name="gender"  validate>
              </div>

             <div style="padding: 5px;">
              <label>Address</label>
              <input type="text" name="address"  validate>
              </div>

              <div style="padding: 5px;">
              <label>Salary </label>
              <input type="text" name="salary"  validate>

              <div style="padding: 5px;">
              <label>Contact </label>
              <input type="text" name="contact"  validate>
              </div>

              <div style="padding: 5px;">
              <label>Email </label>
              <input type="text" name="email"  validate>
              </div>

              <div style="padding: 5px;">
              <label>Cnic </label>
              <input type="text" name="cnic"  validate>
              </div>

              <div style="padding: 5px;">
              <label>User_type </label>
              <input type="text" name="usertype"  validate>
              </div>

              <div style="padding: 5px;">
              <input type="submit" class="btn btn-success">
              <a class="btn btn-primary" href="Admin" role="button">Go back</a>
              </div>

              
            </form>
          </div>
        
   

    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
  </body>
</html>