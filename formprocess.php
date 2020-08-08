<?php
      session_start();
      $count = 0;
     
      $firstName = $lastName = $email =$password = $gender = $department = $DOB = $colour = "";

      $_SESSION["firstName"] = $_SESSION["lastName"] =$_SESSION["email"] = $_SESSION["password"] = $_SESSION["gender"] = $_SESSION["department"] = $_SESSION["dob"] = $_SESSION["color"]= "";

                 
            if(empty($_POST["firstName"])){
                  $_SESSION["firstName"] = "First Name is required";
                  $count++;
            }
            else{
                  $firstName = test_input($_POST["firstName"]);
                  
                  if  (!preg_match("/^[A-Z][A-Za-z]*/", $firstName)){
                        
                        $_SESSION["firstName"] = "Invalid First Name";
                        $count++;
                  }
                  else{
                        $_SESSION["firstname_value"] = $firstName;
                  }
            }


            if(empty($_POST["lastName"])){
                  $_SESSION["lastName"] = "Last Name is required";
                  $count++;
            }
            else{
                  $lastName = test_input($_POST["lastName"]);

                  if  (!preg_match("/^[A-Z][A-Za-z]*/", $lastName)){
                        $_SESSION["lastname"] = "Invalid Last Name";
                        $count++;
                  }
                  else{
                        $_SESSION["lastname_value"] = $lastName;
                  }
            }


            if(empty($_POST["email"])){
                  $_SESSION["email"] = "Email is required";
                  $count++;
            }
            else{
                  $email = test_input($_POST["email"]);
                  if  (!filter_var($email, FILTER_VALIDATE_EMAIL)){
                        $_SESSION["email"] = "Invalid Email format";
                        $count++;
                  }
                  else{
                        $_SESSION["email_value"] = $email;
                  }
            }


            if(empty($_POST["password"])){
                  $_SESSION["password"]= "Password is required";
                  $count++;
            }
            else {
                  $password = test_input($_POST["password"]);

                  if(!preg_match ("/^(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*[!@#$%^&*()+=_'?>.,;:}[}\<|]).{11,26}$/", $password)){
                        $_SESSION["password"]= "Password is weak, it should include at least one uppercase, one lowercase, one number and special characters (!@#$%^&*(?>)<+_=-)";
                        $count++;  
                  }
            }     


            if(empty($_POST["department"])){
                  $_SESSION["department"] = "Department is required";
                  $count++;
            }
            else{
                  $department = test_input($_POST["department"]);
                  $_SESSION["department_value"] = $department;        
            }

            
            if(empty($_POST["DOB"])){
                  $_SESSION["dob"] = "Date of Birth is required";
                  $count++;
            }
            else{
                  $DOB = test_input($_POST["DOB"]);
                  $_SESSION["date_value"] = $DOB;  
            }

            
            if(empty($_POST["color"])){
                  $_SESSION["color"] = "Favourite Color is required";
                  $count++;
            }
            else{
                  $colour = test_input($_POST["color"]);
                  if  (!preg_match("/^[A-Za-z]*/", $colour)){
                        $_SESSION["color"] = "Invalid Color";
                        $count++;
                  }
                  else {
                        $gender = test_input($_POST["gender"]);   
                        $_SESSION["color_value"] = $colour;              
                  }
                    
            }

            if(empty($_POST["gender"])){
                  $_SESSION["gender"] = "Gender is required";
                  $count++;
            }
            else {
                  $gender = test_input($_POST["gender"]);   
                  $_SESSION["gender_value"] = $gender;              
            }
                       
            
        function test_input($data) {
         $data = trim($data);
         $data = stripcslashes($data);
         $data = htmlspecialchars ($data);
         return $data;    
       }

         // check  for any error in the users input
          if ($count > 0){
                header("location:index.php");
          }

          else{
                include("Sessions/header.php");
                if (strtolower($colour) == "white" || strtolower($colour) == "pink" || strtolower($colour) == "grey" || strtolower($colour) == "gray"|| strtolower($colour) == "yellow" ){
                  echo "<body style='color:black; background:".$colour."'>";    
                }
                else{
                  echo "<body style='color:white; background:".$colour."'>";
                }
                
                echo "<div style= 'margin:5em;'>";
                echo "SUCCESS<br>";
                echo $firstName." ".$lastName."<br>";
                echo $email."<br>";
                echo $department."<br>";
                echo $gender."<br>";
                echo $colour."<br>";
                echo "<button class='btn btn-primary'> <a href='exit.php' style='color:white;'>EXIT</a></button>";
                echo "</div>";
                
                include("Sessions/footer.php");
                
          }

          

        
       ?>