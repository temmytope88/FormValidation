<?php 
  session_start();
  include("Sessions/functions.php");
  include("Sessions/setvalues.php");
  include("Sessions/header.php");
?>

<body style="color:white; background: black;" >
      <div class="container">
          <div class="data">
              <h4> Let us know you </h4>
              <p>Enter your Details Below</p>
            
              <form action = formprocess.php method="POST">
                       
                        <p class="form-group">
                            <Label>First Name</Label><br>
                            <input type="text" name="firstName"  placeholder="First name" class="form-control" autofocus <?php firstnameValue(); ?> >
                            <?php firstname();?>
                        </p>
                        <p class="form-group">
                            <Label>Last Name</Label><br>
                            <input type="text" name="lastName" placeholder="Last name" class="form-control" autofocus  <?php lastnameValue(); ?>>
                            <?php lastname();?>
                        </p>
                        <p class="form-group">
                            <Label>Email</Label><br>
                            <input type="text" name="email" placeholder="Email" class="form-control" id="exampleInputEmail1" autofocus
                            <?php emailValue(); ?>>
                            <?php email(); ?> 
                        </p>
                        <p class="form-group">
                            <Label>Password</Label><br>
                            <input type="password" name="password"  placeholder="**********" class="form-control" autofocus>
                            <?php password(); ?>
                        </p>
                        <p class="form-group">
                            <label for="">Gender </label><br>
                            <input type="radio" class ="gender" name="gender" id="" value="male" autofocus  <?php genderMale(); ?>  >Male<br>
                            <input type="radio" name="gender" class ="gender" id="" value = "female" autofocus  <?php genderFemale(); ?>>Female<br>
                            <?php gender(); ?> 
                                                  
                        </p>
                        <p class="form-group">
                            <label for="color">Favourite Colour </label><br>
                            <input type="text" name="color" id="" placeholder="Favourite Colour" class="form-control" autofocus
                            <?php colorValue(); ?>>
                           <?php color(); ?>          
                        </p>
                        <p class="form-group">
                            <label for="department">Department</label><br>
                            <select name="department" id="" class= "form-control" >
                                <option value="" autofocus  >Choose Department</option>
                                <option value="Information Technology" autofocus  <?php departmentIt(); ?>>Information Technology</option>
                                <option value="Human Resources" autofocus  <?php departmentHr(); ?>>Human Resources</option>
                                <option value="Staff" autofocus  <?php departmentStaff(); ?>>Staff</option>
                            </select>
                           <?php department(); ?>
                        </p>
                        <p class="form-group">
                            <Label>Date Of Birth</Label><br>
                            <input type="date" name="DOB" placeholder="" class="form-control" autofocus <?php dateValue(); ?>>
                             <?php DOB(); ?> 
                        </p>
                        
                        <p class="form-group">
                            <input type="submit" value="submit" class="btn btn-primary" >
                        </p>
              </form>
          </div>
      </div>
<?php include("Sessions/footer.php"); ?>