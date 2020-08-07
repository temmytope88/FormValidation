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
            }


            if(empty($_POST["lastName"])){
                  $_SESSION["lastName"] = "Last Name is required";
                  $count++;
            }
           /* else{
                  $lasttName = test_input($_POST["lastName"]);
                  if  (!preg_match("/[a-zA-Z]/", $lastName)){
                        $_SESSION["lastname"] = "Invalid Last Name";
                        $count++;
                  }
            }*/


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
            }


            if(empty($_POST["password"])){
                  $_SESSION["password"]= "Password is required";
                  $count++;
            }
            else if (strlen($_POST["password"]) < 15){
                  $_SESSION["password"]= "Minimum length required is 15";
                  $count++;   
            }
           /* else{
                  $password = test_input($_POST["password"]);
                  if  (!preg_match("/[a-zA-Z]/", $firstName)){
                        $_SESSION["password"] = "Password is not Strong strong";
                        $count++;
                  }
            }*/


            if(empty($_POST["department"])){
                  $_SESSION["department"] = "Department is required";
                  $count++;
            }
            /*else{
                  $department = test_input($_POST["department"]);
                  
            }*/

            
            if(empty($_POST["DOB"])){
                  $_SESSION["dob"] = "Date of Birth is required";
                  $count++;
            }
            /*else{
                  $DOB = test_input($_POST["DOB"]);
            }*/

            
            if(empty($_POST["color"])){
                  $_SESSION["color"] = "Favourite Color is required";
                  $count++;
            }
            /*else{
                  $colour = test_input($_POST["color"]);
                  if  (!preg_match("/[a-zA-Z]/", $colour)){
                        $_SESSION["color"] = "Invalid First Name";
                        $count++;
                  }
            }*/

             if(empty($_POST["gender"])){
                  $_SESSION["gender"] = "Gender is required";
                  $count++;
            }
            /*else {
                  $gender = test_input($_POST["firstName"]);
                 
                  }*/
                       
            
        function test_input($data) {
         $data = trim($data);
         $data  = stripcslashes($data);
         $data = htmlspecialchars ($data);
         return $data;    
       }

          if ($count > 0){
                $_SESSION["error"] = "error".$count;
                header("location:index.php");
          }

        
       ?>