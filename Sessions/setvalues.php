<?php
function firstnameValue(){
  if(isset($_SESSION["firstname_value"])) {
      echo 'value = '.$_SESSION["firstname_value"];
      unset($_SESSION["firstname_value"]);
 }
}


function lastnameValue(){
  if(isset($_SESSION["lastname_value"])){
      echo 'value = '.$_SESSION["lastname_value"];
      unset($_SESSION["lastname_value"]);
 }
}

function emailValue(){
  if(isset($_SESSION["email_value"])){
      echo 'value = '.$_SESSION["email_value"];
      unset($_SESSION["email_value"]);
 }
}

function colorValue(){
  if(isset($_SESSION["color_value"])){
      echo 'value = '.$_SESSION["color_value"];
      unset($_SESSION["color_value"]);
 }
}

function dateValue(){
  if(isset($_SESSION["date_value"])){
      echo 'value = '.$_SESSION["date_value"];
      unset($_SESSION["date_value"]);
 }
}

function genderMale(){
   if(isset($_SESSION["gender_value"]) && $_SESSION["gender_value"] == "male"){
       echo("checked");
       unset($_SESSION["gender_value"]);
   }
}

function genderFemale(){
  if(isset($_SESSION["gender_value"]) && $_SESSION["gender_value"] == "female"){
      echo("checked");
      unset($_SESSION["gender_value"]);
  }
}

function departmentIt(){
  if(isset($_SESSION["department_value"]) && $_SESSION["department_value"] == "Information Technology"){
      echo("selected");
      unset($_SESSION["department_value"]);
  }
}

function departmentHr(){
  if(isset($_SESSION["department_value"]) && $_SESSION["department_value"] == "Human Resources"){
      echo("selected");
      unset($_SESSION["department_value"]);
  }
}
function departmentStaff(){
  if(isset($_SESSION["department_value"]) && $_SESSION["department_value"] == "Staff"){
      echo("selected");
      unset($_SESSION["department_value"]);
  }
}