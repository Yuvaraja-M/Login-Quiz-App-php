<!DOCTYPE html>
<html lang="en">
<head>

    <title></title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <style>
         body {
            background-image: url("bc.jpg");
         }
      </style>
</head>
<body>
    <div class="container">
        <br>
        <h1 class="text-center text-danger"><u >Welcome to Quizheyy !</u></h1><br>
        <div class="row">
            <div class="col-lg-6">
                <div class="card bg-dark text-white">
                <h2 class="text-center card-header">Login Form</h2>
                <form action="validation.php" method="post" >
                    <div class="form-group" style="padding-right: 90px; align-content: center;padding-left: 48px;">
                        <label>username</label>
                        <input type="text" name="user" class="form-control">

                    </div>
                    <div class="form-group" style="padding-right: 90px; align-content: center;padding-left: 48px;">
                        <label>Password</label>
                        <input type="Password" name="password" class="form-control">

                    </div>
                    <button type="submit" class="btn btn-primary" style="margin-left: 51px;">Login</button>

                </form>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card bg-dark text-white">
                <h2 class="text-center card-header">SignIn Form</h2>
                <form action="registration.php" method="post">
                    <div class="form-group" style="padding-right: 90px; align-content: center;padding-left: 48px;">
                        <label>username</label>
                        <input type="text" name="user" class="form-control"> 

                    </div>
                    <div class="form-group" style="padding-right: 90px; align-content: center;padding-left: 48px;">
                        <label>Password</label>
                        <input type="Password" name="password" class="form-control" >

                    </div>
                    <button type="submit" class="btn btn-primary" style="margin-left: 51px;">SignIn</button>

                </form>
                </div>
            </div>

        </div>
        <img src="bulb.png" style="padding-top: -2px;
    align-content: center;
    height: 45px;
    padding-left: 531px;">
    </div>
    
</body>
</html>