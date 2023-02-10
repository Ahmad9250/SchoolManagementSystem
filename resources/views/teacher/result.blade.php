<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('teacher.style')
    <style type="text/css">

      label{
        display: inline-block;
        width: 200px;
      }
      
    </style>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('teacher.sidebar')
      <!-- partial -->
      @include('teacher.navbar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
          <div class="container" align="center" style="padding-top: 100px;">
            <h1>Student Result</h1>
            <br>

            <form action="{{url('student_result')}}" method="post">
              @csrf

              <div style="padding: 15px;">
              <label>Std_id </label>
              <input type="text" name="stdid"  validate>

              <div style="padding: 15px;">
              <label>Obtained Marks </label>
              <input type="text" name="mark1"  validate>
              </div>

              <div style="padding: 15px;">
              <label>Total Marks </label>
              <input type="text" name="mark2"  validate>
              </div>
              
               

               <div style="padding: 15px;">
               <input type="submit" class="btn btn-success">
              <a class="btn btn-primary" href="teach" role="button">Go back</a>
              </div>
          </form>
            
          </div>
       </div>
    </div>
    

    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('teacher.script')
  </body>
</html>