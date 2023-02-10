<!DOCTYPE html>
<html lang="en">
  <head>

    <style type="text/css">

      label{
        display: inline-block;
        width: 200px;
      }
      
    </style>
    
    <!-- Required meta tags -->
    @include('principal.style')
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
            <h1>Student Data</h1>
            <table border="1">
                <tr>
                    <th>Id</th>
                    <th>Full_name</th>
                    <th>Rollno</th>
                    <th>dob</th>
                    <th>gender</th>
                    <th>fee</th>
                    <th>address</th>
                    <th>contact</th>
                </tr>

                @foreach($student as $item)
                <tr>
                    <td>{{$item['id']}}</td>
                    <td>{{$item['Full_name']}}</td>
                    <td>{{$item['Rollno']}}</td>
                    <td>{{$item['dob']}}</td>
                    <td>{{$item['gender']}}</td>
                    <td>{{$item['fee']}}</td>
                    <td>{{$item['address']}}</td>
                    <td>{{$item['contact']}}</td>
                    <!-- <td><a href= {{"delete/".$item['id']}} >Delete </a></td> -->
                    <!-- <td><a href= {{"edit/".$item['id']}} >Update </a></td> -->
                </tr>
                @endforeach
            </table>
            <div style="padding: 15px;">
              <a class="btn btn-primary" href="pbody" role="button">Go back</a>
            </div>
          </div>
        
   

    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('principal.script')
  </body>
</html>