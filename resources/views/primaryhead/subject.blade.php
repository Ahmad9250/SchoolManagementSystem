<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('primaryhead.style')
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
      @include('primaryhead.sidebar')
      <!-- partial -->
      @include('primaryhead.navbar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
          <div class="container" align="center" style="padding-top: 100px;">
            <h1>Courses Assign</h1>
            <br><br>  
            <br><br>
            <table border="1">
              <tr>
                <th>Full name</th>
                <th>Courses</th>
              </tr>
              @php
                   $i=1;
              @endphp
              @foreach($employ as $item) 
              @php $courses=$item->Course; @endphp
              @if($item->	Full_name != 'Mudassar Chohan' && $item->	Full_name != 'ali chohan' && $item->	Full_name != 'haider sajjad')
                <tr>
                  <th>{{$item->Full_name}} </th>
                  <th>
                    @foreach($courses as $course)
                    {{$course->course_name }}
                    <br>
                    @endforeach
                    
                  </th>
                </tr>
                @endif
              @endforeach
            </table>

            <div style="padding: 15px;">
              <a class="btn btn-primary" href="phead" role="button">Go back</a>
            </div>
            
          </div>
       </div>
    </div>
    

    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('primaryhead.script')
  </body>
</html>