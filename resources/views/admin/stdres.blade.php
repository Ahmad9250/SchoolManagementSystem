<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.style')
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
      @include('admin.sidebar')
      <!-- partial -->
      @include('admin.navbar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
          <div class="container" align="center" style="padding-top: 100px;">
            <h1>Student Result</h1>
            <br>
          
            <table border="1">
              <tr>
                <th>Id</th>
                <th>Full name</th>
                <th>Roll no</th>
                <th>Obtained Marks</th>
                <th>Total Marks</th>
            
              </tr>
             
             
              @foreach($result as $item) 
                 
             
               
                    <tr>
                        <th>{{$item->id }}</th>
                        <th>{{$item->Full_name}}</th>
                        <th> {{$item->Rollno }}</th>
                        <th>{{$item->obtained_marks	}}</th>
                        <th>{{$item->total_marks}}</th>
                       
                    </tr>
                  
              @endforeach
            </table>

            <div style="padding: 15px;">
              <a class="btn btn-primary" href="Admin" role="button">Go back</a>
            </div>
            
          </div>
       </div>
    </div>
    

    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
  </body>
</html>