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
            <h1>Teacher Data</h1>
            <br><br>  
            <br><br>

               

            <table border="1">
              <tr>
                <th>Full name</th>
                <th>Emp no</th>
                <th>salary</th>
                <th>course</th>
              </tr>

              @foreach($employ as $item) 
              @php $courses=$item->Course; @endphp
                <tr>
                  <th>{{$item->Full_name}} </th>
                  <th>{{$item->emp_no}}</th>
                  <th>{{$item->salary}}</th>
                  <th>
                    @foreach($courses as $course)
                    {{$course->course_name }}
                    <br>
                    @endforeach
                    
                  </th>
                </tr>
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