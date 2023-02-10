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
            <form action="{{url('upload_course')}}" method="post" enctype="multipart/form-data">
              @csrf

              <div style="padding: 15px;">
              <label>Course Name </label>
              <input type="text" name="coursename"  validate>
              </div>

              <!-- <div style="padding: 15px;">
                <label>Class</label>
                <select name="myselect" id="myselect">
                  <option value="1">1</option>
                  <option value="2" selected='selected'>2</option>
                  <option value="3" selected='selected'>3</option>
                  <option value="4" selected='selected'>4</option>
                  <option value="5" selected='selected'>5</option>
                  <option value="6" selected='selected'>6</option>
                  <option value="7" selected='selected'>7</option>
                  <option value="8" selected='selected'>8</option>
                  <option value="9" selected='selected'>9</option>
                  <option value="10" selected='selected'>10</option>
                  <option value="11" selected='selected'>11</option>
                  <option value="12" selected='selected'>12</option>
              </div> -->
              

              <div style="padding: 15px;">
              <input type="submit" class="btn btn-success">
              <a class="btn btn-primary" href="home" role="button">Go back</a>
              </div>
             

              
            </form>
          </div>
        
   

    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('clerk.script')
    <div>
    

    </div>
    
  </body>
</html>