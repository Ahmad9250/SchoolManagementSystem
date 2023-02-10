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
          <h1>Update Result</h1>
            <form action="/results" method="POST">
              @csrf

              
              <input type="hidden" name="id" value={{$data['id']}} >


              <div style="padding: 15px;">
              <label>Std id </label>
              <input type="text" name="stdid" value={{$data['std_id']}} >
              </div>

              <div style="padding: 5px;">
              <label>Obtained Marks </label>
              <input type="text" name="obtmark" value={{$data['obtained_marks']}} validate>
              </div>

              <div style="padding: 5px;">
              <label>Total Marks </label>
              <input type="text" name="tmark" value={{$data['total_marks']}} validate>
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