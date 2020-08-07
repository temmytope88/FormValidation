<?php
function error(){
  if(isset($_SESSION["error"])){
    echo $_SESSION["error"];
  }
}

function firstname(){
if(isset($_SESSION["firstName"])){
  echo $_SESSION["firstName"];
  }
}

function lastname(){
  if(isset($_SESSION["lastName"])){
    echo $_SESSION ["lastName"];
  }
}

function email(){
  if(isset($_SESSION["email"])){
    echo $_SESSION ["email"];
  }
}

function password(){
  if(isset($_SESSION["password"])){
    echo $_SESSION ["password"];
  }
}

function gender(){
  if(isset($_SESSION["gender"])){
    echo $_SESSION ["gender"];
  }
}

function department(){
  if(isset($_SESSION["department"])){
    echo $_SESSION ["department"];
  }
}

function DOB(){
  if(isset($_SESSION["dob"])){
    echo $_SESSION ["dob"];
  }
}

function color(){
  if(isset($_SESSION["color"])){
    echo $_SESSION ["color"];
  }
}