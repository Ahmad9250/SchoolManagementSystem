<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('middlehead.style')
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
      @include('middlehead.sidebar')
      <!-- partial -->
      @include('middlehead.navbar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
          <div class="container" align="center" style="padding-top: 100px;">
            <h1>Student Attendance</h1>
            <br>
          
            <table border="1">
              <tr>
                <th>Id</th>
                <th>Full name</th>
                <th>Roll no</th>
                <th>Date</th>
                <th>Status</th>
                <th>Grade</th>
              </tr>
             
             
              @foreach($studentattendance as $item) 
                @php $grades=$item->Grade->first(); 
               @endphp
               @if($grades->class_name != 'one' && $grades->class_name != 'two' && $grades->class_name != 'three' && $grades->class_name != 'four' && $grades->class_name != 'five' && $grades->class_name != 'six' && $grades->class_name != 'seven' && $grades->class_name != 'eight' && $grades->class_name != 'eleven' && $grades->class_name != 'twelve')
                <tr>
                  <th>{{$item->id }}</th>
                  <th>{{$item->name}} </th>
                  <th>{{$item->roll_no}}</th>
                  <th>{{$item->date}}</th>
                  <th>{{$item->	status}}</th>
                  <th>
                      {{$grades->class_name }}
                  </th>
                  
                </tr>
                @endif
              @endforeach
            </table>

            <div style="padding: 15px;">
              <a class="btn btn-primary" href="mhead" role="button">Go back</a>
            </div>
            
          </div>
       </div>
    </div>
    

    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('middlehead.script')
  </body>
</html>