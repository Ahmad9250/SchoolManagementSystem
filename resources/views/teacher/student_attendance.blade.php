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
            <h1>student attendance</h1>
            <br><br>

              
                 <br><br>
               <table border="1">
                  <tr>
                    <th>Id</th>
                    <th >Full_name</th>
                    <th>Roll_no</th>
                    <th>Action</th>
                  </tr>
                  @php
                   $i=1;
                  @endphp

                  @foreach($student as $item)
                   <tr>
                     <td>{{$item['id']}}</td>
                     <td >{{$item['Full_name']}}</td>
                     <td >{{$item['Rollno']}}</td>              
                     <td><a class="btn btn-primary" href="{{"markattendance1/".$item['id']}}">Mark Attendance</a></td>

                   </tr>
                    @php
                     $i++;
                    @endphp
                  @endforeach
               </table>

               <div style="padding: 15px;">
              <a class="btn btn-primary" href="teach" role="button">Go back</a>
              </div>
            
          </div>
       </div>
    </div>
    

    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('teacher.script')
  </body>
</html>