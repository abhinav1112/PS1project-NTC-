<?php
session_start();
if(empty($_SESSION["ID"])){
     header("location:login.php");
   }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">-->
    <style type="text/css">
      #mainbody{
        font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;

      }
      .bg-1{
        background-color: #981a66;
        color: white;
      }
      .img-responsive{
        margin: 0 auto;
      }
      #afterloginform{
        padding-top: 50px;
        margin: 0 auto;
        width: 50%;
      }
      
    </style>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    
  </head>
  <body id="mainbody">
   <img class ="img-responsive" src="ntc-logo.png" i>
   <div class="container-fluid bg-1 text-center">
   <h3 class="margin">PERFORMANCE MANAGEMENT SYSTEM</h3>
   </div>
      <a href = "login.php"><button type=""  class="btn btn-default btn-danger" style="position: relative; right: 0; float: right">Logout</button></a>
   <a href = "upsignup.php"><button type=""  class="btn btn-default btn-success" style="position: relative; right: 0; float: right;">Update Profile</button></a>

   
   <form id="afterloginform">
    <div class="form-group">
     <button  class="btn btn-default"><a href="pg110.php">Self Appraisal<a/></button>
    </div> 
     <div class="form-group">
      <label for="pwd">Review as:</label>
      <button  class="btn btn-default"><a href="initiating.php">Initiating Authority<a/></button>
      <button  class="btn btn-default"><a href="reviewing.php">Reviewing Authority<a/></button>
      <button  class="btn btn-default"><a href="accepting.php">Accepting Authority<a/></button>
    </div>
   </form>