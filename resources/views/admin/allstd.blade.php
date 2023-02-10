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
    @include('admin.style')
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
            <h1>All Student</h1>
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
                    <th>Status</th>
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
                    <td><a href= {{"del/".$item['id']}} >Delete </a></td>
                   
                </tr>
                @endforeach
            </table>
            <div style="padding: 15px;">
              <a class="btn btn-primary" href="Admin" role="button">Go back</a>
            </div>
          </div>
        
   

    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
  </body>
</html>