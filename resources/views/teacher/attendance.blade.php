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
    @include('teacher.style')
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
     
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
          <div class="container" align="center" style="padding-top: 100px;">
          <h1>Mark Attendance</h1>
            <form action="/attendance" method="POST">
              @csrf

              
              <input type="hidden" name="id" value={{$data['id']}} >


              <div style="padding: 15px;">
              <label>Full Name </label>
              <input type="text" name="fullname" value={{$data['name']}} >
              </div>

              <div style="padding: 5px;">
              <label>Roll no </label>
              <input type="text" name="rollno" value={{$data['roll_no']}} validate>
              </div>

              <div style="padding: 5px;">
              <label>Date </label>
              <input type="text" name="date" value={{$data['date']}} validate>
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
              <input type="submit" class="btn btn-success">
              
              
              </div>

             
            </form>
          </div>
        
   

    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('teacher.script')
  </body>
</html>