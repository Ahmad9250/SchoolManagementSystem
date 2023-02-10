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
    @include('clerk.style')
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('clerk.sidebar')
      <!-- partial -->
      @include('clerk.navbar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
          <div class="container" align="center" style="padding-top: 100px;">
            <h1>Employ attendance</h1>
            <br><br>

              
                 <br><br>
               <table border="1">
                  <tr>
                    <th>Id</th>
                    <th >Full_name</th>
                    <th>Emp_No</th>
                    <th>User Type</th>
                    <th>Action</th>
                  </tr>
                  @php
                   $i=1;
                  @endphp

                  @foreach($employ as $item)
                   <tr>
                     <td>{{$item['id']}}</td>
                     <td >{{$item['Full_name']}}</td>
                     <td >{{$item['emp_no']}}</td>              
                     <td>{{$item['user_type']}}</td>
                     <td><a class="btn btn-primary" href="{{"markattendance/".$item['id']}}">Mark Attendance</a></td>

                   </tr>
                    @php
                     $i++;
                    @endphp
                  @endforeach
               </table>
            
          </div>
       </div>
           

           
        
   
   

    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('clerk.script')
    <script>
  $(document).ready(function() { 
    $('input[type="radio"]').change(function(){ 
        var status = $(this).val(); 
        $.ajax({ 
            url:"{{ url('http://localhost:8000/employ_attendances') }}", 
            method:"POST", 
            data:{ 
                status:status, 
                _token: $('input[name=_token]').val()
            }, 
            success:function(result){ } 
        }); 
    }); 
});
    // $('#year').text(new Date().getFullYear());
</script>
  </body>
</html>




              <!-- <div style="padding: 5px;">
              <label>In time </label>
              <input type="time"  name="intime">
              </div>

              <div style="padding: 5px;">
              <label>Out time </label>
              <input type="time"  name="outtime">
              </div>

              <div style="padding: 5px;">
              <label>attendance </label>
              <input type="text" name="attendance"  validate>
              </div>

              <div style="padding: 5px;">
              <label>Date </label>
              <input type="date" name="date">
              </div>

              <div style="padding: 15px;">
              <input type="submit" class="btn btn-success">
              <a class="btn btn-primary" href="home" role="button">Go back</a>
              </div>
              
            </form> -->
          <!-- </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
  