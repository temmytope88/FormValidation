<?php

function firstname(){
if(isset($_SESSION["firstName"]) ){
    echo ("<span class='alert-danger'>".$_SESSION['firstName']. "</spanp>");
    unset($_SESSION["firstName"]);
  }
}

function lastname(){
  if(isset($_SESSION["lastName"])){
    echo "<span class='alert-danger' >".$_SESSION ["lastName"]."</span>";
    unset($_SESSION ["lastName"]);
  }
}

function email(){
  if(isset($_SESSION["email"])){
    echo "<span class='alert-danger' >".$_SESSION ["email"]."</span>";
    unset( $_SESSION ["email"]);
  }
}

function password(){
  if(isset($_SESSION["password"])){
    echo "<span class='alert-danger'  >".$_SESSION ["password"]."</span>";
    unset($_SESSION ["password"]);
  }
}

function gender(){
  if(isset($_SESSION["gender"])){
    echo "<span class='alert-danger'  >".$_SESSION ["gender"]."</span>";
    unset($_SESSION ["gender"]);
  }
}

function department(){
  if(isset($_SESSION["department"])){
    echo "<span class='alert-danger' >".$_SESSION ["department"]."</span>";
    unset($_SESSION ["department"]);
  }
}

function DOB(){
  if(isset($_SESSION["dob"])){
    echo "<span class='alert-danger' >".$_SESSION ["dob"]."</span>";
    unset($_SESSION ["dob"]);
  }
}

function color(){
  if(isset($_SESSION["color"])){
    echo "<span class='alert-danger'>".$_SESSION ["color"]."</span>";
    unset($_SESSION ["color"]);
  }
}