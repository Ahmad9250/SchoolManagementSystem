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
            <br><br>  
            <br><br>

               

            <table border="1">
              <tr>
                <th>Id</th>
                <th>Full name</th>
                <th>Roll no</th>
                <th>Obtained Marks</th>
                <th>Total Marks</th>
                <th>Action</th>
              </tr>

              @foreach($data as $item) 
                <tr>
                  <th>{{$item->id}}</th>
                  <th> {{$item->Full_name }} </th>
                  <th>{{$item->Rollno}}</th>
                  <th>{{$item->	obtained_marks}}</th>
                  <th> {{$item->total_marks}}</th>
                  <th><a class="btn btn-primary" href="{{"results/".$item['id']}}">Update</a></th>
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