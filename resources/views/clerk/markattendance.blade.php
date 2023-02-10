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
          <h1>Mark Attendance</h1>
            <form action="/markattendance" method="POST">
              @csrf

              
              <input type="hidden" name="id" value={{$data['id']}} >


              <div style="padding: 15px;">
              <label>Date </label>
              <input type="date" id="birthday" name="date">
              </div>

              <div style="padding: 15px;">
              <label>Full Name </label>
              <input type="text" name="fullname" value={{$data['Full_name']}} >
              </div>

              <div style="padding: 5px;">
              <label>Employ no </label>
              <input type="text" name="empno" value={{$data['emp_no']}} validate>
              </div>



              <div style="padding: 15px;">
              <label>Status </label>
              <br><br>
                  
              <input type="radio" id="html" name="radio" value="present">
              <label for="html">Present</label><br>
              <input type="radio" id="html" name="radio" value="absent">
              <label for="html">Absent</label><br>
              <input type="radio" id="html" name="radio" value="leave">
              <label for="html">leave</label>
                    
            </div>

              <div style="padding: 15px;">
              <label>In time </label>
              <input type="time" name="intime">
              </div>

              <div style="padding: 15px;">
              <label>Out time </label>
              <input type="time" name="outtime">
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