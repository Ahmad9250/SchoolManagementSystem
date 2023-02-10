<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('highhead.style')
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
      @include('highhead.sidebar')
      <!-- partial -->
      @include('highhead.navbar')
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
                 
              @if($item->id != '1' && $item->id != '2' && $item->id != '3' && $item->id != '4'  && $item->id != '5' && $item->id != '6' && $item->id != '7' && $item->id != '8' && $item->id != '9' && $item->id != '10' && $item->id != '11' && $item->id != '12' && $item->id != '13' && $item->id != '14' && $item->id != '15' && $item->id != '16' && $item->id != '17' && $item->id != '18' && $item->id != '19' && $item->id != '20')
              
               
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
              <a class="btn btn-primary" href="hhead" role="button">Go back</a>
            </div>
            
          </div>
       </div>
    </div>
    

    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('highhead.script')
  </body>
</html>