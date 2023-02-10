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
                 
              @if($item->id != '17' && $item->id != '18' && $item->id != '19' && $item->id != '20' && $item->id != '21' && $item->id != '22' && $item->id != '23' && $item->id != '24' )
              
               
                    <tr>
                        <th>{{$item->id }}</th>
                        <th>{{$item->Full_name}}</th>
                        <th> {{$item->Rollno }}</th>
                        <th>{{$item->obtained_marks	}}</th>
                        <th>{{$item->total_marks}}</th>
                       
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