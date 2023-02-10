<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('principal.style')
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
      @include('principal.sidebar')
      <!-- partial -->
      @include('principal.navbar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
          <div class="container" align="center" style="padding-top: 100px;">
            <h1>Teacher Attendance</h1>
            <br>
          
            <table border="1">
              <tr>
                <th>Id</th>
                <th>Full name</th>
                <th>Emp no</th>
                <th>In Time</th>
                <th>Out Time</th>
                <th>Attendance</t   h>
                <th>Date</th>
              </tr>
             
             
              @foreach($employattendance as $item) 
               
              
                    <tr>
                        <th>{{$item->id }}</th>
                        <th>{{$item->name}} </th>
                        <th>{{$item->emp_no}}</th>
                        <th>{{$item->in_time}}</th>
                        <th>{{$item->out_time}}</th>
                        <th>{{$item->attendance }}</th>
                        <th>{{$item->Date }}</th>
                    </tr>
             
              @endforeach
            </table>

            <div style="padding: 15px;">
              <a class="btn btn-primary" href="pbody" role="button">Go back</a>
            </div>
            
          </div>
       </div>
    </div>
    

    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('principal.script')
  </body>
</html>