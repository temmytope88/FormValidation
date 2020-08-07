<?php 
  session_start();
  include("Sessions/functions.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <title>FORM</title>
</head>
<body style="color:white; background: black;" >
      <div class="container">
          <div class="data">
              <h4> Let us know you </h4>
              <p>Enter your Details Below</p>
            
              <form action = formprocess.php method="POST">
                       
                        <p class="form-group">
                            <Label>First Name</Label><br>
                            <input type="text" name="firstName"  placeholder="First name" class="form-control" autofocus>
                            <span style = "color:red"><small> <?php firstname(); ?></small></span>
                        </p>
                        <p class="form-group">
                            <Label>Last Name</Label><br>
                            <input type="text" name="lastName" placeholder="Last name" class="form-control" autofocus>
                            <span style = "color:red"><small> <?php lastname(); ?></small></span>
                        </p>
                        <p class="form-group">
                            <Label>Email</Label><br>
                            <input type="text" name="email" placeholder="Email" class="form-control" id="exampleInputEmail1" autofocus>
                            <span style = "color:red"><small> <?php email(); ?></small></span>
                        </p>
                        <p class="form-group">
                            <Label>Password</Label><br>
                            <input type="password" name="password"  placeholder="**********" class="form-control" autofocus>
                            <span style = "color:red"><small> <?php password(); ?></small></span>
                        </p>
                        <p class="form-group">
                            <label for="">Gender </label><br>
                            <input type="radio" class ="gender" name="gender" id="" value="male" autofocus  >Male<br>
                            <input type="radio" name="gender" class ="gender" id="" value = "female" autofocus>Female<br>
                            <span style = "color:red"><small> <?php gender(); ?></small></span>
                                                  
                        </p>
                        <p class="form-group">
                            <label for="color">Favourite Colour </label><br>
                            <input type="text" name="color" id="" placeholder="Favourite Colour" class="form-control" autofocus>
                            <span style = "color:red"><small> <?php color(); ?></small></span>          
                        </p>
                        <p class="form-group">
                            <label for="department">Department</label><br>
                            <select name="department" id="" class= "form-control" >
                                <option value="" autofocus>Choose Department</option>
                                <option value="it" autofocus>Information Technology</option>
                                <option value="hr" autofocus>Human Resources</option>
                                <option value="staff" autofocus>Staff</option>
                            </select>
                            <span style = "color:red"><small> <?php department(); ?></small></span>
                        </p>
                        <p class="form-group">
                            <Label>Date Of Birth</Label><br>
                            <input type="date" name="DOB" placeholder="" class="form-control" autofocus>
                            <span style = "color:red"><small> <?php DOB(); ?></small></span> 
                        </p>
                        
                        <p class="form-group">
                            <input type="submit" value="submit" class="btn btn-primary" >
                        </p>
              </form>
          </div>
      </div>
</body>
</html>