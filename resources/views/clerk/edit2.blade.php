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
          <h1>Update Employ Data</h1>
            <form action="/edit2" method="POST">
              @csrf
              <input type="hidden" name="id" value={{$data['id']}} >
              <div style="padding: 5px;">
              <label>Full Name </label>
              <input type="text" name="fullname" value={{$data['Full_name']}} >
              </div>

              <div style="padding: 5px;">
              <label>Employ no </label>
              <input type="text" name="empno" value={{$data['emp_no']}} validate>
              </div>

              <div style="padding: 5px;">
              <label>Dob </label>
              <input type="text" name="dob" value={{$data['dob']}} validate>
              </div>

              <div style="padding: 5px;">
              <label>Gender </label>
              <input type="text" name="gender"  value={{$data['gender']}} validate>
              </div>

              <div style="padding: 5px;">
              <label>Address</label>
              <input type="text" name="address"  value={{$data['address']}} validate>
              </div>

              <div style="padding: 5px;">
              <label>Salary </label>
              <input type="text" name="salary" value={{$data['salary']}}  validate>
              </div>

              <div style="padding: 5px;">
              <label>Contact </label>
              <input type="text" name="contact"  value={{$data['contact']}} validate>
              </div>

              <div style="padding: 5px;">
              <label>Email </label>
              <input type="text" name="email" value={{$data['email']}} validate>
              </div>

              <div style="padding: 5px;">
              <label>Cnic </label>
              <input type="text" name="cnic" value={{$data['cnic']}} validate>
              </div>

              <div style="padding: 5px;">
              <label>User_type </label>
              <input type="text" name="usertype" value={{$data['user_type']}} validate>
              </div>

              <div style="padding: 5px;">
              <input type="submit" class="btn btn-success">
              
              </div>

             
            </form>
          </div>
        
   

        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('clerk.script')
  </body>
</html>