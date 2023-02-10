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
            <h1>Teacher Data</h1>
            <table border="1">
                <tr>
                    <th>Id</th>
                    <th>Full_name</th>
                    <th>Emp No</th>
                    <th>Dob</th>
                    <th>gender</th>
                    <th>Address</th>
                    <th>salary</th>
                    <th>contact</th>
                    <th>Email</th>
                    <th>Cnic</th>
                    <th>User Type</th>
                </tr>

                @foreach($employ as $item)
                <tr>
                    <td>{{$item['id']}}</td>
                    <td>{{$item['Full_name']}}</td>
                    <td>{{$item['emp_no']}}</td>
                    <td>{{$item['dob']}}</td>
                    <td>{{$item['gender']}}</td>
                    <td>{{$item['address']}}</td>
                    <td>{{$item['salary']}}</td>
                    <td>{{$item['contact']}}</td>
                    <td>{{$item['email']}}</td>
                    <td>{{$item['cnic']}}</td>
                    <td>{{$item['user_type']}}</td>
                    <!-- <td><a href= {{"delete2/".$item['id']}} >Delete </a></td> -->
                    <!-- <td><a href= {{"edit2/".$item['id']}} >Update </a></td> -->
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