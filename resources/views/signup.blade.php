
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="js/jquery2.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="main.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <link rel="stylesheet" href="css/bootstrap.min.css">
 


  <title>Sign Up</title>
   
</head>
<body>
<nav class="navbar navbar-expand-lg bg-dark navbar-dark">
        <div class="container">
            <a href="/index" class="navbar-brand">School Management System </a>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="/index" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="/about" class="nav-link">About</a>
                </li>
                <li class="nav-item">
                    <a href="/contact" class="nav-link">Contact Us</a>
                </li>
                <li class="nav-item">
                    <a href="/login" class="nav-link">Login</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>
    <!-- <div style="height: 10px; background-color: #27aae1;"></div> -->
    <!-- NAVBAR END -->

    <section class="container py-2 mb-4">
        <div class="row">
            <div class="offset-sm-3 col-sm-6" style="min-height:500px;">
            <br><br><br>
            <div class="card bg-secondary text-light">
                <div class="card-header">
                    <h4>Sign Up</h4>
                    </div>
                    <div class="card-body bg-dark"> 
                    <form method="POST">
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
                       
                        <input type="submit" class="btn btn-info btn-block" name="Submit" value="Sign Up">
                    </form>
                </div>
            </div>
            </div>
        </div>
    </section>
   
   
    <br>
    <!-- Footer -->
    <footer class="bg-dark text-white"> 
        <div class="container">
            <div class="row">
                <div class="col">
                    <p class="lead text-center">Theme By  Ahmad Jawad  <span id="year"></span> &copy; ------ All Right Reserved<br>School Management System</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- <div style="height: 10px; background-color: #27aae1;"></div> -->
    <!-- Footer END -->

   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

    
</body>
</html>