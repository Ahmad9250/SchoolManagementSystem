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
     
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
          <div class="container" align="center" style="padding-top: 100px;">
          <h1>Update student Data</h1>
            <form action="/edit" method="POST">
              @csrf

              
              <input type="hidden" name="id" value={{$data['id']}} >
              

              <div style="padding: 15px;">
              <label>Full Name </label>
              <input type="text" name="fullname" value={{$data['Full_name']}} >
              </div>

              <div style="padding: 15px;">
              <label>Roll no </label>
              <input type="text" name="rollno" value={{$data['Rollno']}}  validate>
              </div>

              <div style="padding: 15px;">
              <label>Dob </label>
              <input type="text" name="dob" value={{$data['dob']}} validate>
              </div>

              <div style="padding: 15px;">
              <label>Gender </label>
              <input type="text" name="gender"  value={{$data['gender']}} validate>
              </div>

              <div style="padding: 15px;">
              <label>Fee </label>
              <input type="text" name="fee"  value={{$data['fee']}} validate>

              </div> <div style="padding: 15px;">
              <label>Address</label>
              <input type="text" name="address"  value={{$data['address']}} validate>
              </div>

              <div style="padding: 15px;">
              <label>Contact </label>
              <input type="text" name="contact"  value={{$data['contact']}} validate>
              </div>

              <div style="padding: 15px;">
              <input type="submit" class="btn btn-success">
              
              </div>

             
            </form>
          </div>
        
   

    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('clerk.script')
  </body>
</html>