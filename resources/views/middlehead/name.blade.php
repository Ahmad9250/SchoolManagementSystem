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
            <h1>Teacher Name</h1>
            <br><br>  
            <br><br>
            <table border="1">
              <tr>
                <th>Full name</th>
              </tr>
              
              @foreach($employ as $item) 
                @if($item->	Full_name != 'Mudassar Chohan' )
                  <tr>
                    <th>{{$item->Full_name}} </th>
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