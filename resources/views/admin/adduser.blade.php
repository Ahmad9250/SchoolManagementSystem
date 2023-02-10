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
            <h1>Add User</h1>
            <br>

            <form method="POST" action="add_user">
                        @csrf
                        <div class="form-group">
                            <label for="email"><span class="FieldInfo">Email:</span></label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" name="email" id="email" validate>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password"><span class="FieldInfo">Password:</span></label>
                            <div class="input-group mb-3">
                                <input type="password" class="form-control" name="password" id="password" validate>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="User_type"><span class="FieldInfo">User_type:</span></label>
                            <div class="input-group mb-3">
                                <input type="User_type" class="form-control" name="User_type" id="User_type" validate>
                            </div>
                        </div>
                       
                        <input type="submit" class="btn btn-info btn-block" name="Submit" value="Submit">
                        
                    </form>
          
           

            <!-- <div style="padding: 15px;">
              <a class="btn btn-primary" href="Admin" role="button">Go back</a>
            </div> -->
            
          </div>
       </div>
    </div>
    

    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
  </body>
</html>